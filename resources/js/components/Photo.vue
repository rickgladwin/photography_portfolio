<template>
    <div class="photo">
        <img class="photo-thumb" :src="photo.img" alt="landscape photo" style="width:100%" :id="photo.id">
        <div class="photo-info">
            <div class="photo-title photo-info-snippet">{{ photo.title }}</div>
            <div class="photo-description photo-info-snippet">{{ photo.description }}</div>
            <div class="photo-date photo-info-snippet">{{ photo.date }}</div>
            <div class="photo-like">
                <i v-if="likes_count > 0" class="fas fa-heart"></i>
                <i v-if="!likes_count > 0" class="far fa-heart"></i>
                {{ this.likes_count }}
            </div>
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
                likes_count: 0,
            }
        },
        props: [
            'photo',
        ],
        created() {
            this.fetchLikesCount();
        },
        methods: {
            fetchLikesCount() {
                console.log(`fetchLikesCount(${this.photo.id})`);
                fetch(`api/photo/${this.photo.id}/likes_count`)
                .then(res => res.json())
                // .then(res => console.log('likes_count: ', res['likes_count']))
                // .then(res => {
                // // this.likes_count = res;
                // this.likes_count = res['likes_count'];
                // })
                .then(res => this.likes_count = res['likes_count'])
            },
        },
        mounted() {
            console.log('Photo component mounted.')
        }
    }
</script>
