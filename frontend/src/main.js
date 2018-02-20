import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router'
import Router from './routs.js'
import vueResource from 'vue-resource'

Vue.use(vueResource);
Vue.use(VueRouter);
new Vue({
  el: '#app',
  render: h => h(App),
  router:Router
})
