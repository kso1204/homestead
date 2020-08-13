import Vue from 'vue'
import VueRouter from 'vue-router'

//import VueRouter는 
//vue-router.vue에서 선언한 var VueRouter의 내용을 가져온다고 생각
// VueRouter<-- component에 들어가는 내용
//https://kr.vuejs.org/v2/guide/components-registration.html

Vue.use(VueRouter)

import App from './views/App'
import Hello from './views/Hello'
import Home from './views/Home'
import UsersIndex from './views/UsersIndex'
import UsersEdit from './views/UsersEdit'
import UsersCreate from './views/UsersCreate'
import PapersCreate from './views/PapersCreate'
import PapersEdit from './views/PapersEdit'
import PapersIndex from './views/PapersIndex'
import Login from './views/Login'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/hello',
            name: 'hello',
            component : Hello
        },
        {
            path: '/users',
            name: 'users.index',
            component: UsersIndex,
        },
        {
            path: '/users/:id/edit',
            name: 'users.edit',
            component: UsersEdit,
        },
        {
            path: '/users/create',
            name: 'users.create',
            component: UsersCreate,
        },
        {
            path: '/papers',
            name: 'papers.index',
            component: PapersIndex,
        },
        {
            path: '/papers/:id/edit',
            name: 'papers.edit',
            component: PapersEdit,
        },
        {
            path: '/papers/create',
            name: 'papers.create',
            component: PapersCreate,
        },
        {
            path: '/login',
            name: 'login.index',
            component: Login,
        },
    ],
});

const app = new Vue({
    el :'#app',
    components: { App },
    router,
});