<template>
    <div class="container py-6">
        <div class="row justify-content-center">
            <div class="col-7">
                <username-form persist-btn-text="messages.next" :min-length="3">
                    Each podcast has its own Fediverse account used for publishing to and interacting with the Fediverse.
                    This will be the <em>username</em> that interaction happens via.
                </username-form>

            </div>
        </div>
    </div>
</template>

<script>
    import UsernameForm from "../../components/forms/Username";
    export default {
        name: 'create-podcast-form',
        components: {UsernameForm}
    }
</script>
