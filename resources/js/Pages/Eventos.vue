<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import axios from 'axios';


</script>

<template>
    <Head title="Eventos" />

    <AuthenticatedLayout>
        <div class="py-12">
            Id de usuario: 
            {{ $page.props.id }}
          
        </div>
    </AuthenticatedLayout>
</template>
