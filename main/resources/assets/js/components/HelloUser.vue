<style scoped>
    .hello-user {
        display: inline-block;
        width: 200px;
        text-align: right;
    }
</style>

<template>
    <div class="container hello-user">
        <div v-if="null !== user">
            Hello {{ user.name }}
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            axios
                .get('/api/user')
                .then(response => {
                    this.user = response.data;
                })
        },
        data() {
            return {
                user: null
            };
        }
    }
</script>
