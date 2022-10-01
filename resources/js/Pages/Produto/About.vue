<template>    
  <Head title="Ver produtos" />
  <Layout>
    <main class="main">
            <table class="table">
                <thead>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Quantidade</th>
                        <th>Preço</th>
                        <th colspan="3">Ações</th>
                </thead>
                <tbody class="table-tbody" v-for="produtos in produto" :key="produtos.id">
                        <td>{{ produtos.id }}</td>
                        <td>{{ produtos.NomeProduto }}</td>
                        <td>{{ produtos.QuantidadeProduto }}</td>
                        <td>{{ produtos.PrecoProduto }}</td>
                        <td>
                            <Link  @click="edit(produtos.id)">
                                <button class="button-main button-main:hover">Editar</button> 
                            </Link>
                            |
                            <Link @click="destroy(produtos.id)">
                              <button type="button" class="button-main button-main:hover">Deletar</button> 
                            </Link>
                            |
                            <Link @click="create()">
                                <button class="button-main button-main:hover">Criar</button> 
                            </Link>
                        </td>
                </tbody>
            </table>
    </main>
  </Layout>
</template>

<script>
import Layout from "../../Layout.vue";
import {  Link, Head  } from '@inertiajs/inertia-vue3';
import { Inertia } from "@inertiajs/inertia";
export default {
  components: {
    Layout,
    Link,
    Head,
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