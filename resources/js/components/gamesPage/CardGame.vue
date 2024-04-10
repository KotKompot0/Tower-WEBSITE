<template>
    <card class="card-game mb-5">
        <div class="card-game__items">
            <a href=""><img class="me-4" src="@/img/games/evil-cards/evil-cards.png" alt="evil-cards"></a>
            <div class="">
                <a href=""> {{game.title}} </a>
                <p class="mb-4"> {{game.description}} </p>
                <btn-filled class="card-game__btn-play"> Играть </btn-filled>
            </div>
        </div>
    </card>
</template>

<script>
export default {
    name: 'card-game',
    props: {
        game: {type: Object},
    },
}
</script>

<style scoped lang="scss">
.card-game {
    &__items {
        display: flex;
        flex-direction: row;
    }

    &__btn-play {
        padding: 5px 50px;
        color: white;
        font-weight: 500;
    }
    a {
        font-size: 1.2em;
        font-weight: 600;
    }

    p {
        //max-height: 50px;
        margin: 0; /* Убираем внешний отступ */
        -webkit-line-clamp: 3; /* Число отображаемых строк */
        display: -webkit-box; /* Включаем флексбоксы */
        -webkit-box-orient: vertical; /* Вертикальная ориентация */
        overflow: hidden; /* Обрезаем всё за пределами блока */
    }

    @media (min-width: 350px) and (max-width: 576px) {
        max-width: 100%;
    }

}
</style>
