<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import NavBar from '../Components/NavBar.vue';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>

    <Head title="404" />

    <div class="antialiased font-sans bg-gray-200 overflow-hidden">
        <div class="" style="">
            <div class="h-0 min-h-[896px] bg-white">
                <div class="flex min-h-full flex-col bg-white pt-16 pb-12">
                    <main class="mx-auto flex w-full max-w-7xl flex-grow flex-col justify-center px-4 sm:px-6 lg:px-8">
                        <div class="flex flex-shrink-0 justify-center"> <a href="http://localhost:3000/"
                                class="inline-flex"> <span class="sr-only">Your Company</span> <img class="h-36 w-auto"
                                    src="https://illustoon.com/photo/dl/6959.png" alt=""> </a>
                        </div>
                        <div class="">
                            <div class="text-center">
                                <p class="text-base font-semibold text-red-600">404</p>
                                <h1 class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">Pagina niet
                                    gevonden</h1>
                                <p class="mt-2 text-base text-gray-500">Sorry, deze pagina bestaat niet.</p>
                                <div class="mt-6"> <a href="http://localhost:3000/"
                                        class="text-base font-medium text-red-600 hover:text-red-500">Terug naar de
                                        website<span aria-hidden="true"> &rarr;</span> </a> </div>
                            </div>
                        </div>
                    </main>
                    <footer class="mx-auto w-full max-w-7xl flex-shrink-0 px-4 sm:px-6 lg:px-8">
                        <nav class="flex justify-center space-x-4"> <a :href="route('login')"
                                class="text-sm font-medium text-gray-500 hover:text-gray-600">Login</a> <span
                                class="inline-block border-l border-gray-300" aria-hidden="true"></span> <a
                                v-if="canRegister" :href="route('register')"
                                class="text-sm font-medium text-gray-500 hover:text-gray-600">Registreren</a> </nav>
                    </footer>
                </div>
            </div>
        </div>
    </div>
</template>
