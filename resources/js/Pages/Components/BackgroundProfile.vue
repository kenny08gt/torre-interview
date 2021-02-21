<template>
    <div class="background-image" :style="'background-image: url(' + user.person.picture+');'"></div>
</template>
<style scoped>
.background-image {
    height: 100vh;
    width: 100vw;
    position: absolute;
    left: 0;
    right: 0;
    background-size: cover;
    background-position: center;
    filter: blur(18px);
    z-index: 0;
}
</style>
<script>
export default {
    props: {
        user: Object,
    },
    mounted() {
        console.log(this.user);
    }
}
</script>
