<template>
    <div class="card mb-5">
        <div class="card-body">
            <h2>{{'messages.email address' | trans | ucfirst }}</h2>
            Please enter an email address we can use for password resets and opt-in notifications.
            <input :disabled="persisting" v-on:keypress="reset" name="email" type="text" :class="{'is-invalid': hasError, 'is-valid' : hasSaved}" v-model="email" class="form-control mt-3" placeholder="me@example.com" :aria-label="'messages.email address' | trans | ucfirst" aria-describedby="email-extra">

            <small v-if="hasError && message" class="form-text text-danger">{{ message }}</small>
            <small v-else-if="hasSaved && message" class="form-text text-succes">{{ message }}</small>
            <small v-else class="form-text text-muted">We will email you to verify this change.</small>
        </div>
        <div class="card-footer d-flex align-items-center">
            <span class="flex-grow-1"><a href="#"><i class="icon-help"></i> <small>{{ 'messages.more information' | trans | ucfirst }}</small></a></span>
            <button v-if="!hasVerifiedEmail" type="button" class="btn btn-sm btn-outline-dark mr-2">{{ 'messages.resend validation email' | trans | ucfirst }}</button>
            <button :disabled="!canPersist" v-on:click="persist" type="button" class="btn btn-sm btn-dark">{{ 'messages.save' | trans | ucfirst }}</button>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'email-form',
        data () { return {
            email: '',
            hasError: false,
            hasSaved: false,
            persisting: false,
            message: '',
            identities: [],
        }},

        computed: {
            hasVerifiedEmail () {
                return false;
            },
            hasHistory () {
                return this.identities.length > 0;
            },
            canPersist () {
                return this.email.length > 0;
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
