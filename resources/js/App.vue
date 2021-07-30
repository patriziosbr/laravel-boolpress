<template>
    <div>
        <Header />

        <WorkVue title="Vue in progress" subtitle="set up vue js in laravel"/>

        <Footer />
    </div>
</template>

<script>
import WorkVue from '../js/components/WorkVue';
import Header from '../js/components/Header.vue';
import Footer from '../js/components/Footer';

export default {   
    name: 'App',
    components: {
        Header,
        WorkVue,
        Footer
    }
    // data() {
    //     return {

    //     }
    // },
    // methods: {

    // }


}
</script>

<style lang="scss">
    @import '../sass/front.scss/';

</style>