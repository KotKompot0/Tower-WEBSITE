<template>
    <title-blue> Account page </title-blue>
    <h4> Привет, {{ user.name }}!</h4>

</template>

<script>

export default  {
    data() {
        return {
           user: [],
        }
    },
    mounted() {
        this.getData()

        // console.log(this.$cookies.get('laravel_session'));

    },
    methods: {
        getData () {
            axios.get('/api/user/account').then(res => {
                console.log(res);
                this.user = res.data;
            })
        }
    }
}
</script>


<style scoped lang="scss">
</style>
