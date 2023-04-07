<template>

    <register-form></register-form>

</template>
<script>
import RegisterForm from './forms/RegisterForm.vue';

export default {
    props: [
        'primary_component',
        'input'
    ],
    components: {
        'register-form': RegisterForm
    },
    data: function() {
        return {
        }
    },
    mounted() {
    }
}
</script>
