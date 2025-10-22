<script setup lang="ts">
import NavLayouts from '@/layouts/navbar/NavLayouts.vue';
import { defineProps } from 'vue';
import ButtonLink from '@/components/custom/ButtonLink.vue';
import Footer from '@/components/custom/Footer.vue';
import { CalendarDays, MapPin, CircleDollarSign, BriefcaseBusiness, Building2, Factory, SearchCheck } from 'lucide-vue-next';

    interface Job {
        id: number,
        job_role: string,
        company_name: string,
        job_type: string,
        experience: string,
        location: string,
        job_category: string,
        logo: string,
        job_description: string,
        salary: string,
        created_at: string
    }

    const props = defineProps<{
        job: Job
    }>();

</script>

<template>
    <NavLayouts>
        <main>
            <header class="w-[80%] h-18 mx-auto flex items-center">
                <nav class="space-x-1 py-8">
                    <a href="/" class="text-neutral-700 border border-neutral-700 py-1 px-2  rounded-[5px] text-[12px]">Home</a>
                    <span>/</span>
                    <a href="/jobs" class="text-neutral-700 border border-neutral-700 py-1 px-2  rounded-[5px] text-[12px]">Jobs</a>
                    <span>/</span>
                    <span class="text-neutral-900 border border-neutral-500 py-1 px-2 rounded-[5px] text-[12px]" >{{ props.job.company_name }}</span>
                </nav>
            </header>

            <article class="bg-slate-200 w-full h-70 flex items-center">
                <section class=" md:flex justify-between w-[80%] mx-auto">
                    <aside class="">
                        <div class="flex gap-x-4 items-center">
                            <div class="size-12 rounded-full">
                                <img class="rounded-full" 
                                    :src=" props.job.logo ? job.logo
                                    : `https://raw.githubusercontent.com/alex-anie/best-writing-job/refs/heads/main/public/logo/placeholder.png`
                                        " 
                                :alt="job.logo ? `${job.company_name} logo`: 'brocken image logo'"
                                >
                            </div>

                            <h2 class="font-bold text-[14px] text-neutral-900">{{ job.company_name }}</h2>

                        </div>

                        <div>
                            <p class="text-teal-800 text-xl font-bold my-4">{{ job.job_role }}</p>
                        </div>

                        <div class="space-x-4">
                                <span class="bg-neutral-300 py-[2px] px-2 font-bold text-[12px] rounded-[8px] text-neutral-600">
                                    {{ new Date(job.created_at).toLocaleDateString('en-US', {
                                        year: 'numeric',
                                        month: 'long',
                                        day: 'numeric'
                                    })}}
                                </span>
                                <a class="bg-neutral-300 py-[2px] px-2 font-bold text-[12px] rounded-[8px] text-neutral-600" href="/job_type">{{ job.job_type }}</a>
                                <span class="bg-neutral-300 py-[2px] px-2 font-bold text-[12px] rounded-[8px] text-neutral-600">{{ job.experience }}</span>
                                <a class="bg-neutral-300 py-[2px] px-2 font-bold text-[12px] rounded-[8px] text-neutral-600" href="/location">{{ job.location }}</a>
                                <a class="bg-neutral-300 py-[2px] px-2 font-bold text-[12px] rounded-[8px] text-neutral-600" href="/category">{{ job.job_category }}</a>
                            
                        </div>
                    </aside>

                    <aside class="mt-4">
                        <div>
                            <p class="text-neutral-600 text-[12px] my-2">Apply before: {{ new Date(props.job.created_at).toLocaleDateString('en-US', {
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

            <!-- Job Description and Details -->
            <article class="w-[80%] mx-auto my-6">
                <section class="grid grid-cols-6 gap-x-12">
                    <aside class="col-span-4">
                        <div>
                            <p class="text-neutral-500 text-[14px]"> {{ props.job.job_description }}</p>
                        </div>
                    </aside>

                    <aside class="col-span-2">
                        <div class="bg-neutral-100 border-[1px] border-neutral-400 rounded-xl p-4 mb-8">
                            <h1 class="font-bold mb-4">Job Details</h1>
                            <div class="flex flex-col gap-y-1">
                                <div>
                                    <h3><CalendarDays class="inline-block size-4 mr-1 text-neutral-400" /><span class="text-[14px] font-bold text-neutral-600">Date Posted</span></h3>
                                    <p class="text-[12px] text-neutral-500 ml-5">{{ new Date(props.job.created_at).toLocaleDateString('en-US', {
                                        month: 'long',
                                        day: 'numeric',
                                        year: 'numeric'
                                    }) }}</p>
                                </div>
                                <div>
                                    <h3><MapPin class="inline-block size-4 mr-1 text-neutral-400" /><span class="text-[14px] font-bold text-neutral-600">Job Location</span></h3>
                                    <p class="text-[12px] text-neutral-500 ml-5">{{ props.job.location }}</p>
                                </div>
                                <div>
                                    <h3><CircleDollarSign class="inline-block size-4 mr-1 text-neutral-400" /><span class="text-[14px] font-bold text-neutral-600">Salary</span></h3>
                                    <p class="text-[12px] text-neutral-500 ml-5"> {{ props.job.salary }}</p>
                                </div>
                                <div>
                                    <h3><BriefcaseBusiness class="inline-block size-4 mr-1 text-neutral-400" /><span class="text-[14px] font-bold text-neutral-600">Job Source</span></h3>
                                    <p class="text-[12px] text-neutral-500 ml-5">Linkedin</p>
                                </div>
                            </div>
                        </div>
                        <!-- Company -->
                        <div class="bg-neutral-100 border-[1px] border-neutral-400 rounded-xl p-4">
                            <h1 class="font-bold mb-4">Hiring Company</h1>

                            <div class="flex items-center gap-x-2 mb-4">
                                <div class="rounded-full size-8">
                                    <img class="size-full rounded-full bg-cover bg-center" :src="props.job.logo ? props.job.logo : 'https://raw.githubusercontent.com/alex-anie/best-writing-job/refs/heads/main/public/logo/placeholder.png' " :alt="props.job.logo ? `${props.job.company_name} logo` : 'Brocken Image logo'">
                                </div>
                                <p class="font-bold text-[12px] text-teal-800">{{ props.job.company_name }}</p>
                            </div>

                            <div class="mb-4 text-[12px] text-neutral-600">
                                <p>{{ props.job.job_description }}</p>
                            </div>

                            <div class="flex flex-col gap-y-1">
                                <div>
                                    <h3><Building2 class="inline-block size-4 mr-1 text-neutral-400" /><span class="text-[14px] font-bold text-neutral-600">HQ Address</span></h3>
                                    <p class="text-[12px] text-neutral-500 ml-5">{{ props.job.location }}</p>
                                </div>
                                <div>
                                    <h3><Factory class="inline-block size-4 mr-1 text-neutral-400" /><span class="text-[14px] font-bold text-neutral-600">Industry</span></h3>
                                    <p class="text-[12px] text-neutral-500 ml-5"> {{ props.job.job_category }}</p>
                                </div>
                                <div>
                                    <h3><SearchCheck class="inline-block size-4 mr-1 text-neutral-400" /><span class="text-[14px] font-bold text-neutral-600">Founded</span></h3>
                                    <p class="text-[12px] text-neutral-500 ml-5">Not specified</p>
                                </div>
                            </div>
                        </div>
                    </aside>
                </section>
            </article>
        </main>

        <Footer />
    </NavLayouts>
</template>