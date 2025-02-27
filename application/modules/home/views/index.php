<div class="row-12">
	<div class="card">
		<!-- Success -->
		<?php if ($this->session->flashdata('flash')) : ?>
			<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
		<?php endif; ?>

		<div class="card-body">
			<div class="table-responsive">
				<hr>
				<table id="table_" class="table table-hover table-responsive-lg">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Date</th>
							<th scope="col">Factory</th>
							<th scope="col">Model</th>
							<th scope="col">Defect Stage</th>
							<th scope="col">Defect Name</th>
							<th scope="col">Photo</th>
							<th scope="col">Defect Source</th>
							<th scope="col">Who Stop It</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php
							$no = 1;
							foreach ($finding as $dp) {
							?>
								<td><?= $no++ ?></td>
								<td><?= shortdate_indo($dp->date) ?></td>
								<td><?= $dp->gedung ?></td>
								<td><?= $dp->model ?></td>
								<td><?= $dp->nama_defect ?></td>
								<td><?= $dp->nama_defect_sub_class ?></td>
								<!-- Photo -->
								<td>
									<img width="50px" src="<?= base_url('assets/img/img-finding/' . $dp->picture) ?>" class="rounded">
								</td>
								<td><?= $dp->defect_source ?></td>
								<td><?= $dp->who_stop_defect ?></td>
								<td class="text-align-center">
									<a href="#" data-toggle="modal" data-target="#modalFinding" onclick="editFinding(this)" data-id="<?= $dp->id_finding; ?>"><i class=" icofont-ui-edit text-info"></i></a>
									<a href="#"><i class="icofont-ebook text-success"></i></a>
									<a href="<?= base_url('Home/hapusFinding/'); ?><?= $dp->id_finding; ?>" class="tombol-hapus"><i class="icofont-ui-delete text-danger"></i>
									</a>
								</td>
						</tr>
					<?php
							}
					?>
					</tr>

					</tbody>
				</table>
				<!-- End Table with hoverable rows -->
			</div>
		</div>
	</div>
	<!-- ApxChart -->

	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title text-uppercase">Defect Stage Chart</h5>
				<div class="row mb-7">
					<label for="FilterDate" class="col-sm-1 col-form-label">Filter Date</label>
					<div class="col-sm-2">

						<select name="month" id="stageChart" class="form-control">
							<?php
							for ($iM = 1; $iM <= 12; $iM++) {
								$mont = date("F", strtotime("$iM/12/10"));
								$g = date("m", strtotime("$iM/12/10")); // Pastikan $g berisi angka bulan 1-12
								$thismo = date('F'); // Variabel ini sepertinya tidak digunakan, bisa dihapus
							?>
								<option value="<?= $g ?>" <?= ($g == $bulan) ? "selected" : "" ?>><?= $mont ?></option>
							<?php
							}
							?>
						</select>
					</div>
					<label for="FilterDate" class="col-sm-2 col-form-label">
						<?= $tahun; ?>
					</label>
					<!-- <div class="col-sm-3 mb-2">
						<div class="col-sm-3 mb-2">
							<label for="FilterDate" class="col-sm-2 col-form-label">
								<?= $tahun; ?>
							</label>


						</div>
					</div> -->
				</div>
				<hr>
				<div id="chartdefect"></div>
			</div>
		</div>
	</div>
</div>

<!-- Modal Edit -->

<!-- Add Defect Class-->
<form action="#" method="POST">
	<div class="modal fade" id="modalFinding" tabindex="-1">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Edit Data DRSI</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form class="row g-3" id="modalFinding">
						<!-- <table id="detail_finding" class="table table-hover table-responsive"> -->
						<div class="col-md-6">
							<label for="Date" class="form-label">Date</label>
							<input teype="text" class="form-control" name="date" id="date">
						</div>
						<div class="col-md-6">
							<label for="Factory" class="form-label">Factory</label>
							<input type="text" class="form-control" name="gedung" id="factory">
						</div>
						<div class="col-md-6">
							<label for="cell" class="form-label">Line Cell</label>
							<input type="text" class="form-control" id="cell">
						</div>
						<div class="col-6">
							<label for="artikel" class="form-label">Artikel</label>
							<input type="text" class="form-control" id="artikel">
						</div>
						<div class="col-6">
							<label for="model" class="form-label">Model</label>
							<input type="text" class="form-control" id="model">
						</div>
						<div class="col-md-12">
							<label for="defect_Stage" class="form-label">Defect Stage</label>
							<input type="text" class="form-control" id="defect_stage">
						</div>
						<div class="col-md-12">
							<label for="defectName2" class="form-label">Defect Standart Name</label>
							<input type="text" class="form-control" id="defectName2">
						</div>

						<div class="col-md-4">
							<label for="pairs" class="form-label">Pairs</label>
							<input type="text" class="form-control" id="pairs">
						</div>
						<div class="col-md-8">
							<label for="photo" class="form-label">Photo</label>
							<div class="row">
								<div class="col-md-8">

									<img id="picture" class="img-thumbnail">
								</div>
							</div>

						</div>
						<div class="col-6">
							<label for="defect_source" class="form-label">Defect Source</label>
							<input type="text" class="form-control" id="defect_source">
						</div>
						<div class="col-6">
							<label for="self_inspect" class="form-label">Self Inspect</label>
							<input type="text" class="form-control" id="self_inspect">
						</div>
						<div class="col-6">
							<label for="who_defect_go" class="form-label">Who Defect Got</label>
							<input type="text" class="form-control" id="who_defect_go">
						</div>
						<div class="col-6">
							<label for="count" class="form-label">Count</label>
							<input type="text" class="form-control" id="count">
						</div>
						<div class="col-6">
							<label for="defect_area" class="form-label">Defect Area</label>
							<input type="text" class="form-control" id="defect_area">
						</div>
						<div class="col-6">
							<label for="who_stop_defect" class="form-label">Who Defect Found</label>
							<input type="text" class="form-control" id="who_stop_defect">
						</div>
						<div class="col-2">
							<label for="count2" class="form-label">Counts</label>
							<input type="text" class="form-control" id="count2">
						</div>
						<div class="col-10">
							<label for="remark" class="form-label">Remark</label>
							<textarea class="form-control" id="remark" style="height: 100px;"></textarea>

						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Update</button>
				</div>
			</div>
		</div><!-- End Basic Modal-->
