<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Eventos" />
    <AuthenticatedLayout>
        <div class="w-5/6 mx-auto mt-20 bg-white p-4">
        <span class="text-2xl font-bold">Subir asistentes a evento</span>
       
        <form class="flex items-center space-x-6 mt-12">
  <div class="shrink-0">
    <div class="rounded-full bg-slate-200 h-10 w-10"></div>
  </div>
  <label class="block">
    <span class="sr-only">Elegir archivo</span>
    <input type="file" class="block w-full text-sm text-slate-500
      file:mr-4 file:py-2 file:px-4
      file:rounded-full file:border-0
      file:text-sm file:font-semibold
      file:bg-violet-50 file:text-violet-700
      hover:file:bg-violet-100
    "/>
  </label>
  <div class="flex gap-10">
  <div class="inline-flex items-center">
    <label
      class="relative flex cursor-pointer items-center rounded-full p-3"
      for="html"
      data-ripple-dark="true"
    >
      <input
        id="html"
        name="type"
        type="radio"
        class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-teal-500 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-zinc-500 checked:before:bg-zinc-500 hover:before:opacity-10"
      />
      <div class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-teal-500 opacity-0 transition-opacity peer-checked:opacity-100">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-3.5 w-3.5"
          viewBox="0 0 16 16"
          fill="currentColor"
        >
          <circle data-name="ellipse" cx="8" cy="8" r="8"></circle>
        </svg>
      </div>
    </label>
    <label
      class="mt-px cursor-pointer select-none font-light text-gray-700"
      for="html"
    >
      Participantes
    </label>
  </div>
  <div class="inline-flex items-center">
    <label
      class="relative flex cursor-pointer items-center rounded-full p-3"
      for="react"
      data-ripple-dark="true"
    >
      <input
        id="react"
        name="type"
        type="radio"
        class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-teal-500 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-zinc-500 checked:before:bg-zinc-500 hover:before:opacity-10"
      />
      <div class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-teal-500 opacity-0 transition-opacity peer-checked:opacity-100">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-3.5 w-3.5"
          viewBox="0 0 16 16"
          fill="currentColor"
        >
          <circle data-name="ellipse" cx="8" cy="8" r="8"></circle>
        </svg>
      </div>
    </label>
    <label
      class="mt-px cursor-pointer select-none font-light text-gray-700"
      for="react"
    >
      Ponentes
    </label>
  </div>
</div>

</form>

        </div>
  
    </AuthenticatedLayout>
</template>
