import Vue from 'vue';

require('./bootstrap');
window.Vue = require('vue');

Vue.component('hahah-com', require('./components/ApplyComponent.vue').default);
Vue.component('favorite-component', require('./components/FavouriteComponent.vue').default);
Vue.component('search-component', require('./components/SearchComponent.vue').default);

const app = new Vue({
    el: '#app'
});