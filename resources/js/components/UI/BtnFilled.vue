<template>
    <button>
        <slot></slot>
    </button>
</template>

<script>
export default {
    name: 'btn-filled'
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
