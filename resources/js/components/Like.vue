<template>
    <div class="photo-like">
        <i v-if="likes_count > 0" class="fas fa-heart"></i>
        <i v-if="!(likes_count > 0)" class="far fa-heart"></i>
        {{ likes_count }}
    </div>
</template>

<script>
    export default {
        name: 'Like',
        data() {
            return {
                likes_count: 0,
            }
        },
        props: [
            'photo_id',
        ],
        created() {
            console.log('Like component created for photo_id', this.photo_id)
            // this.fetchLikesCount();
        },
        methods: {
            fetchLikesCount() {
                console.log(`fetchLikesCount(${this.photo_id})`);
                fetch(`api/photo/${this.photo_id}/likes_count`)
                    .then(res => res.json())
                    .then(res => this.likes_count = res.likes_count)
            },
        },
        mounted() {
            console.log('Like component mounted for photo_id', this.photo_id);
            this.fetchLikesCount();
        }
    }
</script>
