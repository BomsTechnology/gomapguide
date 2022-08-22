<script setup lang="ts">
import Header from "@/components/Header.vue";
const links = [
    {
        label: "Conditions Générales d'Utilisation",
        route: "terms-service",
    },
];
</script>
<template>
    <Header :title="'Conditions Générales d\'Utilisation'" :links="links" />
</template>
