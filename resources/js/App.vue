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
import Footer from '../js/components/Footer';

export default {
    name: 'App',
    components: {
        Header,
        Home,
        Footer
    }
}
</script>

<style lang="scss">
    @import '../sass/front.scss/';
    .main-box {
        height: calc(100vh - 130px);
        padding: 100px 0;
    }
</style>