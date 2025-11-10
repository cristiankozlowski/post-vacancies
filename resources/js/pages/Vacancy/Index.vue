<script setup>
import ListVacancies from '../shared/ListVacancies.vue'

defineProps({ vacancies: Array })
</script>

<template>
    <ListVacancies :vacancies="vacancies.data" />
</template>
