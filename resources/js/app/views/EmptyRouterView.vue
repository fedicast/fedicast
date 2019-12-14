<template>
    <div>
        <router-view name="subNavigation"></router-view>

        <main id="app" class="flex-shrink-0">
            <router-view></router-view>
        </main>
    </div>
</template>

<script>
    export default {
        name: 'EmptyRouterView'
    }
</script>
