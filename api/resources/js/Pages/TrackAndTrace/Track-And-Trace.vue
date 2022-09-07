<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Map from '@/Components/Map.vue';
</script>

    <template>
    <AppLayout title="Track-And-Trace">
        <!-- <template #header>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Dashboard
                </h2>
            </template> -->

        <div class="container mx-auto -ml-28 p-2">
            <!-- <div> -->
            <Map />
            <!-- </div> -->
        </div>
    </AppLayout>
</template>
