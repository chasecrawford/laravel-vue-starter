<template>

    <form v-on:submit="processForm">
        <template v-if="errors.length > 0">
            <p>Please resolve the following errors: </p>
            <ul class="mb-0">
                <li v-for="error in errors">{{ error }}</li>
            </ul>
        </template>

        <div>
            <input v-model="email" type="email" id="register_email" placeholder="name@example.com">
            <label for="register_email">Email address</label>
        </div>
        <div>
            <input v-model="passwd" type="password" id="register_passwd" placeholder="Password">
            <label for="register_passwd">Password</label>
        </div>
        <div>
            <input v-model="confirm_passwd" type="password" id="register_passwd_confirm" placeholder="Password">
            <label for="register_passwd_confirm">Confirm Password</label>
        </div>

        <button type="submit">Register</button>
    </form>

</template>
<script>

export default {
    props: [],
    data: function() {
        return {
            email: null,
            errors: [],
            passwd: null,
            confirm_passwd: null,
            success: false,
        }
    },
    methods: {
        processForm: function(e) {
            e.preventDefault();
            axios.post('/register', {
                email: this.email,
                password: this.passwd,
                password_confirmation: this.confirm_passwd
            }).then(response => {
                window.location.href = '/';
            }).catch(fail => {
                this.errors = Object.keys(fail.response.data.errors)
                    .map(error => fail.response.data.errors[error][0]);
            });
        }
    },
    mounted() {
    }
}
</script>
