<template>
    <sub-navigation>
        <div class="collapse navbar-collapse" id="subNavigation">
            <ul class="navbar-nav with-bottom-bordered-current mr-auto">
                <li class="nav-item mr-2 current-nav-item">
                    <router-link class="nav-link" :to="{ name: 'notifications'}">{{'messages.activity' | trans | ucfirst }}</router-link>
                </li>
            </ul>
        </div>
    </sub-navigation>
</template>

<script>
    import SubNavigation from '../../../components/SubNavigation';

    export default {
        name: 'activity-sub-navigation',
        components: {
            SubNavigation
        }
    }
</script>
