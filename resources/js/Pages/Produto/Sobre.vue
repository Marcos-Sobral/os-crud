<template>

    <main class="main">
        <Btn value="Salvar"/>
        <AuthenticatedLayout/>
    </main>
</template>

<script setup>
    import Layout from "../../Layout.vue";
    import Btn from '@/Components/Btn.vue';
    import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
</script>
