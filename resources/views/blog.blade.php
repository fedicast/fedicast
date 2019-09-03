@extends('layouts.public')

@section('banner-header')
    <section class="bg-white border-bottom pt-5 pb-6">
        <div class="container">
            <h1 class="mb-5">Blog</h1>
            <form class="form-inline">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text border-0 bg-transparent px-0" id="search-add-on">
                            <i class="fas fa-search"></i>
                        </span>
                    </div>
                    <input name="s" type="text" class="form-control border-0" placeholder="Search our blog..." aria-label="Search" aria-describedby="search-add-on">
                </div>
            </form>
        </div>
    </section>
@endsection

@section('content')
    <div class="container py-6">
        <div>Main content...</div>
    </div>
@endsection
