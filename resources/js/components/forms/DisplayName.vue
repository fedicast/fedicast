<template>
    <text-input-form
        label="messages.display name"
        v-model="displayName"
        placeholder="Sam"
        default-message="Please use a maximum of 32 characters."
        :invalid-feedback="invalidFeedback"
        :valid-feedback="validFeedback"
        :tri-state="triState"
        :disabled="persisting"
        :save-label="persisting ? 'please wait' : 'save'"
        v-on:submit="persist">
        <template v-slot:description><slot></slot></template>
    </text-input-form>
</template>

<script>
    import TextInputForm from "./Input";
    export default {
        name: 'display-name-form',
        components: {TextInputForm},
        data () { return {
            displayName: '',
            hasPersisted: false,
            persisting: false,
            message: '',
        }},

        computed: {
            triState () {
                if (this.displayName.length === 0 || this.displayName.length > 32) {
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
                if (this.displayName.length === 0) {
                    return 'Please enter a display name';
                } else if (this.displayName.length > 32) {
                    return 'Please use a maximum of 32 characters';
                }
                return '';
            }
        },

        methods: {
            persist () {
                this.persisting = true;
                console.log(this.displayName)
            },
        }
    }
</script>
