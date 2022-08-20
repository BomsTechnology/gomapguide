import "./bootstrap";
import "../css/app.css";
import { createApp } from "vue";
import App from "./App.vue";

import { createPinia } from "pinia";
const pinia = createPinia();
import router from "./router";

const app = createApp(App);
app.use(pinia);
app.use(router);
app.mount("#app");
