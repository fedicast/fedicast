<template>
    <div class="card mb-5">
        <div class="card-body">
            <h2>{{'messages.username' | trans | ucfirst }}</h2>
            This is your <em>optional</em> main url namespace on the FediCast platform.
            <div class="input-group mt-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="domain-addon">fedicast.com/</span>
                </div>
                <input :disabled="persisting" v-on:keypress="reset" name="username" type="text" :class="{'is-invalid': hasError, 'is-valid' : hasSaved}" class="form-control" v-model="username" placeholder="username" aria-label="Username" aria-describedby="domain-addon">
            </div>

            <form-messaging :has-error="hasError" :has-saved="hasSaved" :message="message" text="Please use a maximum of 48 characters and no spaces."/>
        </div>

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
                        <button class="btn btn-sm btn-outline-light">{{__('Release')}}</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="card-footer d-flex align-items-center">
            <span class="flex-grow-1">
                <a href="#"><i class="icon-help"></i> <small>{{ 'messages.more information' | trans | ucfirst }}</small></a>
            </span>

            <button v-if="hasHistory" class="btn btn-sm btn-outline-dark mr-2" type="button" data-toggle="collapse" data-target="#usernameHistory" aria-expanded="false" aria-controls="usernameHistory">
                {{ 'messages.history' | trans | ucfirst }}
            </button>

            <button :disabled="persisting || !canPersist" v-on:click="persist" type="button" class="btn btn-sm btn-dark">{{ 'messages.save' | trans | ucfirst }}</button>
        </div>
    </div>
</template>

<script>
    import FormMessaging from "./partials/Messaging";
    export default {
        name: 'username-form',
        components: {FormMessaging},
        data () { return {
            username: '',
            hasError: false,
            hasSaved: false,
            persisting: false,
            message: '',
            identities: [],
        }},

        computed: {
            hasHistory () {
                return this.identities.length > 0;
            },
            canPersist () {
                return this.username.length > 0;
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
                this.message = '';
            }
        }
    }
</script>
