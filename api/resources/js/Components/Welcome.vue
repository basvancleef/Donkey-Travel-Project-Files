<script setup>
// const { data: weather } = await useFetch('https://api.openweathermap.org/data/2.5/weather?q=Lienden&appid=c7c20096d659d7458bddefab9f51f475');
</script>

<template>
    <div>
        <div class="flex flex-col lg:grid lg:grid-cols-3 lg:grid-rows-3 lg:gap-4">
            <!-- WELCOME MESSAGE -->
            <div class="w-full row-span-1 bg-white shadow-md rounded-2xl p-24 lg:h-60 lg:col-span-2 ">
                <h1 class="lg:text-4xl font-bold text-black text-3xl">Welcome, {{ $page.props.user.name }}🎉</h1>
            </div>

            <!-- WEATHER API-->
            <div class="w-full h-60 row-span-1 bg-white shadow-md rounded-2xl py-5 px-14">
                <!-- <div v-if="weather.weather">
                    <div class="text-center">
                        <span class="text-4xl font-medium">{{ weather.name }}</span>
                        <div class="grid grid-cols-2 py-10">
                            <img class="col-span-1"
                                :src="`https://openweathermap.org/img/w/${weather.weather[0].icon}.png`">
                            <span class="col-span-1 text-4xl font-medium">{{ Math.round(weather.main.temp - 273) }}
                                &deg;C</span>
                        </div>
                    </div>
                </div> -->
            </div>

            <!-- QUOTE API -->
            <div class="w-full h-60 p-8 bg-white shadow-md rounded-2xl lg:col-span-3 lg:px-80 lg:py-16">
                <div class="flex justify-center text-center container">
                    <p class="text-black font-normal text-lg">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                        ullamcorper,
                        elit sit amet
                        cursus placerat,
                        urna eros mollis tellus, non commodo justo dolor varius enim."
                    </p>
                </div>
            </div>

            <div class="w-full h-60 bg-white shadow-md rounded-2xl" />
            <div class="w-full h-60 bg-white shadow-md rounded-2xl" />
            <div class="w-full h-60 bg-white shadow-md rounded-2xl" />
        </div>
    </div>
</template>
