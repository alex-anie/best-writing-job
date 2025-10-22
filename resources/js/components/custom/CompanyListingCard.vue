<script setup lang="ts">
    import { Heart} from 'lucide-vue-next';
    import { Link } from '@inertiajs/vue3';

    interface Companies {
        company_name: string,
        job_role: string,
        logo: string,
        location: string,
        about_company: string,
        open_position: string
    }

    defineProps<{
        companies: Companies
    }>();
</script>

<template>
    <div class="flex hover:shadow-xl transition-opacity duration-600 ease-in-out relative gap-x-6 border border-neutral-300 mt-10 rounded-[5px] py-8 px-8">
        <div class="absolute right-8">
            <button class="flex justify-center items-center size-10 rounded-full border border-neutral-300">
                <Heart class="text-neutral-500 size-4"/>
            </button>
        </div>
        
        <div class="size-12 rounded-full">
            <img 
                class="rounded-full" 
                :src="
                    companies.logo ? companies.logo : `https://raw.githubusercontent.com/alex-anie/best-writing-job/refs/heads/main/public/logo/placeholder.png` 
                " 
                :alt="companies.logo ? `${companies.company_name} logo` : 'brocken Image Logo'"
            >
        </div>
        <div>
            <div>
                <Link href="#" class="text-teal-800 hover:text-teal-500 font-bold text-xl">{{ companies.company_name }}</Link>
                <p class="text-neutral-700">{{ companies.job_role }}</p>
            </div>

            <div class="space-x-4">
                <span class="bg-neutral-200 py-[2px] px-2 font-bold text-[10px] rounded-[8px] text-neutral-600">Open Position</span>
                <span :class="[`p-1 font-bold text-[10px] rounded-full`, companies.open_position === 'YES' ? 'bg-teal-200 text-teal-600' : 'bg-red-200 text-red-600' ]">{{ companies.open_position }}</span>
                <span class="text-[14px]">{{ companies.location }}</span>
            </div>
        </div>
    </div>
</template>