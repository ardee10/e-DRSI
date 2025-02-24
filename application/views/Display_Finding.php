<style>
	/* body {
		color: #566787;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;

	} */

	.container-fluid {
		max-width: auto;

	}

	.table-responsive {
		margin: 10px 0;
		/* Width: auto; */

	}

	.table-wrapper {
		min-width: 1024px;
		/* Width: auto; */
		background: #fff;
		padding: 20px 25px;
		border-radius: 3px;
		box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
	}

	.table-wrapper .btn {
		float: right;
		color: #333;
		background-color: #fff;
		border-radius: 3px;
		border: none;
		outline: none !important;
		margin-left: 10px;
	}

	.table-wrapper .btn:hover {
		color: #333;
		background: #f2f2f2;
	}

	.table-wrapper .btn.btn-primary {
		color: #fff;
		background: #03A9F4;
	}

	.table-wrapper .btn.btn-primary:hover {
		background: #03a3e7;
	}

	.table-wrapper .btn.btn-success {
		color: #fff;
		background: rgb(3, 110, 26);
	}

	.table-wrapper .btn.btn-success:hover {
		background: rgb(4, 236, 42);
	}

	.table-title .btn {
		font-size: 13px;
		border: none;
	}

	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}

	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}

	.table-title {
		color: #fff;
		background: #4b5366;
		padding: 16px 25px;
		margin: -20px -25px 10px;
		border-radius: 3px 3px 0 0;
	}

	.table-title h2 {
		margin: 5px 0 0;
		font-size: 24px;
	}

	.show-entries select.form-control {
		width: 60px;
		margin: 0 5px;
	}

	.table-filter .filter-group {
		float: right;
		margin-left: 15px;
	}

	.table-filter input,
	.table-filter select {
		height: 34px;
		border-radius: 3px;
		border-color: #ddd;
		box-shadow: none;
	}

	.table-filter {
		padding: 5px 0 15px;
		border-bottom: 1px solid #e9e9e9;
		margin-bottom: 5px;
	}

	.table-filter .btn {
		height: 34px;
	}

	.table-filter label {
		font-weight: normal;
		margin-left: 10px;
	}

	.table-filter select,
	.table-filter input {
		display: inline-block;
		margin-left: 5px;
	}

	.table-filter input {
		width: 200px;
		display: inline-block;
	}

	.filter-group select.form-control {
		width: 110px;
	}

	.filter-icon {
		float: right;
		margin-top: 7px;
	}

	.filter-icon i {
		font-size: 18px;
		opacity: 0.7;
	}

	table.table tr th,
	table.table tr td {
		border-color: #e9e9e9;
		padding: 12px 15px;
		vertical-align: middle;
	}

	table.table tr th:first-child {
		width: 60px;
	}

	table.table tr th:last-child {
		width: 80px;
	}

	table.table-striped tbody tr:nth-of-type(odd) {
		background-color: #fcfcfc;
	}

	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}

	table.table th i {
		font-size: 13px;
		margin: 0 5px;
		cursor: pointer;
	}

	table.table td a {
		font-weight: bold;
		color: #566787;
		display: inline-block;
		text-decoration: none;
	}

	table.table td a:hover {
		color: #2196F3;
	}

	table.table td a.view {
		width: 30px;
		height: 30px;
		color: #2196F3;
		border: 2px solid;
		border-radius: 30px;
		text-align: center;
	}

	table.table td a.view i {
		font-size: 22px;
		margin: 2px 0 0 1px;
	}

	table.table .avatar {
		border-radius: 50%;
		vertical-align: middle;
		margin-right: 10px;
	}

	.status {
		font-size: 30px;
		margin: 2px 2px 0 0;
		display: inline-block;
		vertical-align: middle;
		line-height: 10px;
	}

	.text-success {
		color: #10c469;
	}

	.text-info {
		color: #62c9e8;
	}

	.text-warning {
		color: #FFC107;
	}

	.text-danger {
		color: #ff5b5b;
	}

	/* .pagination {
		float: right;
		margin: 0 0 5px;
	}

	.pagination li a {
		border: none;
		font-size: 13px;
		min-width: 30px;
		min-height: 30px;
		color: #999;
		margin: 0 2px;
		line-height: 30px;
		border-radius: 2px !important;
		text-align: center;
		padding: 0 6px;
	}

	.pagination li a:hover {
		color: #666;
	}

	.pagination li.active a {
		background: #03A9F4;
	}

	.pagination li.active a:hover {
		background: #0397d6;
	}

	.pagination li.disabled i {
		color: #ccc;
	}

	.pagination li i {
		font-size: 16px;
		padding-top: 6px
	}

	.hint-text {
		float: left;
		margin-top: 10px;
		font-size: 13px;
	} */

	/* .dataTables_wrapper .dataTables_filter {
		float: none;
		text-align: center;
	} */
