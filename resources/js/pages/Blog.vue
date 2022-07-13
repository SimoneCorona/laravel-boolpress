<template>
<div class="container">
    <h1>La pagina del Blog</h1>
    <Posts />
</div>   
</template>

<script>
import Posts from '../components/Posts.vue';


export default {
    name: 'Blog',
    components: {
        Posts,
}
}
</script>

<style>

</style>