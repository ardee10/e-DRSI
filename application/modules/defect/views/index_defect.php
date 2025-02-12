<div class="row-12">
	<?php if ($this->session->flashdata('flash')) : ?>
		<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
	<?php endif; ?>
	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col">
					<div class="float-start">
						<button type="button" class="btn btn-primary btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#modalDefect"><i class="icofont-plus-circle"></i> Data Defect</button>
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
							<th scope="col">KODE DEFECT STAGE</th>
							<th scope="col">DEFECT STAGE</th>
							<th scope="col">Action</th>

						</tr>
					</thead>
					<tbody>
						<tr>
							<?php
							$no = 1;
							foreach ($defect as $dp) {

							?>
								<td><?= $no++ ?></td>
								<td><?= $dp->id_defect ?></td>
								<td><?= $dp->nama_defect ?></td>
								<td class="text-align-center">
									<a href="#" onclick="edit_defect(this)" data-id="<?= $dp->id_defect; ?>"><i class=" icofont-ui-edit text-info"></i></a>
									<a href="<?= base_url('Defect/hapusDefectStage/'); ?><?= $dp->id_defect; ?>" class="tombol-hapus"><i class="icofont-ui-delete text-danger"></i>
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

	<!-- Add Defect -->
	<form action="<?= base_url('') ?>Defect/addDefectStage" method="POST">
		<div class="modal fade" id="modalDefect" tabindex="-1">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Tambah Data Defect</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row mb-6">
							<label for="inputEmail3" class="col-sm-2 col-form-label">ID Defect</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="id_defect" name="id_defect">
							</div>
						</div>
						<div class="row mb-6">
							<label for="inputEmail3" class="col-sm-2 col-form-label">Defect Stage</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="nama_defect" name="nama_defect">
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save changes</button>
					</div>

				</div>
			</div>
		</div><!-- End Basic Modal-->
	</form>

	<script>
		var base = $('#base_url').data('id')

		// let id =
		function edit_defect(ctx) {
			let id = $(ctx).data('id')
			document.getElementById('id_defect');
			document.getElementById('nama_defect');
			if (id) {
				$.ajax({
					type: 'GET',
					url: `${base}Defect/detailDefecftStage/${id}`,
					dataType: 'json',
					success: function(data) {
						console.log(data);
						// console.log(data);
						$('#id_defect').val(data.id_defect)
						$('#nama_defect').val(data.nama_defect)
					}
				});
			}
			$('#modalDefect').modal('show')
		}
	</script>