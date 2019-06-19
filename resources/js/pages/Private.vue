<template>
    <h1>Private</h1>
</template>

<script>
    export default {
        mounted () {
            const app = this;
            axios.post('/check-access')
                .then(function (resp) {
                    // app.$router.push({path: '/private'});
                })
                .catch(error => {
                    app.$router.push({path: '/auth'});
                });
        }
    }
</script>