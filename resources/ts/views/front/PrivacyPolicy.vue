<script setup lang="ts">
import Header from "@/components/Header.vue";
import conditions from "@/data/condition.json";
const links = [
    {
        label: "Politique de confidentialité",
        route: "privacy-policy",
    },
];
</script>
<template>
    <Header :title="'Politique de confidentialité'" :links="links" />
    <section class="xl:px-36 lg:px-18 px-4 py-14 text-sm lg:text-lg space-y-10 text-justify tracking-widest leading-8">
        <p class=" ">
            En vigueur au 01/01/22 Les présentes conditions générales
            d’utilisation (dites « CGU ») ont pour objet l’encadrement juridique
            des modalités de mise à disposition du site et des services par
            ____goweb___________ et de définir les conditions d’accès et
            d’utilisation des services par « l’Utilisateur ». Les présentes CGU
            sont accessibles sur le site à la rubrique «CGU».
        </p>
        <p class=" " v-for="condition, index in conditions" :key="index">
            <h1 class="font-semibold text-2xl !mb-6 uppercase">ARTICLE {{ index+1 }} : {{ condition.title }} </h1>
            
           {{condition.content}}
        </p>
        
    </section>
</template>
