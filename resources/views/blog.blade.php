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
        <div class="media">
            <img src="https://via.placeholder.com/85" class="align-self-start mr-3" alt="...">
            <div class="media-body">
                <h5 class="mt-0">Some interesting blog title</h5>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            </div>
        </div>

        <div class="media">
            <img src="https://via.placeholder.com/85" class="align-self-start mr-3" alt="...">
            <div class="media-body">
                <h5 class="mt-0">Some interesting blog title</h5>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            </div>
        </div>

        <div class="media">
            <img src="https://via.placeholder.com/85" class="align-self-start mr-3" alt="...">
            <div class="media-body">
                <h5 class="mt-0">Some interesting blog title</h5>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            </div>
        </div>

        <div class="media">
            <img src="https://via.placeholder.com/85" class="align-self-start mr-3" alt="...">
            <div class="media-body">
                <h5 class="mt-0">Some interesting blog title</h5>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            </div>
        </div>

        <div class="media">
            <img src="https://via.placeholder.com/85" class="align-self-start mr-3" alt="...">
            <div class="media-body">
                <h5 class="mt-0">Some interesting blog title</h5>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            </div>
        </div>
    </div>
@endsection
