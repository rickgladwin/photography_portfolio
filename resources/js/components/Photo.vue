<template>
    <div class="photo">
        <img class="photo-thumb" :src="photo.img" alt="landscape photo" :id="photo.id">
        <div class="photo-info">
            <div class="photo-title photo-info-snippet">{{ photo.title }}</div>
            <div class="photo-description photo-info-snippet">{{ photo.description }}</div>
            <div class="photo-date photo-info-snippet">{{ photo.date }}</div>

            <like v-bind:photo_id="photo.id"></like>
<!--            <div class="photo-like">-->
<!--                <i v-if="likes_count > 0" class="fas fa-heart"></i>-->
<!--                <i v-if="!(likes_count > 0)" class="far fa-heart"></i>-->
<!--                {{ this.likes_count }}-->
<!--            </div>-->
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Photo',
        data() {
            return {
                id: '1',
                title: '',
                description: '',
                date: '',
                img: '',
            }
        },
        props: [
            'photo',
        ],
        created() {
            // this.fetchLikesCount();
        },
        methods: {
            // fetchLikesCount() {
            //     console.log(`fetchLikesCount(${this.photo.id})`);
            //     fetch(`api/photo/${this.photo.id}/likes_count`)
            //     .then(res => res.json())
            //     .then(res => this.likes_count = res.likes_count)
            // },
        },
        mounted() {
            console.log('Photo component mounted.')
        }
    }
</script>
