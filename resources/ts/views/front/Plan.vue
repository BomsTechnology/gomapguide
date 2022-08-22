<script setup lang="ts">
import Header from "@/components/Header.vue";
const links = [
    {
        label: "Nos Plans",
        route: "plan",
    },
];
</script>
<template>
    <Header :title="'Nos Plans'" :links="links" />
    <div></div>
</template>
