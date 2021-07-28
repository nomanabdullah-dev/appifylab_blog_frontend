require('./bootstrap');
import Vue from 'vue'
import common from './common'

Vue.mixin(common)
window.Vue = require('vue').default
Vue.component('search', require('./components/search.vue').default);
Vue.component('comment', require('./components/comment.vue').default);


const app = new Vue({
    el: '#app',
})
