<template>
    <section class="block-activities">
        <div class="row gx-4">

            <div v-if="countActivities < 6" class="col-xl-6 col-md-12">
                <div class="row">
                    <div v-for="activity in activities" :key="activity.id" class="block-activities__col col-6">
                        <activity-item @click.prevent="$router.push(`/activities/${activity.slug}`)" class="activity-item_sm" :photo="activity.photo_preview"> {{ activity.title }} </activity-item>
                    </div>
                </div>
            </div>

            <template v-else>
                <div class="col-xl-6 col-md-12">
                    <div class="row">
                        <div v-for="(activity,, index) in displayActivities(1)" :key="activity.id" :class="['block-activities__col', [index === 0 ? 'col-12' : 'col-6']]">
                            <activity-item @click.prevent="$router.push(`/activities/${activity.slug}`)" :class="[index === 0 ? 'activity-item_lg' : 'activity-item_sm']" :photo="activity.photo_preview"> {{ activity.title }} </activity-item>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-12">
                    <div class="row">
                        <div v-for="(activity,, index) in displayActivities(2)" :key="activity.id" :class="['block-activities__col', [index === 2 ? 'col-12' : 'col-6']]">
                            <activity-item @click.prevent="$router.push(`/activities/${activity.slug}`)" :class="[index === 2 ? 'activity-item_lg' : 'activity-item_sm']" :photo="activity.photo_preview"> {{ activity.title }} </activity-item>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </section>
</template>
<script>
import ActivityItem from "./ActivityItem.vue";
export default {
    components: {ActivityItem},
    props: {
        activities: {type: JSON},
    },

    computed:{
        countActivities() {
            return Object.keys(this.activities).length
        }
    },

    methods: {
        displayActivities(partOfActivities) {
            if (partOfActivities === 1 && this.activities)
                return Object.fromEntries(Object.entries(this.activities).slice(0, 3));
            else if (partOfActivities === 2 && this.activities)
                return Object.fromEntries(Object.entries(this.activities).slice(3, 6));
        }
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
