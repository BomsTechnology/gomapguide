<script setup lang="ts">
import { Swiper, SwiperSlide } from "swiper/vue";
import { Autoplay } from "swiper";
import "swiper/css";

const items: Array<String> = [
    "/images/seo3.jpg",
    "/images/seo2.png",
    "/images/seo1.jpg",
];
const modules = [Autoplay];
</script>

<template>
    <section class="h-screen relative">
        <swiper
            :slidesPerView="1"
            :loop="true"
            :autoplay="{
                delay: 10000,
                disableOnInteraction: false,
            }"
            :modules="modules"
            class="w-full h-full"
        >
            <swiper-slide v-for="(item, index) in items" class="w-full h-full">
                <img :src="item" class="w-full h-full object-cover" alt="" />
            </swiper-slide>
        </swiper>

        <div
            class="absolute top-0 w-full h-full z-10 bg-black/50 flex flex-col px-4 justify-center items-center text-center"
        >
            <h1 class="lg:text-7xl text-5xl font-bold text-white">
                Bienvenue chez MapGuide
            </h1>
            <h3 class="lg:text-2xl text-xl mt-4 text-white lg:w-[1000px]">
                Optimisez vos revenus en vous positionnant parmi les premiers
                résultats sur Google et en bénéficiant d'un profil parfaitement
                sécurisé sur Google
            </h3>
            <a
                href="#plan"
                class="mt-12 px-4 py-2 rounded bg-primary text-lg uppercase font-semibold text-white"
            >
                Voir Les Plans
            </a>
        </div>
    </section>
</template>
