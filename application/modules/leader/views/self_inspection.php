<div class="row">
	<?php if ($this->session->flashdata('flash')) : ?>
		<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
	<?php endif; ?>
	<?php if ($this->session->flashdata('flashDataError')) : ?>
		<div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('flashDataError'); ?>"></div>
	<?php endif; ?>
	<div class="col">
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<div class="row mb-2 mt-3">
						<div class="col-md-2">
							<label for="filterSelfinspect" class="col-form-label">Filter</label>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-3">
									<select class="form-select" aria-label="Default select example" id="filterSelfInspect">
										<option value="">----Bulan----</option>
										<?php
										$monthselect = date('F Y', strtotime($tanggal_awal));
										foreach ($bulan as $month) {
										?>
											<option value="<?= $month ?>" <?= ($month == $monthselect) ? "selected" : "" ?>><?= $month ?></option>
										<?php
										}
										?>
									</select>
								</div>
								<div class="col-md-3">
									<select class="form-select" aria-label="Default select example" id="filterTahun">
										<option value="">----Tahun----</option>
										<option value="2024">2024</option>
										<option value="2025">2025</option>
									</select>
								</div>
								<div class="col-md-3">
									<button class="btn btn-primary" id="btnTampilkan">Tampilkan</button>
								</div>
							</div>
						</div>
					</div>

					<table id="table_selfinspect" class="table table-hover table-responsive-lg">
						<thead>
							<tr>
								<th class="table-dark" colspan="4"></th>
								<th class="table-secondary text-center text-uppercase" colspan="<?= count($range_tanggal) + 1 ?>">
									<h5 id="titlemonth"> <?= $monthselect; ?></h5>
								</th>
							</tr>
							<tr>
								<th>No</th>
								<th>NIK</th>
								<th>Nama</th>
								<th>Area/Bagian</th>
								<?php foreach ($range_tanggal as $tanggal) : ?>
									<th><?= date('d', strtotime($tanggal)) ?></th>
								<?php endforeach; ?>
								<th>Total</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($leader as $dp) {
							?>
								<tr>
									<td><?= $no++ ?></td>
									<td><?= $dp->nik ?></td>
									<td><?= $dp->nama_leader ?></td>
									<td><?= $dp->area ?></td>
									<?php
									$total = 0;
									foreach ($range_tanggal as $tanggal) :
									?>
										<td>
											<?php
											$inspeksi = $this->M_leader->get_inspeksi($tanggal, $dp->nik);
											if ($inspeksi) {
												foreach ($inspeksi as $item) {
													echo $item->count2;
													$total += $item->count2;
													echo '<br>';
												}
											} else {
												echo '0';
											}
											?>
										</td>
									<?php endforeach; ?>
									<td class="table-success text text-bg-success text-center"><?= $total ?></td>
								</tr>
							<?php
							}
							?>
						</tbody>
					</table>
				</div>
				<!-- End Table with hoverable rows -->

			</div>
		</div>
	</div>

	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">SELF INSPECT CHART</h5>
				<canvas id="selfInspectChart"></canvas>
			</div>

		</div>
	</div>
</div>

<script>
	/* Select Building */
	var base = $('#base_url').data('id');
	let titleMonth = document.getElementById('titlemonth');
	$("#btnTampilkan").click(function() {
		let bulan = $("#filterSelfInspect").val();
		let tahun = $("#filterTahun").val();

		$.ajax({
				// http://192.168.44.97/e-drsi/Leader/selfInspectFilter?bulan=Januari&tahun=2025
				url: base + "Leader/selfInspectFilter?bulan=" + bulan + "&tahun=" + tahun,
				type: "get",
				dataType: "json"
			})
			.done(function(data) {
				let tableBody = $('#table_selfinspect tbody');
				tableBody.empty();
				let headerRow = $('#table_selfinspect thead tr:eq(1)');
				headerRow.empty();
				headerRow.append('<th>No</th>');
				headerRow.append('<th>NIK</th>');
				headerRow.append('<th>Nama</th>');
				headerRow.append('<th>Area/Bagian</th>');
				$.each(data.range_tanggal, function(index, tanggal) {
					headerRow.append('<th>' + moment(tanggal).format('DD') + '</th>');
				});
				headerRow.append('<th>Total</th>');
				$.each(data.data, function(index, item) {

					let row = $('<tr>');
					row.append($('<td>').text(index + 1));
					row.append($('<td>').text(item.nik));
					row.append($('<td>').text(item.nama_leader));
					row.append($('<td>').text(item.area));
					let total = 0;
					$.each(data.range_tanggal, function(index2, tanggal) {
						let inspeksi_hari_ini = 0;
						item.inspeksi.forEach(inspeksi => {
							// let tanggalInspeksi = inspeksi.date.format('YYYY-MM-DD');
							let tanggalInspeksi = moment(inspeksi.date).format('YYYY-MM-DD');
							let tanggalRange = moment(tanggal).format('YYYY-MM-DD');
							if (tanggalInspeksi === tanggalRange) {
								inspeksi_hari_ini += parseInt(inspeksi.count2); //
								total += parseInt(inspeksi.count2);
								return false;
							}
						});
						row.append($('<td>').text(inspeksi_hari_ini));
						// total += inspeksi_hari_ini;
					});
					row.append($('<td class=table-success text text-bg-success text-center>').text(total));
					tableBody.append(row);
				});
				// Format bulan menjadi "Bulan Tahun"
				let title = bulan + " " + tahun;
				// Update judul bulan
				titleMonth.textContent = title;

				// if (element !== null && element !== undefined) {
				// 	element.textContent = 'Teks baru';
				// }
			})
	});
</script>