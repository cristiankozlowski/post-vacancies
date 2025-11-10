<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <main>
    <header class="flex justify-end items-center h-16 bg-gray-200">
      <Link class="mr-16" href="/register?type=candidates">Candidates</Link>
      <Link class="mr-32" href="/register?type=companies">Companies</Link>
    </header>
    <article>
      <slot />
    </article>
  </main>
</template>
