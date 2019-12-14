@extends('layouts.blog', ['title' => 'Blog'])

<?php
/**
 * @var \App\Blog\Item $item
 */
?>

@section('content')
    <div class="container py-4">
        <div class="text-center py-4">
            <h1>
                {{ $item->getTitle() }}
            </h1>
            <span><time datetime="{{$item->getDate()->toIso8601String()}}">{{ $item->getDate()->toFormattedDateString() }}</time>, ({{ $item->getDate()->diffForHumans() }})</span>
        </div>
        <div class="row justify-content-center mt-3 pt-4 border-top">
            <div class="col-8">
                {!! $item->getBody() !!}
            </div>
        </div>
    </div>
@endsection
