<template>
    <div class="activity-select-item">
        <div class="activity-select-item__line"></div>
        <img class="activity-select-item__img" :src="getImageUrl()" alt="nri">
        <p class="activity-select-item__text">
            <slot></slot>
        </p>
    </div>
</template>

<script>
export default {
    name: 'activity-select-item',
    props: {
        img: {
            type: String
        },
    },
    methods: {
        getImageUrl() {
            return new URL(`../../../img/activities/${this.img}`, import.meta.url)
        }

    }
}
</script>

<style scoped lang="scss">
.activity-select-item {
    cursor: pointer;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    height: 80px;

    &:hover {
        p {
            color: $color-blue !important;
        }
        div {
            background: $color-ashy;
        }
    }

    .activity-select-item__line {
        background: #26414f;
        border-radius: 5px;
        width: 45px;
        height: 3px;
        transition: 0.4s ease;
    }

    .activity-select-item__img {
        max-height: 50px;
        min-width: 40px;
    }

    .activity-select-item__text {
        @extend %styleA;
    }
}

</style>