</style>


<div class="container-fluid">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-2">
						<img class="img-thumbnail" src="<?= base_url('') ?>assets/img/5.jpeg" width="250" height="250" alt="">
					</div>
					<div class="col-sm-6">
						<h2> DRSI (Defective Reduction Throught Self Inspection)</h2>
					</div>
					<div class="col-sm-4">
						<!-- <a href="<?= base_url('Dashboard/formSubmit') ?>" target="_blank" class="btn btn-primary"><i class="material-icons">&#xE863;</i> <span><b>DRSI</b> FORM</span></a> -->
						<button class="btn btn-primary" onclick="submitForm()"><i class="material-icons">&#xE863;</i> <span><b>DRSI</b> FORM</span></button>
						<button class="btn btn-secondary" onclick="trackingDrsi(this)"><i class="material-icons">&#xE24D;</i> <span><b>Export to Excel</b></span></button>
					</div>
				</div>
			</div>
			<div class="table-filter">
				<div class="row mb-6">
					<div class="col-sm-3 mb-2">

					</div>

					<div class="col-sm-3 mb-2">
						<!-- <select name="month" id="filter_gedung" class="form-control" onchange="filter_drsi()">
							<?php
							for ($iM = 1; $iM <= 12; $iM++) {
								$mont = date("F", strtotime("$iM/12/10"));
								$g = date("m", strtotime("$iM/12/10"));
								$thismo = date('F');
							?>
								<option value="<?= $g ?>" <?= ($g == $bulan) ? "selected" : "" ?>><?= $mont ?></option>
							<?php
							}
							?>
						</select> -->
					</div>
					<div class="col-sm-3 mb-2">
						<!-- <select name="month" id="filter_tahun" class="form-control" onchange="filter_drsi()">
							<?php
							for ($i = date('Y'); $i >= date('Y') - 1; $i -= 1) { ?>
								<option value="<?= $i ?>" <?= ($i == $tahun) ? "selected" : "" ?>> <?= $i ?> </option>
							<?php }
							?>
						</select> -->
					</div>

					<div class="col-sm-3 mb-2 float-end">
						<label for="gedung" class="col-sm-2 col-form-label mb-1"><b>Gedung</b></label>
						<select name="gedung" id="filter_gedung" class=" form-select col-sm-2 form-control">
							<option value='all'>---All---</option>
							<?php
							foreach ($gedung as $gd):
							?>

								<option value="<?= $gd->gedung ?>"><?= $gd->gedung ?></option>
							<?php endforeach; ?>
						</select>
					</div>


				</div>
			</div>
			<table id="tbl_display" class="table table-hover table-responsive-lg display responsive nowrap" width="100%">
				<!-- <table id="tbl_display" class="table table-hover table-responsive"> -->
				<thead>
					<tr>
						<th>#</th>
						<th>Date</th>
						<th>Factory</th>
						<th>Cell No</th>
						<th>Model Name</th>
						<th>ART Nomor</th>
						<th>Defect Stage</th>
						<th>Defect Standart Name</th>
						<th>Defect Photo</th>
						<th>Defect Source</th>
						<th>Defect Area</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<?php

						$no = 1;
						foreach ($dashboard as $data) {
							$img_finding = $data->picture;
						?>


							<td><?= $no++; ?></td>
							<td><?= date_indo($data->date); ?></td>
							<td><?= $data->gedung; ?></td>
							<td><?= $data->cell; ?></td>
							<td><?= $data->artikel; ?></td>
							<td><?= $data->model; ?></td>
							<td><?= $data->nama_defect; ?></td>
							<td><?= $data->nama_defect_sub_class; ?></td>
							<td>
								<?php if ($img_finding == null) {
									$img = 'assets/img/no-images.png';
								} else {
									$path = 'assets/img/img-finding/' . $data->picture;
									if (file_exists($path) && $data->picture) {
										$img = 'assets/img/img-finding/' . $data->picture;
									} else {
										$img = 'assets/img/no-images.png';
									}
								}
								?>
								<img width="50px" src="<?= $img ?>" class="rounded">
							</td>
							<td><?= $data->defect_source ?></td>
							<td><?= $data->defect_area ?></td>
							<td>
								<button type="button" class="btn btn-success detail-button" onclick="modalDisplay(this)" data-id="<?= $data->id_finding ?>"><i class=" icofont-folder-close"></i>
									Detail
								</button>
							</td>

					</tr>
				<?php
						}
				?>
				</tbody>
			</table>
		</div>
	</div>



	<div class="credits text-center">
		<div class="copyright">
			&copy; Copyright <span class="text-center text-dark">FAST TRACK - PT Parkland Word Indonesia Jepara. All Rights Reserved </span>
		</div>
		<div class="credits">
			<p class="text-dark">Develop by <a href="#" class="text-dark">IT Department</a></p>
		</div>

	</div>
