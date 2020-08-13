import Vue from 'vue'
import Router from 'vue-router'
Vue.use(Router)

import firstPage from './components/pages/myFirstVuePage'
import newRoutePage from './components/pages/newRoutePage'
import hooks from './components/pages/basic/hooks.vue'
import methods from './components/pages/basic/methods.vue'

//project pages
import home from './components/pages/basic/home'
import tags from './admin/pages/tags'
import category from './admin/pages/category'

import usecom from './vuex/usecom'

const routes = [
    //projects routes...


    { 
        path: '/testvuex',
        component: usecom
    },

    { 
        path: '/',
        component: home
    },

    
    { 
        path: '/tags',
        component: tags
    },

    
    { 
        path: '/category',
        component: category
    },



    //basic tutorials routes...

    {
        path: '/my-new-vue-route',
        component: firstPage
    },
    {
        path: '/new-route',
        component: newRoutePage
    },

    // vue hooks
    {
        path: '/hooks',
        component: hooks
    },
    // more basisc
    {
        path: '/methods',
        component: methods
    },

]



export default new Router({
    mode: 'history',
    routes
})