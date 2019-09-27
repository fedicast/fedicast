<template>
    <div class="container py-6">
        <div class="row justify-content-center">
            <div class="col-7">
                <username-form/>
                <display-name-form/>
                <email-form/>
                <avatar-form/>
            </div>
        </div>
    </div>
</template>

<script>
    import UsernameForm from '../components/forms/Username';
    import DisplayNameForm from '../components/forms/DisplayName';
    import EmailForm from '../components/forms/Email';
    import AvatarForm from "../components/forms/Avatar";

    export default {
        components: {
            AvatarForm,
            UsernameForm,
            DisplayNameForm,
            EmailForm
        }
    }
</script>
