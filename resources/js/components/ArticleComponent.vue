<template>
    <div class="container mb-3">
        <div class="row">
            <div class="col">

                <a class="text-decoration-none" :href="source" target="_blank">
                    <article class="card p-5">

                        <h2 class="text-center mb-4 ms_title">{{ title }}</h2>

                        <div class="align-self-center m-3">
                            <img class="img-fluid" :src="image">
                        </div>

                        <p class="text-center mx-5 mb-5 mt-2">{{ description }}</p>

                        <div class="text-right font-italic" style="margin-right:-30px;margin-bottom:-30px;font-size:small">

                            <span class="d-block">
                                Author: {{ author }}
                            </span>

                            <span>
                                Published on {{ date }}
                            </span>

                        </div>

                    </article>
                </a>

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['source', 'title', 'image', 'description', 'author', 'date'],

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
