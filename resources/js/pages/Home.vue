<script setup lang="ts">
import ButtonLink from '@/components/custom/ButtonLink.vue';
import Carousel from '@/components/ui/carousel/Carousel.vue';
import CarouselContent from '@/components/ui/carousel/CarouselContent.vue';
import CarouselItem from '@/components/ui/carousel/CarouselItem.vue';
import CarouselNext from '@/components/ui/carousel/CarouselNext.vue';
import CarouselPrevious from '@/components/ui/carousel/CarouselPrevious.vue';
import NavLayouts from '@/layouts/navbar/NavLayouts.vue';
import { Head } from '@inertiajs/vue3';
import Autoplay from 'embla-carousel-autoplay';
import Footer from '@/components/custom/Footer.vue';
import { Heart } from 'lucide-vue-next';

const carouselLogos = [
    {id: 1, path: "/svg/hubspot.svg", name: "hubspot logo"},
    {id: 2, path: "/svg/sunsama.svg", name: "sunsama logo"},
    {id: 3, path: "/svg/thinkific.svg", name: "thinkific logo"},
    {id: 4, path: "/svg/netsuite.svg", name: "netsuite logo"},
    {id: 5, path: "/svg/chameleon.svg", name: "chameleon logo"},
    {id: 6, path: "/svg/blinkist.svg", name: "blinkist logo"},
    {id: 7, path: "/svg/elevenwriting.svg", name: "elevenwriting logo"},
    {id: 8, path: "/logo/37signals.png", name: "37signals logo"},
]

</script>

<template>
    <Head title="Best Writing - The All-In-One Writing Marketplace" />

    <NavLayouts>
        <main>
            <!-- Hero section -->
            <article>
                <section class="md:bg-[url('/svg/multiplr-writters-profile-pic.svg')] bg-no-repeat bg-center bg-cover flex flex-col mt-12 md:mt-0  md:justify-center items-center gap-y-12 md:h-screen">
                    <h2 class="font-garamond text-4xl md:text-6xl font-bold text-neutral-800">✍️ The All-In-One <br /> Writing Marketplace</h2>
                    <p class="text-neutral-600 w-[90%] md:w-[70%] lg:w-[60%] text-center">Find the best writing jobs and freelance projects in one place.Discover, hire and work directly with the best writers, editors, and content creators.</p>
                    <div class="">
                        <ButtonLink class="bg-teal-800 before:bg-teal-950 hover:bg-teal-700">
                        <svg aria-hidden="true" class="size-4 inline-block mr-4 fill-white" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M136.6 138.79a64.003 64.003 0 0 0-43.31 41.35L0 460l14.69 14.69L164.8 324.58c-2.99-6.26-4.8-13.18-4.8-20.58 0-26.51 21.49-48 48-48s48 21.49 48 48-21.49 48-48 48c-7.4 0-14.32-1.81-20.58-4.8L37.31 497.31 52 512l279.86-93.29a64.003 64.003 0 0 0 41.35-43.31L416 224 288 96l-151.4 42.79zm361.34-64.62l-60.11-60.11c-18.75-18.75-49.16-18.75-67.91 0l-56.55 56.55 128.02 128.02 56.55-56.55c18.75-18.75 18.75-49.15 0-67.91z"></path></svg>
                        <span class="text-white">Become a Member</span>
                    </ButtonLink>
                    </div>
                </section>

                
            </article>

            <!-- Carousel -->
            <article class="w-[90%] md:w-[80%] mx-auto">
                <section>
                    <h3 class="text-neutral-700 text-xl text-center mt-10 md:mt-0">Trusted by the world’s best</h3>
                </section>

                <section>
                    <Carousel :plugins="[Autoplay({delay: 3000})]" :opts="{align : 'center', loop: true}">
                        <CarouselContent class="-ml-4 my-10">
                            <CarouselItem :class="['opacity-80 hover:opacity-100 transition-opacity duration-500 ease-in']" v-for="logo in carouselLogos" :key="logo.id" class="basis-1/3 md:basis-1/4 lg:basis-1/5 pl-1">
                                <div class="w-[7em]">
                                    <img class="size-full" :src="logo.path" :alt="logo.name"/>
                                </div>
                            </CarouselItem>
                            </CarouselContent>
                        <CarouselPrevious />
                        <CarouselNext />
                    </Carousel>
                </section>
            </article>

            <!-- Job Listings -->
            <article>
                <section class="w-[90%] md:w-[80%] mx-auto">
                    <aside class="flex flex-col gap-y-6">
                        <h3 class="text-xs text-teal-800">For Writers</h3>
                        <h2 class="font-garamond text-4xl font-extrabold text-neutral-800">Latest Writing Jobs</h2>
                        <p class="text-neutral-700 w-[70%]">We source writing jobs from job portals, newsletters, social media, communities and selected partners. With personalized filters you can easily find the jobs you care about.</p>
                    </aside>
                    
                    <aside class="flex flex-col md:flex-row gap-y-12 md:gap-x-8 mt-8">
                        <div>
                            <ButtonLink class="bg-teal-800 before:bg-teal-950 hover:bg-teal-700 py-3 px-6">
                            <span class="text-white">See All Jobs</span>

                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4 inline-block ml-2 fill-white"  viewBox="0 0 16 17"><path d="M15.5553 0.670898H5.77756C5.53189 0.670898 5.3331 0.86969 5.3331 1.11536C5.3331 1.36102 5.53189 1.55982 5.77756 1.55982H14.4824L0.129975 15.9122C-0.0436504 16.0859 -0.0436504 16.3671 0.129975 16.5407C0.216766 16.6275 0.330516 16.6709 0.444225 16.6709C0.557933 16.6709 0.671641 16.6275 0.758475 16.5407L15.1109 2.18827V10.8931C15.1109 11.1388 15.3097 11.3376 15.5553 11.3376C15.801 11.3376 15.9998 11.1388 15.9998 10.8931V1.11536C15.9998 0.86969 15.801 0.670898 15.5553 0.670898Z" ></path></svg>
                        </ButtonLink>
                        </div>

                        <div>
                            <ButtonLink class="bg-neutral-100 before:bg-neutral-300 hover:bg-neutral-400 py-3 px-6">
                                <span class="text-neutral-800">Join Best Writing Today</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4 inline-block ml-2 fill-neutral-900" viewBox="0 0 16 17"><path d="M15.5553 0.670898H5.77756C5.53189 0.670898 5.3331 0.86969 5.3331 1.11536C5.3331 1.36102 5.53189 1.55982 5.77756 1.55982H14.4824L0.129975 15.9122C-0.0436504 16.0859 -0.0436504 16.3671 0.129975 16.5407C0.216766 16.6275 0.330516 16.6709 0.444225 16.6709C0.557933 16.6709 0.671641 16.6275 0.758475 16.5407L15.1109 2.18827V10.8931C15.1109 11.1388 15.3097 11.3376 15.5553 11.3376C15.801 11.3376 15.9998 11.1388 15.9998 10.8931V1.11536C15.9998 0.86969 15.801 0.670898 15.5553 0.670898Z"></path></svg>
                        </ButtonLink>
                        </div>
                    </aside>

                    <aside class="my-10">
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
                    </aside>
                </section>
            </article>
        </main>
    </NavLayouts>

    <Footer />

</template>