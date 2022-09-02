<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>

    <Head title="Welcome" />

    <div class="relative flex justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div v-if="canLogin"
            class="hidden fixed top-0 right-0 px-6 py-6 sm:block bg-white lg:flex lg:justify-center lg:min-w-full ">
            <Link v-if="$page.props.user" :href="route('dashboard')"
                class="text-base text-gray-700 dark:text-gray-500 underline">Dashboard</Link>

            <template v-else>
                <Link :href="route('login')" class="text-base text-gray-700 dark:text-gray-500 underline">Log in</Link>

                <Link v-if="canRegister" :href="route('register')"
                    class="ml-4 text-base text-gray-700 dark:text-gray-500 underline">Register</Link>
            </template>
        </div>

        <div class="container min-w-full bg-white">
            <div class="h-[650px]">
                <img class="max-h-full min-w-full" src="https://via.placeholder.com/1920x1080.png">
            </div>
        </div>
    </div>
</template>
