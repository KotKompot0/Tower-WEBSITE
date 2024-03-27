<template>
    <div class="d-flex flex-column align-items-center">
        <title-blue> Регистрация</title-blue>
        <div class="w-50">
            <input v-model="name" type="text" placeholder="Никнейм" class="form-control">
            <input v-model="email" type="email" placeholder="Email" class="form-control">
            <input v-model="password" type="password" placeholder="Пароль" class="form-control">
            <input v-model="password_confirmation" type="password" placeholder="Подтвердите пароль" class="form-control">
            <btn-filled class="btn" @click.prevent="register" type="submit"> Подтвердить</btn-filled>

        </div>
    </div>
</template>

<script>
import axios from "axios";

axios.defaults.withCredentials = true;
export default {
    name: 'Registration',

    data() {
        return {
            name: null,
            email: null,
            password: null,
            password_confirmation: null,
        }
    },
    methods: {
        register() {
            try {
                axios.get('/sanctum/csrf-cookie').then(response => {
                    axios.post('/register', {name: this.name, email: this.email, password: this.password, password_confirmation: this.password_confirmation}).then(res => {
                        // console.log(res);
                        this.$cookies.set('x_xsrf_token', res.config.headers['X-XSRF-TOKEN']);
                        this.$parent.$parent.getToken();
                        this.$router.push('/')
                    })
                });
            } catch (error) {
                console.log(error.response)
            }

        }
    }
}
</script>

<style scoped lang="scss">
.form-control, .form-control:hover {
    margin-bottom: 15px;
    background: $color-bg;
    color: white !important;
    border-color: $color-blue;

    &::placeholder {
        color: $color-ashy;
    }

    .btn {
        width: 100%;
    }

}
</style>