</form>

<!-- Edit Finding -->

<script>
	var base = $('#base_url').data('id')
	// let id =
	function editFinding(edit) {
		let id = $(edit).data('id')
		document.getElementById('date');
		document.getElementById('gedung');
		document.getElementById('cell');
		document.getElementById('artikel');
		document.getElementById('model');
		document.getElementById('defect_stage');
		document.getElementById('nama_defect_sub_class');
		document.getElementById('pairs');
		document.getElementById('defect_source');
		document.getElementById('self_inspect');
		document.getElementById('who_defect_go');
		document.getElementById('count');
		document.getElementById('defect_area');
		document.getElementById('who_stop_defect');
		document.getElementById('count2');
		document.getElementById('remark');
		document.getElementById('picture');

		if (id) {
			$.ajax({
				type: 'GET',
				// http://192.168.44.97/e-drsi/Home/detailFinding/33
				url: `${base}Home/detailFinding/${id}`,
				dataType: 'json',
				success: function(data) {
					$('#date').val(data.date);
					$('#factory').val(data.gedung);
					$('#cell').val(data.cell);
					$('#artikel').val(data.artikel);
					$('#model').val(data.model);
					$('#defect_stage').val(data.defect_stage);
					$('#defectName2').val(data.nama_defect_sub_class);
					$('#pairs').val(data.pairs);
					$('#defect_source').val(data.defect_source);
					$('#self_inspect').val(data.self_inspect);
					$('#who_defect_go').val(data.who_defect_go);
					$('#count').val(data.count);
					$('#defect_area').val(data.defect_area);
					$('#who_stop_defect').val(data.who_stop_defect);
					$('#count2').val(data.count2);
					$('#remark').val(data.remark);
					$("#picture").attr("src", base + "assets/img/img-finding/" + data.picture)
				}
			});
		}
		$('#modalFinding').modal('show')
	}

	$(document).ready(function() {
		function buatGrafik(bulan) {
			$.ajax({
				type: 'GET',
				/* 192.168.44.97/e-drsi/Home/getDefectData/1 */
				url: `${base}Home/getDefectData/${bulan}`,
				dataType: 'json',
				success: function(data) {
					var defectCounts = {}; // Objek untuk menyimpan jumlah defect stage
					var tanggalArray = [];
					var seriesData = [];

					data.forEach(item => {
						var tanggal = moment(item.date).format('D MMM'); // Format tanggal
						// console.log(tanggal);
						if (!tanggalArray.includes(tanggal)) {
							tanggalArray.push(tanggal);
						}
						if (!defectCounts[tanggal]) {
							defectCounts[tanggal] = {};
						}
						if (!defectCounts[tanggal][item.nama_defect]) {
							defectCounts[tanggal][item.nama_defect] = 0;
						}
						defectCounts[tanggal][item.nama_defect]++;
					});
					// Buat data series untuk ApexCharts
					var series = [];
					var defectStages = new Set();
					// console.log(defectStages);
					tanggalArray.forEach(tanggal => {
						for (const defectStage in defectCounts[tanggal]) {
							defectStages.add(defectStage);
						}
					});

					defectStages.forEach(defectStage => {
						var data = [];
						tanggalArray.forEach(tanggal => {
							data.push(defectCounts[tanggal] && defectCounts[tanggal][defectStage] ? defectCounts[tanggal][defectStage] : 0);
						});
						series.push({
							name: defectStage,
							data: data
						});
					});

					if (chart) {
						chart.destroy();
					}
					var options = {
						series: series,
						chart: {
							height: 350,
							type: 'line', // 
							id: 'areachart-2',
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
						title: {
							text: 'DEFECT STAGE - TREND CHART'
						},
						grid: {
							row: {
								colors: ['#f3f3f3', 'transparent'],
								opacity: 0.5
							},
						},
						xaxis: {
							categories: tanggalArray
						}
					};

					var chart = new ApexCharts(document.querySelector("#chartdefect"), options);
					chart.render();
				},
				error: function(error) {
					console.error("Error fetching data:", error);
				}
			});
		}

		// Event handler untuk dropdown
		$('#stageChart').change(function() {
			var bulan = parseInt($(this).val());
			console.log("Bulan yang dipilih:", bulan);
			buatGrafik(bulan);
		});


		var bulanAwal = parseInt($('#stageChart').val());
		console.log("Bulan awal:", bulanAwal);
		buatGrafik(bulanAwal);
	});
</script>