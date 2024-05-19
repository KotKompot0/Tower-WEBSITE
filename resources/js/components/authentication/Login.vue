<template>
    <div class="d-flex flex-column align-items-center">
        <title-blue> Вход в учетную запись</title-blue>
        <div class="w-50">
            <input v-model="username" type="text" placeholder="Никнейм" class="form-control">
            <p v-if="errors.username" class="text-danger text-center mb-2">{{ errors.username}}</p>
            <input v-model="password" type="password" placeholder="Пароль" class="form-control">
            <p v-if="errors.password" class="text-danger text-center mb-2">{{ errors.password }}</p>
            <btn-filled class="btn mb-2" @click.prevent="login" type="submit"> Подтвердить</btn-filled>
            <p v-if="errors.common" class="text-danger text-center mb-2">{{ errors.common }}</p>
        </div>
    </div>
</template>

<script>
import axios from "axios";

axios.defaults.withCredentials = true;
export default {
    name: 'Login',

    data() {
        return {
            username: null,
            password: null,
            errors: [],
        }
    },
    methods: {
        login() {
            axios.post('/api/login', {username: this.username, password: this.password}).then(res => {
                localStorage.setItem('token', res.data.data.token);
                localStorage.setItem('user', JSON.stringify(res.data.data.user));
                this.$parent.$parent.token = localStorage.getItem('token');
                this.$router.push('/');
            }).catch((error) => {
                console.log(error.response.data.message);
                if (error.response && error.response.status === 422) {
                    const responseData = error.response.data;
                    this.errors = {};
                    for (const field in responseData.errors) {
                        if (Object.prototype.hasOwnProperty.call(responseData.errors, field)) {
                            this.errors[field] = responseData.errors[field][0];
                        }
                    }
                }
                else if (error.response && error.response.status === 401) {
                    this.errors['common'] = error.response.data.message
                }
            });
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
