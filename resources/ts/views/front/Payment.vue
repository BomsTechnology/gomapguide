<script setup lang="ts">
import Header from "@/components/Header.vue";
import axios from "axios";
import { useRouter } from "vue-router";
import { usePlanStore } from "@/stores/plan";
import type { Plan } from "@/stores/plan";
import { onMounted, ref, Ref } from "vue";
import Spin from "../../components/Spin.vue";

const router = useRouter();
const planStore = usePlanStore();
const item: Ref<Array<Plan> | null> = ref(null);
const loading: Ref<Number> = ref(0);
const props = defineProps({
    id: { type: String, default: "" },
});
onMounted(async () => {
    item.value = planStore.planById(props.id);
    if (item.value.length == 0) {
        location.href = "/not-found";
    }
});

async function stripePay() {
    try {
        loading.value = 1;
        if (item.value != null) {
            let response = await axios.post(
                "/api/payment-stripe",
                item.value[0]
            );
            location.href = response.data.data.redirectUrl;
            loading.value = 2;
        } else {
            loading.value = 0;
            console.log("Errors");
        }
    } catch (e) {
        loading.value = 0;
        console.log(e);
    }
}
async function paypalPay() {
    try {
        loading.value = 1;
        if (item.value != null) {
            let response = await axios.post(
                "/api/payment-paypal",
                item.value[0]
            );
            location.href = response.data.data.redirectUrl;
            loading.value = 2;
        } else {
            loading.value = 0;
            console.log("Errors");
        }
    } catch (e: any) {
        loading.value = 0;
        console.log(e.response.data.message);
        router.push({
            name: "pay-erros",
        });
    }
}
const links = [
    {
        label: "Nos Plans",
        route: "plan",
    },
    {
        label: "Paiement",
        route: "",
    },
];
</script>
<template>
    <Header :title="'Paiement'" :links="links" />
    <section class="xl:px-36 lg:px-18 px-4 py-16 bg-white">
        <div class="w-full lg:flex">
            <img
                src="/images/icon/payment.svg"
                class="lg:block hidden lg:h-[400px] object-cover mx-auto"
                alt="contact"
            />
            <div
                v-if="item"
                class="border shadow rounded-lg w-full flex justify-center items-center flex-col"
            >
                <div
                    class="p-6 shadow-lg bg-white rounded-lg w-1/2 h-1/2 -mt-10 inline-block text-center pb-3"
                >
                    <h1 class="text-4xl font-semibold text-gray-900">
                        {{ item[0].price }}
                        <sup class="lg:text-2xl">USD</sup>
                    </h1>
                    <p class="text-gray-500 block mt-4 py-4 border-t">
                        {{ item[0].title }}
                    </p>
                </div>

                <div
                    class="h-full w-full flex justify-center py-10 items-center px-4 lg:space-y-0 space-y-4 lg:space-x-4 lg:flex-row flex-col"
                >
                    <!-- <button
                        v-if="loading === 0"
                        type="button"
                        @click="paypalPay"
                        class="px-3 py-2 border rounded bg-[#0070BA] text-white flex items-center justify-center space-x-2"
                    >
                        <span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5"
                                viewBox="0 0 512 512"
                                fill="currentColor"
                            >
                                <title>Logo Paypal</title>
                                <path
                                    d="M424.81 148.79c-.43 2.76-.93 5.58-1.49 8.48-19.17 98-84.76 131.8-168.54 131.8h-42.65a20.67 20.67 0 00-20.47 17.46l-21.84 137.84-6.18 39.07a10.86 10.86 0 009.07 12.42 10.72 10.72 0 001.7.13h75.65a18.18 18.18 0 0018-15.27l.74-3.83 14.24-90 .91-4.94a18.16 18.16 0 0118-15.3h11.31c73.3 0 130.67-29.62 147.44-115.32 7-35.8 3.38-65.69-15.16-86.72a72.27 72.27 0 00-20.73-15.82z"
                                />
                                <path
                                    d="M385.52 51.09C363.84 26.52 324.71 16 274.63 16H129.25a20.75 20.75 0 00-20.54 17.48l-60.55 382a12.43 12.43 0 0010.39 14.22 12.58 12.58 0 001.94.15h89.76l22.54-142.29-.7 4.46a20.67 20.67 0 0120.47-17.46h42.65c83.77 0 149.36-33.86 168.54-131.8.57-2.9 1.05-5.72 1.49-8.48 5.7-36.22-.05-60.87-19.72-83.19z"
                                />
                            </svg>
                        </span>
                        <span>Pay with</span>
                        <span>Paypal</span>
                    </button> -->
                    <button
                        v-if="loading === 0"
                        type="button"
                        @click="stripePay"
                        class="px-3 py-2 border rounded flex items-center justify-center space-x-2 bg-primary text-white"
                    >
                        <span
                            ><svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5"
                                viewBox="0 0 512 512"
                                fill="currentColor"
                            >
                                <title>Card</title>
                                <path
                                    d="M32 376a56 56 0 0056 56h336a56 56 0 0056-56V222H32zm66-76a30 30 0 0130-30h48a30 30 0 0130 30v20a30 30 0 01-30 30h-48a30 30 0 01-30-30zM424 80H88a56 56 0 00-56 56v26h448v-26a56 56 0 00-56-56z"
                                />
                            </svg>
                        </span>
                        <span>Pay with</span>
                        <span> Credit Card</span>
                    </button>
                    <span v-if="loading === 1">
                        <Spin
                            :width="'w-20'"
                            :height="'h-20'"
                            :color="'text-primary'"
                        />
                    </span>
                </div>
            </div>
        </div>
    </section>
</template>
