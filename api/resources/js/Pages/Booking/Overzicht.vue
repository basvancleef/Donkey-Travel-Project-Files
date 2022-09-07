<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Table from '@/Components/Table.vue';
</script>

<template>
    <AppLayout title="Overzicht">
        <!-- <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template> -->

        <div class="container mx-auto lg:p-10">
            <!-- <div> -->
            <Table />
            <!-- </div> -->
        </div>
    </AppLayout>
</template>
