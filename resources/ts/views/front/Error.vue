<script setup lang="ts">
import { XCircleIcon } from "@heroicons/vue/24/solid";
</script>

<template>
    <section class="flex h-screen justify-center items-center sm:p-1">
        <div
            class="text- container mx-auto my-8 flex flex-col items-center justify-center space-y-6 px-5 text-center text-gray-600 sm:max-w-lg"
        >
            <XCircleIcon class="h-38 w-36 text-red-500" />
            <h2 class="mb-8 text-3xl font-extrabold">
                Une Erreur est survenu lors du paiment
            </h2>

            <p class="text-coolGray-400 mt-4 mb-8">Essayez à nouveau</p>
            <a href="/" class="rounded bg-primary px-8 py-3 text-lg text-white">
                Retour à la page d'accueil
            </a>
            <img src="/images/logo/logo2.png" alt="logo" class="h-12 mt-4" />
        </div>
    </section>
</template>
