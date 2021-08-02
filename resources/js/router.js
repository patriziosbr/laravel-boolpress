import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from './pages/Home'
import Blog from './pages/Blog'
import About from './pages/About'
import Contacts from './pages/Contacts'
import SinglePost from './pages/SinglePost'
import NotFound from '../js/components/NotFound';


Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    linkActiveClass: 'active',
    routes: [
        {
            path: '/',
            name: 'Home',
            component: Home
        },
        {
            path: '/Blog',
            name: 'Blog',
            component: Blog
        },
        {
            path: '/About',
            name: 'About',
            component: About
        },
        {
            path: '/Contacts',
            name: 'Contacts',
            component: Contacts
        },
        {
            path: '/Blog/:slug',
            name: 'single-post',
            component: SinglePost
        },
        {
            path: '*',
            name: 'not-foud',
            component: NotFound
        }
    ]
});

export default router;