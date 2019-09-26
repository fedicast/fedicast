<template>
    <div class="container py-6">
        <div class="row">
            <div class="col-3">
                <a href="#" class="btn btn-md btn-info text-light w-100 text-left mb-1 d-flex align-items-center">
                    <span class="flex-grow-1">{{'messages.unread' | trans | ucfirst }}</span>
                    <span class="badge badge-light">16</span>
                    <span class="sr-only">unread messages</span>
                </a>
                <a href="#" class="btn btn-md btn-light w-100 text-left mb-1 d-flex align-items-center">
                    <span class="flex-grow-1">{{'messages.read' | trans | ucfirst}}</span>
                    <span class="badge">7</span>
                    <span class="sr-only">unread messages</span>
                </a>
                <a href="#" class="btn btn-md btn-light w-100 text-left mb-1 d-flex align-items-center">
                    <span class="flex-grow-1">{{'messages.bookmarked' | trans | ucfirst }}</span>
                    <span class="badge">3</span>
                    <span class="sr-only">unread messages</span>
                </a>
                <a href="#" class="btn btn-md btn-light w-100 text-left mb-1 d-flex align-items-center">
                    <small>{{'messages.all notifications' | trans | ucfirst }}</small>
                </a>

                <hr/>

                <a href="#" class="btn btn-sm btn-light w-100 text-left mb-1 d-flex align-items-center">
                    <span class="flex-grow-1">Podcast Name</span>
                    <span class="badge">3</span>
                    <span class="sr-only">unread messages</span>
                </a>

                <a href="#" class="btn btn-sm btn-light w-100 text-left mb-1 d-flex align-items-center">
                    <span class="flex-grow-1">Team Name / Podcast Name</span>
                    <span class="badge">3</span>
                    <span class="sr-only">unread messages</span>
                </a>
            </div>

            <div class="col">
                <div class="card mb-4">
                    <div class="card-header py-2 d-flex align-items-center">
                        <strong class="flex-grow-1 m-0">Podcast Name</strong>
                        <a href="#" class="btn btn-xs btn-outline-dark">✔</a>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex align-items-center"><span class="flex-grow-1">Cras justo odio</span> <a href="#" class="btn btn-xs btn-outline-dark">✔</a></li>
                        <li class="list-group-item d-flex align-items-center"><span class="flex-grow-1">Dapibus ac facilisis in</span> <a href="#" class="btn btn-xs btn-outline-dark">✔</a></li>
                        <li class="list-group-item d-flex align-items-center"><span class="flex-grow-1">Vestibulum at eros</span> <a href="#" class="btn btn-xs btn-outline-dark">✔</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>
