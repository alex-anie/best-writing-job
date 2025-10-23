<script setup lang="ts">

    // Components
    import FormButton from '@/components/custom/FormButton.vue';
    import JobListingCard from '@/components/custom/JobListingCard.vue';
    import NavLayouts from '@/layouts/navbar/NavLayouts.vue';
    import Footer from '@/components/custom/Footer.vue';
    import PageFormLayouts from '@/components/custom/PageFormLayouts.vue';
    import Paginator from '@/components/custom/Paginator.vue';

    // Packages
    import { Form, Link } from '@inertiajs/vue3';
    import { defineProps } from 'vue';

    // Icons
    import { Search, Globe, Plus } from 'lucide-vue-next';

    const props = defineProps({
        jobs: {
            type: Object,
            required: true
        }
    })


</script>

<template>
    <NavLayouts>
        <main class="relative">
            <header class="w-[80%] h-18 mx-auto flex items-center">
                <nav class="space-x-1 py-8">
                    <a href="/" class="text-neutral-700 border border-neutral-700 py-1 px-2  rounded-[5px] text-[12px]">Home</a>
                    <span>/</span>
                    <span class="text-neutral-900 border border-neutral-700 py-1 px-2 rounded-[5px] text-[12px]" > {{ $page.component === 'Jobs' ? $page.component : '' }}</span>
                </nav>
            </header>

            <!-- Search layout -->
            <PageFormLayouts heading="Open Writing Jobs" paragraph="Find the best writing opportunities to work home, remote, freelance, full-time, part-time, contract, and internships.">
                <Form>
                    <div class="bg-white flex items-center px-8 justify-between h-15 w-[100%] md:w-[70%] rounded-[5px]">
                        <div class="flex">
                            <label class="sr-only" for="search">Search</label>
                            <Search class="inline-block mr-4" />
                            <span>
                                <input type="text" placeholder="Job title, skills, or company" class="w-70 border-0 outline-0">
                            </span>
                        </div>

                        <div class="flex items-center gap-x-4">
                            <div class="flex items-center">
                                <Globe class="text-neutral-700 size-4" />
                                <label class="sr-only" for="select-location">Choose a Location</label>
                                <select name="location" id="select-location" class="outline-0 border-0">
                                    <option value="">Country, state, or city</option>
                                    <option value="hybrid">Hybrid</option>
                                    <option value="onsite">Onsite</option>
                                    <option value="australia">Remove (Australia)</option>
                                    <option value="canada">Remove (Canada)</option>
                                    <option value="europe">Remove (Europe)</option>
                                    <option value="india">Remove (India)</option>
                                    <option value="pacific">Remove (Pacific)</option>
                                    <option value="uk">Remove (UK)</option>
                                    <option value="us-canada">Remove (US/Canada)</option>
                                </select>
                            </div>

                            <div>
                                <FormButton class=" before:bg-teal-950 bg-teal-800 hover:bg-teal-700 text-white">
                                    <span>Search</span>
                                </FormButton>    
                            </div>
                        </div>
                    </div>
                </Form>
            </PageFormLayouts>

            <!-- Companies List -->
            <article class="w-[80%] mx-auto mt-8">
                <section>
                    <aside class="flex justify-between">
                        <div>
                            <div class="">
                                <p class="text-neutral-800 text-[14px]">Showing <span>{{ props.jobs.from }}</span> – <span>{{ props.jobs.to }}</span> of <span>{{ props.jobs.total }}</span> results</p>
                            </div>
                        </div>

                        <div>
                            <div class="flex">
                                <label for="select-location" class="sr-only">Sort by companies</label>
                                <select
                                    name="location"
                                    id="select-location"
                                    class="appearance-none border border-neutral-200 bg-white text-neutral-700 text-sm rounded-md py-2 pl-4 pr-8 shadow-sm focus:outline-none focus:ring-2 focus:ring-neutral-300 focus:border-neutral-400 transition-colors duration-200 ease-in cursor-pointer hover:border-neutral-400 hover:bg-neutral-50"
                                >
                                    <option value="">Sort by Default</option>
                                    <option value="newest">Newest</option>
                                    <option value="oldest">Oldest</option>
                                    <option value="random">Random</option>
                                </select>
                            </div>
                        </div>
                    </aside>

                    <aside class="mb-8">
                        <div v-if="props.jobs.data.length > 0">
                            <JobListingCard 
                                v-for="job in props.jobs.data"
                                :key="job.id"
                                :company="job"
                            />
                        </div>

                        <div v-else>
                            <p class="text-neutral-500">No jobs available right now.</p>
                        </div>

                        <!-- Pagination -->
                        <div>
                            <Paginator :links="props.jobs.links" :meta="props.jobs.meta" />
                        </div>
                    </aside>
                </section>
            </article>

            <article>
                <div>
                    <Link href="/create-job" class="fixed right-8 bottom-20 text-white size-12 rounded-full bg-teal-700 flex items-center justify-center hover:bg-teal-800">
                        <Plus />
                    </Link>
                </div>
            </article>
        </main>
    </NavLayouts>

    <Footer />
</template>