<template>
    <div class="app-container">
        <div class="row no-gutters">
<!--            <div class="user-info-container">-->
                <div class="col">
                    <div class="row header-row">
                        <div class="col header-col">
                            <div class="user-profile-pic"><img v-bind:src="profile_picture_src" v-bind:alt="profile_picture_alt"></div>
<!--                        </div>-->
<!--                        <div class="col header-col">-->
                            <div class="user-name">{{ user_info.name }}</div>
                            <div class="user-bio">{{ user_info.bio }}</div>
                        </div>
                        <div class="col-3 header-col">
                            <div class="user-contact-info">
                                phone: {{ user_info.phone }}<br>
                                email: {{ user_info.email }}<br>
                                insta: @nickphoto<br>
                                twitter: @nickphoto
                            </div>
                        </div>
                    </div>
                </div>
<!--            </div>-->
        </div>
        <div class="row row-cols-1 row-cols-sm-2 no-gutters">
<!--            <div class="photos-container">-->
<!--                <div class="col-xs-3 col-md-3 col-lg-4" v-for="photo in album" v-bind:key="photo.id">-->
                <div class="col photo-col" v-for="photo in album" v-bind:key="photo.id"
                     @mouseover="addHover(photo.id)"
                     @mouseleave="removeHover(photo.id)">
<!--                <div class="col photo-col" v-for="photo in album" v-bind:key="photo.id" v-on:mouseover="alert('hovered')">-->
<!--                <div class="col" v-for="photo in album" v-bind:key="photo.id">-->
<!--                    <div class="photo-container">-->
                        <img class="photo-thumb" :src="photo.img" alt="landscape photo" style="width:100%" :id="photo.id">
                        <div class="photo-info">
                            <div class="photo-title photo-info-snippet">{{ photo.title }}</div>
                            <div class="photo-description photo-info-snippet">{{ photo.description }}</div>
                            <div class="photo-date photo-info-snippet">{{ photo.date }}</div>
                            <div class="photo-like">
                                <i v-if="photo.has_likes" class="fas fa-heart"></i>
                                <i v-if="!photo.has_likes" class="far fa-heart"></i>
<!--                                {{ photo.likes_count }}-->
                                23
                            </div>
                        </div>
<!--                    </div>-->
                </div>
<!--            </div>-->
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                album: [],
                photo: {
                    id: '',
                    img: '',
                },
                user_info: {
                    name: '',
                    phone: '',
                    email: '',
                    bio: '',
                    profile_picture: 'img/profile.jpg',
                },
            }
        },
        created() {
            this.fetchUser();
        },
        computed: {
            profile_picture_src: function() {
                return this.user_info.profile_picture;
            },
            profile_picture_alt: function() {
                return this.user_info.name + ' profile';
            },
        },
        methods: {
            fetchUser() {
                fetch('/api/user/1')
                .then(res => res.json())
                .then(res => {
                    this.album = res.album;
                    this.user_info.name = res.name;
                    this.user_info.phone = res.phone;
                    this.user_info.email = res.email;
                    this.user_info.bio = res.bio;
                    this.user_info.profile_picture = res.profile_picture;
                })
            },
            addHover(photo_id) {
                var element = document.getElementById(photo_id);
                element.classList.add("hovered");
            },
            removeHover(photo_id) {
                var element = document.getElementById(photo_id);
                element.classList.remove("hovered");
            },
            likePhoto(photo_id) {

            }
        },
        mounted() {
            console.log('User component mounted.')
        }
    }
</script>
