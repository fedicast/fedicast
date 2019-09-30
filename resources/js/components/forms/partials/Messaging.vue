<template>
    <div>
        <small v-if="hasError && message" class="form-text text-danger">{{ message }}</small>
        <small v-else-if="hasSuccess && message" class="form-text text-success">{{ message }}</small>
        <small v-else class="form-text text-muted">{{ text }}</small>
    </div>
</template>

<script>
    export default {
        name: 'form-messaging',
        props: {
            hasError: {
                type: Boolean,
                default: false,
            },
            hasSuccess: {
                type: Boolean,
                default: false,
            },
            message: {
                type: String,
                default: '',
            },
            text: {
                type: String,
                default: '',
            }
        }
    }
</script>
