import {createRouter, createWebHistory} from "vue-router"
import cookies from "vue-cookies";

const routes = [
    {
        path: '/',
        name: 'home',
        component: () => import('@js/pages/IndexPage.vue')
    },
    {
        path: '/games',
        name: 'games',
        component: () => import('@js/pages/GamesPage.vue')
    },
    {
        path: '/about',
        name: 'about',
        component: () => import('@js/pages/AboutPage.vue')
    },
    {
        path: '/activities',
        name: 'Activities',
        redirect: '/activities/nri', // как переделаешь на vuex надо динамически подгружать активити дефолтное
        component: () => import('@js/pages/ActivitiesPage.vue'),
        children: [
            {
                name: 'Activity',
                path: '/activities/:activityName',
                component: () => import('@js/pages/Activity.vue'),
            },
        ]
    },
    {
        path: '/user/login',
        name: 'user.login',
        component: () => import('@js/components/authentication/Login.vue')
    },
    {
        path: '/user/registration',
        name: 'user.registration',
        component: () => import('@js/components/authentication/Registration.vue')
    },
    {
        path: '/user/account',
        name: 'user.account',
        component: () => import('@js/pages/AccountPage.vue')
    },
]

const router = createRouter({
    routes,
    history: createWebHistory()
})

router.beforeEach((to, from, next) => {
    const token = cookies.get('x_xsrf_token');
    // console.log(token);

    if (!token) {
        if (to.name === 'user.account') {
            return next(false)
        }
        else {
            return next()
        }
    }

    if (token) {
        if (to.name === 'user.login' || to.name === 'user.registration') {
            return next(false)
        }
        else {
            return next()
        }
    }

})

export default router;


