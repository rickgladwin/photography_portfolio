<template>
    <div class="photo-like">
        <i v-if="likes_count > 0" class="fas fa-heart"></i>
        <i v-if="!likes_count > 0" class="far fa-heart"></i>
                                       count:{{ likes_count }}
        test: 23
    </div>
</template>

<script>
    export default {
        name: 'Like',
        data() {
            return {
                id: '1',
                title: '',
                description: '',
                date: '',
                img: '',
                likes_count: 0,
            }
        },
        props: [
            'photo_id',
        ],
        created() {
            this.fetchLikesCount();
        },
        methods: {
            fetchLikesCount() {
                console.log(`fetchLikesCount(${this.id}`);
                fetch(`api/photo/${this.id}/likes_count`)
                .then(res => res.json())
                .then(res => console.log('likes_count: ', res))
                .then(res => {
                    this.likes_count = res;
                })
            },
        },
        mounted() {
            console.log('Photo component mounted.')
        }
    }
</script>
