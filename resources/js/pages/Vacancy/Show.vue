<script setup>
defineProps({ vacancy: Object })
</script>

<template>
    <div>
        <h1 class="text-2xl font-bold">{{ vacancy.title }}</h1>
        <p class="mt-2">{{ vacancy.description }}</p>
    </div>
</template>
