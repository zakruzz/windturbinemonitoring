<figure class="highcharts-figure mb-2" wire:ignore>
    <div id="container-graph-current5blade"></div>
</figure>
@push('script2')
    <script>
        var graphC5 = Highcharts.chart('container-graph-current5blade', {
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
                    text: 'Current (mA)'
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
                {"name":"Current","data":[],
                    marker: {
                        symbol: 'square',
                    }
                },
            ]

        });

        document.addEventListener('refreshData', function(e) {
            graphC5.xAxis[0].update(
                {
                    categories: e.detail.data_x
                }
            );

            if (e.detail.data_y !== "undefined") {
                graphC5.series[0].update(
                    {
                        data: e.detail.data_c2
                    }
                );
            }
        });
    </script>
@endpush
