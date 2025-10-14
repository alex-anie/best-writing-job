<script setup lang="ts">
import FooterLinks from './FooterLinks.vue'

    const bestWriting = [
        {id:1, name: 'About'},
        {id: 2, name: 'Reviews'},
        {id: 3, name: 'Updates'},
        {id: 4, name: 'LinkedIn'},
        {id: 5, name: 'Twitter (X)'},
        {id: 6, name: 'TikTok'},
        {id: 7, name: 'Instagram'},
        {id: 8, name: 'Facebook'},
        {id: 9, name: 'Contact'}
    ]

    const forWriters = [
        {id: 1, name: 'Membership'},
        {id: 2, name: 'Writing Jobs'},
        {id: 3, name: 'Companies Hiring Writers'},
    ]

    const forBusiness = [
        {id: 1, name: 'Post a Job ($59)'},
        {id: 2, name: 'Writers for Hire'},
        {id: 3, name: 'Writing Services'}
    ]

    const resources = [
        {id: 1, name: 'Newsletter'},
        {id: 2, name: 'Writing Blog'},
        {id: 3, name: 'Hiring Blog'},
        {id: 4, name: 'Writer Interviews'},
        {id: 5, name: 'Best Books'},
        {id: 6, name: 'Writing Wiki'},
        {id: 7, name: 'Job Descriptions'},
    ]
</script>

<template>
    <footer class="bg-teal-800">
        <article class="w-[90%] mx-auto">
            <section class="flex h-12 items-center gap-x-8 border-b-[1px] border-b-teal-600">
                <a href="" class="text-white text-[14px]">Terms of Service</a>
                <a href="" class="text-white text-[14px]">Privacy Policy</a>
                <a href="" class="text-white text-[14px]">Sitemap</a>
            </section>

            <section class="md:flex gap-x-4 ">
                <section class="my-8">
                    <p class="text-white text-[14px]">Best Writing is the all-in-one writing marketplace.</p>
                </section>

                <section class="md:grid md:grid-cols-4 w-full">
                <aside>
                    <h3 class="text-teal-300 pt-8 pb-2">Best Writing</h3>
                    <FooterLinks :items="bestWriting"/>
                </aside>

                <aside>
                    <h3 class="text-teal-300 pt-8 pb-2">For Writers</h3>
                    <FooterLinks :items="forWriters" />
                </aside>

                <aside>
                    <h3 class="text-teal-300 pt-8 pb-2">For Business</h3>
                    <FooterLinks :items="forBusiness" />
                </aside>

                <aside>
                    <h3 class="text-teal-300 pt-8 pb-2">Resources</h3>
                    <FooterLinks :items="resources" />
                </aside>
                </section>
            </section>

            <section class="py-8 mt-10 border-t-[1px] border-t-teal-600">
                <p class="text-white text-[14px]">2020-2025 © Best Writing. Built by Craftled. Standing on the shoulders of giants.</p>
            </section>
        </article>
    </footer>
</template>