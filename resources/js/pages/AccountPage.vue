<template>
    <title-blue> Account page </title-blue>
<!--    <h4> Привет, {{ user.name }}!</h4>-->
    <div v-if="activity.photo_preview" class="col-12 block-activities__col">
        <activity-item @click.prevent="$router.push('/activities/nri')" class="activity-item_lg" :photo="activity.photo_preview"> {{ activity.title }} </activity-item>
    </div>

</template>

<script>

import ActivityList from "../components/indexPage/ActivityList.vue";
import ActivityItem from "../components/indexPage/ActivityItem.vue";

export default  {
    components: {ActivityItem, ActivityList},
    data() {
        return {
           user: [],
           activity: [],
        }
    },
    mounted() {
        this.getData()

        // console.log(this.$cookies.get('laravel_session'));

    },
    methods: {
        getData () {
            axios.get('/api/user/account').then(res => {
                this.activity = res.data;
                // this.user = res.data;
            })
        }
    }
}
</script>


<style scoped lang="scss">
</style>
