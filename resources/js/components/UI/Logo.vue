<template>
    <div class="logo d-flex py-1">
        <router-link class="logo__link d-flex" to="/">
            <img :src="`/storage/static/i-tower.svg`" class="pe-2" alt="Logo">
            <p class="logo__title">tower empire</p>
        </router-link>
    </div>
</template>

<script>
export default {
    name: 'logo'
}
</script>

<style scoped lang="scss">
.logo {
    .logo__title {
        width: 85px;
        flex-shrink: 0;
        line-height: 1.15;
        @extend %logoFont;
    }
}

</style>
