<script setup lang="ts">
import Header from "@/components/Header.vue";
const links = [
    {
        label: "Conditions Générales de vente",
        route: "terms-sales",
    },
];
</script>
<template>
    <Header :title="'Conditions Générales de vente'" :links="links" />
</template>
