<template>
    <form class="form-inline flex-column align-items-start">
        <div class="input-group border-bottom col-12 col-md-4">
            <div class="input-group-prepend">
                <button id="search-add-on" class="btn" v-on:click.prevent="showInput">
                    <i class="fas fa-search"></i>
                </button>
            </div>
            <label for="search_input" class="sr-only">Search</label>
            <input id="search_input" v-model="query" ref="search" name="s" type="text" class="form-control border-0 pl-0" placeholder="Search our blog..." aria-label="Search" aria-describedby="search-add-on">
        </div>

        <transition name="fade">
            <div class="w-100" v-if="query">
                <div class="d-flex flex-column bg-white border shadow-sm position-relative" style="top: -1px;">
                    <a
                        v-for="(result, index) in results"
                        class="bg-light border-bottom p-4"
                        :class="{ 'rounded-b-lg' : (index === results.length - 1) }"
                        :href="result.link"
                        :title="result.title"
                        :key="result.link"
                        @mousedown.prevent>
                        <h5>{{ result.title }}</h5>
                        <span class="d-block" v-html="result.extract"></span>
                    </a>

                    <div
                        v-if="! results.length"
                        class="bg-light w-100 shadow-sm p-4">
                        <p class="my-0">No results for <strong>{{ query }}</strong></p>
                    </div>
                </div>
            </div>
        </transition>
    </form>
</template>

<script>
    import fuse from 'fuse.js';
    export default {
        created() {
            axios(this.endpoint).then(response => {
                this.fuse = new fuse(response.data, {
                    minMatchCharLength: 6,
                    keys: ['title', 'extract'],
                });
            });
        },

        props: {
            endpoint: {
                type: String,
                required: true,
            }
        },

        data() {
            return {
                fuse: null,
                query: '',
            }
        },

        computed: {
            results() {
                return this.query ? this.fuse.search(this.query) : [];
            },
        },

        methods: {
            showInput() {
                this.$nextTick(() => {
                    this.$refs.search.focus();
                })
            }
        },
    }
</script>
