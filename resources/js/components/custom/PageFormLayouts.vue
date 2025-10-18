<script setup lang="ts">

    defineProps<{
        heading: string
        paragraph: string
    }>();
</script>

<template>
    <article class="bg-teal-900">
        <section class="w-[80%] mx-auto py-14">
            <aside>
                <h1 class="text-2xl md:text-4xl text-white font-garamond font-bold">{{ heading }}</h1>
                <p class="text-white w-[100%] md:w-[70%] my-4">{{ paragraph }}</p>
            </aside>
            <aside>
                <slot></slot>
            </aside>
        </section>
    </article>
</template>