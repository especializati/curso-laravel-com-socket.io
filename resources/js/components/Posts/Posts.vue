<template>
    <div>
        <h1>Posts</h1>

        <div v-for="(post, index) in posts.data" :key="index">
            {{ post.name }}

            <hr>
        </div>
    </div>
</template>

<script>
import axios from 'axios'

export default {
    mounted() {
        this.loadPosts()
    },

    data() {
        return {
            posts: {
                data: []
            }
        }
    },

    methods: {
        loadPosts () {
            axios.get('/api/posts')
                    .then(response => this.posts = response.data)
                    .catch(response => this.$vToastify.error('Falha ao carregar os posts', 'Erro'))
        }
    },
}
</script>
