<template>
    <div class="row">
        <div class="col-xs-12">
            <div class="user-info-container">
                <div class="user-profile-pic">pic</div>
                <div class="user-name">{{ this.user_info.name }}</div>
                <div class="user-bio">bio</div>
                <div class="user-contact-info">contact</div>
            </div>
            <button type="button" onclick="this.updateStuff()">click</button>
            <div>Test data: {{ test_data }}</div>
            <div>Album: {{ album }}</div>
            <div class="photos-container">
                Photos:
                <div v-for="photo in album" v-bind:key="photo.id">
                    photo: <div>{{ photo.img }}</div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'user',
        data() {
            return {
                test_data: 'test result',
                album: [],
                photo: {
                    id: '',
                    img: '',
                },
                user_info: {
                    name: 'jh',
                    phone: '',
                    email: '',
                    bio: '',
                    profile_picture: '',
                },
            }
        },
        created() {
            this.updateStuff();
            this.fetchUser();
            this.test_data = 'new result';
            this.user_info.name = 'new name';
        },
        methods: {
            updateStuff() {
                setTimeout(() => {
                    this.test_data = 'updated result';
                    this.user_info.name = 'updated name';
                    console.log('setTimeout fired');
                }, 2000);
            },
            fetchUser() {
                fetch('/api/user/1')
                .then(res => res.json())
                .then(res => {
                    console.log('album:',res.album);
                    console.log('email:',res.email);
                    console.log('name:',res.name);
                    this.album = res.album;
                    this.user_info.name = res.name;
                    this.user_info.phone = res.phone;
                    this.user_info.email = res.email;
                    this.user_info.bio = res.bio;
                    this.user_info.profile_picture = res.profile_picture;
                })
            }
        },
        mounted() {
            console.log('Photos component mounted.')
        }
    }
</script>
