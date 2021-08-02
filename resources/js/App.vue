<template>
    <div>
        <Header />

        <div class="main-box container">
            <router-view></router-view>
        </div>

        <Footer />
    </div>
</template>

<script>
import Header from '../js/components/Header.vue';
import Home from '../js/pages/Home.vue';
import Blog from './pages/Blog.vue';
import About from './pages/About.vue';
import Contacts from './pages/Contacts.vue';
import Footer from '../js/components/Footer';

export default {
    name: 'App',
    components: {
        Header,
        Home,
        Blog,
        About,
        Contacts,
        Footer
    }
}
</script>

<style lang="scss">
    @import '../sass/front.scss/';

</style>