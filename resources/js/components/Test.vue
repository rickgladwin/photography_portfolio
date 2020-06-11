<template>
    <div class="row">
        <div class="col-xs-12">
            <div>Test data: {{ test_data }}</div>
            <div>Counter: {{ counter }}</div>
<!--            <button type="button" v-on:click="counter += 1; console.log('count:', counter)">Count</button>-->
            <button type="button" v-on:click="clickReaction">Count</button>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                test_data: 'initial result',
                counter: 0,
            }
        },
        created() {
            this.test_data = 'created result';
            this.updateStuff();
        },
        methods: {
            updateStuff() {
                setTimeout(() => {
                    this.test_data = 'updated result';
                    console.log('test_data:', this.test_data);
                    console.log('setTimeout fired');
                }, 2000);
            },
            clickReaction() {
                counter += 1;
                console.log('button clicked');
            }
        },
        mounted() {
            console.log('User component mounted.')
        }
    }
</script>
