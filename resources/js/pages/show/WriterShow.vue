<script setup lang="ts">
import NavLayouts from '@/layouts/navbar/NavLayouts.vue';
import { defineProps } from 'vue';
import ButtonLink from '@/components/custom/ButtonLink.vue';
import Footer from '@/components/custom/Footer.vue';
import { MapPin, NotepadText, Mails, ThumbsUp, Linkedin, Instagram} from 'lucide-vue-next';

    interface Writer {
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

    const props = defineProps<{
        writer: Writer
    }>();

</script>

<template>
    <NavLayouts>
        <main>
            <header class="w-[80%] h-18 mx-auto flex items-center">
                <nav class="space-x-1 py-8">
                    <a href="/" class="text-neutral-700 border border-neutral-700 py-1 px-2  rounded-[5px] text-[12px]">Home</a>
                    <span>/</span>
                    <a href="/writers" class="text-neutral-700 border border-neutral-700 py-1 px-2  rounded-[5px] text-[12px]">Writers</a>
                    <span>/</span>
                    <span class="text-neutral-900 border border-neutral-500 py-1 px-2 rounded-[5px] text-[12px]" >{{ props.writer.writer_name }}</span>
                </nav>
            </header>

            <article class="bg-slate-200 w-full h-70 flex items-center">
                <section class="w-[80%] mx-auto">
                    <aside>
                        <div class="flex gap-x-6 items-center">
                            <div class="size-24 rounded-full">
                                <img 
                                    :src="props.writer.logo ? props.writer.logo : `https://raw.githubusercontent.com/alex-anie/best-writing-job/refs/heads/main/public/logo/placeholder.png`" 
                                    :alt="props.writer.logo ? `${props.writer.writer_name} logo` : 'brocken image'"
                                    class="size-full rounded-full"
                                >
                            </div>
                            <div class="flex flex-col gap-y-1">
                                <h1 class="font-bold text-neutral-800">{{ props.writer.writer_name }}</h1>
                                <p class="text-neutral-500 text-[13px]">{{ props.writer.job_role }}</p>
                                <span class="flex items-center gap-x-2">
                                    <MapPin class="size-4 text-neutral-400" />
                                    <span class="text-[14px] text-neutral-700 font-bold">{{ props.writer.location }}</span>
                                </span>
                            </div>
                        </div>
                    </aside>
                </section>
            </article>

            <article>
                <section class="md:grid md:grid-cols-6 md:gap-x-12 w-[80%] mx-auto my-8">
                    <aside class="col-span-4">
                        <h1 class="text-neutral-800 font-bold">About Writer</h1>
                        <p class="text-neutral-600 text-[12px]">{{ props.writer.bio }}</p>
                    </aside>
                    <aside class="col-span-2">
                        <div class="bg-neutral-100 border-[1px] border-neutral-400 rounded-xl p-4 mb-8">
                            <h1 class="font-bold mb-4">Overview</h1>
                            <div class="flex flex-col gap-y-1">
                                <div>
                                    <h3><MapPin class="inline-block size-4 mr-1 text-neutral-400" /><span class="text-[14px] font-bold text-neutral-600"> Preferred Job Location</span></h3>
                                    <p class="text-[12px] text-neutral-500 ml-5">{{ props.writer.location }}</p>
                                </div>
                                <div>
                                    <h3><NotepadText class="inline-block size-4 mr-1 text-neutral-400" /><span class="text-[14px] font-bold text-neutral-600">Type</span></h3>
                                    <p class="text-[12px] text-neutral-500 ml-5"> {{ props.writer.job_category }}</p>
                                </div>
                                <div>
                                    <h3><Mails class="inline-block size-4 mr-1 text-neutral-400" /><span class="text-[14px] font-bold text-neutral-600">Email</span></h3>
                                    <p class="text-[12px] text-neutral-500 ml-5"> {{ props.writer.email }}</p>
                                </div>
                                <div>
                                    <h3><ThumbsUp class="inline-block size-4 mr-1 text-neutral-400" /><span class="text-[14px] font-bold text-neutral-600">Socials</span></h3>
                                    <p class="text-[12px] text-neutral-500 ml-5">
                                        <Linkedin class="inline-block size-4 mr-1 text-neutral-400" />
                                        <Instagram class="inline-block size-4 mr-1 text-neutral-400" />
                                    </p>
                                </div>
                                <div class="my-4">
                                    <ButtonLink href="#" class="bg-teal-700 before:bg-neutral-900 hover:bg-teal-800 py-3 px-6">
                                        <span class="text-white">Contact Me</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4 inline-block ml-2 fill-white" viewBox="0 0 16 17">
                                        <path d="M15.5553 0.670898H5.77756C5.53189 0.670898 5.3331 0.86969 5.3331 1.11536C5.3331 1.36102 5.53189 1.55982 5.77756 1.55982H14.4824L0.129975 15.9122C-0.0436504 16.0859 -0.0436504 16.3671 0.129975 16.5407C0.216766 16.6275 0.330516 16.6709 0.444225 16.6709C0.557933 16.6709 0.671641 16.6275 0.758475 16.5407L15.1109 2.18827V10.8931C15.1109 11.1388 15.3097 11.3376 15.5553 11.3376C15.801 11.3376 15.9998 11.1388 15.9998 10.8931V1.11536C15.9998 0.86969 15.801 0.670898 15.5553 0.670898Z"></path></svg>
                                    </ButtonLink>
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