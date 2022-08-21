<script setup lang="ts">
interface Choose {
    title: String;
    image: String;
    description: String;
}
const items: Array<Choose> = [
    {
        title: "Des Proféssionnels",
        image: "/images/choose1.jpg",
        description: "Nous sommes une équipe de professionnels",
    },
    {
        title: "Efficacité",
        image: "/images/choose2.jpg",
        description: "Nous sommes aussi bien compétents qu’efficaces",
    },
    {
        title: "Suivi Client",
        image: "/images/choose3.jpg",
        description: "Nous offrons à nos clients un accompagnement",
    },
];
</script>
<template>
    <div
        class="w-full py-10 bg-gray-100 xl:px-36 lg:px-18 px-4 text-center lg:text-left"
    >
        <h1 class="font-bold lg:text-xl uppercase">Pourquoi nous choisir ?</h1>
        <h3 class="text-gray-700">Nous sommes les meilleurs</h3>
    </div>
    <section
        class="xl:px-36 lg:px-18 px-4 w-full py-8 grid lg:grid-cols-3 grid-cols-1 gap-6"
    >
        <div
            class="border shadow-2xl hover:scale-105 transition-transform duration-100"
            v-for="(item, index) in items"
            :key="index"
        >
            <div class="w-full h-60 overflow-hidden">
                <img
                    :src="item.image"
                    class="w-full h-full object-cover"
                    alt=""
                />
            </div>
            <div
                class="py-8 px-3 flex flex-col justify-center items-center text-center"
            >
                <h1 class="font-semibold uppercase text-xl">
                    {{ item.title }}
                </h1>
                <p
                    class="text-sm text-gray-700 font-light tracking-widest mt-4"
                >
                    {{ item.description }}
                </p>
            </div>
        </div>
    </section>
</template>
