<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        I'm an example component!

                        <div v-if="null !== user">
                            Hello {{ user.name }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.');

            axios
                .get('/api/user')
                .then(response => {
                    console.log(response.data);
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
