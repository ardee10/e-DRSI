<hr>
<section class="section profile">
	<div class="row">
		<?php if ($this->session->flashdata('flash')) : ?>
			<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
		<?php endif; ?>
		<section class="section">
			<div class="row">

				<div class="col-lg-6">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Grafik data DRSI | <?= $leader->nama_leader ?></h5>
							<!-- Graph Chart -->
							<div id="graphbyNik"></div>

						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">DEFECT STAGE TREND CHART</h5>
							<!-- Column Chart -->
							<div id="stageChart"></div>
							<!-- End Column Chart -->

						</div>
					</div>
				</div>

			</div>
		</section>
	</div>
</section>

<script>
	var dataGrafik = <?= json_encode($dataGrafik) ?>; // Ambil data grafik dari controller
	console.log(dataGrafik);
	var options = {
		series: [{
			name: 'Jumlah',
			data: dataGrafik.map(item => item.jumlah)
			// console.log(jumlah);
		}],
		chart: {
			height: 350,
			type: 'bar',
		},
		xaxis: {
			categories: dataGrafik.map(item => item.tanggal),
			// title: {
			// 	text: 'Tanggal'
			// }
		},
		yaxis: {
			title: {
				text: 'Jumlah'
			}
		}
	};

	// Grafik 2
	var dataGrafikDefect = <?= json_encode($dataGrafikDefect) ?>;
	var options2 = {
		series: [{
			name: 'Jumlah',
			data: dataGrafikDefect.map(item => item.jumlah)
		}],
		chart: {
			height: 350,
			type: 'line', // Jenis grafik diubah menjadi line
			zoom: {
				enabled: false
			}
		},
		dataLabels: {
			enabled: false
		},
		stroke: {
			curve: 'straight'
		},
		grid: {
			row: {
				colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
				opacity: 0.5
			},
		},
		xaxis: {
			categories: dataGrafikDefect.map(item => item.nama_defect),
			// title: {
			// 	text: 'Nama Defect'
			// }
		},
		yaxis: {
			title: {
				text: 'Jumlah'
			}
		},
		colors: ['#008FFB', '#00E396', '#FEB019', '#FF456E', '#775DD0'], // Warna untuk setiap garis
		legend: {
			show: true,
			position: 'bottom', // Legend di bagian bawah grafik
			horizontalAlign: 'center',
			floating: false,
			offsetY: 10,
			offsetX: 0
		}

	};

	$(document).ready(function() {
		var chart = new ApexCharts(document.querySelector("#graphbyNik"), options);
		chart.render();

		var chart2 = new ApexCharts(document.querySelector("#stageChart"), options2);
		chart2.render();

	});
</script>
