<template>
    <title-blue> Профиль</title-blue>
    <!--    <h4> Привет, {{ user.username }}!</h4>-->
    <form>
        <div class="row">
            <div class="col-auto me-3 mb-4">
                <div class="user-photo">
                    <img v-if="user.photo" class="img-fluid" :src="`/storage/${user.photo}`" alt="user-photo">
                    <p v-else class="user-photo__letter"> M </p>
                </div>
            </div>
            <div class="col-xl-5 col-md-12 d-flex flex-column">
                <label class="mb-2" for="username"> Никнейм: </label>
                <input v-model="user.username" id="username" name="username" class="my-input mb-3" type="text"/>
                <label class="mb-2" for="email"> Email: </label>
                <input v-model="user.email" id="email" name="email" class="my-input mb-4" type="email"/>
                <btn-filled class="py-1" type="submit" @click.prevent="updateUser"> Сохранить</btn-filled>
            </div>
        </div>
    </form>

</template>

<script>

import ActivityList from "../components/indexPage/ActivityList.vue";
import ActivityItem from "../components/indexPage/ActivityItem.vue";
import UserItem from "../components/UI/UserItem.vue";

export default {
    components: {UserItem, ActivityItem, ActivityList},
    data() {
        return {
            user: {
                username: '',
                email: '',
            },
        }
    },
    mounted() {
        this.getUser()
    },
    methods: {
        getUser() {
            axios.get('/api/user').then(res => {
                this.user = res.data;
            })
        },

        updateUser() {
            axios.patch('/api/user/update', this.user).then(res => {
                console.log(res);
            })

        }

    }
}
</script>


<style scoped lang="scss">
.my-input {
    background: $color-sub-bg;
    border-radius: 10px;
    padding: 5px 10px;
    border: none;
}

.user-photo {
    display: inline-block;
    background: #223C4B;
    border-radius: 50%;

    img {
        width: calc(100px + 100 * (100vw - 320px) / 1140);
        height: calc(100px + 100 * (100vw - 320px) / 1140);
        border-radius: 100%;
        object-fit: cover;
    }

    &__letter {
        letter-spacing: 0;
        font-size: calc(50px + 50 * (100vw - 320px) / 1140);
        line-height: 0.6em;
        font-weight: 800;
        color: $color-sub-bg;
        padding: 0.6em;
        margin: 0.2em 0 0 0;
    }
}
</style>


<!--<template>-->
<!--    <form class="post-form" @submit.prevent>-->
<!--        <my-input v-model="post.title" placeholder="Name"></my-input>-->
<!--        <my-input v-model="post.body" placeholder="Description"></my-input>-->
<!--        <my-btn class="d-block mx-auto" type="submit" @click="AddPost"> Add </my-btn>-->
<!--    </form>-->
<!--</template>-->

<!--<script>-->
<!--export default {-->
<!--    components: {},-->

<!--    props: {-->
<!--        posts: {-->
<!--            type: Array,-->
<!--            required: true-->
<!--        }-->
<!--    },-->
<!--    data() {-->
<!--        return {-->
<!--            post: {-->
<!--                title: '',-->
<!--                body: '',-->
<!--            }-->
<!--        }-->
<!--    },-->
<!--    methods: {-->
<!--        AddPost () {-->
<!--            this.post.id = this.posts.length > 0? this.posts.at(-1).id + 1 : 1-->
<!--            // this.$emit('create', this.post)-->
<!--            this.$parent.$parent.addPost(this.post)-->
<!--            this.post = {-->
<!--                title: '',-->
<!--                body: ''-->
<!--            }-->
<!--        }-->
<!--    }-->
<!--}-->
<!--</script>-->

