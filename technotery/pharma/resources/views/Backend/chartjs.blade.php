@extends('Backend.Partial.master')
@section('main_container')
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="chart_agile">
			<div class="col-md-6 chart_agile_left">
				<div class="chart_agile_top">
					<div class="chart_agile_bottom">
						<div id="graph10"></div>
							<script>
							var week_data = [
							  {"period": "2011 W27", "licensed": 3407, "sorned": 660},
							  {"period": "2011 W26", "licensed": 3351, "sorned": 629},
							  {"period": "2011 W25", "licensed": 3269, "sorned": 618},
							  {"period": "2011 W24", "licensed": 3246, "sorned": 661},
							  {"period": "2011 W23", "licensed": 3257, "sorned": 667},
							  {"period": "2011 W22", "licensed": 3248, "sorned": 627},
							  {"period": "2011 W21", "licensed": 3171, "sorned": 660},
							  {"period": "2011 W20", "licensed": 3171, "sorned": 676},
							  {"period": "2011 W19", "licensed": 3201, "sorned": 656},
							  {"period": "2011 W18", "licensed": 3215, "sorned": 622},
							  {"period": "2011 W17", "licensed": 3148, "sorned": 632},
							  {"period": "2011 W16", "licensed": 3155, "sorned": 681},
							  {"period": "2011 W15", "licensed": 3190, "sorned": 667},
							  {"period": "2011 W14", "licensed": 3226, "sorned": 620},
							  {"period": "2011 W13", "licensed": 3245, "sorned": null},
							  {"period": "2011 W12", "licensed": 3289, "sorned": null},
							  {"period": "2011 W11", "licensed": 3263, "sorned": null},
							  {"period": "2011 W10", "licensed": 3189, "sorned": null},
							  {"period": "2011 W09", "licensed": 3079, "sorned": null},
							  {"period": "2011 W08", "licensed": 3085, "sorned": null},
							  {"period": "2011 W07", "licensed": 3055, "sorned": null},
							  {"period": "2011 W06", "licensed": 3063, "sorned": null},
							  {"period": "2011 W05", "licensed": 2943, "sorned": null},
							  {"period": "2011 W04", "licensed": 2806, "sorned": null},
							  {"period": "2011 W03", "licensed": 2674, "sorned": null},
							  {"period": "2011 W02", "licensed": 1702, "sorned": null},
							  {"period": "2011 W01", "licensed": 1732, "sorned": null}
							];
							Morris.Line({
							  element: 'graph10',
							  data: week_data,
							  xkey: 'period',
							  ykeys: ['licensed', 'sorned'],
							  labels: ['Licensed', 'SORN'],
							  events: [
								'2011-04',
								'2011-08'
							  ]
							});
							</script>

					</div>
				</div>
			</div>
			<div class="col-md-6 chart_agile_right">
				<div class="chart_agile_top">
					<div class="chart_agile_bottom">
						<div id="graph11"></div>
							<script>
							var neg_data = [
							  {"period": "2011-08-12", "a": 100},
							  {"period": "2011-03-03", "a": 75},
							  {"period": "2010-08-08", "a": 50},
							  {"period": "2010-05-10", "a": 25},
							  {"period": "2010-03-14", "a": 0},
							  {"period": "2010-01-10", "a": -25},
							  {"period": "2009-12-10", "a": -50},
							  {"period": "2009-10-07", "a": -75},
							  {"period": "2009-09-25", "a": -100}
							];
							Morris.Line({
							  element: 'graph11',
							  data: neg_data,
							  xkey: 'period',
							  ykeys: ['a'],
							  labels: ['Series A'],
							  units: '%'
							});
							</script>

					</div>
				</div>
			</div>
			<div class="col-md-6 chart_agile_left">
				<div class="chart_agile_top">
					<div class="chart_agile_bottom">
						<div id="graph1"></div>
						<script>
						var nReloads = 0;
						function data(offset) {
						  var ret = [];
						  for (var x = 0; x <= 360; x += 10) {
							var v = (offset + x) % 360;
							ret.push({
							  x: x,
							  y: Math.sin(Math.PI * v / 180).toFixed(4),
							  z: Math.cos(Math.PI * v / 180).toFixed(4)
							});
						  }
						  return ret;
						}
						var graph = Morris.Line({
							element: 'graph1',
							data: data(0),
							xkey: 'x',
							ykeys: ['y', 'z'],
							labels: ['sin()', 'cos()'],
							parseTime: false,
							ymin: -1.0,
							ymax: 1.0,
							hideHover: true
						});
						function update() {
						  nReloads++;
						  graph.setData(data(5 * nReloads));
						  $('#reloadStatus').text(nReloads + ' reloads');
						}
						setInterval(update, 100);
						</script>

					</div>
				</div>
			</div>
			<div class="col-md-6 chart_agile_right">
				<div class="chart_agile_top">
					<div class="chart_agile_bottom">
						<div id="graph4"></div>
						<script>
							Morris.Donut({
							  element: 'graph4',
							  data: [
								{value: 70, label: 'foo', formatted: 'at least 70%' },
								{value: 15, label: 'bar', formatted: 'approx. 15%' },
								{value: 10, label: 'baz', formatted: 'approx. 10%' },
								{value: 5, label: 'A really really long label', formatted: 'at most 5%' }
							  ],
							  formatter: function (x, data) { return data.formatted; }
							});
						</script>

					</div>
				</div>
			</div>
						<div class="clearfix"></div>
		</div>
</section>
@endsection