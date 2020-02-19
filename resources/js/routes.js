import Home from './components/Home';
import About  from './components/About';

export default {
    mode: 'history',

    routes: [
        {
            path:'/',
            component: Home,
            name: 'home'
        },
        {
            path:'/About',
            component: About,
            name: 'about'
        }
    ]
};