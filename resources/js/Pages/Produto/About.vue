<template>    
  <Head title="Ver produtos" />
  <Layout>
    <main class="main">
            <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                    <th colspan="3">Ações</th>
                  </tr>
                </thead>
                <tbody class="table-tbody" v-for="produtos in produto" :key="produtos.id">
                  <tr class="tr">
                    <td>{{ produtos.id }}</td>
                    <td>{{ produtos.NomeProduto }}</td>
                    <td>{{ produtos.QuantidadeProduto }}</td>
                    <td>{{ produtos.PrecoProduto }}</td>
                    <td>
                        <Link  @click="edit(produtos.id)">
                          <Btn value="Editar"/> 
                        </Link>
                        <Link @click="destroy(produtos.id)">
                          <Btn class="ml-5 mr-5" value="Deletar"/> 
                        </Link>
                        <Link @click="create()">
                            <Btn value="Criar"/> 
                        </Link>
                    </td>
                  </tr>

                </tbody>
            </table>
    </main>
  </Layout>
</template>

<script>
import Layout from "../../Layout.vue";
import {  Link, Head  } from '@inertiajs/inertia-vue3';
import { Inertia } from "@inertiajs/inertia";
import Btn from "@/Components/Btn.vue";
export default {
  components: {
    Layout,
    Link,
    Head,
    Btn
},
  props: {
    produto: Object,
  },
  methods: {

            create () {
                this.$inertia.get(route('produto.create'));
            },

            edit (id) {
                this.$inertia.get(route('produto.edit', id));
            },
            destroy (id) {
                this.$inertia.delete(route('produto.destroy', id));
            }
        }
}
</script>
<style>

</style>