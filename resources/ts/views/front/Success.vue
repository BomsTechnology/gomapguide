<script setup lang="ts">
import { CheckCircleIcon } from "@heroicons/vue/24/solid";
import { onMounted } from "vue";
import { useRoute, useRouter } from "vue-router";
import axios from "axios";

const route = useRoute();
const router = useRouter();
onMounted(async () => {
    if (route.query.paymentId && route.query.token && route.query.PayerID) {
        try {
            let response = await axios.post("/api/payment-paypal/success", {
                paymentId: route.query.paymentId,
                token: route.query.token,
                PayerID: route.query.PayerID,
            });
        } catch (e: any) {
            console.log(e.response.data.message);
            router.push({
                name: "pay-erros",
            });
        }
    }
});
</script>

<template>
    <section class="flex h-screen justify-center items-center sm:p-1">
        <div
            class="text- container mx-auto my-8 flex flex-col items-center justify-center space-y-6 px-5 text-center text-gray-600 sm:max-w-lg"
        >
            <CheckCircleIcon class="h-38 w-36 text-primary" />
            <h2 class="mb-8 text-3xl font-extrabold">
                Paiement effectué avec succéss
            </h2>

            <p class="text-coolGray-400 mt-4 mb-8">
                Vous allez recevoir un email de confirmation
            </p>
            <a href="/" class="rounded bg-primary px-8 py-3 text-lg text-white">
                Retour à la page d'accueil
            </a>
            <img src="/images/logo/logo2.png" alt="logo" class="h-12 mt-4" />
        </div>
    </section>
</template>
