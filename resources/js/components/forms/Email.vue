<template>
    <text-input-form
        label="messages.email address"
        v-model="email"
        placeholder="sam@example.com"
        default-message="We will email you to verify this change."
        :invalid-feedback="invalidFeedback"
        :valid-feedback="validFeedback"
        :tri-state="triState"
        :disabled="persisting"
        :save-label="persisting ? 'please wait' : 'save'"
        v-on:submit="persist">
        <template v-slot:description><slot></slot></template>
        <template v-slot:buttons>
            <button v-if="!hasVerifiedEmail" type="button" class="btn btn-sm btn-outline-dark mr-2">{{ 'messages.resend validation email' | trans | ucfirst }}</button>
        </template>
    </text-input-form>
</template>

<script>
    import TextInputForm from "./Input";
    export default {
        name: 'email-form',
        components: {TextInputForm},
        data () { return {
            email: '',
            hasPersisted: false,
            persisting: false,
            message: '',
            hasVerifiedEmail: false,
        }},

        computed: {
            triState () {
                if (this.email.length === 0 || this.email.length > 244) {
                    return -1;
                }

                if (this.hasPersisted === true) {
                    return 1;
                }
                return 0;
            },
            validFeedback () {
                if (this.triState < 0) { return ''; }
                if (this.triState === 0 && this.persisting === true) { return 'Please wait...';}
                if (this.triState > 0 && this.message.length > 0) { return this.message; }
            },
            invalidFeedback () {
                // We have a server side message...
                if (this.triState < 0 && this.message.length > 0) { return this.message; }

                // Basic client side validation
                if (this.email.length > 244) {
                    return 'Please use a maximum of 244 characters';
                }
                return '';
            }
        },

        methods: {
            persist () {
                this.persisting = true;
                console.log(this.email)
            },
        }
    }
</script>
