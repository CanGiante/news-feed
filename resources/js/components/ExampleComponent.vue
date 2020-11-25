<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body ms_title">
                        {{ title }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['title'],
        data() {
            return {
                title: this.title
            }
        },
        mounted() {
            console.log('Component mounted.');
        }
    };
</script>

<style scoped lang="scss">
@import "../../sass/_variables.scss";

    .ms_title {
        color: $red;
    }

</style>
