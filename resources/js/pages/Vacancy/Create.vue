<script setup>
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'

defineProps({ errors: Object })

const form = reactive({
    title: null,
    mode: 'remote',
    type: 'full-time',
    location: null,
    description: null,
    salary: null,
})

const selectModes = ['on-site', 'hybrid', 'remote']
const selectTypes = ['full-time', 'part-time', 'contract', 'internship']

function submit() {
  router.post('/vacancies', form)
}
</script>

<template>
    <div class="mx-32">
        <form @submit.prevent="submit">
            <div class="flex flex-col mt-16 my-4">
                <label for="title" class="text-gray-800 font-bold">Job Title:</label>
                <input id="title" v-model="form.title" class="border rounded-md border-gray-300 p-2" />
                <div class="text-red-500 text-sm mt-1">{{ errors.title }}</div>
            </div>
            <div class="flex my-4">
                <div class="w-1/2 flex flex-col">
                    <label for="mode" class="text-gray-800 font-bold">Mode:</label>
                    <select name="mode" v-model="form.mode" class="border rounded-md border-gray-300 p-2">
                        <option v-for="mode in selectModes" :key="mode" :value="mode">{{ mode }}</option>
                    </select>
                    <div class="text-red-500 text-sm mt-1">{{ errors.mode }}</div>
                </div>
                <div class="w-1/2 flex flex-col ml-4">
                    <label for="type" class="text-gray-800 font-bold">Type:</label>
                    <select name="type" v-model="form.type" class="border rounded-md border-gray-300 p-2">
                        <option v-for="type in selectTypes" :key="type" :value="type">{{ type }}</option>
                    </select>
                    <div class="text-red-500 text-sm mt-1">{{ errors.type }}</div>
                </div>
            </div>
            <div class="flex flex-col my-4">
                <label for="salary" class="text-gray-800 font-bold">Salary:</label>
                <div class="flex items-center">
                    <span>$&nbsp;</span><input id="salary" v-model="form.salary" type="number" class="border rounded-md border-gray-300 p-2" />
                    <div class="text-red-500 text-sm mt-1">{{ errors.salary }}</div>
                </div>
            </div>
            <div class="flex flex-col my-4">
                <label for="location" class="text-gray-800 font-bold">Location:</label>
                <input id="location" v-model="form.location" class="border rounded-md border-gray-300 p-2" />
                <div class="text-red-500 text-sm mt-1">{{ errors.location }}</div>
            </div>
            <div class="flex flex-col my-4">
                <label for="description" class="text-gray-800 font-bold">Job Description:</label>
                <textarea id="description" v-model="form.description" class="border rounded-md border-gray-300 p-2" />
                <div class="text-red-500 text-sm mt-1">{{ errors.description }}</div>
            </div>
            <button type="submit" class="my-4 bg-blue-500 text-white rounded-md px-4 py-1 cursor-pointer">Submit</button>
        </form>
    </div>
</template>
