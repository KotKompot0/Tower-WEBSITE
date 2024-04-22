<template>
    <div class="wrapper">
        <div class="row select-activities">
            <router-link v-for="activity in activities" :key="activity.id" class="col col-xxl-auto col-sm-6"
                         :to="{name: 'Activity', params: {activityName: activity.slug}}">
                <activity-select-item :icon="activity.icon"> {{ activity.title }}</activity-select-item>
            </router-link>
        </div>
    </div>

</template>

<script>
import ActivitySelectItem from "./ActivitySelectItem.vue";

export default {
    components: {ActivitySelectItem},

    props: {
        activities: {type: JSON},
    },
}
</script>

<style lang="scss">
a.router-link-active {
    .activity-select-item {
        .activity-select-item__line {
            transition: 0.2s ease;
            background: $color-blue;
        }
    }
}
</style>

<style scoped lang="scss">
.wrapper {
    display: flex;
    justify-content: center;
    margin-bottom: 40px;

}

:deep(.activity-select-item) {
    padding: 0 15px;

    .activity-select-item__line {
        margin-top: 4px;
    }
}

.select-activities {
    display: flex;
    justify-content: center;
    align-items: center;
    background: $color-sub-bg;
    border-radius: 10px;
    padding: 5px;
}
</style>
