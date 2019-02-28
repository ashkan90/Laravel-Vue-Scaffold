require('../bootstrap');
window.Vue = require('vue');

import router from './router';
import Vuetify from 'vuetify';
import 'vuetify/dist/vuetify.min.css';

Vue.use(Vuetify, {
	theme: {
		primary: '#3f51b5',
        info: '#4c86b5',
        success: '#17b535',
        secondary: '#b0bec5',
        accent: '#8c9eff',
        error: '#b71c1c'
	}
});


const admin = new Vue({
	el: '#admin',
	router
});