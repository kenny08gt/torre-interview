<template>
    <div
        class="grid grid-cols-3 relative flex items-top justify-center min-h-screen bg-torre-black text-torre-white  sm:items-center sm:pt-0">
        <div class="left">
            <div class="professional-headline">
                <h2 class="m-2 font-bold">Jobs</h2>
                <perfect-scrollbar>
                    <ElementListing v-for="job in user.jobs">
                        <div class="grid grid-cols-2">
                            <div class="logo flex justify-center flex-col">
                                <Genome height="60" class="job-logo">
                                    <img :src="job.organizations[0].picture" alt="">
                                </Genome>
                            </div>
                            <div class="info font-medium text-sm flex justify-center flex-col">
                                {{ job.name }} <br>
                                <strong>{{ job.organizations[0].name }}</strong>
                            </div>
                        </div>
                    </ElementListing>
                </perfect-scrollbar>
            </div>
        </div>
        <div class="middle">
            <GenomeMain class="genome-main " :height="400">
                <div class="z-10 user-wrapper">
                    <GenomeUser :data="user"/>
                    <p class="w-2 cursor-default">{{ user.person.summaryOfBio }}</p>
                    <a :href="'https://torre.co/en/' + user.person.publicId" target="_blank">...more</a>
                </div>

            </GenomeMain>
            <div class="professional-headline text-opacity-75 hover:text-opacity-100 mt-3 cursor-default">
                {{ user.person.professionalHeadline }}
            </div>
        </div>
        <div class="right">

        </div>
    </div>

<!--    <BackgroundProfile :user="user"></BackgroundProfile>-->
</template>

<style scoped>
.job-logo {
    height: 60px;
    width: 60px;
    object-fit: cover;
}

.ps {
    height: 90vh;
}

.job-logo img {
    z-index: 1;
    border: unset;
    border-radius: 0;
    width: calc(60px - calc(var(--border-width) * 2));
    height: calc(60px - calc(var(--border-width) * 2)) !important;
    transform: translateY(var(--border-width));
    clip-path: polygon(45% 1.33975%, 46.5798% .60307%, 48.26352% .15192%, 50% 0, 51.73648% .15192%, 53.4202% .60307%, 55% 1.33975%, 89.64102% 21.33975%, 91.06889% 22.33956%, 92.30146% 23.57212%, 93.30127% 25%, 94.03794% 26.5798%, 94.48909% 28.26352%, 94.64102% 30%, 94.64102% 70%, 94.48909% 71.73648%, 94.03794% 73.4202%, 93.30127% 75%, 92.30146% 76.42788%, 91.06889% 77.66044%, 89.64102% 78.66025%, 55% 98.66025%, 53.4202% 99.39693%, 51.73648% 99.84808%, 50% 100%, 48.26352% 99.84808%, 46.5798% 99.39693%, 45% 98.66025%, 10.35898% 78.66025%, 8.93111% 77.66044%, 7.69854% 76.42788%, 6.69873% 75%, 5.96206% 73.4202%, 5.51091% 71.73648%, 5.35898% 70%, 5.35898% 30%, 5.51091% 28.26352%, 5.96206% 26.5798%, 6.69873% 25%, 7.69854% 23.57212%, 8.93111% 22.33956%, 10.35898% 21.33975%);
    -webkit-clip-path: polygon(45% 1.33975%, 46.5798% .60307%, 48.26352% .15192%, 50% 0, 51.73648% .15192%, 53.4202% .60307%, 55% 1.33975%, 89.64102% 21.33975%, 91.06889% 22.33956%, 92.30146% 23.57212%, 93.30127% 25%, 94.03794% 26.5798%, 94.48909% 28.26352%, 94.64102% 30%, 94.64102% 70%, 94.48909% 71.73648%, 94.03794% 73.4202%, 93.30127% 75%, 92.30146% 76.42788%, 91.06889% 77.66044%, 89.64102% 78.66025%, 55% 98.66025%, 53.4202% 99.39693%, 51.73648% 99.84808%, 50% 100%, 48.26352% 99.84808%, 46.5798% 99.39693%, 45% 98.66025%, 10.35898% 78.66025%, 8.93111% 77.66044%, 7.69854% 76.42788%, 6.69873% 75%, 5.96206% 73.4202%, 5.51091% 71.73648%, 5.35898% 70%, 5.35898% 30%, 5.51091% 28.26352%, 5.96206% 26.5798%, 6.69873% 25%, 7.69854% 23.57212%, 8.93111% 22.33956%, 10.35898% 21.33975%);
    display: flex;
    position: relative;
    margin: auto;
    border: unset;
    border-radius: 0;
    width: calc(60px - calc(var(--border-width) * 2));
    height: calc(60px - calc(var(--border-width) * 2)) !important;
    transform: translateY(var(--border-width));
    background: 0 0 !important;
    -o-object-fit: cover;
    object-fit: cover;
}

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
    height: 143px;
    margin-top: 50px;
}
</style>
<style src="vue3-perfect-scrollbar/dist/vue3-perfect-scrollbar.css"/>
<script>
import ElementListing from '@/Pages/Components/ElementListing'
import GenomeUser from '@/Pages/Components/GenomeUser'
import GenomeMain from '@/Pages/Components/GenomeMain'
import Genome from '@/Pages/Components/Genome'
import BackgroundProfile from '@/Pages/Components/BackgroundProfile'
import {PerfectScrollbar} from 'vue3-perfect-scrollbar'

export default {
    components: {
        GenomeUser,
        GenomeMain,
        Genome,
        ElementListing,
        BackgroundProfile,
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
