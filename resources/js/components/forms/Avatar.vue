<template>

    <div class="card mb-5">
        <div class="card-body">
            <h2>{{'messages.avatar' | trans | ucfirst }}</h2>

            <div class="d-flex">
                <div class="flex-grow-1">
                    This is your display image, its optional.<br>
                    Click on the circle to change yours.
                </div>
                <div>
                    <img src="https://i.pravatar.cc/75" width="75" height="75" class="rounded-circle" />
                </div>
            </div>

        </div>
        <div class="card-footer d-flex align-items-center">
            <span class="flex-grow-1"><a href="#"><i class="icon-help"></i> <small>{{ 'messages.more information' | trans | ucfirst }}</small></a></span>
            <button :disabled="!canPersist" v-on:click="persist" type="button" class="btn btn-sm btn-dark">{{ 'messages.save' | trans | ucfirst }}</button>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'avatar-form',
        data () { return {
            hasError: false,
            hasSaved: false,
            persisting: false,
            message: '',
            identities: [],
        }},

        computed: {
            canPersist () {
                return false;
            }
        },

        methods: {
            persist () {
                this.hasSaved = true;
                this.persisting = true;
            },
            reset () {
                this.hasSaved = false;
                this.hasError = false;
                this.message = false;
            }
        }
    }
</script>
