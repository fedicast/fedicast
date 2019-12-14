<?php

namespace App\Blog;

use Illuminate\Contracts\View\View;

class LatestItemComposer
{
    /**
     * @var Collector
     */
    private $collector;

    public function __construct(Collector $collector)
    {
        $this->collector = $collector;
    }

    public function compose(View $view)
    {
        $view->with('latest', $this->collector->getLatest());
    }
}
