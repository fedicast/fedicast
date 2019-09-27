<template>
    <div class="container py-6">
        <div class="row">
            <div class="col-4">
                <div class="d-flex flex-row align-items-center mb-4" style="min-height:45px;">
                    <h3 class="mb-0 flex-grow-1">{{'messages.notifications' | trans }}</h3>
                </div>


                <div class="d-flex align-items-center pb-3 border-bottom my-3">
                    <img src="https://i.pravatar.cc/75?" width="35" height="35" class="rounded-circle flex-shrink-0" />
                    <span class="flex-grow-1 ml-3">
                        <strong>some_user_94</strong> favourited an episode on <strong>booming beats</strong>, 4 minutes ago
                    </span>
                </div>

                <router-link :to="{ name: 'notifications'}">{{'messages.view more' | trans }}</router-link>
            </div>
            <div class="col clearfix">
                <div class="d-flex flex-row align-items-center mb-4" style="min-height:45px;">
                    <h3 class="mb-0 flex-grow-1">{{'messages.recent activity' | trans }}</h3>
                    <router-link :to="{name: 'podcasts.create'}" class="btn btn-lg btn-primary">{{'messages.new podcast' | trans }}</router-link>
                </div>

                <ul class="list-group list-group-flush mb-3">
                    <li class="list-group-item bg-transparent">
                        You logged in from the browser xyz
                        <span class="d-inline-block text-muted float-right">today</span>
                    </li>
                    <li class="list-group-item bg-transparent">
                        You created the podcast <a href="#">booming sounds</a>
                        <span class="d-inline-block text-muted float-right">2d</span>
                    </li>
                    <li class="list-group-item bg-transparent">
                        You reset your username to nothing
                        <span class="d-inline-block text-muted float-right">2d</span>
                    </li>
                    <li class="list-group-item bg-transparent">
                        You changed your username to photogabble
                        <span class="d-inline-block text-muted float-right">3d</span>
                    </li>
                    <li class="list-group-item bg-transparent">
                        You created your account
                        <span class="d-inline-block text-muted float-right">4d</span>
                    </li>
                </ul>

                <router-link class="float-right" :to="{ name: 'activity'}">{{'messages.view more extra' | trans({extra: 'activity'}) }}</router-link>
            </div>
        </div>
    </div>
</template>
