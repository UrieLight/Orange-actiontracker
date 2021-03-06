<script>
    require(['c3', 'jquery'], function(c3, $) {
      $(document).ready(function(){
        var chart = c3.generate({
          bindto: '#chart-development-activity', // id of chart wrapper
          data: {
            columns: [
                // each columns data
              ['data1', 0, 5, 1, 2, 7, 5, 6, 8, 24, 7, 12, 5, 6, 3, 2, 2, 6, 30, 10, 10, 15, 14, 47, 65, 55]
            ],
            type: 'area', // default type of chart
            groups: [
              [ 'data1', 'data2', 'data3']
            ],
            colors: {
              'data1': tabler.colors["blue"]
            },
            names: {
                // name of each serie
              'data1': 'Purchases'
            }
          },
          axis: {
            y: {
              padding: {
                bottom: 0,
              },
              show: false,
                tick: {
                outer: false
              }
            },
            x: {
              padding: {
                left: 0,
                right: 0
              },
              show: false
            }
          },
          legend: {
            position: 'inset',
            padding: 0,
            inset: {
                        anchor: 'top-left',
              x: 20,
              y: 8,
              step: 10
            }
          },
          tooltip: {
            format: {
              title: function (x) {
                return '';
              }
            }
          },
          padding: {
            bottom: 0,
            left: -1,
            right: -1
          },
          point: {
            show: false
          }
        });
      });
    });
  </script>