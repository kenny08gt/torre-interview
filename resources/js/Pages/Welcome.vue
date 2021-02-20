<template>
    <div
        class="relative flex items-top justify-center min-h-screen bg-torre-black text-torre-white  sm:items-center sm:pt-0">
        <GenomeMain class="genome-main" :height="400">
            <div class="z-10 user-wrapper">
                <GenomeUser :data="user"/>
                <p class="w-2">{{ user.person.summaryOfBio }}</p>
            </div>

        </GenomeMain>
    </div>
</template>

<style scoped>
.user-wrapper {
    width: 250px;
    margin: auto;
}
.user-wrapper p {
    overflow: hidden;
    width: 250px;
    height: 165px;
    margin-top: 50px;
}
</style>

<script>
import GenomeUser from '@/Pages/Components/GenomeUser'
import GenomeMain from '@/Pages/Components/GenomeMain'

export default {
    components: {
        GenomeUser,
        GenomeMain
    },
    props: {
        user: Object
    },
    data() {
        return {
        }
    },
    mounted() {
        // console.log(this.user);
        // axios.get(`https://bio.torre.co/api/bios/${this.userSlug}`)
        //     .then(function (response) {
        //         // handle success
        //         console.log(response);
        //         this.user.profile_pic = response.person.picture;
        //         this.user.name = response.person.name;
        //         this.user.country = response.location.country;
        //     })
        //     .catch(function (error) {
        //         // handle error
        //         console.log(error);
        //     })
        //     .then(function () {
        //         // always executed
        //     });
    }
}
</script>
