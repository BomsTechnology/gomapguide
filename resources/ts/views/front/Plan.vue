<script setup lang="ts">
import Header from "@/components/Header.vue";
import Plan from "@/components/Plan.vue";
import { plans } from "@/data/plan";

const links = [
    {
        label: "Nos Plans",
        route: "plan",
    },
];
</script>
<template>
    <Header :title="'Nos Plans'" :links="links" />
    <div class="text-center py-6 px-4">
        <h1 class="font-black text-xl lg:text-3xl text-gray-700">
            Soucrivez dés maintenant à nos plans
        </h1>
    </div>
    <section
        class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-8 xl:px-36 lg:px-18 px-4 py-8"
    >
        <Plan v-for="(item, index) in plans" :key="index" :data="item" />
    </section>
</template>
