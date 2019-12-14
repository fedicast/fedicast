<template>
    <sub-navigation>
        <div class="collapse navbar-collapse" id="subNavigation">
            <ul class="navbar-nav with-bottom-bordered-current mr-auto">
                <li class="nav-item mr-2" :class="{'current-nav-item': $route.name === 'overview'}">
                    <router-link class="nav-link" :to="{ name: 'overview'}">Overview</router-link>
                </li>
                <li class="nav-item mr-2" :class="{'current-nav-item': $route.name === 'podcasts'}">
                    <router-link class="nav-link" :to="{ name: 'podcasts'}">Podcasts</router-link>
                </li>
                <li class="nav-item mr-2" :class="{'current-nav-item': $route.name === 'domains'}">
                    <router-link class="nav-link" :to="{ name: 'domains'}">Domains</router-link>
                </li>
                <li class="nav-item mr-2" :class="{'current-nav-item': $route.name === 'usage'}">
                    <router-link class="nav-link" :to="{ name: 'usage'}">Usage</router-link>
                </li>
                <li class="nav-item mr-2" :class="{'current-nav-item': $route.name === 'settings'}">
                    <router-link class="nav-link" :to="{ name: 'settings'}">Account Settings</router-link>
                </li>
            </ul>
        </div>
    </sub-navigation>
</template>

<script>
    import SubNavigation from '../../../components/SubNavigation';

    export default {
        name: 'account-sub-navigation',
        components: {
            SubNavigation
        }
    }
</script>
