<template>
    <div>
        <h2>Tutti i post:</h2>
        <div class="container">
        <div v-for="post in posts" :key='post.id' class="row row-cols-3">
            <div class="card mb-3">
                <h1>{{ post.title }}</h1>
                <p>{{ post.content }}</p>
            </div>
        </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Posts',
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
             axios.get('http://127.0.0.1:8000/api/posts')
             .then((resp) => {
                this.posts = resp.data.results;
                console.log(this.posts)
            })
        }
    }
}
</script>

<style>

</style>