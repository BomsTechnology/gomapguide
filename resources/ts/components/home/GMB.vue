<script setup lang="ts">
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";
import "swiper/css/navigation";
import { Navigation, Autoplay } from "swiper";

const modules = [Navigation, Autoplay];
const items = ["/images/gmb1.jpeg", "/images/gmb2.jpeg", "/images/gmb3.jpeg"];
</script>
<template>
    <section class="w-full px-4 py-10 flex items-center justify-center">
        <swiper
            :navigation="true"
            :slidesPerView="1"
            :loop="true"
            :autoplay="{
                delay: 10000,
                disableOnInteraction: false,
            }"
            :modules="modules"
            class="lg:w-[800px] w-full h-60 lg:h-[400px]"
        >
            <swiper-slide
                v-for="(item, index) in items"
                :key="index"
                class="w-full h-full"
            >
                <div class="w-full h-full bg-red-50">
                    <img :src="item" class="w-full h-full object-cover" />
                </div>
            </swiper-slide>
        </swiper>
    </section>
</template>

<style>
.swiper-button-next,
.swiper-button-prev {
    @apply !h-10 !w-10 !rounded-full !bg-gray-900 !p-4 !text-white !shadow-lg md:!p-6;
}

.swiper-button-prev::after,
.swiper-button-next::after {
    @apply !text-xs !font-bold md:!text-lg;
}
</style>
