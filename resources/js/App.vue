<template>
    <div>
        <Header />

        <div class="container d-flex flex-wrap justify-content-center">
            <div class="card m-3" v-for="post in posts" :key="post.id">
                <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                <div class="card-body" >
                    <h5 class="card-title">{{ post.title }}</h5>
                    <p class="card-text"> {{ post.content }} </p>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
        </div>

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
    },
    data() {
        return{
            posts: [],
            subText: ""
        }
    },
    methods: {
        truncateTxt: function() {
            posts.forEach(element => {
                this.subText = element.content;
                // this.subText.substr(1, 150)
            });
        }
    },
    mounted: function() {
        axios.get('http://localhost:8000/api/posts')
            .then(res => {
                console.log(res.data);
                this.posts = res.data;
            }).catch(err => {
                console.log(err)
            })
    }
}
</script>

<style lang="scss">
    @import '../sass/front.scss/';

    .card {
        width: 200px;
    }
</style>