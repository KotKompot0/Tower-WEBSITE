<template>
    <title-blue> Эта страница не найдена </title-blue>

    <p class="not-found"> 404 </p>

</template>

<script>

export default {
    data() {
        return {
            image: null,
            uploadImg: null,
            path: '',
        }
    },
    methods: {
    },
}

</script>
<style scoped lang="scss">
    .not-found {
        text-align: center;
        font-size: 120px;
        font-weight: bolder;
        color: $color-ashy;
    }
</style>
