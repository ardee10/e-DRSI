<div class="row-12">
	<?php if ($this->session->flashdata('flash')) : ?>
		<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
	<?php endif; ?>
	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col">
					<div class="float-start">
						<button type="button" class="btn btn-primary btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#modalDefectClass"><i class="icofont-plus-circle"></i> Data Defect Class</button>
					</div>
				</div>
				<div class="col">
					<div class="float-end">
						<button type="button" class="btn btn-success btn-sm mt-3" onclick="document.location='<?= base_url() ?>/Home'"><i class="icofont-long-arrow-left"></i> Kembali</button>
					</div>

				</div>
			</div>
			<div class="table-responsive">
				<hr>
				<table id="table_" class="table table-hover table-responsive-lg">
					<thead>
						<tr>
							<th scope="col">Nomor</th>
							<th scope="col">DEFECT STAGE</th>
							<th scope="col">KODE DEFECT CLASS</th>
							<th scope="col">NAMA DEFECT CLASS</th>
							<th scope="col">Action</th>

						</tr>
					</thead>
					<tbody>
						<tr>
							<?php
							$no = 1;
							foreach ($defectclass as $dp) {

							?>
								<td><?= $no++ ?></td>
								<td><?= $dp->nama_defect ?></td>
								<td><?= $dp->id_defect_class ?></td>
								<td><?= $dp->nama_defect_class ?></td>
								<td class="text-align-center">
									<a href="#" data-toggle="modal" data-target="#modalDefectClass" onclick="edit_defect_class(this)" data-id="<?= $dp->id_defect_class; ?>"><i class=" icofont-ui-edit text-info"></i></a>
									<!-- <a href="#"><i class="icofont-ebook text-success"></i></a> -->
									<a href="<?= base_url('Defect/hapusDefectName/'); ?><?= $dp->id_defect_class; ?>" class="tombol-hapus"><i class="icofont-ui-delete text-danger"></i>
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



	<!-- Add Defect Class-->
	<form action="<?= base_url('') ?>Defect/addDefectClass" method="POST">
		<div class="modal fade" id="modalDefectClass" tabindex="-1">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Tambah Data Defect Class</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row mb-3">
							<label for="IDDefectName" class="col-sm-4 col-form-label">ID Defect Name</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="id_defect_class" name="id_defect_class">
							</div>
						</div>
						<div class="row mb-3">
							<label for="Defectname" class="col-sm-4 col-form-label">Defect Name</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="nama_defect_class" name="nama_defect_class">
							</div>
						</div>
						<div class="row mb-3">
							<label for="DefectStage" class="col-sm-4 col-form-label">Defect Stage</label>
							<div class="col-sm-8">
								<select class="form-select" aria-label="Default select example" id="id_defect" name="id_defect">
									<option value=" ">----Silahkan Pilih Defect Stage----</option>
									<?php foreach ($defectclass1 as $dt) {
									?>
										<option value="<?= $dt->id_defect ?>"><?= $dt->nama_defect ?></option>
									<?php
									} ?>

								</select>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save changes</button>
					</div>
				</div>
			</div><!-- End Basic Modal-->
	</form>

	<script>
		var base = $('#base_url').data('id')

		// let id =
		function edit_defect_class(edit) {
			let id = $(edit).data('id')
			document.getElementById('id_defect_class');
			document.getElementById('nama_defect_class');
			document.getElementById('nama_defect');
			if (id) {
				$.ajax({
					type: 'GET',
					url: `${base}Defect/detailDefecftName/${id}`,
					dataType: 'json',
					success: function(data) {
						console.log(data);
						$('#id_defect_class').val(data.id_defect_class)
						$('#nama_defect_class').val(data.nama_defect_class)
						$('#id_defect').val(data.id_defect)
					}
				});
			}
			$('#modalDefectClass').modal('show')
		}
	</script>