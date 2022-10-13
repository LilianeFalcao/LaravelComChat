import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'

Vue.use(Vuex)

export default new Vuex.Store({
    state:{
        user:{}
    },
    mutations:{
        
    },
    actions:{
        userStateAction:() => {
            axios.get('api/user/me').then(response => {
                console.log(response)
            })

            console.log('invoked')
        }
    }
})