<script setup lang="ts">
    import { Link } from '@inertiajs/vue3';

    defineProps<{
        href: string,
        active: boolean
    }>();
</script>

<template>
    <Link 
        :href="href"
        :class="[ active ? 'text-teal-300' : 'text-white', 'hover:text-teal-300 transition-colors duration-400 ease-in']"
        >
        <slot></slot>
    </Link>
</template>