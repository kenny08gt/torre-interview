<template>
    <div
        class="relative flex items-top justify-center min-h-screen bg-torre-black text-torre-white dark:bg-gray-900 sm:items-center sm:pt-0">
        <Genome/>
    </div>
</template>

<script>
import Genome from '@/Pages/Components/Genome'

export default {
    components: {
        Genome
    },
    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        laravelVersion: String,
        phpVersion: String,
    }
}
</script>
