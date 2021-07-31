<template>
  <section>
    <div>
        <div class="card m-2 " >
        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
            <div class="card-body" >
                <h5 class="card-title">{{ item.title }}</h5>
                <p class="card-text"> {{ item.extract }} </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
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

</style>