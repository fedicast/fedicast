<template>
    <text-input-form
        id="username"
        label="messages.username"
        prefix="fedicast.com/"
        v-model="username"
        placeholder="username"
        default-message="Please use a maximum of 48 characters and no spaces."
        :invalid-feedback="invalidFeedback"
        :valid-feedback="validFeedback"
        :tri-state="triState"
        :disabled="persisting"
        :save-label="persisting ? 'please wait' : persistBtnText"
        v-on:submit="persist">
        <template v-slot:description><slot></slot></template>
        <template v-slot:after>
            <div v-if="hasHistory" class="collapse" id="usernameHistory">
                <table class="table table-dark table-striped ">
                    <thead>
                    <tr>
                        <th scope="col">Username</th>
                        <th scope="col">Chosen</th>
                        <th scope="col">Retained Until</th>
                        <th scope="col">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="identity in identities">
                        <th scope="row">{{ identity.name }}</th>
                        <td>{{ identity.ago }}</td>
                        <td>{{ identity.until }}</td>
                        <td>
                            <button class="btn btn-sm btn-outline-light">{{'messages.release' | trans | ucfirst }}</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </template>
        <template v-slot:buttons>
            <button v-if="hasHistory" class="btn btn-sm btn-outline-dark mr-2" type="button" data-toggle="collapse" data-target="#usernameHistory" aria-expanded="false" aria-controls="usernameHistory">
                {{ 'messages.history' | trans | ucfirst }}
            </button>
        </template>
    </text-input-form>
</template>

<script>
    import TextInputForm from "./Input";
    export default {
        name: 'username-form',
        components: {TextInputForm},
        props: {
            persistBtnText: {
                type: String,
                default: 'messages.save'
            },
            minLength: {
                type: Number,
                default: 0
            },
            maxLength: {
                type: Number,
                default: 48
            }
        },
        data () { return {
            username: '',
            hasPersisted: false,
            persisting: false,
            message: '',
            identities: [],
        }},

        computed: {
            hasHistory () {
                return this.identities.length > 0;
            },
            triState () {
                if (this.username.length < this.minLength || this.username.length > this.maxLength) {
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
                if (this.username.length < this.minLength) {
                    return 'Please enter a username';
                }
                if (this.username.length > this.maxLength) {
                    return `Please use a maximum of ${this.maxLength} characters`;
                }
                return '';
            }
        },

        methods: {
            persist () {
                this.persisting = true;
                console.log(this.username)
            },
        }
    }
</script>
