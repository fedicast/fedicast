<?php

namespace App\Blog;

use Carbon\Carbon;
use DOMDocument;
use DOMXPath;
use Exception;
use Illuminate\Support\Str;
use Michelf\MarkdownExtra;

class Item
{

    /**
     * @var array
     */
    private $fileinfo;

    private $date;

    private $slug;

    private $title;

    private $body;

    private $extract;

    /**
     * Item constructor.
     * @param array $fileinfo
     * @throws \Exception
     */
    public function __construct(array $fileinfo)
    {
        $this->fileinfo = $fileinfo;

        preg_match('/^(\d{4}-\d{2}-\d{2})-(.*)/', $this->fileinfo['filename'], $matches);

        if (count($matches) !== 3) {
            throw new Exception('Blog source files must conform to the "YYYY-MM-DD-page-slug" filename format.');
        }

        $this->date = Carbon::createFromFormat('Y-m-d H:i:s', "{$matches[1]} 00:00:00");
        $this->slug = $matches[2];

        $content = file_get_contents($this->fileinfo['dirname'].DIRECTORY_SEPARATOR.$this->fileinfo['basename']);
        $this->body = MarkdownExtra::defaultTransform($content);

        $domD = new DOMDocument();
        libxml_use_internal_errors(true);
        $domD->loadHTML($this->body);
        libxml_use_internal_errors(false);

        $domX = new DOMXPath($domD);
        $h1 = $domX->query("//h1[position() = 1]");

        if ($h1->count() > 0) {
            $this->title = $h1->item(0)->textContent;
            $h1->item(0)->parentNode->removeChild($h1->item(0));
        } else {
            $this->title = Str::title(str_replace('-', ' ',$this->slug));
        }

        $p = $domX->query("//p[position() = 1]");
        if ($p->count() > 0) {
            $this->extract = $p->item(0)->textContent;
        } else {
            $this->extract = strip_tags($this->body);
        }

        $this->extract = Str::limit($this->extract, 240);

        $this->body = $domD->saveHTML();
    }

    public function getDate(): Carbon
    {
        return $this->date;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function getExtract(): string
    {
        return $this->extract;
    }
}
