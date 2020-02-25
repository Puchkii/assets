import Logo from './components/Logo';
import LogoSymbol  from './components/LogoSymbol';
import Colors from './components/Colors';
import Typography from './components/typography';
import Mascot from './components/mascot';
import Illustrations from './components/illustrations';
import Wallpapers from './components/wallpapers';
import SiteStats from './components/SiteStats';
import NotFound from './components/NotFound';


let LoadersAndAnimations = () =>
    import(/* webpackChunkName: "loaders-and-animations.bundle" */ './components/LoadersAndAnimations');

export default {
    mode: 'history',

    linkActiveClass: 'font-bold',

    routes: [

        {
            path: '*',
            component: NotFound
        },

        {
            path:'/',
            component: Logo
        },

        {
            path:'/logo-symbol',
            component: LogoSymbol
        },

        {
            path:'/colors',
            component: Colors
        },

        {
            path:'/typography',
            component: Typography
        },

        {
            path:'/mascot',
            component: Mascot
        },

        {
            path:'/illustrations',
            component: Illustrations
        },

        {
            path:'/LoadersAndAnimations',
            component: LoadersAndAnimations
        },

        {
            path:'/wallpapers',
            component: Wallpapers
        },

        {
            path:'/site-stats',
            component: SiteStats
        } 
        
    ]
};