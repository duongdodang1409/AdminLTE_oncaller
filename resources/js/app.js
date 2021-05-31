import ExampleComponent from "./components/ExampleComponent";


require('./bootstrap');

window.Vue = require('vue').default;

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('my-component', require('./components/Mycomponent.vue').default);

Vue.component('test-component', require('./components/TestComponent.vue').default);
Vue.component('list-post', require('./components/admin/Post/ListPostComponent.vue').default);
Vue.component('create-post', require('./components/admin/Post/CreatePostComponent.vue').default);
Vue.component('list-feature', require('./components/admin/Feature/ListFeatureComponent.vue').default);
Vue.component('list-feature-pack', require('./components/admin/Feature Packs/ListFeaturePackComponent.vue').default);
Vue.component('main', require('./components/admin/AdminMaster.vue').default);


import {routes} from './route.js';

const router = new VueRouter({
    routes, // short for `routes: routes`
    mode: 'history'
})


const app = new Vue({
    el: '#app',
    router
});
