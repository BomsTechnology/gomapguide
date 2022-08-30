<script setup lang="ts">
import {
    XMarkIcon,
    Bars3Icon,
    ChevronDownIcon,
    ArrowUpCircleIcon,
    EnvelopeIcon,
} from "@heroicons/vue/24/solid";
import { reactive, ref } from "vue";
import { useRouter } from "vue-router";

const router = useRouter();
const open = reactive({
    menu: false,
    submenu: false,
});

const isScroll = ref(false);
document.addEventListener("scroll", function () {
    let bodyTopPosition = document.body.getBoundingClientRect().top;
    if (bodyTopPosition < -150) {
        isScroll.value = true;
    } else {
        isScroll.value = false;
    }
});
const goTop = () => {
    document.body.scrollIntoView({
        behavior: "smooth",
    });
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
};

const navigationTo = async (routeName: string): Promise<void> => {
    open.menu = false;
    router.push({ name: routeName });
};
</script>
<template>
    <nav
        :class="[
            isScroll
                ? 'w-full lg:py-0 py-3 px-4 shadow-md z-20 fixed bg-gray-900 text-white '
                : 'w-full lg:py-6 py-4 lg:px-10 px-4 lg:shadow-none z-50 text-white fixed bg-transparent',
        ]"
    >
        <div
            class="flex items-center lg:flex-row flex-col justify-between xl:px-36 lg:px-18"
        >
            <div
                class="lg:w-72 flex justify-between items-center w-full lg:px-0 px-3 py-2"
            >
                <router-link
                    :to="{ name: 'home' }"
                    class="text-primary font-satisfy lg:text-3xl md:2xl text-xl font-bold"
                >
                    <img
                        src="/images/logo/logo2.png"
                        alt="logo"
                        class="lg:h-16 h-12"
                    />
                </router-link>
                <div
                    class="relative block lg:hidden"
                    @click="open.menu = !open.menu"
                >
                    <transition-group
                        enter-active-class="transition duration-500"
                        enter-from-class="opacity-0 rotate-45"
                        enter-to-class="opacity-1 rotate-0 "
                        leave-active-class="transition duration-500 absolute"
                        leave-from-class="opacity-1 rotate-0"
                        leave-to-class="opacity-0 rotate-45"
                        appear
                    >
                        <button
                            v-if="!open.menu"
                            type="button"
                            class="hover:text-primary focus:text-primary focus:outline-none"
                            aria-label="toggle menu"
                        >
                            <Bars3Icon class="h-6 w-6 fill-current" />
                        </button>
                        <button
                            v-if="open.menu"
                            type="button"
                            class="hover:text-primary focus:text-primary focus:outline-none"
                            aria-label="toggle menu"
                        >
                            <XMarkIcon class="h-6 w-6 fill-current" />
                        </button>
                    </transition-group>
                </div>
            </div>
            <div
                class="space-x-4 text-sm lg:flex hidden text-right items-center justify-end"
            >
                <router-link
                    :to="{ name: 'home' }"
                    class="block px-4 py-2 rounded hover:bg-primary hover:text-white transition-colors"
                    >Accueil</router-link
                >
                <router-link
                    :to="{ name: 'plan' }"
                    class="block px-4 py-2 rounded hover:bg-primary hover:text-white transition-colors"
                    >Plans</router-link
                >
                <!-- <router-link
                    :to="{ name: 'about' }"
                    class="block px-4 py-2 rounded hover:bg-primary hover:text-white transition-colors"
                    >A Propos</router-link
                > -->

                <router-link
                    :to="{ name: 'contact' }"
                    class="block lg:px-4 px-3 py-2 rounded hover:bg-primary hover:text-white transition-colors"
                    >Contact</router-link
                >
            </div>
            <Transition
                enter-active-class="transition duration-500"
                enter-from-class="opacity-0 -translate-y-full absolute"
                enter-to-class="opacity-1 translate-y-0"
                leave-active-class="transition duration-500"
                leave-from-class="opacity-1/2 translate-y-0"
                leave-to-class="-translate-y-1/2 opacity-0 "
            >
                <div
                    v-if="open.menu"
                    class="mt-4 lg:hidden w-full text-gray-50 shadow text-sm rounded bg-gray-900"
                >
                    <button
                        type="button"
                        @click="navigationTo('home')"
                        class="block px-3 py-2 w-full text-left hover:bg-primary border-b hover:text-white transition-colors"
                    >
                        Accueil
                    </button>
                    <button
                        type="button"
                        @click="navigationTo('plan')"
                        class="block px-3 py-2 w-full text-left hover:bg-primary border-b hover:text-white transition-colors"
                    >
                        Plans
                    </button>
                    <!-- <button
                        type="button"
                        @click="navigationTo('about')"
                        class="block px-3 py-2 w-full text-left  hover:bg-primary border-b hover:text-white transition-colors"
                    >
                        A Propos
                    </button> -->

                    <button
                        type="button"
                        @click="navigationTo('contact')"
                        class="block px-3 py-2 w-full text-left hover:bg-primary hover:text-white transition-colors"
                    >
                        Contact
                    </button>
                </div>
            </Transition>
        </div>
    </nav>
    <button
        @click="goTop()"
        type="button"
        id="btnToTop"
        :class="[
            isScroll
                ? 'fixed bottom-8 right-4 z-40 bg-gray-900 items-center justify-center rounded-full border border-gray-500 p-2 text-white'
                : 'hidden',
        ]"
    >
        <ArrowUpCircleIcon class="h-6 w-6 stroke-primary" />
    </button>
</template>
<script lang="ts">
export default {
    inheritAttrs: false,
};
</script>
