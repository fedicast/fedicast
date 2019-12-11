<?php

namespace App\Blog;

use Cache;
use Illuminate\Support\Collection;

class Collector
{
    /**
     * @var string
     */
    private $path;

    /**
     * Collector constructor.
     * @param string $path
     */
    public function __construct(string $path)
    {
        if (substr($path, 0, -1) !== DIRECTORY_SEPARATOR) {
            $path .= DIRECTORY_SEPARATOR;
        }
        $this->path = $path;
    }

    public function collect(): Collection
    {
        $items = [];
        // Collect all file in $this->path
        foreach (glob("{$this->path}*.md") as $filename) {
            array_push($items, array_merge(pathinfo($filename), [
                'size' => filesize($filename)
            ]));
        }

        // Generate cache key from collection
        $cacheKey = 'blog.' . count($items) . '.' . sha1(implode('.', array_map(function ($value) {
                return sha1(implode('.', array_map(function ($v) {
                    return sha1($v);
                }, array_values($value))));
            }, $items)));

        // If key exists in cache return cached
        if ($found = Cache::get($cacheKey)) {
            return collect($found);
        }

        // else loop over each file found and return a collection of Item's

        $items = array_map(function($item){
            return new Item($item);
        }, $items);

        Cache::add($cacheKey, $items, 600);

        return collect($items);
    }
}

