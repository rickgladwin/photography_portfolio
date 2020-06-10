<template>
    <div class="row">
        <div class="photo-container col-xs-12 col-sm-6 col-md-3">
            Photo
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                photos: [],
                photo: {
                    'id' : '',
                    'title' : '',
                    'description' : '',
                    'img' : '',
                    'date' : '',
                    'featured' : '',
                },
                photo_id: ''
            }
        },
        created() {
            this.fetchPhotos();
        },
        methods: {
            fetchPhotos() {
                return 'photos array';
            }
        },
        mounted() {
            console.log('Photos component mounted.')
        }
    }
</script>

<style>
    .photo-container {
        background-color: grey;
    }
</style>
