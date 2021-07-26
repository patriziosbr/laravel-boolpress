<template>
    <div class="text-center my-5">
        <h1> {{ title }} </h1>
        <h2> {{ subtitle }} </h2>
    </div>
</template>

<script>
export default {
    name: 'WorkVue',
    props: ['title', 'subtitle']
}
</script>

<style lang="scss" scoped> 
    h1 {
        color: blue;
    }
</style>