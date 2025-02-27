<div class="row">
	<?php if ($this->session->flashdata('flash')) : ?>
		<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
	<?php endif; ?>
	<?php if ($this->session->flashdata('flashDataError')) : ?>
		<div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('flashDataError'); ?>"></div>
	<?php endif; ?>

	<div class="col-xl-9">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-3 d-flex justify-content-between mt-4">
						<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalLeader"><i class="icofont-plus-circle"></i> Data Leader</button>
						<!-- <button class="btn btn-sm btn-success btn-sm" type="button"><i class="icofont-upload"></i>Import</button> -->
					</div>
				</div>
				<div class="table-responsive">
					<hr>
					<table id="table_leader" class="table table-hover table-responsive-lg">
						<thead>
							<tr>
								<th scope="col">Nomor</th>
								<th scope="col">Nama</th>
								<th scope="col">NIK</th>
								<th scope="col">Gedung</th>
								<th scope="col">Cell</th>
								<th scope="col">Area</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<?php
								$no = 1;
								foreach ($leader as $dp) {
								?>
									<td><?= $no++ ?></td>
									<td><?= $dp->nama_leader ?></td>
									<td><?= $dp->nik ?></td>
									<td><?= $dp->gedung ?></td>
									<td><?= $dp->cell ?></td>
									<td><?= $dp->area ?></td>
									<td class="text-align-center">
										<a href="#" onclick="edit_Leader(this)" data-id="<?= $dp->id_leader; ?>"><i class=" icofont-ui-edit text-info"></i></a>
										<a href="<?= base_url('Leader/hapusLeader/'); ?><?= $dp->id_leader; ?>" class="tombol-hapus"><i class="icofont-ui-delete text-danger"></i>
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

	</div>

	<div class="col-xl-3">
		<div class="card">
			<div class="card-body mb-1">
				<div class="table-responsive">
					<hr>
					<h5 class="font-weight-bold">Import Data with Excel file (*.xls/*.xlsx):</h5>
					<a href="<?= base_url('file/import.xlsx') ?>" class="btn btn-sm btn-info w-50 mmb-3 text-light"><i class="icofont-download"></i> Download Format</a>
					<form action="<?= base_url('Leader/prosesImportLeader'); ?>" method="post" enctype="multipart/form-data">
						<div class="form-group mb-2">
							<label class="font-weight-bold mb-2">Pilih File</label>
							<input type="file" name="file" class="form-control" accept=".xls,.xlsx">
						</div>
						<button class="btn btn-success btn-sm col-6"><i class="icofont-upload"></i> Submit</button>
					</form>
				</div>
			</div>
		</div>

	</div>
	<!-- </div> -->

</div>

<!-- Add Leader -->
<form action="<?= base_url('') ?>Leader/addLeader" method="POST">
	<div class="modal fade" id="modalLeader" tabindex="-1">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">DATA LEADER</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="row mb-3">
						<label for="nama" class="col-sm-4 col-form-label">Nama</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="nama_leader" name="nama_leader">
						</div>
					</div>
					<div class="row mb-3">
						<label for="nik" class="col-sm-4 col-form-label">NIK</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="nik" name="nik">
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputEmail" class="col-sm-4 col-form-label">Gedung</label>
						<div class="col-sm-8">
							<select class="form-select" aria-label="Default select example" id="gedung" name="gedung">
								<option value=" ">----Silahkan Pilih Gedung----</option>
								<?php foreach ($gedung as $dt) {
								?>
									<option value="<?= $dt->gedung ?>"><?= $dt->gedung ?></option>
								<?php
								} ?>

							</select>
						</div>
					</div>
					<div class="row mb-3">
						<label for="cell" class="col-sm-4 col-form-label">Cell</label>
						<div class="col-sm-8">
							<select class="form-select" aria-label="Default select example" id="cellSelect" name="cellSelect">

							</select>
						</div>
					</div>
					<div class="row mb-3">
						<label for="password" class="col-sm-4 col-form-label">Password</label>
						<div class="col-sm-8">
							<input type="password" class="form-control" id="password" name="password">
						</div>
					</div>
					<div class="row mb-3">
						<label for="area" class="col-sm-4 col-form-label">Area</label>
						<div class="col-sm-8">
							<select class="form-select" aria-label="Default select example" id="area" name="area">
								<option value=" ">----Silahkan Pilih Area----</option>
								<?php foreach ($area as $dt) {
								?>
									<option value="<?= $dt->area ?>"><?= $dt->area ?></option>
								<?php
								} ?>

							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</div>
		</div><!-- End Basic Modal-->
</form>


<script>
	/* Select Building */
	var base = $('#base_url').data('id')
	$(document).ready(function() {
		$('#gedung').change(function(event) {
			var gedungselect = $("#gedung").val();
			// alert(gedungselect);
			$.ajax({
				type: "GET",
				url: `${base}leader/data_cell/${gedungselect}`,
				dataType: "json",
				success: function(data) {
					var a = "<option value=''>--- PILIH ---</option>";
					for (var i = 0; i < data.length; i++) a += "<option value='" + data[i].nama_cell + "'>" + data[i].nama_cell + "</option>";
					$("#cellSelect").html(a);
				}
			});
		})
	});

	function edit_Leader(edit) {
		let id = $(edit).data('id')
		document.getElementById('id_leader');
		document.getElementById('nama_leader');
		document.getElementById('nik');
		document.getElementById('gedung');
		document.getElementById('password');
		document.getElementById('area');
		if (id) {
			$.ajax({
				type: 'GET',
				/* http://192.168.44.97/e-drsi/Defect/detailDefecStandart/CT24 */
				url: `${base}Leader/detailLeader/${id}`,
				dataType: 'json',
				success: function(data) {

					$('#id_leader').val(data.id_leader)
					$('#nama_leader').val(data.nama_leader)
					$('#nik').val(data.nik)
					$('#gedung').val(data.gedung)
				}
			});
		}
		$('#modalDefectStandart').modal('show')
	}

	// A $( document ).ready() block.
	$(document).ready(function() {
		$('#table_leader').DataTable({
			"ajax": {
				"url": base + "Leader", // Replace with your data URL
				"dataSrc": "" // Leave empty if your data is already in the correct format
			},
			"columns": [{
					"data": "name"
				},
				{
					"data": "age"
				},
				{
					"data": "city"
				}
			]
		});


	});
</script>