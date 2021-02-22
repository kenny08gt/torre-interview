<template>
    <div
        class=" relative  items-top justify-center bg-torre-black text-torre-white  sm:items-center sm:pt-0 " style="height: calc(100vh - 54px)">
        <div class="banner"></div>
       <div class="p-10 torre-shadow rounded bg-torre-black m-auto job-wrapper">
           <h1>What is your <strong>dream</strong> job?</h1>
<!--           <h1 d>What is your <strong>fulfilling</strong> job?</h1>-->
<!--           <h1>What is your <strong>fulfilling</strong> job?</h1>-->
           <form v-on:submit.prevent="searchJob">
            <input type="text" class="" id="" name="" v-model="jobSearch" placeholder="Search">
           </form>
           <a :href=" route('genome', 'torrenegra')" class="mt-3 hover:underline pt-3">Take a look at the genome</a>
       </div>
    </div>

<!--    <BackgroundProfile :user="user"></BackgroundProfile>-->
</template>
<style>
.background-image {
    background-image: url(/imgs/bk.jpg);
    background-size: cover;
    background-position: center center;
    height: calc(100vh - 54px);
}
input {
    background-color: transparent !important;
    border: none;
    border-left: 1px solid var(--torre-white);
    border-bottom: 1px solid var(--torre-white);
    width: 100%;
}
input:focus, input:active {
    outline: none !important;
    box-shadow: none !important;
    border-left: 1px solid var(--torre-green);
    border-bottom: 1px solid var(--torre-green);
}
.banner {
    background-image: url(https://res.cloudinary.com/torre-technologies-co/image/upload/q_auto,c_fit,w_2000/v1593109931/dev/landing/uqngfnzme7cvvfovw8aw.jpg);
    background-size: cover;
    background-position: center center;
    height: 446px;
}
.torre-shadow {
    -webkit-box-shadow: -2px -2px 6px #383b40, 6px 6px 6px rgb(0 0 0 / 24%);
    box-shadow: -2px -2px 6px #383b40, 6px 6px 6px rgb(0 0 0 / 24%);
}

</style>
<style scoped>
.job-wrapper {
    width: 50vw;
    height: 25vh;
    z-index: 1;
    margin-top: -14vh;
}

.job-wrapper h1 {
    font-size: 3rem;
}
</style>
<script>

export default {
    components: {
    },
    props: {
    },
    data() {
        return {
            jobSearch: '',
        }
    },
    methods: {
        searchJob() {
            let url = 'https://torre.co/en/search/people?q=%28skill%2Frole%'+this.jobSearch+'.1%20or%20name%'+this.jobSearch+'%20or%20organization%'+this.jobSearch+'%29'
            let win = window.open(url, '_blank');
            win.focus();
        }
    },
    mounted() {

    }
}
</script>
