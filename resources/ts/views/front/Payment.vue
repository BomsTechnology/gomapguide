<script setup lang="ts">
import Header from "@/components/Header.vue";
const links = [
    {
        label: "Nos Plans",
        route: "plan",
    },
    {
        label: "Paiement",
        route: "",
    },
];
</script>
<template>
    <Header :title="'Paiement'" :links="links" />
</template>
