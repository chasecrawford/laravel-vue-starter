<template>

    <login-form></login-form>

</template>
<script>
import LoginForm from './forms/LoginForm.vue';

export default {
    props: [
        'primary_component',
        'input'
    ],
    components: {
        'login-form': LoginForm
    },
    data: function() {
        return {
        }
    },
    mounted() {
    }
}
</script>
