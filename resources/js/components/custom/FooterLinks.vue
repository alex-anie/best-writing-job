<script setup lang="ts">
    interface Items {
        id: number,
        name: string
    }

    defineProps<{
        items: Items[]
    }>();
</script>

<template>
    <div v-for="item in items" :key="item.id">
        <a class="text-[14px] text-white hover:text-teal-400 transition-colors duration-300 ease-in-out" href="#">{{ item.name }}</a>
    </div>
</template>