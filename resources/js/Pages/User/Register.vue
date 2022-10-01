<template>
    <Layout>
        <div v-for="(erro, index) in errors" :key="index" class="erro">
            {{ erro }}
        </div>
        <main class="main">
            <form @submit.prevent="handleForm">
                <div class="grid-container">
                    <div>
                        <input type="text" placeholder="Informe seu nome: " v-model="form.name"/>
                    </div>
                    <div>
                        <input type="email" placeholder="Informe seu email: " v-model="form.email"/>
                    </div>
                    <div>
                        <input type="password" placeholder="Informe sua senha: " v-model="form.password"/>
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
    export default {
        
        components: { Layout },
        
        props: {
            errors: Object,
        },

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
                this.$inertia.post("/crud/register", this.form);
            }
        }

    };
</script>
<style>
</style>