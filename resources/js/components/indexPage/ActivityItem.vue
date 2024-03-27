<template>
    <a href="">
        <img :src="getImageUrl()" class="block-activities__img block-activities__img_sm" alt="">
        <p class="block-activities__img-text block-activities__img-text_sm">
            <slot></slot>
        </p>
    </a>

</template>

<script>
export default {
    name: 'activity-item',
    props: {
        photo: {
            type: String
        },
    },
    methods: {
        getImageUrl() {
            return new URL(`../../../img/index/activities/${this.photo}`, import.meta.url)
        }

    }
}
</script>

<style scoped lang="scss">

.activity-item_sm {
    p {
        font-size: 1.6em;
    }

    img {
        height: 220px !important;
    }
}

.activity-item_lg {
    p {
        font-size: 2.5em;
    }

    img {
        height: 350px !important;
    }
}

img, p {
    transition: 0.3s;
}

img {
    width: 100%;
    object-fit: cover;
    padding-bottom: 20px;
    filter: brightness(60%);
}

a {
    position: relative;

    &:hover img {
        filter: brightness(30%);
    }

    &:hover p {
        color: $color-blue;
    }
}


p {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #FFF;
    font-weight: 500;
}

</style>
