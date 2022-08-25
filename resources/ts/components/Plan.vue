<script setup lang="ts">
import { CheckCircleIcon } from "@heroicons/vue/outline";
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
        class="bg-white shadow overflow-hidden relative hover:shadow-xl transition-shadow"
    >
        <div
            class="absolute bg-black pl-16 pr-10 rotate-45 -right-10 top-2"
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
            <h6 class="font-semibold lg:text-lg text-sm">
                {{ data.abbreviation }}
            </h6>
            <h2 class="font-bold uppercase text-xl lg:text-2xl mt-4">
                {{ data.title }}
            </h2>
        </div>
        <div class="px-10 h-2/4 mb-6">
            <div class="text-center py-10">
                <h1 class="font-bold text-5xl lg:text-6xl">
                    <span class="">{{ data.price }}</span>
                    <sup class="text-2xl lg:text-4xl">€</sup>
                </h1>
                <p class="text-gray-500 text-xs font-light tracking-widest">
                    {{ data.period }}
                </p>
            </div>
            <div class="pb-4 h-full">
                <ul class="text-sm justify-center flex flex-col space-y-2">
                    <li class="last:border-0 border-b pb-2 text-gray-500">
                        <h1 class="flex items-center space-x-2">
                            <span>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5"
                                    :style="data.color"
                                    viewBox="0 0 512 512"
                                >
                                    <title>Bandage</title>
                                    <rect
                                        x="-24.43"
                                        y="167.88"
                                        width="560.87"
                                        height="176.25"
                                        rx="88.12"
                                        ry="88.12"
                                        transform="rotate(-45 256 256.002)"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="32"
                                    />
                                    <rect
                                        x="169.41"
                                        y="156.59"
                                        width="176"
                                        height="196"
                                        rx="32"
                                        ry="32"
                                        transform="rotate(45 257.409 254.582)"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="32"
                                    />
                                    <circle cx="256" cy="208" r="16" />
                                    <circle cx="304" cy="256" r="16" />
                                    <circle cx="208" cy="256" r="16" />
                                    <circle cx="256" cy="304" r="16" />
                                </svg>
                            </span>
                            <span class="mt-1"
                                >Mise à Joue Covid-19 incluse</span
                            >
                        </h1>
                    </li>
                    <li
                        class="last:border-0 border-b pb-2"
                        v-for="(item, index) in data.infos"
                        :key="index"
                    >
                        <h1 class="flex items-center space-x-2 text-gray-500">
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