</div>

<!-- Modal Detail Display -->
<div class="modal fade" id="modalDisplay" tabindex="-1">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Detail Informasi Defect Sepatu</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<!-- Form Modal -->
				<form class="row g-3" id="modalDisplay">
					<!-- <table id="detail_finding" class="table table-hover table-responsive"> -->
					<div class="col-md-12">
						<label for="Date" class="form-label">Date</label>
						<input teype="text" class="form-control" name="date" id="date" readonly>
					</div>
					<div class="col-md-6">
						<label for="Factory" class="form-label">Factory</label>
						<input type="text" class="form-control" name="gedung" id="factory" readonly>
					</div>
					<div class="col-md-6">
						<label for="cell" class="form-label">Line Cell</label>
						<input type="text" class="form-control" id="cell" readonly>
					</div>
					<div class="col-6">
						<label for="artikel" class="form-label">Artikel</label>
						<input type="text" class="form-control" id="artikel" readonly>
					</div>
					<div class="col-6">
						<label for="model" class="form-label">Model</label>
						<input type="text" class="form-control" id="model" readonly>
					</div>
					<div class="col-md-12">
						<label for="defect_Stage" class="form-label">Defect Stage</label>
						<input type="text" class="form-control" id="defect_stage" readonly>
					</div>
					<div class="col-md-12">
						<label for="defectName2" class="form-label">Defect Standart Name</label>
						<input type="text" class="form-control" id="defectName2" readonly>
					</div>

					<div class="col-md-4">
						<label for="pairs" class="form-label">Pairs</label>
						<input type="text" class="form-control" id="pairs" readonly>
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
						<input type="text" class="form-control" id="defect_source" readonly>
					</div>
					<div class="col-6">
						<label for="self_inspect" class="form-label">Self Inspect</label>
						<input type="text" class="form-control" id="self_inspect" readonly>
					</div>
					<div class="col-6">
						<label for="who_defect_go" class="form-label">Who Defect Got</label>
						<input type="text" class="form-control" id="who_defect_go" readonly>
					</div>
					<div class="col-6">
						<label for="count" class="form-label">Count</label>
						<input type="text" class="form-control" id="count" readonly>
					</div>
					<div class="col-6">
						<label for="defect_area" class="form-label">Defect Area</label>
						<input type="text" class="form-control" id="defect_area" readonly>
					</div>
					<div class="col-6">
						<label for="who_stop_defect" class="form-label">Who Defect Found</label>
						<input type="text" class="form-control" id="who_stop_defect" readonly>
					</div>
					<div class="col-2">
						<label for="count2" class="form-label">Counts</label>
						<input type="text" class="form-control" id="count2" readonly>
					</div>
					<div class="col-10">
						<label for="remark" class="form-label">Remark</label>
						<textarea class="form-control" id="remark" style="height: 100px;" readonly></textarea>

					</div>
				</form>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div><!-- End Extra Large Modal-->

	<script>
		/* Select Building */
		var base = $('#base_url').data('id')

		function modalDisplay(ctx) {
			let id = $(ctx).data('id')
			// e.preventDevault();
			if (id) {
				$.ajax({
					type: "GET",
					url: `${base}dashboard/DataFindingId/${id}`,
					dataType: "json",
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
			$('#modalDisplay').modal('show')

		}

		function trackingDrsi() {
			window.open(base + 'Drsitrack/filterDrsi')
		}

		function submitForm() {

			let text = "SILAHKAN LOGIN TERLEBIH DAHULU";
			if (confirm(text) == true) {
				window.open(base + 'auth/login_leader')
			} else {
				window.close
			}



		}
	</script>
