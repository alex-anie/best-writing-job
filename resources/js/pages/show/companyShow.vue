<script setup lang="ts">
import NavLayouts from '@/layouts/navbar/NavLayouts.vue';
import { defineProps } from 'vue';
import ButtonLink from '@/components/custom/ButtonLink.vue';
import Footer from '@/components/custom/Footer.vue';
import { MapPin} from 'lucide-vue-next';

    interface Company {
        company_name: string,
        job_role: string,
        logo: string,
        location: string,
        about_company: string,
        open_position: string,
        created_at: string
    }

    const props = defineProps<{
        company: Company
    }>();

</script>

<template>
    <NavLayouts>
        <main>
            <header class="w-[80%] h-18 mx-auto flex items-center">
                <nav class="space-x-1 py-8">
                    <a href="/" class="text-neutral-700 border border-neutral-700 py-1 px-2  rounded-[5px] text-[12px]">Home</a>
                    <span>/</span>
                    <a href="/companies" class="text-neutral-700 border border-neutral-700 py-1 px-2  rounded-[5px] text-[12px]">Companies</a>
                    <span>/</span>
                    <span class="text-neutral-900 border border-neutral-500 py-1 px-2 rounded-[5px] text-[12px]" >{{ props.company.company_name }}</span>
                </nav>
            </header>

            <article class="bg-slate-200 w-full h-70 flex items-center">
                <section class=" md:flex justify-between w-[80%] mx-auto">
                    <aside class="">
                        <div class="flex gap-x-4 items-center">
                            <div class="size-12 rounded-full">
                                <img class="rounded-full" 
                                    :src=" props.company.logo ? props.company.logo
                                    : `https://raw.githubusercontent.com/alex-anie/best-writing-job/refs/heads/main/public/logo/placeholder.png`
                                        " 
                                :alt="props.company.logo ? `${props.company.logo} logo`: 'brocken image logo'"
                                >
                            </div>
                            <h2 class="font-bold text-xl text-neutral-900">{{ props.company.company_name }}</h2>
                        </div>

                        <div class="flex items-center gap-x-2">
                            <MapPin class=" ml-2 text-neutral-500 size-5" />
                            <p class="text-neutral-800 text-[15px] font-bold my-4">{{ props.company.location }}</p>
                        </div>
                    </aside>

                    <aside class="mt-4">
                        <div>
                            <p class="text-neutral-600 text-[12px] my-2">Apply before: {{ new Date(props.company.created_at).toLocaleDateString('en-US', {
                                month: 'long',
                                day: 'numeric',
                                year: 'numeric'
                            }) }}</p>

                            <ButtonLink href="/jobs" class="bg-teal-800 before:bg-teal-950 hover:bg-teal-700 py-2 px-10">
                                <span class="text-white text-[13px]">Apply Now</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4 inline-block ml-2 fill-white"  viewBox="0 0 16 17">
                                <path d="M15.5553 0.670898H5.77756C5.53189 0.670898 5.3331 0.86969 5.3331 1.11536C5.3331 1.36102 5.53189 1.55982 5.77756 1.55982H14.4824L0.129975 15.9122C-0.0436504 16.0859 -0.0436504 16.3671 0.129975 16.5407C0.216766 16.6275 0.330516 16.6709 0.444225 16.6709C0.557933 16.6709 0.671641 16.6275 0.758475 16.5407L15.1109 2.18827V10.8931C15.1109 11.1388 15.3097 11.3376 15.5553 11.3376C15.801 11.3376 15.9998 11.1388 15.9998 10.8931V1.11536C15.9998 0.86969 15.801 0.670898 15.5553 0.670898Z" ></path></svg>
                            </ButtonLink>
                        </div>
                    </aside>
                </section>
            </article>
        </main>

        <Footer />
    </NavLayouts>
</template>