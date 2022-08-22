<script setup lang="ts">
import Header from "@/components/Header.vue";
const links = [
    {
        label: "Contact",
        route: "contact",
    },
];
</script>
<template>
    <Header :title="'Contact'" :links="links" />
</template>
