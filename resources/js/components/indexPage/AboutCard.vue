<template>
    <div class="card">
        <div class="mb-5">
            <h4 class="subtitle mb-4"> {{ title }} </h4>
            <p class="">
                <slot></slot>
            </p>
        </div>

        <div class="d-flex justify-content-center align-items-center">
            <img :src="img" height="75" alt="">
        </div>
    </div>
</template>

<script>
export default {
    props: {
        img: {
            type: String
        },
        title: {
            type: String
        }
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
    padding: 20px 30px 30px;
    border-radius: 10px;

    .card__item {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }
}

</style>
