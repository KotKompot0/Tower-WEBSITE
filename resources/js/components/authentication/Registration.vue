<template>
    <div class="d-flex flex-column align-items-center">
        <title-blue> Регистрация</title-blue>
        <div class="w-50">
            <input v-model="username" type="text" placeholder="Никнейм" class="form-control">
            <input v-model="email" type="email" placeholder="Email" class="form-control">
            <input v-model="password" type="password" placeholder="Пароль" class="form-control">
            <input v-model="password_confirmation" type="password" placeholder="Подтвердите пароль"
                   class="form-control">
            <btn-filled class="btn" @click.prevent="register" type="submit"> Подтвердить</btn-filled>

        </div>
    </div>
</template>

<script>
// import axios from "axios";
//
// axios.defaults.withCredentials = true;
import axios from "axios";

export default {
    name: 'Registration',

    data() {
        return {
            username: null,
            email: null,
            password: null,
            password_confirmation: null,
        }
    },
    methods: {
        register() {
            axios.post('/api/register', {
                username: this.username,
                email: this.email,
                password: this.password,
                password_confirmation: this.password_confirmation
            }).then(res => {
                console.log(res);
                localStorage.setItem('token', res.data.data.token);
                localStorage.setItem('user', JSON.stringify(res.data.data.user));
                this.$parent.$parent.token = localStorage.getItem('token');
                this.$router.push('/');
            }).catch((error) => {
                console.log(error);
            });
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
