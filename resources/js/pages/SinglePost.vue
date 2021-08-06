<template>
    <div class="container" v-if="post">
        <div class="row">
            <div class="col-12 d-flex align-items-center">
                <h3 class="mr-3"> {{ post.title }}</h3>
                <small v-if="post.category != null " class="badge badge-success"> {{ post.category.name }} </small>
                <small v-else class="badge badge-success"> no category </small>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <img v-if="post.cover" class="card-img-top img-fluid" :src="imgTest" :alt="post.cover">
                <img v-else class="card-img-top img-fluid" src="images/placeholder.png" alt="Card image cap">
            </div>
            <div class="col-8">
                <div>
                    <div class="my-2">
                        <span v-for="(tag, index) in post.tags" :key="index" class="badge badge-pill badge-info mr-3"> {{ tag.name }} </span>
                    </div>
                    <p> {{ post.content }} </p>
                    <router-link class="btn btn-info" :to="{ name: 'Blog' } " >Back to Blog</router-link>
                </div>
            </div>
        </div>
    </div>
    <div v-else>
        <Loader />
    </div>
</template>

<script>
import Loader from '../components/Loader'

export default {
    name: 'SiglePost',
    components: {
        Loader
    },
    data() {
        return {
            post: null,
            imgTest: ''
        }
    },
    created: function() {
        this.getPost(this.$route.params.slug);
        console.log(this.$route.params)
        console.log(this.post.cover)

    },
    methods: {
        getPost: function(slug) {
            axios.get(`http://127.0.0.1:8000/api/posts/${slug}`)
                .then((result) => {
                  this.post = result.data;
                  this.imgTest = result.data.cover;   
                //   console.log(result.data.cover);  
                }).catch((err) => {
                  console.log(err.data);
                });
        }
    }
}
</script>

<style lang="scss" scoped>

</style>