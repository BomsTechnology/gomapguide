<script setup lang="ts">
import { CheckCircleIcon } from "@heroicons/vue/24/outline";
import type { Plan } from "@/stores/plan";
interface Props {
    data: Plan;
}
const props = defineProps<Props>();
</script>
<template>
    <router-link
        :to="{
            name: 'payment',
            params: {
                id: data.id,
            },
        }"
        class="bg-gray-700 shadow overflow-hidden relative hover:shadow-xl transition-shadow"
    >
        <div
            class="absolute bg-gray-500 pl-16 pr-10 rotate-45 -right-10 top-2"
            v-if="data.popular"
        >
            <span class="text-white text-xs font-black uppercase"
                >Populaire</span
            >
        </div>
        <div
            class="text-center py-8 px-4 text-white overflow-hidden h-1/4"
            :style="data.bgcolor"
        >
            <h2 class="font-bold uppercase text-xl lg:text-2xl mt-4">
                {{ data.title }}
            </h2>
        </div>
        <div class="px-10 h-2/4 mb-6">
            <div class="text-center py-10">
                <h1 class="font-bold text-5xl lg:text-6xl">
                    <span class="">{{ data.price }}</span>
                    <sub class="text-xl lg:text-2xl">USD</sub>
                </h1>
                <p class="text-gray-50 text-xs font-light tracking-widest">
                    {{ data.period }}
                </p>
            </div>
            <div class="pb-4 h-full">
                <ul class="text-sm justify-center flex flex-col space-y-2">
                    <li
                        class="last:border-0 border-b pb-2"
                        v-for="(item, index) in data.infos"
                        :key="index"
                    >
                        <h1 class="flex items-center space-x-2 text-gray-50">
                            <span><CheckCircleIcon class="h-5 w-5" /></span>
                            <span class="mt-1">{{ item.value }} </span>
                        </h1>
                    </li>
                </ul>
            </div>
        </div>
        <div class="flex justify-center items-center px-4 py-6 h-1/4">
            <button
                type="button"
                :style="data.bgcolor"
                class="px-4 py-2 text-white uppercase text-sm hover:translate-y-1 transition-transform"
            >
                Souscrire
            </button>
        </div>
    </router-link>
</template>
