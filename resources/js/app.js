import './bootstrap';
import { createApp } from 'vue';
import App from './App.vue';
import router from "./router/router.js";
import components from './components/UI';
import VueCookies from "vue-cookies";

const app = createApp(App)

components.forEach(component => {
    app.component(component.name, component)
})

app.use(router).use(VueCookies).mount('#app');


