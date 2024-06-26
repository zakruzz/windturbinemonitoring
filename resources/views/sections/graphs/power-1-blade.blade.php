<figure class="highcharts-figure mb-2" wire:ignore>
    <div id="container-graph-power1blade"></div>
</figure>
@push('script2')
    <script>
        var graphP1 = Highcharts.chart('container-graph-power1blade', {
            chart: {
                type: 'area',
                panning: true
            },
            title: {
                text: 'Wind Turbine 7 Blades '
            },
            xAxis: {
                title: {
                    text: 'Time'
                },
                scrollbar: {
                    enabled: false
                },
                tickLength: 0
            },
            yAxis: {
                title: {
                    text: 'Power (mW)'
                }
            },

            legend: {
                verticalAlign: 'top',
                y: 0,
                align: 'right'
            },

            scrollbar: {
                enabled: true
            },

            credits: {
                enabled: false
            },

            series: [
                {"name":"Power","data":[],
                    marker: {
                        symbol: 'square',
                    }
                },
            ]

        });

        document.addEventListener('refreshData', function(e) {
            graphP1.xAxis[0].update(
                {
                    categories: e.detail.data_x
                }
            );

            if (e.detail.data_y !== "undefined") {
                graphP1.series[0].update(
                    {
                        data: e.detail.data_p1
                    }
                );
            }
        });
    </script>
@endpush
