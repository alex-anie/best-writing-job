<script setup lang="ts">
    import { Link } from '@inertiajs/vue3';
    import ButtonLink from './ButtonLink.vue';
    import { BadgeCheck, MapPin } from 'lucide-vue-next';
    import { show } from '@/actions/App/Http/Controllers/WriterController';

    interface Writer {
        id: number
        writer_name: string,
        bio: string,
        email: string,
        experience: string,
        job_category: string,
        job_role: string,
        job_type: string,
        location: string,
        logo: string,
        salary: string,
        created_at: string
    }

    defineProps<{
        writers: Writer
    }>();
</script>

<template>
    <section class="hover:shadow-xl transition-opacity duration-600 ease-in-out relative border border-neutral-300 mt-10 rounded-[5px] py-8 px-8">
    <div class="flex gap-x-6">
        <div class="absolute right-8">
            <div>
                <ButtonLink :href="show(writers.id)" class="bg-neutral-100 before:bg-neutral-300 hover:bg-neutral-400 py-3 px-6">
                    <span class="text-neutral-800">View Profile</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4 inline-block ml-2 fill-neutral-900" viewBox="0 0 16 17"><path d="M15.5553 0.670898H5.77756C5.53189 0.670898 5.3331 0.86969 5.3331 1.11536C5.3331 1.36102 5.53189 1.55982 5.77756 1.55982H14.4824L0.129975 15.9122C-0.0436504 16.0859 -0.0436504 16.3671 0.129975 16.5407C0.216766 16.6275 0.330516 16.6709 0.444225 16.6709C0.557933 16.6709 0.671641 16.6275 0.758475 16.5407L15.1109 2.18827V10.8931C15.1109 11.1388 15.3097 11.3376 15.5553 11.3376C15.801 11.3376 15.9998 11.1388 15.9998 10.8931V1.11536C15.9998 0.86969 15.801 0.670898 15.5553 0.670898Z"></path></svg>
                </ButtonLink>
            </div>
        </div>
        
        <div class="size-12 rounded-full">
            <img 
                class="rounded-full" 
                :src="
                    writers.logo ? writers.logo : `https://raw.githubusercontent.com/alex-anie/best-writing-job/refs/heads/main/public/logo/placeholder.png`
                " 
                :alt="writers.logo ? `${writers.writer_name} profile image` : 'brocken image logo' "
                >
        </div>
        <div>
            <div>
                <Link href="#"> <span class="font-bold text-neutral-900 hover:text-teal-700">{{ writers.writer_name  }}</span><BadgeCheck class="inline-block fill-teal-600 ml-2 stroke-white size-5" /></Link>
                <p class="text-neutral-500 text-[12px] my-1">{{ writers.job_role }}</p>
                <div>
                    <MapPin class="inline-block text-neutral-400 mr-2 size-5"  />
                    <span class="text-neutral-600 text-[14px] font-bold">{{ writers.location }}</span>
                </div>
            </div>
        </div>
        </div>

        <div>
            <p class="text-[14px] text-neutral-600 my-4">{{ writers.bio.slice(0, 200) }} ...</p>
            <div class="space-x-4">
                <span class="bg-neutral-200 py-[2px] px-2 font-bold text-[12px] rounded-[8px] text-neutral-600">{{ new Date(writers.created_at).toLocaleDateString('en-US', {
                    month : 'long',
                    day: 'numeric',
                    year: 'numeric'
                }) }}</span>
                <a class="bg-neutral-200 py-[2px] px-2 font-bold text-[12px] rounded-[8px] text-neutral-600" href="">{{ writers.job_type }}</a>
                <span class="bg-neutral-200 py-[2px] px-2 font-bold text-[12px] rounded-[8px] text-neutral-600">{{ writers.experience }}</span>
                <a class="bg-neutral-200 py-[2px] px-2 font-bold text-[12px] rounded-[8px] text-neutral-600" href="">{{ writers.job_category }}</a>
            </div>
        </div>
    </section>
</template>