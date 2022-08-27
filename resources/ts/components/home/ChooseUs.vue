<script setup lang="ts">
interface Choose {
    title: String;
    image: String;
    description: String;
}
const items: Array<Choose> = [
    {
        title: "Booster la visibilité de votre entreprise",
        image: "/images/choose1.jpeg",
        description:
            "Vous recevrez des contacts qualifiés dans votre ville ou dans votre région, un trafic de qualité vers votre site web et des demandes de clients potentiels pour augmenter les revenus de votre entreprise.",
    },
    {
        title: "Optimisez vos revenus en vous positionnant",
        image: "/images/choose2.jpeg",
        description:
            "parmi les premiers résultats et en bénéficiant d’un profil parfaitement sécurisé sur Google ",
    },
    {
        title: "Améliorez  les informations sur votre entreprise et ses services",
        image: "/images/choose3.jpeg",
        description:
            "En plus d’afficher les coordonnées de contact de votre entreprise, votre profil sur gomapguide.com offre une description détaillée de vos services et incite les clients à vous contacter et faire affaire avec vous.",
    },
];
</script>
<template>
    <div
        class="w-full py-10 bg-gray-800 xl:px-36 lg:px-18 px-4 text-center lg:text-left"
    >
        <h1 class="font-bold lg:text-2xl uppercase">
            POURQUOI DÉVIRIEZ VOUS UTILISER NOS SERVICES
        </h1>
        <h3 class="">Nous sommes les meilleurs</h3>
    </div>
    <section
        class="xl:px-36 lg:px-18 px-4 w-full py-8 grid lg:grid-cols-3 grid-cols-1 gap-6"
    >
        <div class="" v-for="(item, index) in items" :key="index">
            <div
                class="py-8 px-3 flex flex-col justify-center items-center text-center"
            >
                <h1 class="font-semibold uppercase text-2xl">
                    {{ item.title }}
                </h1>
                <p
                    class="texte-sm lg:text-lg text-gray-50 font-light tracking-widest mt-4"
                >
                    {{ item.description }}
                </p>
            </div>
        </div>
    </section>
</template>
