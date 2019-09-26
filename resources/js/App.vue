<template>
    <div :class="{'border-top': hasSubNavigation}">
        <router-view name="subNavigation"></router-view>

        <main id="app" class="flex-shrink-0">
            <router-view></router-view>
        </main>
    </div>
</template>

<script>
    export default {
        el: '#app',

        computed: {
            hasSubNavigation () {
                this.$route.matched.forEach((el) => {
                    if (el.components.hasOwnProperty('subNavigation')) {
                        return true;
                    }
                });
                return false;
            }
        }
    }
</script>
