<template>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Test Application Upwork
            </div>

            <div class="links">
                <router-link to="/private" class="btn btn-success">Go To Private</router-link>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                message: 'This is the home component!'
            };
        }
    }
</script>