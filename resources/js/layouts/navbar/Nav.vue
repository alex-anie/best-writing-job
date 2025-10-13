<script setup lang="ts">
    import ButtonLink from '@/components/custom/ButtonLink.vue';
import NavLinks from './NavLinks.vue';
    import { Link } from '@inertiajs/vue3';
</script>

<template>
    <nav class="bg-teal-800">
        <div class="flex justify-between w-[95%] lg:w-[80%] mx-auto h-18 items-center ">
            <div class="w-[150px] h-[28px]">
                <Link href="/">
                    <img src="/svg/bw-logo-white-long.svg" alt="best writing logo white">
                </Link>
            </div>

            <div>
                <ul class="hidden md:flex gap-x-8">
                    <li>
                        <NavLinks href="/jobs" :active="$page.component === 'Jobs'">Jobs</NavLinks>
                    </li>
                    <li>
                        <NavLinks href="/companies" :active="$page.component === 'Companies'">Companies</NavLinks>
                    </li>
                    <li>
                        <NavLinks href="/writers" :active="$page.component === 'Writers'">Writers</NavLinks>
                    </li>
                    <li>
                        <NavLinks href="/post-a-job" :active="$page.component === 'PostAJob'">Post a Job</NavLinks>
                    </li>
                </ul>
            </div>

            <div class="flex gap-x-8">
                <div>

                    <Link href="/login" class="text-white hover:text-teal-300 transition-colors duration-400 ease-in">Log In</Link>
                </div>
                <div>

                    <!-- <Link class="bg-white py-2 px-4 rounded-[8px] font-[500] text-neutral-800 z-1 relative before:h-full before:w-full before:absolute before:bg-neutral-300 before:rounded-[inherit] before:top-[5px] before:left-0 before:-z-10 before:shadow-2xl"></Link> -->
 
                    <ButtonLink href="/signup" class="bg-white before:bg-neutral-300">
                        Sign Up
                    </ButtonLink>
                </div>
            </div>
        </div>
    </nav>

</template>