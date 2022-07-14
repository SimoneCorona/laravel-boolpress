<template>
    <div>
        <h2>Tutti i post:</h2>
        <div class="container">
        <div v-for="post in posts" :key='post.id' class="row row-cols-3">
            <PostCard :post="post"/>
        </div>
        </div>
    </div>
</template>

<script>
import PostCard from './PostCard.vue';
export default {
    name: 'Posts',
    components: {
        PostCard,
    },
    data() {
        return {
            posts: [],
        }    
    },
    created() {
        this.getPosts();
    },
    methods: {
        getPosts() {
             axios.get('/api/posts')
             .then((resp) => {
                this.posts = resp.data.results;
            })
        }
    }
}
</script>

<style>

</style>