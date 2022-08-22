<script setup lang="ts">
import Header from "@/components/Header.vue";
const links = [
    {
        label: "Politique de confidentialité",
        route: "privacy-policy",
    },
];
</script>
<template>
    <Header :title="'Politique de confidentialité'" :links="links" />
</template>
