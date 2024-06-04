import {createRouter, createWebHistory} from "vue-router"

const routes = [
    {
        path: '/',
        name: 'home',
        component: () => import('@js/components/pages/IndexPage.vue')
    },
    // {
    //     path: '/games',
    //     name: 'games',
    //     component: () => import('@js/components/pages/GamesPage.vue')
    // },
    {
        path: '/about',
        name: 'about',
        component: () => import('@js/components/pages/AboutPage.vue')
    },
    {
        path: '/activities',
        name: 'Activities',
        redirect: '/activities/nri', // как переделаешь на vuex надо динамически подгружать активити дефолтное
        component: () => import('@js/components/pages/ActivitiesPage.vue'),
        children: [
            {
                name: 'Activity',
                path: '/activities/:activityName',
                component: () => import('@js/components/pages/Activity.vue'),
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
        component: () => import('@js/components/pages/AccountPage.vue')
    },
    {
        path: '/:pathMatch(.*)*',
        name: 'not-found',
        component: () => import('@js/components/pages/NotFoundPage.vue')
    }
]

const router = createRouter({
    routes,
    history: createWebHistory()
})
export default router;


