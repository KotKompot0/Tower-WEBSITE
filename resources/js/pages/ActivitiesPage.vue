<template>
    <title-blue> Наши активности </title-blue>
    <activity-select-list></activity-select-list>

    <router-view></router-view>
</template>

<script setup>
import ActivitySelectList from "@js/components/activitiesPage/ActivitySelectList.vue";
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
