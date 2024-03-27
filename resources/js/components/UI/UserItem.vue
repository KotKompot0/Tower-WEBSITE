<template>
    <div class="user-item">
        <img :src="getImageUrl()" alt="">
        <p class="text text-color-blue">
            <slot></slot>
        </p>
    </div>
</template>

<script>
export default {
    name: 'user-item',
    props: {
        img: {
            type: String
        },
    },
    methods: {
        getImageUrl() {
            return new URL(`../../../img/discord-avatars/${this.img}`, import.meta.url)
        }

    }
}
</script>

<style scoped lang="scss">
.user-item {
    display: flex;
    align-items: center;
    margin-bottom: 15px;

    img, i {
        margin-right: 15px;
    }
}
</style>
