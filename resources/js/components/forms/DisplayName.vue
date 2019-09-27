<template>
    <div class="card mb-5">
        <div class="card-body">
            <h2>{{'messages.display name' | trans | ucfirst }}</h2>
            <slot></slot>
            <input :disabled="persisting" v-on:keypress="reset" name="name" type="text" :class="{'is-invalid': hasError, 'is-valid' : hasSaved}" class="form-control mt-3" v-model="displayName" placeholder="Sam" :aria-label="'messages.display name' | trans | ucfirst" aria-describedby="display-name-extra">

            <form-messaging :has-error="hasError" :has-saved="hasSaved" :message="message" text="Please use a maximum of 32 characters."/>
        </div>
        <div class="card-footer d-flex align-items-center">
            <span class="flex-grow-1"><a href="#"><i class="icon-help"></i> <small>{{ 'messages.more information' | trans | ucfirst }}</small></a></span>
            <button :disabled="!canPersist" v-on:click="persist" type="button" class="btn btn-sm btn-dark">{{ 'messages.save' | trans | ucfirst }}</button>
        </div>
    </div>
</template>

<script>
    import FormMessaging from "./partials/Messaging";
    export default {
        name: 'display-name-form',
        components: {FormMessaging},
        data () { return {
            displayName: '',
            hasError: false,
            hasSaved: false,
            persisting: false,
            message: '',
        }},

        computed: {
            canPersist () {
                return this.displayName.length > 0;
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
