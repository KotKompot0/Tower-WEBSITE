<template>
    <div class="wrapper">
        <div class="row select-activities">
            <router-link class="col col-xxl-auto col-sm-6" :to="{name: 'Activity', params: {activityName: 'nri'}}">
                <activity-select-item img="activity-nri.svg"> НРИ</activity-select-item>
            </router-link>

            <router-link class="col col-xxl-auto col-sm-6" :to="{name: 'Activity', params: {activityName: 'minecraft'}}">
                <activity-select-item img="activity-minecraft.svg"> Minecraft</activity-select-item>
            </router-link>

            <router-link class="col col-xxl-auto col-sm-6" :to="{name: 'Activity', params: {activityName: 'games'}}">
                <activity-select-item img="activity-games.svg"> Игры</activity-select-item>
            </router-link>

            <router-link class="col col-xxl-auto col-sm-6" :to="{name: 'Activity', params: {activityName: 'board-games'}}">
                <activity-select-item img="activity-board-games.svg"> Настолки</activity-select-item>
            </router-link>

            <router-link class="col col-xxl-auto col-sm-6" :to="{name: 'Activity', params: {activityName: 'jackbox'}}">
                <activity-select-item img="activity-jackbox.svg"> Джекбокс</activity-select-item>
            </router-link>

            <router-link class="col col-xxl-auto col-sm-6" :to="{name: 'Activity', params: {activityName: 'other'}}">
                <activity-select-item img="activity-other.svg"> Прочее</activity-select-item>
            </router-link>
        </div>
    </div>

</template>

<script>
import ActivitySelectItem from "./ActivitySelectItem.vue";

export default {
    components: {ActivitySelectItem}
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
