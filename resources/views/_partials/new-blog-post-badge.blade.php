<?php
/**
 * @var \App\Blog\Item $latest
 */
?>
@if($latest)
<a href="{{ route('blog.view', $latest->getSlug()) }}" class="hero-blog-pill rounded-pill text-light">
    <span class="badge badge-pill badge-success mr-2">New</span>
    {{ $latest->getTitle() }}
</a>
@endif
