<template>
  <div>
        <div class="row">
            <Card class="col-4 d-flex justify-content-center" v-for="post in posts" :key="post.id" :item="post" />
        </div>
        <div class="row ">
            <div class="col-12 text-center">

            <button v-show="(currentPage > 1)" @click="callApi(currentPage-1)" class="btn btn-info m-3">Prev</button>

            <button v-for="n in lastPage" :key="n" class="mx-2" :class="(n == currentPage) ? 'btn btn-info' : 'btn btn-light'" @click="callApi(currentPage = n)">{{ n }}</button>

            <button v-show="(currentPage < lastPage)" @click="callApi(currentPage+1)" class="btn btn-info m-3">Next</button>

        </div>
        </div>
  </div>
</template>

<script>
import Card from '../components/Card.vue'


export default {
    name: 'Blog',
    components: {
        Card
    },
    data() {
        return{
            posts: [],
            currentPage: 1,
            lastPage: 1,
        }
    },
    methods: {
        truncateTxt: function(text, len) {
            if (text.length > len) {
                return text.substring(0, len) + '...'
            } else {
                return text
            }
        },
        callApi( page = 1 ) {
            axios.get(`http://localhost:8000/api/posts?page=${page}`)
            .then(res => {
                console.log(res.data);
                this.posts = res.data.data;
                this.currentPage = res.data.current_page;
                this.lastPage = res.data.last_page;


                this.posts.forEach(
                    ele => {
                        console.log(ele);
                        ele.extract = this.truncateTxt(ele.content, 150)
                    }
                );
          
            }).catch(err => {
                console.log(err)
            })
        },
    },
    mounted: function() {
        this.callApi( this.currentPage = 1);
    }
}

</script>

<style>

</style>