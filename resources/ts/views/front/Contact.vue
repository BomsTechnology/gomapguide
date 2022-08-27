<script setup lang="ts">
import { LocationMarkerIcon, MailIcon, PhoneIcon } from "@heroicons/vue/solid";
import Header from "@/components/Header.vue";
const links = [
    {
        label: "Contact",
        route: "contact",
    },
];
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
                        <span
                            ><LocationMarkerIcon class="h-6 w-6 text-primary"
                        /></span>

                        <span class="text-sm text-gray-700 mt-1"
                            >1253, av McGill Collège, Montréal QC H3B 2Y5
                        </span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span><MailIcon class="h-6 w-6 text-primary" /></span>

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
                <div
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
                                type="text"
                                id="title"
                                required
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
                                    class="mt-1 block w-full rounded-md border border-white p-2.5 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    placeholder=""
                                />
                            </div>
                        </div>

                        <div class="mt-8">
                            <button
                                type="submit"
                                class="w-full transform rounded-md bg-primary px-4 py-2 text-sm tracking-wide text-white transition-colors duration-200 hover:bg-secondary focus:bg-primary focus:outline-none"
                            >
                                Envoyer
                            </button>
                        </div>
                    </div>
                    <div
                        class="flex items-center py-4 justify-center space-x-4"
                    >
                        <button
                            class="bg-primary hover:bg-secondary p-3 text-white"
                        >
                            <svg
                                class="h-4 w-4"
                                viewBox="0 0 40 40"
                                fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M0 20.1117C0 30.055 7.22167 38.3233 16.6667 40V25.555H11.6667V20H16.6667V15.555C16.6667 10.555 19.8883 7.77833 24.445 7.77833C25.8883 7.77833 27.445 8 28.8883 8.22167V13.3333H26.3333C23.8883 13.3333 23.3333 14.555 23.3333 16.1117V20H28.6667L27.7783 25.555H23.3333V40C32.7783 38.3233 40 30.0567 40 20.1117C40 9.05 31 0 20 0C9 0 0 9.05 0 20.1117Z"
                                    fill="currentColor"
                                />
                            </svg>
                        </button>
                        <button
                            class="bg-primary hover:bg-secondary p-3 text-white"
                            text-white
                        >
                            <svg
                                class="h-4 w-4"
                                viewBox="0 0 36 36"
                                fill="#000000"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M30.4008 5.58602C28.7829 3.96732 26.8608 2.68462 24.7451 1.81176C22.6295 0.938901 20.3621 0.49312 18.0734 0.50008C8.46875 0.50008 0.65 8.27977 0.646094 17.8438C0.641845 20.8892 1.44461 23.8814 2.97266 26.5157L0.5 35.5001L9.73828 33.0884C12.2955 34.4737 15.1581 35.1987 18.0664 35.1977H18.0734C27.6773 35.1977 35.4953 27.4173 35.5 17.854C35.5058 15.5732 35.058 13.314 34.1826 11.2078C33.3071 9.10171 32.0216 7.19071 30.4008 5.58602ZM18.0734 32.2704H18.0672C15.4745 32.2712 12.929 31.5773 10.6953 30.261L10.1664 29.9485L4.68437 31.3798L6.14766 26.0602L5.80312 25.5134C4.35343 23.2182 3.58535 20.5585 3.58828 17.8438C3.58828 9.89617 10.0891 3.42977 18.0789 3.42977C21.9117 3.42292 25.5903 4.93878 28.3055 7.64392C31.0208 10.3491 32.5504 14.022 32.5578 17.8548C32.5547 25.8032 26.057 32.2704 18.0734 32.2704ZM26.018 21.4743C25.5828 21.2571 23.4398 20.2087 23.043 20.0641C22.6461 19.9196 22.3531 19.847 22.0633 20.2813C21.7734 20.7157 20.9383 21.6876 20.6844 21.9806C20.4305 22.2735 20.1766 22.3055 19.7414 22.0884C19.3063 21.8712 17.9023 21.4141 16.2391 19.9376C14.9445 18.7884 14.0711 17.3696 13.8172 16.936C13.5633 16.5024 13.7898 16.2673 14.0078 16.0516C14.2039 15.8571 14.443 15.5454 14.6609 15.2923C14.8789 15.0391 14.9516 14.8579 15.0961 14.5688C15.2406 14.2798 15.1687 14.0266 15.0602 13.8102C14.9516 13.5938 14.0805 11.4602 13.718 10.5923C13.3641 9.74695 13.0055 9.8618 12.7383 9.84852C12.4844 9.83602 12.1914 9.83289 11.9031 9.83289C11.6827 9.83863 11.4659 9.88974 11.2662 9.98302C11.0664 10.0763 10.888 10.2098 10.7422 10.3751C10.343 10.8095 9.21797 11.8595 9.21797 13.9907C9.21797 16.122 10.7805 18.1845 10.9961 18.4735C11.2117 18.7626 14.0664 23.1399 18.4344 25.0173C19.2455 25.3646 20.0742 25.6692 20.9172 25.9298C21.9602 26.2595 22.9094 26.2134 23.6594 26.1016C24.4961 25.9774 26.2375 25.0532 26.5992 24.0407C26.9609 23.0282 26.9617 22.161 26.8531 21.9806C26.7445 21.8001 26.4539 21.6907 26.018 21.4743Z"
                                    fill="currentColor"
                                />
                            </svg>
                        </button>
                        <button
                            class="bg-primary hover:bg-secondary p-3 text-white"
                        >
                            <MailIcon class="h-5 w-4.5" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
