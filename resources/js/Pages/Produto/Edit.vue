<template>
    <Layout>
        <div v-for="(erro, index) in errors" :key="index" class="erro">
            {{ erro }}
        </div>
        <main class="main">
            <form @submit.prevent="update">
                <div class="grid-container">
                    <div>
                        <input type="text" placeholder="Informe seu nome: " v-model="form.NomeProduto"/>
                    </div>
                    <div>
                        <input type="text" placeholder="Informe seu email: " v-model="form.QuantidadeProduto"/>
                    </div>
                    <div>
                        <input type="text" placeholder="Informe sua senha: " v-model="form.PrecoProduto"/>
                    </div>
                </div>
                <div class="mt-10 text-center">
                    <button type="submit" class="button button:hover">Enviar</button>
                </div>
            </form>
        </main>
    </Layout>
</template>
<script>
    import Layout from "../../Layout.vue";
    import {  Link, Head, useForm } from '@inertiajs/inertia-vue3';
    export default { 
        components: { Layout },
        props: {
            errors: Object,
            produto: Object,
        },
        setup (props) {
            
               const form = useForm ({
                    NomeProduto: props.produto.NomeProduto,
                    QuantidadeProduto: props.produto.QuantidadeProduto,
                    PrecoProduto: props.produto.PrecoProduto,
               });
               return { form };
        },
        methods: {
            update () {
                this.form.put(route('produto.update', this.produto.id));
            },
        }

    };
</script>
<style>
</style>