<script setup lang="ts">
import {
    MapPinIcon,
    EnvelopeIcon,
    PhoneIcon,
    CheckCircleIcon,
} from "@heroicons/vue/24/solid";
import Header from "@/components/Header.vue";
import axios from "axios";
import { Ref, ref, reactive } from "vue";
import Spin from "@/components/Spin.vue";

const loading: Ref<Number> = ref(0);
const errors: Ref<String> = ref("");
const links = [
    {
        label: "Contact",
        route: "contact",
    },
];

const form = reactive({
    name: "",
    email: "",
    message: "",
});

async function sendContact() {
    try {
        errors.value = "";
        loading.value = 1;
        await axios.post("/api/contact", { ...form });
        loading.value = 2;
    } catch (e: any) {
        loading.value = 0;
        console.log(e.response.data.message);
    }
}
</script>
<template>
    <Header :title="'Contact'" :links="links" />
    <section class="xl:px-36 lg:px-18 py-14 bg-gray-50">
        <div class="w-full lg:flex">
            <div class="lg:w-3/5 w-full md:py-10 px-8">
                <div class="text-gray-700 lg:text-left text-center">
                    <h1 class="font-black text-2xl lg:text-4xl">
                        Contactez-nous
                    </h1>
                    <p>Nous sommes à l'écoute 24h/24</p>
                </div>

                <img
                    src="/images/icon/contact2.svg"
                    class="h-72 lg:h-[500px] object-cover mx-auto"
                    alt="contact"
                />
                <div
                    class="lg:flex-row flex-col flex items-center lg:space-y-0 space-y-3 lg:space-x-3"
                >
                    <div class="flex items-center space-x-2">
                        <span><MapPinIcon class="h-6 w-6 text-primary" /></span>

                        <span class="text-sm text-gray-700 mt-1"
                            >1253, av McGill Collège, Montréal QC H3B 2Y5
                        </span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span
                            ><EnvelopeIcon class="h-6 w-6 text-primary"
                        /></span>

                        <span class="text-sm text-gray-700 mt-1"
                            >contact@gomapguide.com</span
                        >
                    </div>
                    <div class="flex items-center space-x-2">
                        <span><PhoneIcon class="h-6 w-6 text-primary" /></span>

                        <span class="text-sm text-gray-700 mt-1"
                            >+447360263574</span
                        >
                    </div>
                </div>
            </div>
            <div class="lg:w-2/5 w-full rounded-r-lg p-10">
                <form
                    v-if="loading != 2"
                    @submit.prevent="sendContact"
                    class="bg-gray-50 h-full w-full flex flex-col shadow-xl rounded-lg justify-center"
                >
                    <div class="p-6">
                        <div class="">
                            <label
                                for="title"
                                class="mb-1 block text-sm font-medium text-gray-900"
                                >Nom Complet</label
                            >
                            <input
                                type="text"
                                id="title"
                                required
                                v-model="form.name"
                                class="block w-full rounded border border-white p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                            />
                        </div>

                        <div class="mt-6">
                            <label
                                for="title"
                                class="mb-1 block text-sm font-medium text-gray-900"
                                >Adresse E-mail</label
                            >
                            <input
                                type="email"
                                id="title"
                                required
                                v-model="form.email"
                                class="block w-full rounded border border-white p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                            />
                        </div>

                        <div class="mt-6">
                            <label
                                for="description"
                                class="block text-sm font-medium text-gray-700"
                            >
                                Message
                            </label>
                            <div class="mt-1">
                                <textarea
                                    id="message"
                                    rows="5"
                                    required
                                    v-model="form.message"
                                    class="mt-1 block w-full rounded-md border border-white text-gray-900 p-2.5 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>
                        </div>

                        <div class="mt-8">
                            <button
                                v-if="loading === 0"
                                type="submit"
                                class="w-full transform rounded-md bg-primary px-4 py-2 text-sm tracking-wide text-white transition-colors duration-200 hover:bg-secondary focus:bg-primary focus:outline-none"
                            >
                                Envoyer
                            </button>
                            <button
                                v-else
                                type="button"
                                disabled
                                class="w-full transform rounded-md bg-primary px-4 py-2 text-sm flex justify-center items-center tracking-wide text-white transition-colors duration-200 hover:bg-secondary focus:bg-primary focus:outline-none"
                            >
                                <Spin />
                            </button>
                        </div>
                    </div>
                </form>
                <div
                    v-else
                    class="text- container mx-auto my-8 flex h-full w-full flex-col items-center justify-center space-y-6 px-5 text-center text-gray-600 sm:max-w-lg"
                >
                    <CheckCircleIcon class="h-20 w-20 text-primary" />
                    <h2 class="mb-8 text-2xl font-extrabold">
                        Message envoyé avec succéss
                    </h2>
                    <p class="text-coolGray-400 mt-4 mb-8">
                        Merci de nous avoir contacté. Nous vous répondrons dans
                        les 48h.
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>
