<template>
    <Layout>
        <div v-for="(erro, index) in errors" :key="index" class="erro">
            {{ erro }}
        </div>
        <main class="main">
            <form @submit.prevent="handleForm">
                <div class="grid-container">
                    <div>
                        <input type="text" placeholder="Informe o nome do produto: " v-model="form.NomeProduto"/>
                    </div>
                    <div>
                        <input type="text" placeholder="Informe a quantidade do produto: " v-model="form.QuantidadeProduto"/>
                    </div>
                    <div>
                        <input type="text" placeholder="Informe o preço do produto: " v-model="form.PrecoProduto"/>
                    </div>
                </div>
                <div class="mt-10 text-center">
                    <button type="submit" class="button button:hover">Criar</button>
                </div>
            </form>
        </main>
    </Layout>
</template>
<script>
    import Layout from "../../Layout.vue";
    import {  Link, Head  } from '@inertiajs/inertia-vue3';
    export default {
        
        components: { Layout },
        
        props: {
            errors: Object,
        },

        data: () => {
            return {
                form: {
                    NomeProduto: null,
                    QuantidadeProduto: null,
                    PrecoProduto: null,
                },
            };
        },
        
        methods: {
            handleForm() {
                this.$inertia.post("/crud/criar", this.form);
            }
        }

    };
</script>
<style>
</style>