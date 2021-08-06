<template>
  <section>
    <div>
        <div class="card m-2" style="width: 18rem; min-height:450px" >
        <img v-if="item.cover" class="card-img-top" :src="'storage/' + item.cover" alt="Card image cap">
        <img v-else class="card-img-top" :src="'images/placeholder.png'" alt="Card image cap">
            <div class="card-body" >
                <h5 class="card-title">{{ item.title }}</h5>
                <p class="card-text"> {{ item.extract }} </p>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                <router-link :to="{ name: 'single-post', params: { slug: item.slug } }">Go somewhere</router-link>
            </div>
        </div>
    </div>
  </section>
</template>

<script>
export default {
    name: 'Card',
    props: { 'item': Object }
}
</script>

<style lang="scss" scoped>
  img {
    height: 200px;
    object-fit: contain;
  }
</style>