<template>
    <Layout>
        <div v-for="(erro, index) in errors" :key="index" class="erro">
            {{ erro }}
        </div>
        <body>
          <div class="main-consulta">
          <form @submit.prevent="handleForm">
              <div>
                  <label for="">Informe seu endereço</label>
                  <input type="text" placeholder="EX: Palmas, TO, Brasil " v-model="form.name"/>
              </div>
              <div class="mt-5 text-center">
                <label for="">Preencha para ver as opções mais próximas e estimativa de frete.</label>
              </div>
              <div class="grid-container-2">
                <div>
                  <label for="">Data de Partida: </label>
                    <input type="email" placeholder="Ex: Retirar em:  " v-model="form.email"/>
                </div>
                <div>
                    <label for="">Data da volta: </label>
                    <input type="password" placeholder="Ex: Devolver em: " v-model="form.password"/>
                </div>
              </div>
              <div class="mt-5 text-center">
                <label for="">** Programe a entrega 1 ou 2 dias antes da viagem. </label>
              </div>
              
              <div class="text-center">
                  <button type="submit" class="button-main button-main:hover">Realizar busca</button>
              </div>
          </form>
          </div>
      </body>
    </Layout>
</template>
<script>
    import Layout from "../Layout.vue";
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