<template>
    <Layout>
        <div class="container">
            <form>
                <input type="text" placeholder="Informe seu nome: " v-model="form.name">
                <input type="email" placeholder="Informe seu email: " v-model="form.email">
                <input type="password" placeholder="Informe sua senha: " v-model="form.password">
                <button type="submit">Enviar</button>
            </form>
        </div>
    </Layout>
</template>
<script>
    import Layout from "../Layout.vue";
    export default {
        components: { Layout },
        props: {},
        data: () => {
            return {
                form: {
                    name: null,
                    email: null,
                    password: null,
                },
            };
        },
        methods: {
            handleForm() {
                alert('O form foi enviado');
            }
        }

    };
</script>
<style>
</style>