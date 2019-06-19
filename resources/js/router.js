import VueRoute from 'vue-router';
import Home from './pages/Home';
import Private from './pages/Private';
import Auth from './pages/Auth';

export default new VueRoute({
    routes: [
        {
            path: '/',
            component: Home
        },
        {
            path: '/private',
            name: 'private',
            component: Private
        },
        {
            path: '/auth',
            name: 'auth',
            component: Auth
        }
    ],
    mode: 'history'
})