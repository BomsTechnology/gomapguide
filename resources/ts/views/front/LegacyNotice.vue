<script setup lang="ts">
import Header from "@/components/Header.vue";
const links = [
    {
        label: "Mentions Légales",
        route: "legacy-notice",
    },
];
</script>
<template>
    <Header :title="'Mentions Légales'" :links="links" />
</template>
