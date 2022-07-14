<template>
  <div class="card mb-3">
        <h1>{{ post.title }}</h1>
        <p>{{ post.content }}</p>
        <p>{{ post.category ? post.category.name : 'nessuna categoria'  }}</p>
        <router-link :to="{name: 'single-post', params: {slug: post.slug }}">Vedi post</router-link> 
    </div>
</template>

<script>
export default {
    name: 'PostCard',
    props: {
        post: Object,
    },
}
</script>

<style>

</style>