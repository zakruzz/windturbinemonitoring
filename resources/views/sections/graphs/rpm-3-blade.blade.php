<figure class="highcharts-figure mb-2" wire:ignore>
    <div id="container-graph-rpm3blade"></div>
</figure>
@push('script2')
    <script>
        var graphR3 = Highcharts.chart('container-graph-rpm3blade', {
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
                    text: 'RPM'
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
                {"name":"RPM","data":[],
                    marker: {
                        symbol: 'square',
                    }
                },
            ]

        });

        document.addEventListener('refreshData', function(e) {
            graphR3.xAxis[0].update(
                {
                    categories: e.detail.data_x
                }
            );

            if (e.detail.data_y !== "undefined") {
                graphR3.series[0].update(
                    {
                        data: e.detail.data_r1
                    }
                );
            }
        });
    </script>
@endpush
