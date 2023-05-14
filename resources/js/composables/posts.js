import { ref } from 'vue';

export default function usePosts() {
    const posts = ref([]);

    const getPosts = async () => {
        axios.get('/api/posts')
            .then(responce => {
                posts.value = responce.data;
            })
    }

    return { posts, getPosts }
}
