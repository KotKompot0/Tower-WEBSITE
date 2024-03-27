<template>
    <button>
        <slot></slot>
    </button>
</template>

<script>
export default {
    name: 'btn-outline'
}
</script>

<style scoped lang="scss">
button {
    background: transparent;
    border: 1px solid $color-light-blue;
    transition: 0.2s ease;

    p {
        transition: inherit;
    }

    &:hover {
        border-color: $color-blue;
        color: $color-blue;
        background: transparent;
    }

    &:hover > i,
    &:hover > p {
        color: $color-blue;
    }
}
</style>
