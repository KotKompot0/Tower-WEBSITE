import {createRouter, createWebHistory} from "vue-router"
import cookies from "vue-cookies";

const routes = [
    {
        path: '/',
        component: () => import('@js/pages/IndexPage.vue')
    },
    {
        path: '/games',
        component: () => import('@js/pages/GamesPage.vue')
    },
    {
        path: '/about',
        component: () => import('@js/pages/AboutPage.vue')
    },
    {
        path: '/activities',
        name: 'Activities',
        component: () => import('@js/pages/ActivitiesPage.vue'),
        children: [
            {
                name: 'IndexActivities',
                path: '/activities',
                redirect: '/activities/nri', // костыль ибо может ваще не быть НРИ
                component: () => import('@js/pages/Activity.vue'),
            },
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


