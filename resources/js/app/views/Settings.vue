<template>
    <div class="container py-6">
        <div class="row justify-content-center">
            <div class="col-7">
                <username-form>This is your <em>optional</em> main url namespace on the FediCast platform.</username-form>
                <display-name-form>Please enter your name or a display name you are comfortable with being public.</display-name-form>
                <email-form>Please enter an email address we can use for password resets and opt-in notifications.</email-form>
                <avatar-form>
                    This is your display image, its optional.<br>
                    Click on the circle to change yours.
                </avatar-form>
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
