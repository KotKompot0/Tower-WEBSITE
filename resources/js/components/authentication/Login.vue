<template>
    <div class="d-flex flex-column align-items-center">
        <title-blue> Вход в учетную запись </title-blue>
        <div class="w-50">
            <input v-model="email" type="email" placeholder="Email" class="form-control">
            <input v-model="password" type="password" placeholder="Пароль" class="form-control">
            <btn-filled class="btn" @click.prevent="login" type="submit" > Подтвердить </btn-filled>
        </div>
    </div>

<!--    <div v-if="this.$cookies.isKey('x_xsrf_token')" class="">-->
<!--        <p> user has token </p>-->
<!--    </div>-->

</template>

<script>
import axios from "axios";
axios.defaults.withCredentials = true;
export default {
    name: 'Login',

    data() {
        return {
            email: null,
            password: null,
            test: null,
        }
    },
    methods: {
        login() {
            try {
                axios.get('http://localhost:4008/sanctum/csrf-cookie').then(response => {
                    axios.post('/login', {email: this.email, password: this.password}).then(res => {
                        this.$cookies.set('x_xsrf_token', res.config.headers['X-XSRF-TOKEN']);
                        this.$parent.$parent.getToken();
                        this.$router.push('/');
                    })
                });
            } catch (error) {
                console.log(error.response)
            }

        }
    }
}
</script>

<style>
.btn {
    width: 100%;
}
</style>

<style scoped lang="scss">
.form-control, .form-control:hover {
    margin-bottom: 15px;
    background: $color-bg;
    color: white !important;
    border-color: $color-blue;
}
</style>
