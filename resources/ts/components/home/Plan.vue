<script setup lang="ts">
import Plan from "../Plan.vue";
import { plans } from "@/data/plan";
const items = plans.splice(0, 5);
</script>
<template>
    <div
        class="w-full py-10 bg-gray-100 xl:px-36 lg:px-18 px-4 text-center lg:text-left"
    >
        <h1 class="font-bold lg:text-xl uppercase" id="plan">Nos Plans</h1>
        <h3 class="text-gray-700">Souscrivez Maintenant</h3>
    </div>
    <section
        class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6 xl:px-36 lg:px-18 px-4 py-8"
    >
        <Plan v-for="(item, index) in items" :key="index" :data="item" />
        <router-link
            :to="{ name: 'plan' }"
            class="bg-gray-50 hover:shadow-xl transition-shadow flex justify-center items-center font-bold text-2xl lg:text-3xl uppercase p-10 text-center"
        >
            voir tout les plans
        </router-link>
    </section>
</template>
