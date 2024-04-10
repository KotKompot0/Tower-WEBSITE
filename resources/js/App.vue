<template>
    <navbar :token="token"></navbar>
    <main>
        <div class="wrapper">
            <!-- Рисунки драконов по бокам -->
            <div class="dragon-left"></div>
            <div class="dragon-right"></div>

            <!-- Основной контент -->
            <div class="container my-container">
                <img src="@/img/border-decor.svg" class="border-decor border-decor_left" alt="BorderDecor">
                <img src="@/img/border-decor.svg" class="border-decor border-decor_right" alt="BorderDecor">

                <router-view></router-view>
            </div>
        </div>
    </main>
    <my-footer></my-footer>
</template>

<script>
import axios from "axios";

export default {
    mounted() {
        this.getToken();
    },
    data() {
        return {
            token: '',
        }
    },
    methods: {
        getToken() {
            this.token = this.$cookies.get('x_xsrf_token')
        }
    },
}
</script>

<style lang="scss">
.btn-boosty {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 200px auto auto;
    width: 240px;
    height: 45px;
    border-radius: 5px;
    font-size: 20px;
    position: relative;

    img {
        padding-right: 10px;
    }

    &::before {
        content: url("@/img/boosty-cat.svg");
        position: absolute;
        top: -70px;
    }
}

button {
    color: $color-white;
    border-radius: 5px !important;
    border: 1px solid $color-blue;
    padding: 0 20px;
    @extend %textFont;
    transition: 0.2s ease;
}
.bg-color {
    background: $color-blue;
}

</style>

<style scoped lang="scss">
header {
    background: $color-sub-bg;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 10;
}

.main {
    margin-top: 80px;
}

.container {
    background: $color-container;
    position: relative;
    z-index: 5;
    margin-top: 90px;
    margin-bottom: 40px;
    padding: 0;

    @media (min-width: 350px) and (max-width: 780px) {
        max-width: 100%;
    }
}

.my-container {
    position: relative;
    padding: 20px 40px 150px;

    &::before,
    &::after {
        content: "";
        background: $color-blue;
        position: absolute;
        top: 35px;
        bottom: 0;
        left: 0;
        width: 4px;
    }

    &::after {
        left: calc(100% - 4px);
        width: 4px;
    }
}

.border-decor {
    position: absolute;
    top: 0;

    &_left {
        left: 0;
    }

    &_right {
        left: calc(100% - 18px);
        transform: scale(-1, 1);
    }
}

.dragon-left,
.dragon-right {
    position: fixed;
    background-image: url('@/img/dragon.svg');
    background-repeat: no-repeat;
    width: 200px;
    height: 300px;
    top: 0;
    bottom: 0;
    margin-top: auto;
    margin-bottom: auto;
    left: 1%;
}

.dragon-right {
    transform: scaleX(-1);
    left: auto;
    right: 1%;
}
</style>
