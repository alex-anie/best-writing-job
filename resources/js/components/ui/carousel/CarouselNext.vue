<script setup lang="ts">
import type { WithClassAsProps } from "./interface"
import { ChevronRight } from "lucide-vue-next"
import { cn } from "@/lib/utils"
import { Button } from '@/components/ui/button'
import { useCarousel } from "./useCarousel"

const props = defineProps<WithClassAsProps>()

const { orientation, canScrollNext, scrollNext } = useCarousel()
</script>

<template>
  <Button
    :disabled="!canScrollNext"
    :class="cn(
      'touch-manipulation absolute h-12 w-12 rounded-full p-0 hover:bg-teal-950 group shadow-2xl',
      orientation === 'horizontal'
        ? '-right-12 top-1/2 -translate-y-1/2'
        : '-bottom-12 left-1/2 -translate-x-1/2 rotate-90',
      props.class,
    )"
    variant="outline"
    @click="scrollNext"
  >
    <slot>
      <ChevronRight class="h-10 w-10 text-current group-hover:text-white" />
      <span class="sr-only">Next Slide</span>
    </slot>
  </Button>
</template>
