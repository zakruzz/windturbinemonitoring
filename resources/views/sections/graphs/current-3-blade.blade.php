<figure class="highcharts-figure mb-2" wire:ignore>
    <div id="container-graph-current3blade"></div>
</figure>
@push('script2')
    <script>
        var graphC3 = Highcharts.chart('container-graph-current3blade', {
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
            graphC3.xAxis[0].update(
                {
                    categories: e.detail.data_x
                }
            );

            if (e.detail.data_y !== "undefined") {
                graphC3.series[0].update(
                    {
                        data: e.detail.data_c1
                    }
                );
            }
        });
    </script>
@endpush
