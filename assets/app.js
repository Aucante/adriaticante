/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

// start the Stimulus application
import './bootstrap';

import Vue from 'vue'
import VueRouter from 'vue-router'

import vuetify from './plugins/vuetify'

import Home from './components/Home'

import BaseLayout from "./layout/BaseLayout";
import Contact from "./assets/views/Contact/Contact";


const routes = [
    { path: '/', component: Home, name: 'home' },
    { path: '/contact', component: Contact, name: 'contact' },
]

const router = new VueRouter({
    mode: 'history',
    base: '/app/',
    routes
})

Vue.use(VueRouter)

new Vue({
    router,
    vuetify,
    components: {BaseLayout: BaseLayout}
}).$mount('#app')