<template>
    <title-blue> Наши активности </title-blue>
    <activity-select-list :activities="activities"></activity-select-list>

    <router-view v-if="activities" :activities="this.activities"></router-view>
</template>

<script>

import {ref} from "vue";
import ActivitySelectList from "../components/activitiesPage/ActivitySelectList.vue";
import router from "../router/router.js";

export default {
    components: {ActivitySelectList},
    data() {
        return {
            activities: null,
        }
    },
    mounted() {
        this.getActivities();
    },
    methods: {
        getActivities() {
            axios.get('/api/activities').then(res => {
                this.activities = res.data.data
            })
        },
    },
}
</script>

<style scoped lang="scss">
.container__activity-info {
    .container__activity-preview {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .activity-properties {
        background: $color-sub-bg;
        border-radius: 10px;
        padding: 20px;

        .activity-properties__item {
            &-key {
                padding-right: 10px;
            }

            .activity-properties__circle-difficulty_active {
                ellipse {
                    fill: #28b8af;
                }
            }
        }

        .activity-properties__admin-text {
            margin-bottom: 15px;
        }
    }
}


</style>
