<template>
    <div
        class="grid grid-cols-3 relative flex items-top justify-center bg-torre-black text-torre-white  sm:items-center sm:pt-0 h-screen background-image">
        <div class="left" style="max-width: 280px; margin-left: auto; margin-right: 80px;">
            <div class="professional-headline">
                <WorkExperience :jobs="user.jobs"/>
            </div>
        </div>
        <div class="middle">
            <GenomeMain class="genome-main " :height="400">
                <div class="z-10 user-wrapper">
                    <GenomeUser :data="user"/>
                    <p class="pt-5 w-2 cursor-default">{{ user.person.summaryOfBio }}</p>
                    <a :href="'https://torre.co/en/' + user.person.publicId" target="_blank" class="hover:underline">...more</a>
                </div>

            </GenomeMain>
            <div class="professional-headline text-opacity-75 hover:text-opacity-100 mt-3 cursor-default text-center">
                {{ user.person.professionalHeadline }}
            </div>
        </div>
        <div class="right">
            <perfect-scrollbar>
            <Personality :user="user" class="torre-shadow"/>
            <Compare :user="user" class="torre-shadow mt-2"/>
            </perfect-scrollbar>
        </div>
    </div>

    <!--    <BackgroundProfile :user="user"></BackgroundProfile>-->
</template>
<style>
.torre-shadow {
    -webkit-box-shadow: -2px -2px 6px #383b40, 6px 6px 6px rgb(0 0 0 / 24%);
    box-shadow: -2px -2px 6px #383b40, 6px 6px 6px rgb(0 0 0 / 24%);
}
.background-image {
    background-image: url(/imgs/bk.jpg);
    background-size: cover;
    background-position: center center;
    height: calc(100vh - 54px);
}
.ps {
    height: 80vh;
}
</style>
<style scoped>


.professional-headline {
    max-width: 400px;
    margin: 0.75em auto;
}

.user-wrapper {
    width: 250px;
    margin: auto;
}

.user-wrapper p {
    overflow: hidden;
    width: 250px;
    max-height: 140px;
    margin-top: 50px;
}
</style>
<script>
import GenomeUser from '@/Pages/Components/GenomeUser'
import GenomeMain from '@/Pages/Components/GenomeMain'
import Genome from '@/Pages/Components/Genome'
import WorkExperience from "@/Pages/Components/WorkExperience";
import Personality from "@/Pages/Components/Personality";
import Compare from "@/Pages/Components/Compare";
import {PerfectScrollbar} from 'vue3-perfect-scrollbar'

export default {
    components: {
        Personality,
        WorkExperience,
        GenomeUser,
        GenomeMain,
        Genome,
        Compare,
        PerfectScrollbar
    },
    props: {
        user: Object
    },
    data() {
        return {}
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
