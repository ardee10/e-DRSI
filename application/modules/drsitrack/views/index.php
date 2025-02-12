<style>
	/* body {
		background-image: url('<?= base_url('') ?>assets/img/background/Adidas_2.jpg');
		width: auto;
		height: auto;
		background-attachment: fixed;
		background-repeat: no-repeat;

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
</style>

<div class="container-fluid">
	<header class="container-fluid mt-3" style="background: #566787;">
		<div class="row-lg-12">
			<div class="p-3 mb-2 bg-transparent text-dark">
				<form action="<?= base_url('') ?>Drsitrack/filterDrsi" method="POST">
					<div class="row">
						<div class="col-2">
							<a href="<?= base_url(''); ?>"><img class="img-thumbnail" src="<?= base_url('') ?>assets/img/5.jpeg" width="250" height="250" alt=""></a>
						</div>
						<label for="Factory" class="col-sm-1 col-form-label justify-content-lg-end"><b>Factory</b></label>
						<div class="col-sm-1">
							<select name="filter_gedung" id="filter_gedung" class=" form-select form-control">
								<option value='all'>-All-</option>
								<?php
								foreach ($gedung as $gd):
								?>
									<option value="<?= $gd->gedung ?>"><?= $gd->gedung ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<label for="start_date" class="col-sm-1 col-form-label justify-content-lg-end"><b>Start</b></label>
						<div class="col-sm-2">
							<input type="date" class="form-control" name="startFilter" value="<?= $filterStart ?>" required>
						</div>
						<label for="end_date" class="col-sm-1 col-form-label justify-content-lg-end"><b>End</b></label>
						<div class="col-sm-2">
							<input type="date" class="form-control" name="endFilter" value="<?= $filterEnd ?>" required>
						</div>
						<div class="col-sm-1">
							<button type="submit" class="btn btn-light btn-md justify-content-lg-end text-dark"><i class="icofont-filter"></i>Filter</button>
						</div>
						<div class="col-sm-1">
							<!-- <a type="btn" href="<?= base_url('drsitrack/exportToExcel'); ?>" class="btn btn-info btn-md">
								<i class="icofont-download"></i> Download
							</a> -->

							<a type="btn" href="#" onclick="downloadData()" class="btn btn-info"><i class="icofont-download"></i> Download</a>
						</div>
				</form>

			</div>
		</div>
</div>

</header>
<div class="table-responsive">


	<div class="card-body justify-content-center">
		<h5 class="card-title text-center"> DRSI TRACKING DATA</h5>
	</div>
	<table class="table table-hover table-responsive-lg display responsive nowrap" width="100%">
		<!-- <table class="table table-hover table-responsive-lg display responsive nowrap"> -->
		<!-- class="table table-hover table-responsive-lg -->
		<thead>
			<tr>
				<th scope="col" class="bg-secondary text-white text-center">#</th>
				<th scope="col" class="bg-secondary text-white text-center">Date</th>
				<th scope="col" class="bg-secondary text-white text-center">Gedung</th>
				<th scope="col" class="bg-secondary text-white text-center">Cell</th>
				<th scope="col" class="bg-secondary text-white text-center">Artikel</th>
				<th scope="col" class="bg-secondary text-white text-center">Model</th>
				<th scope="col" class="bg-secondary text-white text-center">Defect Stage</th>
				<th scope="col" class="bg-secondary text-white text-center">Defect Name</th>
				<th scope="col" class="bg-secondary text-white text-center">Defect Photo</th>
				<th scope="col" class="bg-secondary text-white text-center">Pairs</th>
				<th scope="col" class="bg-secondary text-white text-center">Defect Source</th>
				<th scope="col" class="bg-secondary text-white text-center">Prod Self Inspection</th>
				<th scope="col" class="bg-secondary text-white text-center">Who Let Defect Go</th>
				<th scope="col" class="bg-secondary text-white text-center">Count</th>
				<th scope="col" class="bg-secondary text-white text-center">Defect Found</th>
				<th scope="col" class="bg-secondary text-white text-center">Who Stop Defect Go</th>
				<th scope="col" class="bg-secondary text-white text-center">Count</th>
				<th scope="col" class="bg-secondary text-white text-center">Remark</th>

			</tr>
		</thead>
		<tbody>
			<?php if (empty($dataDrsi)) : ?>
				<tr>
					<td colspan="18" class="text-center">Data tidak ditemukan</td>
				</tr>
			<?php else : ?>
				<?php $no = 1; ?>
				<?php foreach ($dataDrsi as $row) : ?>
					<tr>
						<th scope="row"><?= $no++; ?></th>
						<td><?= $row['date']; ?></td>
						<td><?= $row['gedung']; ?></td>
						<td><?= $row['cell']; ?></td>
						<td><?= $row['artikel']; ?></td>
						<td><?= $row['model']; ?></td>
						<td><?= $row['nama_defect']; ?></td>
						<td><?= $row['nama_defect_sub_class']; ?></td>
						<td>
							<?php if ($row['picture']) : ?>
								<img src="<?= base_url('assets/img/img-finding/' . $row['picture']); ?>" alt="Defect Photo" width="50">
							<?php endif; ?>
						</td>
						<td><?= $row['pairs']; ?></td>
						<td><?= $row['defect_source']; ?></td>
						<td><?= $row['self_inspect']; ?></td>
						<td><?= $row['who_defect_go']; ?></td>
						<td><?= $row['count']; ?></td>
						<td><?= $row['defect_source']; ?></td>
						<td><?= $row['who_stop_defect']; ?></td>
						<td><?= $row['count2']; ?></td>
						<td><?= $row['remark']; ?></td>
					</tr>
				<?php endforeach; ?>
			<?php endif; ?>
		</tbody>
	</table>

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


<script>
	const base = $('#base_url').data('id')

	function downloadData() {
		let gedung = $('select[name="filter_gedung"]').val()
		let start = $('input[name="startFilter"]').val()
		let end = $('input[name="endFilter"]').val()

		location.href = `${base}Drsitrack/exportToExcel?filter_gedung=${gedung}&startFilter=${start}&endFilter=${end}`;
	}
</script>