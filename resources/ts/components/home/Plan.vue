<script setup lang="ts">
import Plan from "../Plan.vue";
import { usePlanStore } from "@/stores/plan";
import type { Plan as P } from "@/stores/plan";
import { onMounted, Ref, ref } from "vue";

const planStore = usePlanStore();
const items: Ref<Array<P>> = ref([]);

onMounted(async () => {
    for (let i = 0; i < 2; i++) {
        items.value.push(planStore.plans[i] as unknown as P);
    }
});
</script>
<template>
    <div
        class="w-full py-10 bg-gray-700 xl:px-36 lg:px-18 px-4 text-center lg:text-left"
    >
        <h1 class="font-bold lg:text-2xl uppercase" id="plan">Nos Plans</h1>
        <h3 class="text-gray-50">Souscrivez Maintenant</h3>
    </div>
    <section
        class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6 xl:px-36 lg:px-18 px-4 py-8"
    >
        <Plan v-for="(item, index) in items" :key="index" :data="item" />
        <router-link
            :to="{ name: 'plan' }"
            class="bg-gray-700 hover:shadow-xl transition-shadow flex justify-center items-center font-bold text-2xl lg:text-3xl uppercase p-10 text-center"
        >
            voir tout les plans
        </router-link>
    </section>
</template>
