<template>
    <div :class="{'border-top': hasSubNavigation}">
        <router-view/>
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
