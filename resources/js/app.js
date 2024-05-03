import '@js/bootstrap.js';
import {createApp} from "vue";
import App from '@js/components/App.vue';
import router from "@js/router.js";
import components from '@js/components/UI';

const app = createApp(App)

components.forEach(component => {
    app.component(component.name, component)
})

app.use(router).mount('#app');



