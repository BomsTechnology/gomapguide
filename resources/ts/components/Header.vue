<script setup lang="ts">
import { HomeIcon, ChevronRightIcon } from "@heroicons/vue/outline";
const props = defineProps({
    title: String,
    links: Array,
});
</script>
<template>
    <div
        class="h-72 bg-cover"
        style="background-image: url('/images/seo3.jpg')"
    >
        <div
            class="bg-black/50 w-full h-full flex flex-col justify-end items-center space-y-6 py-10 text-white"
        >
            <h1 class="lg:text-[40px] text-3xl font-semibold">{{ title }}</h1>
            <div class="flex items-center">
                <router-link :to="{ name: 'home' }" class="hover:underline">
                    <HomeIcon class="h-4 w-4" />
                </router-link>
                <span><ChevronRightIcon class="h-4 w-4" /></span>
                <span
                    v-for="(link, index) in links"
                    :key="index"
                    class="text-xs lg:text-sm flex items-center"
                >
                    <router-link
                        v-if="link.route"
                        :to="{ name: link.route }"
                        class="hover:underline"
                        >{{ link.label }}</router-link
                    >
                    <span v-else>{{ link.label }}</span>
                    <span :class="links.length == index + 1 ? 'hidden' : ''"
                        ><ChevronRightIcon class="h-4 w-4"
                    /></span>
                </span>
            </div>
        </div>
    </div>
</template>
