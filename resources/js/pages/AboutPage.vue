<template>
    <title-blue> О нас</title-blue>

    <!--    <title-white class="mb-4"> Загрузка фото </title-white>-->
    <!--    <form class="mb-5" @submit.prevent="onSubmit" method="post" enctype="multipart/form-data">-->
    <!--        <div class="form-group mb-5">-->
    <!--            <input id="image" v-on:change="onFileChange"  type="file">-->
    <!--        </div>-->

    <!--        <btn-filled class="p-2" type="submit"> Загрузить </btn-filled>-->
    <!--    </form>-->

    <!--    <img v-if="this.path" :src="`/storage/${path}`" alt="testImg">-->


    <section class="block-text">
        <p class="mb-2">
            Если ты дошел до этой странички, то тебе явно хочется узнать о нас побольше. Наш сервер был создан
            для того, что любой мог отдохнуть от проблем и постоянных забот в реальной жизни и погрузиться в мир
            фентези и настольных игр.
        </p>
        <p>Мы стремимся создать дружелюбную атмосферу и всегда рады новым идеям и предложениям жителей по
            добавлению “этажей” в башне. Поэтому, если ты хочешь к нам присоединиться, то не думай, а переходи
            на наш дискорд сервер! А если хочешь поддержать, то снизу бусти :)
        </p>
    </section>

    <!--    <section class="block-links mb-0">-->
    <!--        <title-white class="mb-4"> ссылки</title-white>-->

    <!--        <div class="row gx-3 justify-content-between">-->
    <div class="col-xl-4 col-lg-12 mb-5">
        <card title="Мы">
            <a href="https://discord.gg/bYjdJsK5ZH" class="card__item">
                <img :src="`/storage/static/i-discord.svg`" class="me-3" alt="" width="30">
                Discord-сервер
            </a>

            <a href="#" class="card__item">
                <img :src="`/storage/static/i-boosty.svg`" class="me-3" alt="" width="30">
                Boosty
            </a>
        </card>
    </div>

    <!--            <div class="block-links__partners col-xl-8 col-lg-12 mb-5">-->
    <!--                <card title="Наши стриммеры-партнеры">-->
    <!--                    <div class="row">-->
    <!--                        <div class="col-xl-4 col-md-12" v-for="i in 6" :key="i">-->
    <!--                            <a href="#" class="card__item">-->
    <!--                                <user-item img="/storage/dynamic/three-dog-night.png" > streamer {{i}} </user-item>-->
    <!--                            </a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </card>-->
    <!--            </div>-->
    <!--        </div>-->

    <!--        <div class="row justify-content-between">-->
    <!--            <div class="col-xl-auto col-md-12 align-items-center mb-5">-->
    <!--                <card class="card_dev-team" title="Команда разработки сайта">-->
    <!--                    <div class="card__item" v-for="i in 5" :key="i">-->
    <!--                        <user-item img="/storage/dynamic/three-dog-night.png">-->
    <!--                            <p><span class="text-color-blue"> User {{ i }} </span> - главный разработчик </p>-->
    <!--                        </user-item>-->
    <!--                    </div>-->
    <!--                </card>-->
    <!--            </div>-->
    <!--            <div class="col-xl-7 col-md-12 mb-5">-->
    <!--                <img :src="`/storage/static/campfire.png`" class="img-fluid" alt="">-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </section>-->

    <btn-boosty></btn-boosty>
</template>

<script>

export default {
    data() {
        return {
            image: null,
            uploadImg: null,
            path: '',
        }
    },
    methods: {
        onFileChange(e) {
            this.image = e.target.files || e.dataTransfer.files;
            if (!this.image.length) return;
            this.onSubmit();
        },
        onSubmit() {
            const formData = new FormData();
            formData.append('image', this.image[0]);
            console.log(this.image[0]);
            axios.post('/image/store', formData, {headers: {'Content-Type': "multipart/form-data"}}).then(res => {
                console.log(res);
                this.path = res.data;
            });
        },
    },
}

</script>

<style lang="scss">
.block-links__partners {
    .card__item {
        .text {
            font-size: 0.8em !important;
        }
    }
}
</style>

<style scoped lang="scss">
.title-white {
    font-size: calc(25px + 5 * (100vw - 320px) / 1620);
}

.subtitle {
    font-weight: 400;
}

.block-text {
    p {
        line-height: 2em;
    }
}

.block-links {
    .title-white {
        font-size: 1.3em;
        text-align: left;
    }

    .block-links__card {
        .card__desc-item {
            font-size: 0.8em;

        }

        .card__dev-item {
            margin-bottom: 30px;
        }

    }

    .card_dev-team {
        p, span {
            font-size: 0.9em;
        }
    }
}
</style>
