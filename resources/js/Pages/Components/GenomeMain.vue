<template>
    <Genome :height="height" :style="getComputedStyle">
        <slot>
        </slot>
    </Genome>
</template>

<style scoped>
    .genome-wrapper {

    }
</style>
<script>
import Genome from '@/Pages/Components/Genome'

export default {
    components: {
        Genome
    },

    props: {
        data: Object,
        height: Number
    },
    computed: {
        getComputedStyle() {
            if(!this.height)
                this.height = 120

            return "width: " + this.height + "px;\n" +
                    "height: " + this.height + "px;"
        }
    }
}
</script>
