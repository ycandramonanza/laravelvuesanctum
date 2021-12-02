require('./bootstrap');

window.Vue = require('vue').default;



import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import axios from 'axios';
import Vue from 'vue';
import { create } from 'lodash';

Vue.use(VueRouter);
Vue.use(VueAxios, axios);

let routes = [
    { path: '/product', name: 'product', component: require('./components/product/Product.vue').default },
    { path: '/create', name: 'create', component: require('./components/product/Create.vue').default },
    { path: '/edit/:id', name: 'edit', component: require('./components/product/Edit.vue').default }
]

Vue.component('example-component', require('./components/ExampleComponent.vue').default);


const router = new VueRouter({
    mode: 'history',
    routes
})


const app = new Vue({
    el: '#app',
    router
});