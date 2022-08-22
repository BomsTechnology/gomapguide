<script setup lang="ts">
import Header from "@/components/Header.vue";
const links = [
    {
        label: "A Propos de nous",
        route: "about",
    },
];
</script>
<template>
    <Header :title="'A Propos de nous'" :links="links" />
</template>
