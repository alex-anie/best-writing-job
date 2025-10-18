<script setup lang="ts">
    import FormButton from '@/components/custom/FormButton.vue';
    import NavLayouts from '@/layouts/navbar/NavLayouts.vue';
    import { Search } from 'lucide-vue-next';
    import Footer from '@/components/custom/Footer.vue';
    import PageFormLayouts from '@/components/custom/PageFormLayouts.vue';
    import { Form } from '@inertiajs/vue3';
    import WritersListingCard from '@/components/custom/WritersListingCard.vue';
</script>

<template>
    <NavLayouts>
        <main class="">
            <header class="w-[80%] h-18 mx-auto flex items-center">
                <nav class="space-x-1 py-8">
                    <a href="/" class="text-neutral-700 border border-neutral-700 py-1 px-2  rounded-[5px] text-[12px]">Home</a>
                    <span>/</span>
                    <span class="text-neutral-900 border border-neutral-700 py-1 px-2 rounded-[5px] text-[12px]" > {{ $page.component === 'Writers' ? $page.component : '' }}</span>
                </nav>
            </header>

            <!-- Search layout -->
            <PageFormLayouts heading="Writers for Hire" paragraph="Find and hire writers and editors ready to produce blog posts, long-form articles, product descriptions, books, white papers, and more.">
                <Form>
                    <div class="bg-white flex items-center px-8 justify-between h-15 w-[100%] md:w-[70%] rounded-[5px]">
                        <div class="flex">
                            <label class="sr-only" for="search">Search</label>
                            <Search class="inline-block mr-4" />
                            <span>
                                <input type="text" placeholder="Search by task, keyword or topic" class="w-70 border-0 outline-0">
                            </span>
                        </div>

                        <div class="flex items-center gap-x-4">
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
                                <p class="text-neutral-800 text-[14px]">Showing <span>1</span> – <span>20</span> of <span>5875</span> results</p>
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
                        <WritersListingCard />
                    </aside>
                </section>
            </article>
        </main>
    </NavLayouts>

    <Footer />
</template>