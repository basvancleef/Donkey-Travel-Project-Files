<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import UserTable from '@/Components/UserTable.vue';
</script>

    <template>
    <AppLayout title="Gebruikers">
        <!-- <template #header>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Dashboard
                </h2>
            </template> -->

        <div class="container mx-auto lg:p-10">
            <UserTable />
        </div>
    </AppLayout>
</template>
