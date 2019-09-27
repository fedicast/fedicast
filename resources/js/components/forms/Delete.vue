<template>

    <div class="card">
        <div class="card-body">
            <h2>{{'messages.delete your account' | trans | ucfirst }}</h2>
            This action will queue the deletion of your account and the removal of all
            account data, there will be a cool-down period of 14 days after which this
            action is irreversible.

            <div class="form-check border-top mt-3 pt-3">
                <input name="i-understand" class="form-check-input" type="checkbox" value="1" id="delete-account-check" v-model="canPersist">
                <label class="form-check-label" for="delete-account-check">
                    I understand that by requesting account deletion all account data will be permanently destroyed.
                </label>
            </div>
        </div>
        <div class="card-footer d-flex align-items-center">
            <span class="flex-grow-1"><a href="#"><i class="icon-help"></i> <small>{{ 'messages.more information' | trans | ucfirst }}</small></a></span>
            <button :disabled="!canPersist" v-on:click="persist" type="button" class="btn btn-sm btn-danger">{{ 'messages.request account deletion' | trans | ucfirst }}</button>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'delete-account-form',
        data () { return {
            hasError: false,
            hasSaved: false,
            persisting: false,
            message: '',
            canPersist: false,
        }},

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
