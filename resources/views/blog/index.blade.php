@extends('layouts.public')

@push('scripts')
    <script src="{{ mix('js/search.js') }}" defer></script>
@endpush

<?php
/**
 * @var \App\Blog\Item[] $items
 */
?>

@section('banner-header')
    <section id="vue-search" class="bg-white border-bottom pt-5 pb-6">
        <div class="container">
            <h1 class="mb-5">Blog</h1>
            <search endpoint="{{ route('blog.search') }}"></search>
        </div>
    </section>
@endsection

@section('content')
    <div class="container py-6">
        @foreach($items as $item)
            <div class="media mb-4">
                <div class="media-body">
                    <a href="{{ route('blog.view', $item->getSlug()) }}" title="Click to read {{ $item->getTitle() }}">
                        <h1 class="m-0 h4">{{ $item->getTitle() }}</h1>
                        <small class="d-block mb-2">Published: {{ $item->getDate()->toFormattedDateString() }}</small>
                        <p>{{ $item->getExtract() }}</p>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
