<script setup lang="ts">
    import { Heart } from 'lucide-vue-next';
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
                <h2 class="font-bold text-xl text-neutral-900">Lead Writer</h2>
                <p class="text-teal-800 text-[14px]">CD PROJEKT RED</p>
            </div>

            <div class="space-x-4">
                <span class="bg-neutral-200 py-[2px] px-2 font-bold text-[12px] rounded-[8px] text-neutral-600">October 13, 2025</span>
                <a class="bg-neutral-200 py-[2px] px-2 font-bold text-[12px] rounded-[8px] text-neutral-600" href="">Full Time</a>
                <span class="bg-neutral-200 py-[2px] px-2 font-bold text-[12px] rounded-[8px] text-neutral-600">Mid-Level</span>
                <a class="bg-neutral-200 py-[2px] px-2 font-bold text-[12px] rounded-[8px] text-neutral-600" href="">Remote (UK)</a>
                <a class="bg-neutral-200 py-[2px] px-2 font-bold text-[12px] rounded-[8px] text-neutral-600" href="">Copywriting</a>
                <a class="bg-neutral-200 py-[2px] px-2 font-bold text-[12px] rounded-[8px] text-neutral-600" href="">
                    <span>Apply Now</span>
                    <svg style="width: 14px; height: 14px; margin-left: 5px; opacity: 0.5;" xmlns="http://www.w3.org/2000/svg" class="size-4 inline-block fill-neutral-900" viewBox="0 0 256 256"><path d="M192,64V168L88,64Z" opacity="0.2"></path><path d="M192,56H88a8,8,0,0,0-5.66,13.66L128.69,116,58.34,186.34a8,8,0,0,0,11.32,11.32L140,127.31l46.34,46.35A8,8,0,0,0,200,168V64A8,8,0,0,0,192,56Zm-8,92.69-38.34-38.34h0L107.31,72H184Z"></path></svg>
                </a>
            </div>
        </div>
    </div>
</template>