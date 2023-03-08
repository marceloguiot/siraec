<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Eventos" />
    <AuthenticatedLayout>
        <div class="w-5/6 mx-auto mt-20 bg-white p-4" v-for="item in $page.props.eventos">
        Detalle de evento
        <table class="table-auto border-collapse border border-slate-400 mt-5 mx-auto shadow-lg" width="98%">
            <thead>
                <tr>
                    <th colspan="5" class="border border-slate-300 h-16 text-xl">
                        {{item.nombre}}
                    </th>
                </tr>
                <tr  class="bg-teal-600 text-white">
                    <th class="border border-slate-300">Créditos</th>
                    <th class="border border-slate-300">Fecha de inicio</th>
                    <th class="border border-slate-300">Sede</th>
                    <th class="border border-slate-300">No. de participantes registrados</th>
                    <th class="border border-slate-300">No. de participantes capturados</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td class="border border-slate-300"> {{ item.cre }}</td>
                    <td class="border border-slate-300"> {{ item.fecha }}</td>
                    <td class="border border-slate-300"> {{ item.lugar }}</td>
                    <td class="border border-slate-300"> {{ item.participantes }}</td>
                    <td class="border border-slate-300"></td>
                </tr>
                <tr class="bg-teal-600 text-white">
                    <th class="border border-slate-300">Tipo de evento</th>
                    <th class="border border-slate-300">Fecha de término</th>
                    <th class="border border-slate-300">ID PEC</th>
                    <th class="border border-slate-300">Horas teóricas</th>
                    <th class="border border-slate-300">Horas prácticas</th>
                </tr>
                <tr class="text-center">
                    <td class="border border-slate-300"></td>
                    <td class="border border-slate-300"> {{ item.fechat }}</td>
                    <td class="border border-slate-300"> {{ item.ideventos }}</td>
                    <td class="border border-slate-300"> {{ item.horast }}</td>
                    <td class="border border-slate-300"> {{ item.horasp }}</td>
                </tr>
            </tbody>
        </table>
        <table class="table-auto mt-10 mx-auto shadow-lg" width="98%">
            <thead>
                <tr>
                    <th colspan="6" class="border border-slate-300 h-14 bg-teal-600 text-white text-lg">Listado de participantes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="border border-slate-400"></th>
                    <th class="border border-slate-400">Folio</th>
                    <th class="border border-slate-400">Nombre</th>
                    <th class="border border-slate-400">Calificación</th>
                    <th class="border border-slate-400">Adscripción</th>
                    <th class="border border-slate-400">Opciones</th>
                </tr>
                <tr v-for="part in $page.props.participantes">
                    <td class="border border-slate-300"></td>
                    <td class="border text-center border-slate-300">{{ part.folio }}</td>
                    <td class="border border-slate-300">{{part.nombre}} {{ part.apellidos }}</td>
                    <td class="border text-center border-slate-300">{{ part.calificacion }}</td>
                    <td class="border border-slate-300">{{ part.ads }}</td>
                    <td class="border border-slate-300"></td>
         
                </tr>
            </tbody>
        </table>
        <div align="right" class="mt-7">
            <a :href="route('subirpart',{'id':item.ideventos})" class="py-3 px-4 bg-zinc-600 text-white font-semibold rounded-md shadow-md hover:bg-stone-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75 hover:cursor-pointer">Registrar asistentes</a>
        </div>

        <table class="table-auto mt-10 mx-auto shadow-lg" width="98%">
            <thead>
                <tr>
                    <th colspan="6" class="border border-slate-300 h-14 bg-teal-600 text-white text-lg">Listado de ponentes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="border border-slate-400">Folio</th>
                    <th class="border border-slate-400">Nombre</th>
                    <th class="border border-slate-400">Horas teóricas</th>
                    <th class="border border-slate-400">Horas prácticas</th>
                    <th class="border border-slate-400">Opciones</th>
                </tr>
                <tr v-for="pon in $page.props.ponentes">
                    <td class="border text-center border-slate-300">{{ pon.folio }}</td>
                    <td class="border border-slate-300">{{pon.nombre}} {{ pon.apellidos }}</td>
                    <td class="border text-center border-slate-300">{{ pon.horast }}</td>
                    <td class="border text-center border-slate-300">{{ pon.horasp }}</td>
                    <td class="border border-slate-300">{{ pon.ads }}</td>
                
         
                </tr>
            </tbody>
        </table>
        <div align="right">
            <button class="py-2 px-4 bg-slate-600 mt-5 text-white font-semibold rounded-md shadow-md hover:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">Generar constancias</button>
        </div>
        </div>
  
    </AuthenticatedLayout>
</template>

