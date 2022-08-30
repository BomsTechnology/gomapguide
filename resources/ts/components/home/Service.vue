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
                class="xl:px-36 lg:px-18 px-4 w-full py-8 grid lg:grid-cols-6 md:grid-cols-2 grid-cols-1 gap-6"
            >
                <div
                    class="text-white lg:col-span-2 text-center flex flex-col justify-center items-center space-y-4 hover:bg-black/25 py-4 rounded hover:shadow transition-all duration-150"
                >
                    <span>
                        <svg
                            class="lg:h-20 h-12 w-12 lg:w-20"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0.43 1064 928.69"
                        >
                            <linearGradient
                                id="a"
                                x1="0%"
                                x2="99.999%"
                                y1="49.999%"
                                y2="49.999%"
                            >
                                <stop offset=".03" stop-color="#4079d8" />
                                <stop offset="1" stop-color="#4989f5" />
                            </linearGradient>
                            <g fill="none" fill-rule="evenodd">
                                <g fill-rule="nonzero">
                                    <rect
                                        fill="#4989f5"
                                        height="696.14"
                                        rx="36.88"
                                        width="931"
                                        x="53.45"
                                        y="232.98"
                                    />
                                    <path
                                        d="M936.81 227.75H100.06c-25.92 0-46.09 200.6-46.09 226.52L512.2 929.12h424.61c26-.071 47.059-21.13 47.13-47.13V274.87c-.077-25.996-21.134-47.049-47.13-47.12z"
                                        fill="url(#a)"
                                    />
                                    <path
                                        d="M266.03 349.56h266V.44H305.86z"
                                        fill="#3c4ba6"
                                    />
                                    <path
                                        d="M798.03 349.56h-266V.44H758.2zM984.45 66.62l.33 1.19c-.08-.42-.24-.81-.33-1.19z"
                                        fill="#7babf7"
                                    />
                                    <path
                                        d="M984.78 67.8l-.33-1.19C976.017 27.993 941.837.455 902.31.43H758.2L798 349.56h266z"
                                        fill="#3f51b5"
                                    />
                                    <path
                                        d="M79.61 66.62l-.33 1.19c.08-.42.24-.81.33-1.19z"
                                        fill="#7babf7"
                                    />
                                    <path
                                        d="M79.27 67.8l.33-1.19C88.033 27.993 122.213.455 161.74.43h144.12L266 349.56H0z"
                                        fill="#7babf7"
                                    />
                                </g>
                                <path
                                    d="M266.48 349.47c0 73.412-59.513 132.925-132.925 132.925S.63 422.882.63 349.47z"
                                    fill="#709be0"
                                />
                                <path
                                    d="M532.33 349.47c0 73.412-59.513 132.925-132.925 132.925S266.48 422.882 266.48 349.47z"
                                    fill="#3c4ba6"
                                />
                                <path
                                    d="M798.18 349.47c0 73.412-59.513 132.925-132.925 132.925S532.33 422.882 532.33 349.47z"
                                    fill="#709be0"
                                />
                                <path
                                    d="M1064 349.47c0 73.412-59.513 132.925-132.925 132.925S798.15 422.882 798.15 349.47z"
                                    fill="#3c4ba6"
                                />
                                <path
                                    d="M931.08 709.6c-.47-6.33-1.25-12.11-2.36-19.49h-145c0 20.28 0 42.41-.08 62.7h84a73.05 73.05 0 0 1-30.75 46.89s0-.35-.06-.36a88 88 0 0 1-34 13.27 99.85 99.85 0 0 1-36.79-.16 91.9 91.9 0 0 1-34.31-14.87 95.72 95.72 0 0 1-33.73-43.1c-.52-1.35-1-2.71-1.49-4.09v-.15l.13-.1a93 93 0 0 1-.05-59.84A96.27 96.27 0 0 1 718.9 654c23.587-24.399 58.829-33.576 91.32-23.78a83 83 0 0 1 33.23 19.56l28.34-28.34c5-5.05 10.19-9.94 15-15.16a149.78 149.78 0 0 0-49.64-30.74 156.08 156.08 0 0 0-103.83-.91c-1.173.4-2.34.817-3.5 1.25A155.18 155.18 0 0 0 646 651a152.61 152.61 0 0 0-13.42 38.78c-16.052 79.772 32.623 158.294 111.21 179.4 25.69 6.88 53 6.71 78.89.83a139.88 139.88 0 0 0 63.14-32.81c18.64-17.15 32-40 39-64.27a179 179 0 0 0 6.26-63.33z"
                                    fill="#fff"
                                    fill-rule="nonzero"
                                />
                            </g>
                        </svg>
                    </span>
                    <h1 class="font-bold text-xl lg:text-3xl">
                        Gérez votre fiche
                    </h1>
                </div>
                <div
                    class="text-white lg:col-span-2 text-center flex flex-col justify-center items-center space-y-4 hover:bg-black/25 py-4 rounded hover:shadow transition-all duration-150"
                >
                    <span>
                        <img
                            src="/images/icon/security.png"
                            class="lg:h-20 h-12 w-12 lg:w-20 object-cover"
                        />
                    </span>
                    <h1 class="font-bold text-xl lg:text-3xl">
                        Sécurisez vos informations
                    </h1>
                </div>
                <div
                    class="text-white lg:col-span-2 text-center flex flex-col justify-center items-center space-y-4 hover:bg-black/25 py-4 rounded hover:shadow transition-all duration-150"
                >
                    <span>
                        <img
                            src="/images/icon/networking.png"
                            class="lg:h-24 h-12 w-12 lg:w-24 object-cover"
                        />
                    </span>
                    <h1 class="font-bold text-xl lg:text-3xl">
                        Communiquer facilement avec vos clients
                    </h1>
                </div>
                <div
                    class="text-white lg:col-span-3 text-center flex flex-col justify-center items-center space-y-4 hover:bg-black/25 py-4 rounded hover:shadow transition-all duration-150"
                >
                    <span>
                        <img
                            src="/images/icon/seo.png"
                            class="lg:h-20 h-12 w-12 lg:w-20 object-cover"
                        />
                    </span>
                    <h1 class="font-bold text-xl lg:text-3xl">
                        Référencez votre GMB
                    </h1>
                </div>

                <div
                    class="text-white lg:col-span-3 text-center flex flex-col justify-center items-center space-y-4 hover:bg-black/25 py-4 rounded hover:shadow transition-all duration-150"
                >
                    <span>
                        <img
                            src="/images/icon/services.png"
                            class="lg:h-24 h-12 w-12 lg:w-24 object-cover"
                        />
                    </span>
                    <h1 class="font-bold text-xl lg:text-3xl">
                        Exposez vos services
                    </h1>
                </div>
            </div>
        </div>
    </section>
</template>
