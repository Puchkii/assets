import Logo from './components/Logo';
import LogoSymbol  from './components/LogoSymbol';
import Colors from './components/Colors';
import Typography from './components/typography';
import Mascot from './components/mascot';
import Illustrations from './components/illustrations';
import LoadersAndAnimations from './components/loadersandanimations';
import Wallpapers from './components/wallpapers';
import NotFound from './components/NotFound';


export default {
    mode: 'history',

    // Niet werkende line. Hoort aan te geven waar je bent op de site door sidemenu locatie font bold te maken
    // linkActiveClass: 'font-bold',

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
            path:'/loaders-and-animations',
            component: LoadersAndAnimations
        },

        {
            path:'/wallpapers',
            component: Wallpapers
        } 
    ]
};