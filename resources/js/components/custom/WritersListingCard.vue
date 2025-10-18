<script setup lang="ts">
    import { Link } from '@inertiajs/vue3';
    import ButtonLink from './ButtonLink.vue';
    import { BadgeCheck, MapPin } from 'lucide-vue-next';
</script>

<template>
    <section class="hover:shadow-xl transition-opacity duration-600 ease-in-out relative border border-neutral-300 mt-10 rounded-[5px] py-8 px-8">

    
    <div class="flex gap-x-6">
        <div class="absolute right-8">
            <div>
                <ButtonLink href="#" class="bg-neutral-100 before:bg-neutral-300 hover:bg-neutral-400 py-3 px-6">
                    <span class="text-neutral-800">View Profile</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4 inline-block ml-2 fill-neutral-900" viewBox="0 0 16 17"><path d="M15.5553 0.670898H5.77756C5.53189 0.670898 5.3331 0.86969 5.3331 1.11536C5.3331 1.36102 5.53189 1.55982 5.77756 1.55982H14.4824L0.129975 15.9122C-0.0436504 16.0859 -0.0436504 16.3671 0.129975 16.5407C0.216766 16.6275 0.330516 16.6709 0.444225 16.6709C0.557933 16.6709 0.671641 16.6275 0.758475 16.5407L15.1109 2.18827V10.8931C15.1109 11.1388 15.3097 11.3376 15.5553 11.3376C15.801 11.3376 15.9998 11.1388 15.9998 10.8931V1.11536C15.9998 0.86969 15.801 0.670898 15.5553 0.670898Z"></path></svg>
                </ButtonLink>
            </div>
        </div>
        
        <div class="size-12 rounded-full">
            <img class="rounded-full" src="/logo/lead-writer.png" alt="">
        </div>
        <div>
            <div>
                <Link href="#"> <span class="font-bold text-neutral-900 hover:text-teal-700">Writer Name</span><BadgeCheck class="inline-block fill-teal-600 ml-2 stroke-white size-5" /></Link>
                <p class="text-neutral-500 text-[12px] my-1">Copywriter, SEO Blogger, & Brand Voice Strategist for Herbals and Healthcare Practices</p>
                <div>
                    <MapPin class="inline-block text-neutral-400 mr-2 size-5"  />
                    <span class="text-neutral-600 text-[14px] font-bold">Remote</span>
                </div>
            </div>
        </div>
        </div>

        <div>
            <p class="text-[14px] text-neutral-600 my-4">Combining my pharmaceutical background, copywriting and SEO skills, I choose this niche out of passion - but also because I have an ambitious dream: To become an #InternationalPharmacistCopywriter. I write accurate, original, and compelling copy and</p>
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
    </section>
</template>