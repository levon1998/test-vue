<template>
    <div class="container">
        <h2>Verify access to private page</h2>
        <form v-on:submit="saveForm()">
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" v-model="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</template>

<script>
    export default {
        mounted () {
        },
        data: function () {
            return {
                password: ''
            }
        },
        methods: {
            saveForm() {
                event.preventDefault();
                var app = this;
                axios.post('/check-password', {password: app.password})
                    .then(function (resp) {
                        app.$router.push({path: '/private'});
                    })
                    .catch(error => {
                        alert('Invalid Data');
                    });
            }
        }
    }
</script>