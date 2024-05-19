<template>
    <title-blue> Профиль</title-blue>
    <form>
        <div class="row">
            <div class="col-auto me-3 mb-4">
                <div class="user-photo">
                    <img v-if="user.photo" class="img-fluid" :src="`/storage/${user.photo}`" alt="user-photo">
                    <p v-else class="user-photo__letter"> {{ user.username[0].toUpperCase() }} </p>
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

import ActivityList from "@js/components/indexPage/ActivityList.vue";
import ActivityItem from "@js/components/indexPage/ActivityItem.vue";
import UserItem from "@js/components/UI/UserItem.vue";

export default {
    components: {UserItem, ActivityItem, ActivityList},
    data() {
        return {
            user: JSON.parse(localStorage.getItem('user')) || {},
            new_user: JSON.parse(localStorage.getItem('user')) || {}
        }
    },
    methods: {
        updateUser() {
            if (this.user.username !== this.new_user.username || this.user.email !== this.new_user.email) {
                axios.patch('/api/user/update', this.user).then(res => {
                    localStorage.setItem('user', JSON.stringify(res.data.data));
                }).catch((error) => {
                    console.log(error);
                });
            }
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
