<script setup>
import { Link } from '@inertiajs/vue3'
import { edit } from '@/actions/App/Http/Controllers/VacancyController'

defineProps({ vacancy: Object })
</script>

<template>
    <div class="mx-32 mt-8">
        <h1 class="text-gray-800 text-2xl font-bold">{{ vacancy.title }}</h1>
        <div class="flex items-center">
            <span class="material-icons-two-tone">location_on</span><span class=" text-gray-600 mr-4">{{ vacancy.location }}</span>
            <span class="material-icons-two-tone">work</span><span class=" text-gray-600 mr-4">{{ vacancy.mode }}</span>
            <span class="material-icons-two-tone">article</span><span class=" text-gray-600 mr-4">{{ vacancy.type }}</span>
        </div>
        <p class="text-gray-800 mt-4"><strong>Description:</strong> {{ vacancy.description }}</p>
        <p class="text-gray-800"><strong>Salary: </strong>$ {{ vacancy.salary ? vacancy.salary : 'Not specified' }}</p>
        <div class="flex justify-between items-center mt-8">
                <p class="text-gray-800"><strong>Posted at: </strong>{{ vacancy.created_at_formatted }}</p>
                <Link v-if="vacancy.user.is_hr" class="mt-8 bg-blue-500 text-white px-4 py-1 rounded-md hover:bg-blue-600" :href="edit(vacancy.id)">Edit</Link>
                <Link v-else class="mt-8 bg-green-500 text-white px-4 py-1 rounded-md hover:bg-green-600" href="#">Apply Now</Link>
        </div>
    </div>
</template>
