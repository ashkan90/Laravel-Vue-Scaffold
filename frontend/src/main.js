import Vue from "vue";
import './plugins/vuetify'
import 'vuetify/dist/vuetify.min.css'
import App from "./App.vue";
import router from "./routes";
import './plugins/vue-plugin-axios';

Vue.config.productionTip = false;

new Vue({
  router,
  render: function(h) {
    return h(App);
  }
}).$mount("#app");
