import '@js/bootstrap.js';
import {createApp} from "vue";
import App from '@js/components/App.vue';
import router from "@js/router.js";
import axios from '@js/axios.js';
import components from '@js/components/UI';
import VueCookies from "vue-cookies";

const app = createApp(App)

components.forEach(component => {
    app.component(component.name, component)
})

app.use(router, axios).use(VueCookies).mount('#app');



