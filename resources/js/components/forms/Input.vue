<template>
    <div class="card mb-5">
        <div class="card-body">
            <label :for="id" class="h2 d-block">{{ label | trans | ucfirst }}</label>
            <slot name="description"></slot>
            <template v-if="prefix.length > 0">
                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" :id="id+'-extra'">{{ prefix }}</span>
                    </div>
                    <input :id="id" v-bind:value="value" v-on:focusout="$emit('change', $event.target.value)" v-on:keypress="$emit('change', $event.target.value)" :disabled="disabled" name="name" type="text" :class="{'is-invalid': changes > 0 && triState < 0, 'is-valid' : triState > 0}" class="form-control" :placeholder="placeholder" :aria-label="label" :aria-describedby="id+'-extra'">
                </div>
            </template>
            <input v-else :id="id" v-bind:value="value" v-on:focusout="$emit('change', $event.target.value)" v-on:keypress="$emit('change', $event.target.value)" :disabled="disabled" name="name" type="text" :class="{'is-invalid': changes > 0 && triState < 0, 'is-valid' : triState > 0}" class="form-control mt-3" :placeholder="placeholder" :aria-label="label">
            <form-messaging :has-error="changes > 0 && triState < 0" :has-saved="triState > 0" :message="message" :text="defaultMessage"/>
            <slot name="after"></slot>
        </div>
        <div class="card-footer d-flex align-items-center">
            <span class="flex-grow-1"><a href="#"><i class="icon-help"></i> <small>{{ 'messages.more information' | trans | ucfirst }}</small></a></span>
            <slot name="buttons"></slot>
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
            id: {
                type: String,
                required: true,
            },
            prefix: {
                type: String,
                default: '',
            },
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
        data: () => { return {
            changes: 0
        }},
        watch: {
            value () {
                this.changes++;
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
