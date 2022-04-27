<template>

        <form v-on:submit="processForm">

            <template v-if="errors.length > 0">
                <p>Please resolve the following errors: </p>
                <ul class="mb-0">
                    <li v-for="error in errors">{{ error }}</li>
                </ul>
            </template>

            <div>
                <input v-model="email" type="email"  id="login_email" placeholder="name@example.com">
                <label for="login_email">Email address</label>
            </div>
            <div>
                <input v-model="passwd" type="password" id="login_passwd" placeholder="Password">
                <label for="login_passwd">Password</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input v-model="remember" type="checkbox" value="remember-me"> Remember me
                </label>
            </div>

            <button type="submit">Login</button>
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
            remember: false,
        }
    },
    methods: {
        processForm: function(e) {
            e.preventDefault();
            axios.post('/login', {
                email: this.email,
                password: this.passwd,
                remember: this.remember
            }).then(response => {
                window.location.href = '/dashboard';
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
