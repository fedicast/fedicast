<template>
    <div class="container py-6">
        <div class="row justify-content-center">
            <div class="col-7">
                <username-form/>
                <display-name-form/>
            </div>
        </div>
    </div>
</template>

<script>
    import UsernameForm from '../components/forms/Username';
    import DisplayNameForm from '../components/forms/DisplayName';

    export default {
        components: {
            UsernameForm,
            DisplayNameForm
        }
    }
</script>
