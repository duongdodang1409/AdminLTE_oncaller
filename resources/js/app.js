import ExampleComponent from "./components/ExampleComponent";


require('./bootstrap');

window.Vue = require('vue').default;

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('my-component', require('./components/Mycomponent.vue').default);

Vue.component('test-component', require('./components/TestComponent.vue').default);

const routes = [
    { path: '/example', component: ExampleComponent }
]

const router = new VueRouter({
    routes // short for `routes: routes`
})


const app = new Vue({
    el: '#app',
    router
});
