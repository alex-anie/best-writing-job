<script setup lang="ts">
    import { Heart} from 'lucide-vue-next';
    import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="flex hover:shadow-xl transition-opacity duration-600 ease-in-out relative gap-x-6 border border-neutral-300 mt-10 rounded-[5px] py-8 px-8">
        <div class="absolute right-8">
            <button class="flex justify-center items-center size-10 rounded-full border border-neutral-300">
                <Heart class="text-neutral-500 size-4"/>
            </button>
        </div>
        
        <div class="size-12 rounded-full">
            <img class="rounded-full" src="/logo/lead-writer.png" alt="">
        </div>
        <div>
            <div>
                <Link href="#" class="hover:text-teal-800 text-[14px]">CD PROJEKT RED</Link>
            </div>

            <div class="space-x-4">
                <span class="bg-neutral-200 py-[2px] px-2 font-bold text-[12px] rounded-[8px] text-neutral-600">Open Projects - 0</span>

            </div>
        </div>
    </div>
</template>