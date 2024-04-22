<template>
    <section class="row block-welcome">
        <div class="col-xl-6 col-lg-12">
            <h3 class="block-welcome__title">Приветствуем</h3>
            <h1 class="block-welcome__subtitle">путник</h1>
            <p class="block-welcome__text">
                Этот сайт является вратами на наш Discord сервер. У нас вы можете найти хороших
                собеседников, поиграть в настольные игры, ДнД и поучаствовать в множестве других
                мероприятий.
            </p>

            <p class="block-welcome__subtext"> Приходите отдохнуть от мирских забот в ламповой
                атмосфере!</p>

            <div class="row block-welcome__btns">
                <div class="col pe-2">
                    <btn-outline @click.prevent="$router.push({ name: 'about' })" class="block-welcome__btn-details">
                        Подробнее
                    </btn-outline>
                </div>
                <div class="col">
                    <btn-filled @click.prevent="$router.push({ name: 'games' })" class="block-welcome__btn-games"> Наши
                        веб-игры
                    </btn-filled>
                </div>
                <div class="col">
                    <btn-filled @click="redirectToDiscord" class="block-welcome__btn-discord">
                        <i class="fa-brands fa-discord fa-lg" style="color: #ffffff;"></i>
                        Discord-сервер
                    </btn-filled>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-lg-12 d-flex justify-content-center align-items-center">
            <img :src="`/storage/static/tower.png`" class="img-fluid" alt="Tower">
        </div>
    </section>
    <my-hr></my-hr>
    <title-white class="block-about__title-white mb-5"> наши активности</title-white>
    <activity-list v-if="activities" :activities="activities"></activity-list>

    <title-white class="block-about__title-white mb-5"> Что вы найдете у нас?</title-white>
    <section class="block-about">
        <div class="row gx-3 justify-content-between">
            <div class="col-12 block-about__card-col">
                <div class="card block-about__card">
                    <div class="row justify-content-between">
                        <div class="col col-lg-8 col-sm-12 py-4">
                            <h4 class="subtitle mb-4">Присядьте к нашему костру</h4>
                            <p class=""> Мы хотим, чтобы башня стала тем местом, в котором вы сможете
                                передохнуть от
                                мирских забот и погрузиться в атмосферу приятного времяпрепровождения с
                                другими
                                жителями башни.
                            </p>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <img :src="`/storage/static/knights.png`" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class=" col-xl-4 col-lg-12 mb-5">
                <about-card img="/storage/static/i-tower.svg" title="Этажи башни">
                    Мы растим башню вверх по количеству сфер интересов,
                    чтобы вы могли выбрать свой этаж, который будет вам интересен!
                </about-card>
            </div>

            <div class=" col-xl-4 col-lg-12 mb-5">
                <about-card img="/storage/static/i-lamp.svg" title="Раскрой таланты">
                    Мы предлагаем комфортную атмосферу, которая
                    помогает отвлечься и раскрыть ваши таланты.
                </about-card>
            </div>

            <div class=" col-xl-4 col-lg-12 mb-5">
                <about-card img="/storage/static/i-people.svg" title="Влейся в коллектив">
                    В ваших руках развитие и наращивание этажей башни!
                    Не бойтесь предлагать и участвовать, а так же изучать этажи!
                </about-card>
            </div>
        </div>
    </section>
    <btn-boosty></btn-boosty>
</template>

<script>
import ActivityItem from "../components/indexPage/ActivityItem.vue";
import ActivityList from "../components/indexPage/ActivityList.vue";
import AboutCard from "../components/indexPage/AboutCard.vue";
import BtnBoosty from "../components/UI/BtnBoosty.vue";

export default {
    components: {ActivityItem, ActivityList, AboutCard},

    data() {
        return {
            activities: JSON,
        }
    },

    mounted() {
        this.getActivities();
    },
    methods: {
        getActivities() {
            axios.get('/api/activities').then(res => {
                this.activities = res.data.data;
            })
        },
        redirectToDiscord() {
            window.location.href = 'https://discord.gg/bYjdJsK5ZH';
        }
    },


}
</script>

<style scoped lang="scss">
.block-welcome {
    padding-top: 40px;
    justify-content: center;
    align-items: center;

    // .block-welcome__title
    &__title {
        @extend %fontTitlePage;
        font-size: calc(40px + 15 * (100vw - 320px) / 1140) !important;
        font-weight: 500 !important;
        letter-spacing: 0;
    }

    // .block-welcome__subtitle
    &__subtitle {
        @extend %fontTitleBlock;
        font-size: calc(60px + 20 * (100vw - 320px) / 1140) !important;
        color: $color-blue;
        margin-left: -1.98px;
        margin-bottom: 15px;

        &::after {
            content: url("/storage/static/torch.svg");
            position: relative;
            top: 2px;
            left: 2px;
        }
    }

    // .block-welcome__text
    &__text {
        margin-bottom: 5px;
    }

    // .block-welcome__subtext
    &__subtext {
        margin-bottom: 30px;
    }

    p {
        line-height: 28px;
    }

    button {
        // margin-bottom: 15px;
        white-space: nowrap;
        width: 100%;
        height: 45px;
    }

    // .block-welcome__btns
    &__btns {
        .col {
            margin-bottom: 15px;
        }

        .block-welcome__btn-discord {
            background-color: #324E94;
            border: 2px solid #324E94;

            &:hover {
                border-color: $color-sub-bg;
                color: white;
                background: #1c3470;
            }
        }
    }
}

.block-about {
    &__title-white {
        font-size: 1.7em;
    }

    &__card {
        background: $color-sub-bg;
        padding: 30px;
        margin-bottom: 40px;
        height: auto;
    }

    p {
        color: #95A5AD;
        line-height: 1.5em;
    }
}
</style>



