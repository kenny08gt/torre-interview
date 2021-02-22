<template>
    <div class="mt-4">
        <h2 class="ml-4">Compare stats with another user</h2>
<!--        TODO: this could be calculated automatically with the logged in user-->
        <p class="text-sm ml-4">Do you wonder were you stand next to another professional?</p>
        <form v-on:submit.prevent="searchUser">
            <input v-model="userSearch"  type="text" class="ml-4" id="" name="" placeholder="Type the username or place the genome url">
        </form>
        <br>
        <apexchart
            class="text-torre-black"
            width="400"
            type="bar"
            :stacked="true"
            :options="chartOptions"
            :series="series"
        ></apexchart>
    </div>
</template>

<style scoped>
    input {
        margin-top: 10px;
        background: transparent;
        font-size: 12px;
        width: 90%;
    }
</style>

<script>
import VueApexCharts from "vue3-apexcharts";
export default {
    components: {
        apexchart: VueApexCharts,
    },
    props: {
        user: Object
    },
    data: function () {
        return {
            userSearch: '',
            labels: [],
            traits: [],
            chartOptions: {
                chart: {
                    id: "traits",
                    type: 'bar',
                    height: 400,
                    stacked: false,
                    toolbar: {
                        show: true
                    },
                    zoom: {
                        enabled: true
                    },
                    responsive: [{
                        breakpoint: 480,
                        options: {
                            legend: {
                                position: 'bottom',
                                offsetX: -10,
                                offsetY: 0
                            }
                        }
                    }],
                },
                xaxis: {
                    categories: [],
                    labels: {
                        style: {
                            colors: '#ffffffe6',
                        }
                    },
                },
                yaxis: {
                    labels: {
                        style: {
                            colors: '#ffffffe6',
                        }
                    }
                },
                legend: {
                    labels: {
                        colors: '#ffffffe6'
                    }
                },


            },
            series:
                [
                    {
                        name: "Media",
                        data: [],
                    },
                    {
                        name: "Me",
                        data: [],
                    },
                ],
        };
    },
    methods: {
        searchUser(ev) {
            ev.preventDefault();
            console.log('search user ****');
            console.log(this.userSearch);
            axios(route('users.compare.traits', {'user_slug': this.userSearch, 'user_slug2': this.user.person.publicId} )).then((data) => {
                console.log(data);
                let serie_search = [];
                let serie_me = [];
                let labels = [];
                Object.keys(data.data.traits).forEach((key) => {
                    let trait = data.data.traits[key];
                    serie_search.push(trait.value[0]);
                    serie_me.push(trait.value[1]);
                    labels.push(trait.label);
                });
                this.series = [
                    {
                        name: this.userSearch,
                        data: serie_search,
                    },
                    {
                        name: this.user.person.publicId,
                        data: serie_me,
                    }
                ];

                this.chartOptions = {
                    xaxis: {
                        categories: labels
                    }
                };
            }).catch((error) => {
                console.log(error);
                alert('Something went wrong, please try another user.');
            })
        }
    }
}
</script>
