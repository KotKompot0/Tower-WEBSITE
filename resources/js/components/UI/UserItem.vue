<template>
    <div class="user-item">
        <img :src="img"  alt="">
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
