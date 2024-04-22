<template>
    <btn-filled @click="redirectToBoosty" class="btn-boosty"><img :src="`/storage/static/i-boosty.svg`"> Boosty</btn-filled>
</template>

<script>
export default {
    name: 'btn-boosty',

    methods: {
        redirectToBoosty() {
            window.location.href = 'https://boosty.to/towerdragon';
        }
    },
}
</script>

<style scoped lang="scss">
button {
    background-color: $color-blue;
    &:hover {
        background-color: $color-dark-blue;
    }
}
</style>
