<template>
    <div>
        <h1>{{ post.title }}</h1>
        <p>{{ post.content }}</p>
        <p>{{ post.category ? post.category.name : 'nessuna categoria'  }}</p>
        <div v-for="tag in post.tag" :key="tag.id">
            <p>{{ tag.name }}</p>
        </div>
    </div>
</template>

<script>
export default {
    name: 'SinglePost',
    data() {
        return {
            post: [],
        }    
    },
    created() {
        this.getSinglePost();
    },
    methods: {
        getSinglePost() {
            const slug = this.$route.params.slug;
             axios.get(`/api/posts/${slug}`)
             .then((resp) => {
            if (resp.data.success) {
                this.post = resp.data.results;
            } else {
                this.$router.push({name: 'not-found'});
            }  
            })
        }
    }
};
</script>

<style>

</style>