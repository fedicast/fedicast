<template>
    <sub-navigation>
        <div class="collapse navbar-collapse" id="subNavigation">
            <ul class="navbar-nav with-bottom-bordered-current mr-auto">
                <li class="nav-item  mr-2" :class="{'current-nav-item': $route.name === 'settings'}">
                    <router-link class="nav-link" :to="{ name: 'settings'}">General</router-link>
                </li>
                <li class="nav-item  mr-2" :class="{'current-nav-item': $route.name === 'settings.billing'}">
                    <router-link class="nav-link" :to="{ name: 'settings.billing'}">Billing</router-link>
                </li>
                <li class="nav-item  mr-2" :class="{'current-nav-item': $route.name === 'settings.plan'}">
                    <router-link class="nav-link" :to="{ name: 'settings.plan'}">Plan</router-link>
                </li>

                <li class="nav-item mr-2">
                    <router-link class="nav-link" :to="{ name: 'overview'}">Back to overview</router-link>
                </li>
            </ul>
        </div>
    </sub-navigation>
</template>

<script>
    import SubNavigation from '../../../components/SubNavigation';

    export default {
        name: 'settings-sub-navigation',
        components: {
            SubNavigation
        }
    }
</script>
