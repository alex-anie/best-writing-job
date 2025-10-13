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
        </main>
    </NavLayouts>

</template>