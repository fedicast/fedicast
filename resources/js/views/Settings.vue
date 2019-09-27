<template>
    <div class="container py-6">
        <div class="row justify-content-center">
            <div class="col-7">
                <username-form>This is your <em>optional</em> main url namespace on the FediCast platform.</username-form>
                <display-name-form/>
                <email-form/>
                <avatar-form/>
                <delete-account-form/>
            </div>
        </div>
    </div>
</template>

<script>
    import UsernameForm from '../components/forms/Username';
    import DisplayNameForm from '../components/forms/DisplayName';
    import EmailForm from '../components/forms/Email';
    import AvatarForm from "../components/forms/Avatar";
    import DeleteAccountForm from "../components/forms/Delete";

    export default {
        components: {
            DeleteAccountForm,
            AvatarForm,
            UsernameForm,
            DisplayNameForm,
            EmailForm
        }
    }
</script>
