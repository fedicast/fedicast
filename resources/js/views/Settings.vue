<template>
    <div class="container py-6">
        <div class="row justify-content-center">
            <div class="col-7">
                <username-form/>
                <display-name-form/>
                <email-form/>
            </div>
        </div>
    </div>
</template>

<script>
    import UsernameForm from '../components/forms/Username';
    import DisplayNameForm from '../components/forms/DisplayName';
    import EmailForm from '../components/forms/Email';

    export default {
        components: {
            UsernameForm,
            DisplayNameForm,
            EmailForm
        }
    }
</script>
