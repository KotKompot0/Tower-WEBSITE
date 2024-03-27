<template>
    <div class="card">
        <div class="">
            <subtitle v-if="title" class="text-center mb-4"> {{ title }}</subtitle>
            <slot></slot>
        </div>
    </div>
</template>

<script>

export default {
    name: 'card',
    props: {
        title: {
            type: String
        },
    },
}
</script>

<style scoped lang="scss">
.card {
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    background: $color-sub-bg;
    padding: 20px;
    border-radius: 10px;
}

:slotted(.card__item) {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}
</style>
