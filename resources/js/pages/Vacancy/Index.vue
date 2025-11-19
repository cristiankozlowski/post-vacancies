<script setup>
import AppLayout from '@/layouts/AppLayout.vue';
import ListVacancies from '../../shared/ListVacancies.vue'
// import { type BreadcrumbItem } from '@/types';

defineProps({vacancies: Array});

const breadcrumbItems = [
    {
        title: 'List vacancies',
        // href: edit().url,
    },
];
</script>

<template>
    <AppLayout :breadcrumbs="breadcrumbItems">
        <ListVacancies :vacancies="vacancies.data" />
    </AppLayout>
</template>
