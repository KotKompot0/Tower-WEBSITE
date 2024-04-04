<template>
    <section class="block-activities">
        <div class="row gx-4">
            <div class="col-xl-6 col-md-12">
                <div class="row">
                    <div v-for="(activity, index) in activities.slice(0, 3)" :key="activity.id" :class="['block-activities__col', [index < 1 ? 'col-12' : 'col-6']]">
                        <activity-item @click.prevent="$router.push(`/activities/${activity.slug}`)" :class="[index < 1 ? 'activity-item_lg' : 'activity-item_sm']"  class="" :photo="activity.photo_preview"> {{ activity.title }} </activity-item>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12">
                <div class="row">
                    <div v-for="(activity, index) in activities.slice(3, 6)" :key="activity.id" :class="['block-activities__col', [index < 2  ? 'col-6' : 'col-12']]">
                        <activity-item @click.prevent="$router.push(`/activities/${activity.slug}`)" :class="[index < 2 ? 'activity-item_sm' : 'activity-item_lg']"  class="" :photo="activity.photo_preview"> {{ activity.title }} </activity-item>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>


<!--<template>-->
<!--    <section class="block-activities">-->
<!--        <div class="row gx-4">-->
<!--            <div class="col-xl-6 col-md-12">-->
<!--                <div class="row">-->

<!--                    <div v-for="(activity, index) in activities.slice(0, 3)" :key="activity.id" :class="['block-activities__col', [index < 1 ? 'col-12' : 'col-6']]">-->
<!--                        <activity-item @click.prevent="$router.push(`/activities/${activity.slug}`)" :class="[index < 1 ? 'activity-item_lg' : 'activity-item_sm']"  class="" :photo="activity.photo_preview"> {{ activity.title }} </activity-item>-->
<!--                    </div>-->

<!--                    &lt;!&ndash;                    <div class="col-12 block-activities__col">-->
<!--                                            <activity-item @click.prevent="$router.push('/activities/nri')" class="activity-item_lg" photo="nri-preview.jpg"> НРИ</activity-item>-->
<!--                                        </div>-->
<!--                                        <div class="col-6 block-activities__col">-->
<!--                                            <activity-item class="activity-item_sm" photo="other-preview.png"> Другое</activity-item>-->
<!--                                        </div>-->
<!--                                        <div class="col-6 block-activities__col">-->
<!--                                            <activity-item class="activity-item_sm" photo="game-preview.png"> Игры </activity-item>-->
<!--                                        </div>&ndash;&gt;-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-xl-6 col-md-12">-->
<!--                <div class="row">-->
<!--                    <div v-for="(activity, index) in activities.slice(3, 6)" :key="activity.id" :class="['block-activities__col', [index < 2  ? 'col-6' : 'col-12']]">-->
<!--                        <activity-item @click.prevent="$router.push(`/activities/${activity.slug}`)" :class="[index < 2 ? 'activity-item_sm' : 'activity-item_lg']"  class="" :photo="activity.photo_preview"> {{ activity.title }} </activity-item>-->
<!--                    </div>-->
<!--                </div>-->

<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!--</template>-->

<script>
import ActivityItem from "./ActivityItem.vue";

export default {
    components: {ActivityItem},
    props: {
        activities: {type: JSON},
    }
}
</script>

<style scoped lang="scss">

// наши активности
.block-activities {
    // .block-activities__col
    &__col {
        position: relative;

        .block-activities__img,
        .block-activities__img-text {
            transition: 0.3s;
        }

        &:hover img {
            filter: brightness(30%);
        }

        &:hover p {
            color: $color-blue;
        }
    }


    // .block-activities__img-text
    &__img-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #FFF;
        font-weight: 500;

        // .block-activities__img-text_sm
        &_sm {
            font-size: 1.6em;
        }

        // .block-activities__img-text_lg
        &_lg {
            font-size: 2.5em;
        }
    }

    // .block-activities__img
    &__img {
        width: 100%;
        object-fit: cover;
        padding-bottom: 20px;
        filter: brightness(60%);

        // .block-activities__img_sm
        &_sm {
            height: 220px !important;
        }

        // .block-activities__img_lg
        &_lg {
            height: 350px;
        }
    }
}

</style>
