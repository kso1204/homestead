import Vue from 'vue'
import Vuex from 'vuex'
Vue.use(Vuex)

export default new Vuex.Store({
    // ...
    state : {
        counter : 1000
    },

    mutations: {
        chnageTheCounter(state, data){
            state.counter += data
            console.log(data);            
        }
    }



})