<template>
    <title-blue> Наши игры</title-blue>

    <card-game class="card-game" v-for="game in games" :game="game"></card-game>

    <btn-boosty></btn-boosty>
</template>

<script>
import axios from "axios";
import CardGame from "../components/gamesPage/CardGame.vue";

export default {
    components: {CardGame},
    data() {
        return {
            games: null,
        }
    },
    mounted() {
        this.getGames()
    },
    methods: {
        getGames() {
            axios.get('/api/games').then(res => {
                this.games = res.data.data;
            })
        },
    }
}
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
