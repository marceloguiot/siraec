<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import DataTable from 'datatables.net-vue3';
import DataTablesLib from 'datatables.net';
import languageMX from 'datatables.net-plugins/i18n/es-MX.json';


DataTable.use(DataTablesLib);


</script>

<template>
    <Head title="Eventos" />

    <AuthenticatedLayout>
            <div class="w-5/6 mx-auto mt-20 bg-white p-2">
            <DataTable class="display" :options="{language:languageMX}">
                <thead>
                    <tr>
                        <th>Estado</th>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Fecha inicio</th>
                        <th>Fecha término</th>
                        <th>Sede</th>
                        
                    </tr>
                </thead>
                <tbody>
            <tr v-for="item in $page.props.eventos">
            <td></td>
            <td>{{ item.ideventos }}</td>
            <td><a :href="route('eventosdet',{'id':item.ideventos})">{{ item.nombre }}</a></td>
            <td>{{ item.fecha }}</td>
            <td>{{ item.fechat }}</td>
            <td>{{ item.lugar }}</td>
            </tr>
                </tbody>
            </DataTable>
        </div>
  
    </AuthenticatedLayout>
</template>
<style>
@import 'datatables.net-dt';
</style>
