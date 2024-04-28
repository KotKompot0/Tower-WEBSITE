<template>
        <!--   остановилась на том, что надо к чекбоксу приваязать ви модел на переменную текущей страницы выбранной акртивноти -->
        <h3 class="title-white mb-5 text-lowercase"> {{ activitySelected.title }} </h3>
        <div class="row activity-info mb-5">
            <div class="col-xl-6 col-sm-12 activity-preview">
                <img :src="`/storage/${ activitySelected.photo_round }`" class="" alt="activity-round">
            </div>
            <div class="col-xl-6 col-sm-12 activity-properties">
                <div class="row">
                    <h4 class="subtitle container__subtitle"> Характеристика </h4>
                    <div v-for="property in activitySelected.properties" class="d-flex activity-properties__item">
                        <p class="text activity-properties__item-key "> {{ property.name }}: </p>
                        <template v-if="property.name === 'Порог вхождения'">
                            <div class="text text_span activity-properties__item-value_difficulty">
                                <svg v-for="i in Number(property.value)"
                                     class="activity-properties__circle-difficulty_active"
                                     xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="none"
                                     viewBox="0 0 13 13">
                                    <ellipse cx="6.442" cy="6.256" fill="#26414F" rx="6.063" ry="5.856"/>
                                </svg>
                                <svg v-for="i in 5 - Number(property.value)"
                                     class="activity-properties__circle-difficulty"
                                     xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="none"
                                     viewBox="0 0 13 13">
                                    <ellipse cx="6.442" cy="6.256" fill="#26414F" rx="6.063" ry="5.856"/>
                                </svg>
                            </div>
                        </template>
                        <p v-else class="text text_span "> {{ property.value }} </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <h4 class="subtitle container__subtitle"> Администратор отдела НРИ </h4>
                    <p class="text activity-properties__admin-text">
                        Вы можете написать администратору, чтобы
                        уточнить интересующие вас вопросы!
                    </p>
                    <user-item v-if="activitySelected && activitySelected.user_admin"
                               :img="`/storage/${activitySelected.user_admin.photo}`">
                        {{ activitySelected.user_admin.username }}
                    </user-item>
                </div>
            </div>
        </div>

        <div v-for="description in activitySelected.description" class="row mb-4">
            <h4 class="subtitle"> {{ description.title }} </h4>

            <ul v-if="typeof(description.content) === 'object'" class="text container_mb_block">
                <li v-for="point in description.content"> {{ point }}</li>
            </ul>
            <p v-else class="text container_mb_sm">
                {{ description.content }}
            </p>
        </div>

        <my-hr></my-hr>

        <div class="row slider">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button v-for="(i, index) in activitySelected.sliders.length" class="me-2"
                            :class="index !== sliderActive ? 'slider__indicator_inactive' : ''" :key="index"
                            type="button">
                    </button>
                </div>
                <div class="carousel-inner">
                    <div v-for="(slider, index) in activitySelected.sliders" :key="slider.id"
                         :class="index === sliderActive ? 'active' : ''" class="carousel-item">
                        <img :src="`/storage/${slider.photo}`" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" @click="sliderPrev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" @click="sliderNext">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <btn-boosty></btn-boosty>
</template>

<script>
import UserItem from "../components/UI/UserItem.vue";

export default {
    components: {UserItem},
    data() {
        return {
            sliderActive: 0,
            interval: null,
        }
    },
    props: {
        activities: {type: null},
    },
    computed: {
        activitySelected() {
            return this.activities[this.$route.params.activityName];
        },
    },
    mounted() {
        this.interval = setInterval(this.sliderNext, 5000)
    },
    beforeUnmount() {
        clearInterval(this.interval)
    },
    methods: {
        sliderPrev() {
            this.sliderActive = this.sliderActive - 1 < 0 ? this.activitySelected.sliders.length - 1 : --this.sliderActive;
        },
        sliderNext() {
            this.sliderActive = this.sliderActive + 1 === this.activitySelected.sliders.length ? 0 : ++this.sliderActive;
        }
    },
    watch: {
        $route(to, from) {
            this.sliderActive = 0;
        }
    }
}
</script>

<style scoped lang="scss">
li {
    margin-bottom: 5px;
}

.slider {
    margin-bottom: 200px;

    &__indicator_inactive {
        border-color: #939393;
    }
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

        &__circle-difficulty, &__circle-difficulty_active {
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
