import Services from '@/components/home/Services.vue';
<script setup lang="ts"></script>
<template>
    <section
        class="lg:h-screen relative bg-fixed bg-cover object-cover"
        style="background-image: url('/images/service.jpeg')"
    >
        <div
            class="w-full h-full bg-gray-900/50 flex flex-col justify-center items-center py-8"
        >
            <h1 class="font-black text-4xl lg:text-6xl text-white">
                Nos Services
            </h1>
            <div
                class="xl:px-36 lg:px-18 px-4 w-full py-8 grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6"
            >
                <div
                    class="text-white text-center flex flex-col justify-center items-center space-y-4 hover:bg-black/25 py-4 rounded hover:shadow transition-all duration-150"
                >
                    <span>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="lg:h-20 h-12 w-12 lg:w-20"
                            viewBox="0 0 512 512"
                        >
                            <title>Person Add</title>
                            <path
                                d="M376 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z"
                                fill="none"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="32"
                            />
                            <path
                                d="M288 304c-87 0-175.3 48-191.64 138.6-2 10.92 4.21 21.4 15.65 21.4H464c11.44 0 17.62-10.48 15.65-21.4C463.3 352 375 304 288 304z"
                                fill="none"
                                stroke="currentColor"
                                stroke-miterlimit="10"
                                stroke-width="32"
                            />
                            <path
                                fill="none"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="32"
                                d="M88 176v112M144 232H32"
                            />
                        </svg>
                    </span>
                    <h1 class="font-bold text-xl lg:text-3xl">
                        Créez votre profil
                    </h1>
                    <p class="leading-relaxed text-sm lg:text-lg">
                        Créez votre profil Google My Business et permettez à vos
                        clients de vous trouver.
                    </p>
                </div>
                <div
                    class="text-white text-center flex flex-col justify-center items-center space-y-4 hover:bg-black/25 py-4 rounded hover:shadow transition-all duration-150"
                >
                    <span>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="lg:h-20 h-12 w-12 lg:w-20"
                            viewBox="0 0 512 512"
                        >
                            <title>Lock Closed</title>
                            <path
                                d="M336 208v-95a80 80 0 00-160 0v95"
                                fill="none"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="32"
                            />
                            <rect
                                x="96"
                                y="208"
                                width="320"
                                height="272"
                                rx="48"
                                ry="48"
                                fill="none"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="32"
                            />
                        </svg>
                    </span>
                    <h1 class="font-bold text-xl lg:text-3xl">Sécurisation</h1>
                    <p class="leading-relaxed text-sm lg:text-lg">
                        Sécurisez votre profil Google MyBusiness pour empêcher
                        les modifications malveillantes
                    </p>
                </div>
                <div
                    class="text-white text-center flex flex-col justify-center items-center space-y-4 hover:bg-black/25 py-4 rounded hover:shadow transition-all duration-150"
                >
                    <span>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="lg:h-20 h-12 w-12 lg:w-20"
                            viewBox="0 0 512 512"
                        >
                            <title>Stats Chart</title>
                            <rect
                                x="64"
                                y="320"
                                width="48"
                                height="160"
                                rx="8"
                                ry="8"
                                fill="none"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="32"
                            />
                            <rect
                                x="288"
                                y="224"
                                width="48"
                                height="256"
                                rx="8"
                                ry="8"
                                fill="none"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="32"
                            />
                            <rect
                                x="400"
                                y="112"
                                width="48"
                                height="368"
                                rx="8"
                                ry="8"
                                fill="none"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="32"
                            />
                            <rect
                                x="176"
                                y="32"
                                width="48"
                                height="448"
                                rx="8"
                                ry="8"
                                fill="none"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="32"
                            />
                        </svg>
                    </span>
                    <h1 class="font-bold text-xl lg:text-3xl">Référencement</h1>
                    <p class="leading-relaxed text-sm lg:text-lg">
                        Optimisez votre entreprise pour les recherches locales
                        et soyez le premier en ligne
                    </p>
                </div>
                <div
                    class="text-white text-center flex flex-col justify-center items-center space-y-4 hover:bg-black/25 py-4 rounded hover:shadow transition-all duration-150"
                >
                    <span>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="lg:h-20 h-12 w-12 lg:w-20"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                            />
                        </svg>
                    </span>
                    <h1 class="font-bold text-xl lg:text-3xl">Avis</h1>
                    <p class="leading-relaxed text-sm lg:text-lg">
                        Gardez un profil attrayant et fidélisez vos clients avec
                        plus d'avis positifs
                    </p>
                </div>
                <div
                    class="text-white text-center flex flex-col justify-center items-center space-y-4 hover:bg-black/25 py-4 rounded hover:shadow transition-all duration-150"
                >
                    <span>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="lg:h-20 h-12 w-12 lg:w-20"
                            viewBox="0 0 512 512"
                        >
                            <title>Globe</title>
                            <path
                                d="M256 48C141.13 48 48 141.13 48 256s93.13 208 208 208 208-93.13 208-208S370.87 48 256 48z"
                                fill="none"
                                stroke="currentColor"
                                stroke-miterlimit="10"
                                stroke-width="32"
                            />
                            <path
                                d="M256 48c-58.07 0-112.67 93.13-112.67 208S197.93 464 256 464s112.67-93.13 112.67-208S314.07 48 256 48z"
                                fill="none"
                                stroke="currentColor"
                                stroke-miterlimit="10"
                                stroke-width="32"
                            />
                            <path
                                d="M117.33 117.33c38.24 27.15 86.38 43.34 138.67 43.34s100.43-16.19 138.67-43.34M394.67 394.67c-38.24-27.15-86.38-43.34-138.67-43.34s-100.43 16.19-138.67 43.34"
                                fill="none"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="32"
                            />
                            <path
                                fill="none"
                                stroke="currentColor"
                                stroke-miterlimit="10"
                                stroke-width="32"
                                d="M256 48v416M464 256H48"
                            />
                        </svg>
                    </span>
                    <h1 class="font-bold text-xl lg:text-3xl">Interaction</h1>
                    <p class="leading-relaxed text-sm lg:text-lg">
                        Rapprochez vous de vos clients en augmentant votre temps
                        de réaction
                    </p>
                </div>
                <div
                    class="text-white text-center flex flex-col justify-center items-center space-y-4 hover:bg-black/25 py-4 rounded hover:shadow transition-all duration-150"
                >
                    <span>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="lg:h-20 h-12 w-12 lg:w-20"
                            viewBox="0 0 512 512"
                        >
                            <title>Laptop</title>
                            <rect
                                x="48"
                                y="96"
                                width="416"
                                height="304"
                                rx="32.14"
                                ry="32.14"
                                fill="none"
                                stroke="currentColor"
                                stroke-linejoin="round"
                                stroke-width="32"
                            />
                            <path
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-miterlimit="10"
                                stroke-width="32"
                                d="M16 416h480"
                            />
                        </svg>
                    </span>
                    <h1 class="font-bold text-xl lg:text-3xl">Site Web</h1>
                    <p class="leading-relaxed text-sm lg:text-lg">
                        Créez votre site Web et permettez à vos clients de
                        visiter vos services et produits
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>
