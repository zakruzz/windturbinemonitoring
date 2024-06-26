<figure class="highcharts-figure mb-2" wire:ignore>
    <div id="container-graph-voltage5blade"></div>
</figure>
@push('script2')
    <script>
        var graphV5 = Highcharts.chart('container-graph-voltage5blade', {
            chart: {
                type: 'area',
                panning: true
            },
            title: {
                text: 'Wind Turbine 9 Blades '
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
                    text: 'Voltage (V)'
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
                {"name":"Voltage","data":[],
                    marker: {
                        symbol: 'square',
                    }
                },
            ]

        });

        document.addEventListener('refreshData', function(e) {
            graphV5.xAxis[0].update(
                {
                    categories: e.detail.data_x
                }
            );

            if (e.detail.data_y !== "undefined") {
                graphV5.series[0].update(
                    {
                        data: e.detail.data_v2
                    }
                );
            }
        });
    </script>
@endpush
