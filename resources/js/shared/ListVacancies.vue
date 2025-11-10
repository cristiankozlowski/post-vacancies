<template>
    <div class="flex flex-col items-center">
        <div v-for="(vacancy, index) in vacancies" :key="index" class="w-1/3 my-4 p-4 border border-gray-300 rounded-md">
            <h1 class="text-gray-800 text-2xl font-bold">{{ vacancy.title }}</h1>
            <div class="flex items-center">
                <span class="material-icons-two-tone">location_on</span><span class=" text-gray-600 mr-4">{{ vacancy.location }}</span>
                <span class="material-icons-two-tone">work</span><span class=" text-gray-600 mr-4">{{ vacancy.mode }}</span>
                <span class="material-icons-two-tone">article</span><span class=" text-gray-600 mr-4">{{ vacancy.type }}</span>
            </div>
            <p class="text-gray-800 mt-4"><strong>Description:</strong> {{ vacancy.description }}</p>
            <p class="text-gray-800"><strong>Salary: </strong>$ {{ vacancy.salary ? vacancy.salary : 'Not specified' }}</p>
            <div class="flex justify-between items-center mt-8">
                <p class="text-gray-800"><strong>Posted at: </strong>{{ vacancy.created_at }}</p>
                <Link class="bg-yellow-500 text-white px-4 py-1 rounded-md hover:bg-yellow-600 cursor-pointer" :href="show(vacancy.id)">Details</Link>
            </div>
        </div>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { show } from '@/actions/App/Http/Controllers/VacancyController'

defineProps({ vacancies: Object })
</script>
