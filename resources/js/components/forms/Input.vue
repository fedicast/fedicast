<template>
    <div class="card mb-5">
        <div class="card-body">
            <label for="text-input" class="h2 d-block">{{ label | trans | ucfirst }}</label>
            <slot name="description"></slot>
            <input id="text-input" v-bind:value="value" v-on:change="$emit('change', $event.target.value)" v-on:keypress="$emit('change', $event.target.value)" :disabled="disabled" name="name" type="text" :class="{'is-invalid': triState < 0, 'is-valid' : triState > 0}" class="form-control mt-3" :placeholder="placeholder" :aria-label="label" aria-describedby="display-name-extra">
            <form-messaging :has-error="triState < 0" :has-saved="triState > 0" :message="message" :text="defaultMessage"/>
        </div>
        <div class="card-footer d-flex align-items-center">
            <span class="flex-grow-1"><a href="#"><i class="icon-help"></i> <small>{{ 'messages.more information' | trans | ucfirst }}</small></a></span>
            <slot name="footer"></slot>
            <button :disabled="disabled || triState < 0" v-on:click="$emit('submit', value)" type="button" class="btn btn-sm btn-dark">{{ saveLabel | trans | ucfirst }}</button>
        </div>
    </div>
</template>

<script>
    import FormMessaging from "./partials/Messaging";
    export default {
        name: 'text-input-form',
        components: {FormMessaging},
        model: {
            prop: 'value',
            event: 'change'
        },
        props: {
            value: {
                type: String,
                default: ''
            },
            label: {
                type: String,
                required: true
            },
            saveLabel: {
                type: String,
                default: 'messages.save',
            },
            placeholder: {
                type: String,
                default: '',
            },
            defaultMessage: {
                type: String,
                default: ''
            },
            invalidFeedback: {
                type: String,
                default: ''
            },
            validFeedback: {
                type: String,
                default: '',
            },
            triState: {
                type: Number,
                default: 0
            },
            disabled: {
                type: Boolean,
                default: false
            }
        },
        computed: {
            message () {
                if (this.triState < 0) { return this.invalidFeedback; }
                if (this.triState > 0) { return this.validFeedback; }
                return '';
            }
        }
    }
</script>
