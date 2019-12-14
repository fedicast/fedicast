<?php

namespace App\Http\Controllers;

use App\Blog\Collector;
use App\Blog\Item;
use Illuminate\Http\JsonResponse;

class BlogController extends Controller
{
    /**
     * @var Collector
     */
    private $collector;

    /**
     * BlogController constructor.
     * @param Collector $collector
     */
    public function __construct(Collector $collector)
    {
        $this->collector = $collector;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $collection = $this->collector->collect()->sortBy(function(Item $item){
            return $item->getDate()->unix();
        }, SORT_REGULAR, true)->filter(function(Item $item){
            return $item->getDate()->isPast();
        });

        return view('blog.index')->with('items', $collection);
    }

    public function search(): JsonResponse
    {
        $collection = $this->collector->collect()->filter(function(Item $item){
            return $item->getDate()->isPast();
        })->map(function(Item $item){
            return [
                'title' => $item->getTitle(),
                'link' => route('blog.view', $item->getSlug()),
                'extract' => $item->getExtract()
            ];
        });

        return new JsonResponse($collection);
    }

    public function view(string $slug)
    {
        if (! $item = $this->collector->collect()->filter(function(Item $item) use($slug) {
            return $item->getDate()->isPast() && $item->getSlug() === $slug;
        })->first()) {
            abort(404);
        }

        return view('blog.view')->with('item', $item);
    }
}
