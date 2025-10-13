<script setup lang="ts">
    import { Link } from '@inertiajs/vue3';
</script>

<template>
    <Link class="py-2 px-4 rounded-[8px] font-[500] text-neutral-800 z-1 relative before:h-full before:w-full before:absolute before:rounded-[inherit] before:top-[5px] before:left-0 before:-z-10 before:shadow-2xl"> 
        <slot></slot>
    </Link>
</template>