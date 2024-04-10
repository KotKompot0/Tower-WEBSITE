<template>
    <title-blue> Account page </title-blue>
    <h4> Привет, {{ user.username }}!</h4>

</template>

<script>

import ActivityList from "../components/indexPage/ActivityList.vue";
import ActivityItem from "../components/indexPage/ActivityItem.vue";

export default  {
    components: {ActivityItem, ActivityList},
    data() {
        return {
           user: [],
        }
    },
    mounted() {
        this.getUser()
    },
    methods: {
        getUser () {
            axios.get('/api/user/account').then(res => {
                this.user = res.data;
            })
        }
    }
}
</script>


<style scoped lang="scss">
</style>
