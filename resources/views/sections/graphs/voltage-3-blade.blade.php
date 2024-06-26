<figure class="highcharts-figure mb-2" wire:ignore>
    <div id="container-graph-voltage3blade"></div>
</figure>
@push('script2')
    <script>
        var graphV3 = Highcharts.chart('container-graph-voltage3blade', {
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
            graphV3.xAxis[0].update(
                {
                    categories: e.detail.data_x
                }
            );

            if (e.detail.data_y !== "undefined") {
                graphV3.series[0].update(
                    {
                        data: e.detail.data_v1
                    }
                );
            }
        });
    </script>
@endpush
