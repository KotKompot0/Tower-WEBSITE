<template>
    <title-blue> Наши игры </title-blue>

    <card-game></card-game>

    <btn-filled class="btn-boosty"><img src="@/img/i-boosty.svg"> Boosty</btn-filled>
</template>

<script setup>
import CardGame from "../components/gamesPage/CardGame.vue";
</script>

<style lang="scss">

</style>

<style scoped lang="scss">

.block-text {
    p {
        line-height: 2em;
    }
}
</style>
