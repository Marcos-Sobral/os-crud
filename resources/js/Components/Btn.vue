<template>
    <button type="submit" class="button-main button-main:hover">{{value}}</button>
</template>

<script>
    import Layout from "../Layout.vue";
    export default {

        components: { Layout },

        props: {
            value: ''
        }
};
</script>