import "./bootstrap";
import "../css/app.css";
import Vue from 'vue'

import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/inertia-vue3";
import { InertiaProgress } from "@inertiajs/progress";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { ZiggyVue } from "../../vendor/tightenco/ziggy/dist/vue.m";
import store from "./store"
import moment from "moment/moment";

moment.locale("pt-br");

Vue.filter("formatDate", function (value) {
  if (value) {
    return moment(value).format("DD/MM/YYYY HH:mm");
  }
});

store.dispatch('userStateAction');

const appName =
  window.document.getElementsByTagName("title")[0]?.innerText || "Laravel";

createInertiaApp({
  title: (title) => `${title} - ${appName}`,
  resolve: (name) =>
    resolvePageComponent(
      `./Pages/${name}.vue`,
      import.meta.glob("./Pages/**/*.vue")
    ),
  setup({ el, app, props, plugin }) {
    return createApp({ render: () => h(app, props) })
      .use(plugin)
      .use(ZiggyVue, Ziggy)
      .mount(el);
  },
});

InertiaProgress.init({ color: "#4B5563" });
