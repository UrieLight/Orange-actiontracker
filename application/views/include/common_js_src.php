    <!-- Essential javascripts for application to work-->
    <script src="<?= $root_path; ?>/assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?= $root_path; ?>/assets/js/popper.min.js"></script>
    <script src="<?= $root_path; ?>/assets/js/bootstrap.min.js"></script>
	<script src="<?= $root_path; ?>/assets/js/require.min.js"></script>

    <!-- The javascript plugin to display page loading on top-->
    <script src="<?= $root_path; ?>/assets/js/plugins/pace.min.js"></script>

    <script src="<?= $root_path; ?>/assets/js/main.js"></script>

    <!-- Page specific javascripts-->
    <!--script type="text/javascript" src="<= root_path; ?>/assets/js/plugins/chart.js"></script-->
    <script type="text/javascript">
      var data = {
      	labels: ["January", "February", "March", "April", "May"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [65, 59, 80, 81, 56]
      		},
      		{
      			label: "My Second dataset",
      			fillColor: "rgba(151,187,205,0.2)",
      			strokeColor: "rgba(151,187,205,1)",
      			pointColor: "rgba(151,187,205,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(151,187,205,1)",
      			data: [28, 48, 40, 19, 86]
      		}
      	]
      };
      var pdata = [
      	{
      		value: 300,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Complete"
      	},
      	{
      		value: 50,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "In-Progress"
      	}
      ]
      /*
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
	  */
	  
		//   var lineChart =/
    </script>

	<script>
		$(document).ready(function(){
			//$('.bs-component [data-toggle="popover"]').popover();
			//$('.bs-component [data-toggle="tooltip"]').tooltip();
			$('.stat_card').on('click', function(){
				//$('#id_modal_new_action').modal('show');
			});

			$('.stat_card').hover(function() {
				/* Stuff to do when the mouse enters the element */
				//$('.stat_card').css('background-color', '#ccc');
				//console.log("hooo");
			});
			

			//desactiver la surbrillance lors d'un hover off sur l'image d'un contact
			$('.service_img').mouseout(function() {
				/* Act on the event */

				// $(this).next().children().css('color', '#000');
			});
		});
    </script>
    <!-- Google analytics script->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script-->

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