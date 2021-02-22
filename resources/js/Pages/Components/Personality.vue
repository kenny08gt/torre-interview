<template>
    <div>
        <h2>Personality traits</h2>
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
<script>
import VueApexCharts from "vue3-apexcharts";

export default {
    components: {
        apexchart: VueApexCharts,
    },
    props: {
        user: Object
    },
    mounted() {
        axios(route('users.traits', this.user.person.publicId)).then((data) => {
            console.log(data.data.traits);
            let serie_me = [];
            let serie_median = [];
            let labels = [];
            Object.keys(data.data.traits).forEach((key) => {
                let trait = data.data.traits[key];
                serie_me.push(trait.value);
                serie_median.push(trait.median ? trait.median : 0);
                labels.push(trait.label);
            });

            this.series = [
                {
                    name: this.user.person.name,
                    data: serie_me,
                },
                {
                    name:'Median',
                    data: serie_median,
                }
            ];

            this.chartOptions = {
                xaxis: {
                    categories: labels
                }
            };
        }).catch((error) => console.log(error))
    },
    data: function () {
        return {
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
    }
    ,
}
</script>
