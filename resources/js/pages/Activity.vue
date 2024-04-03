<template>
    <h3 class="title-white mb-5"> {{ $route.params.activityName }} (настольная ролевая игра)</h3>

    <div class="row activity-info mb-5">
        <div class="col-xl-6 col-sm-12 activity-preview">
            <img src="@/img/activities/nri/nri-round.svg" class="" alt="activity-nri-preview">
        </div>
        <div class="col-xl-6 col-sm-12 activity-properties">
            <div class="row">
                <h4 class="subtitle container__subtitle"> Характеристика </h4>
                <div class="d-flex activity-properties__item">
                    <p class="text activity-properties__item-key"> Число игроков: </p>
                    <p class="text text_span"> 4-8 </p>
                </div>

                <div class="d-flex activity-properties__item">
                    <p class="text activity-properties__item-key"> Время партии: </p>
                    <p class="text text_span"> 3-8 ч. </p>
                </div>

                <div class="d-flex activity-properties__item">
                    <p class="text activity-properties__item-key"> Порог вхождения: </p>
                    <div class="text text_span activity-properties__item-value_difficulty">


                        <svg class="activity-properties__circle-difficulty_active"
                             xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="none"
                             viewBox="0 0 13 13">
                            <ellipse cx="6.442" cy="6.256" fill="#26414F" rx="6.063" ry="5.856"/>
                        </svg>

                        <svg class="activity-properties__circle-difficulty_active"
                             xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="none"
                             viewBox="0 0 13 13">
                            <ellipse cx="6.442" cy="6.256" fill="#26414F" rx="6.063" ry="5.856"/>
                        </svg>

                        <svg class="activity-properties__circle-difficulty_active"
                             xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="none"
                             viewBox="0 0 13 13">
                            <ellipse cx="6.442" cy="6.256" fill="#26414F" rx="6.063" ry="5.856"/>
                        </svg>

                        <svg class="activity-properties__circle-difficulty" xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="none"
                             viewBox="0 0 13 13">
                            <ellipse cx="6.442" cy="6.256" fill="#26414F" rx="6.063" ry="5.856"/>
                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="none"
                             viewBox="0 0 13 13">
                            <ellipse cx="6.442" cy="6.256" fill="#26414F" rx="6.063" ry="5.856"/>
                        </svg>

                    </div>
                </div>

                <div class="d-flex activity-properties__item">
                    <p class="text activity-properties__item-key"> Жанр: </p>
                    <p class="text text_span"> ролевая игра </p>
                </div>

                <div class="d-flex activity-properties__item">
                    <p class="text activity-properties__item-key"> Способ проведения: </p>
                    <p class="text text_span"> Faundry, Discord, Roll20 </p>
                </div>
            </div>
            <hr>
            <div class="row">
                <h4 class="subtitle container__subtitle"> Администратор отдела НРИ </h4>
                <p class="text activity-properties__admin-text">
                    Вы можете написать администратору, чтобы
                    уточнить интересующие вас вопросы!
                </p>
                <discord-user img="three-dog-night.png"> Three Dog Night</discord-user>
            </div>
        </div>
    </div>


    <div class="row mb-4">
        <h4 class="subtitle">Что такое НРИ?</h4>
        <p class="text container_mb_sm">В <span class="text_span"> НРИ </span>, то есть в <span
            class="text_span"> “настольной
                        ролевой игре” </span> участники принимают роли персонажей в вымышленном мире,
            расследуют загадки, выполняют задания и развивают своих персонажей. Каждый игрок описывает действия
            своего персонажа, а правила определяют результаты этих действий.
        </p>
        <p class="text"> Но кто контролирует игроков и рассказывает историю? Этим ключевым человеком является
            <span class="text_span">мастер игры</span> или
            же <span class="text_span">GameMater</span>. Именно раскрасчик задает тон повествования и ставит
            перед игроками различные
            интересные задачи и проблемы.
        </p>
    </div>

    <div class="row mb-5">
        <h4 class="subtitle container__subtitle"> Системы НРИ </h4>
        <ul class="text container_mb_block">
            <li> Dungeons & Dragons (D&D)</li>
            <li> Киберпанк 2020/2077</li>
            <li> Pathfinder</li>
            <li> Авторские</li>
        </ul>
    </div>

    <my-hr></my-hr>

    <div class="row slider">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active " aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="@/img/activities/nri/nri-slider-1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="@/img/activities/nri/nri-slider-2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="@/img/activities/nri/nri-slider-3.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <btn-filled class="btn-boosty"> <img src="@/img/i-boosty.svg"> Boosty </btn-filled>
</template>

<script setup>
</script>

<style scoped lang="scss">

li {
    margin-bottom: 5px;
}

.slider {
    margin-bottom: 200px;
}

.activity-info {
    .activity-preview {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .activity-properties {
        background: $color-sub-bg;
        border-radius: 10px;
        padding: 20px;

        &__circle-difficulty, &__circle-difficulty_active  {
            margin: 3px;
        }
        .activity-properties__circle-difficulty_active {
            ellipse {
                fill: #28b8af;
            }
        }

        &__item {
            &-key {
                padding-right: 10px;
            }
        }

        .activity-properties__admin-text {
            margin-bottom: 15px;
        }
    }
}
</style>
