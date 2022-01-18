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
import VueCompositionAPI from '@vue/composition-api'
import AOS from 'aos'
import 'aos/dist/aos.css'


import vuetify from './plugins/vuetify'


import BaseLayout from "./layout/BaseLayout";
import Homepage from "./assets/views/Homepage";
import Contact from "./assets/views/Contact";
import About from "./assets/views/About";
import Properties from "./assets/views/Properties";
import SignUp from "./assets/views/SignUp";
import SignIn from "./assets/views/SignIn";


const routes = [
    { path: '/', component: Homepage, name: 'homepage' },
    { path: '/contact', component: Contact, name: 'contact' },
    { path: '/about', component: About, name: 'about' },
    { path: '/properties', component: Properties, name: 'properties' },
    { path: '/signup', component: SignUp, name: 'signup' },
    { path: '/signin', component: SignIn, name: 'signin' },
]

const router = new VueRouter({
    mode: 'history',
    base: '/app/',
    routes
})

Vue.use(VueRouter, VueCompositionAPI)

new Vue({
    router,
    vuetify,
    components: {BaseLayout: BaseLayout}
}).$mount('#app')

AOS.init();