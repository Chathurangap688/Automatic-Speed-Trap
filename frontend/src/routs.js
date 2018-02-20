import Vue from 'vue'
import VueRouter from 'vue-router'
import Add from './component/add.vue'
import New from './component/new.vue'
import All from './component/allImg.vue'
Vue.use(VueRouter);
const router = new VueRouter(
  {
    mode:'history',
    routes:[
      {
        path:"/add",component:Add
      },
      {
        path:"/new",component:New
      },
      {
        path:"/all",component:All
      }

    ]
  }
);
export default router
