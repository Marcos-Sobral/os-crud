<template>
    <Layout>
        <div class="container">
            <h1>Olá {{name}}, seja bem vindo! estamos na vue</h1>
        </div>
    </Layout>
</template>
<script>
    import Layout from "../Layout.vue";
    export default {

        components: { Layout },

        props: {
            name: String
        }
};
</script>
<style>
</style>