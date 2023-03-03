<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';




</script>

<template>
    <Head title="Eventos" />

    <AuthenticatedLayout>
   
            <table class="table-auto w-full text-sm text-left text-gray-500 dark:text-gray-400">
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
            <td>{{ item.nombre }}</td>
            <td>{{ item.fecha }}</td>
            <td>{{ item.fechat }}</td>
            <td>{{ item.lugar }}</td>
            </tr>
                </tbody>
            </table>
  
    </AuthenticatedLayout>
</template>
