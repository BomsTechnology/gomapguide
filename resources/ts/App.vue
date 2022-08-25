<script setup lang="ts">
import { RouteRecordName } from "vue-router";
</script>

<template>
    <div class="flex h-full">
        <div class="h-full">
            <router-view name="sidebar"></router-view>
        </div>

        <div class="h-full w-full">
            <router-view name="navbar"></router-view>

            <!-- <router-view></router-view> -->
            <router-view v-slot="{ Component, route }">
                <template v-if="Component">
                    <KeepAlive>
                        <Suspense>
                            <Transition
                                enter-active-class="transition duration-1000"
                                enter-from-class=""
                                enter-to-class=" "
                                leave-active-class="transition duration-500 "
                                leave-from-class=" "
                                leave-to-class=" "
                                mode="out-in"
                            >
                                <div :key="route.name!" class="h-full w-full">
                                    <component :is="Component" />
                                </div>
                            </Transition>
                            <template #fallback>
                                <div class="h-screen bg-red-50 text-center">
                                    Loading...
                                </div>
                            </template>
                        </Suspense>
                    </KeepAlive>
                </template>
            </router-view>

            <router-view name="footer"></router-view>
        </div>
    </div>
</template>
