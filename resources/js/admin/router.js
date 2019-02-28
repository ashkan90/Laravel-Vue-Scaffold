import Vue from 'vue';
import Router from 'vue-router';

Vue.use(Router);


const router = new Router({
	routes: [
		{
            path: '/',
            redirect: '/dashboard',
        },
        {
            name: 'dashboard',
            path: '/dashboard',
            component: require('./dashboard/Home').default,
        },
	]
})

export default router;