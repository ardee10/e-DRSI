<div class="row-12">
	<?php if ($this->session->flashdata('flash')) : ?>
		<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
	<?php endif; ?>
	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col">
					<div class="float-start">
						<button type="button" class="btn btn-primary btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#modalDefectStandart"><i class="icofont-plus-circle"></i> Defect Standart Name</button>
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
				<table id="table_sub_defect" class="table table-hover table-responsive-lg">
					<thead>
						<tr>
							<th scope="col">Nomor</th>
							<th scope="col">DEFECT STAGE</th>
							<th scope="col">DEFECT CLASS</th>
							<th scope="col">DEFECT STANDART NAME</th>
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
								<td><?= $dp->nama_defect_class ?></td>
								<td><?= $dp->nama_defect_sub_class ?></td>
								<td class="text-align-center">
									<!-- <a href="#" data-target="#modalDefectStandart" data-id><i class=" icofont-ui-edit text-info"></i></a> -->
									<a href="#" onclick="edit_defect_class(this)" data-id="<?= $dp->id_defect_sub_class; ?>"><i class=" icofont-ui-edit text-info"></i></a>
									<a href="<?= base_url('Defect/hapusDefectStandart/'); ?><?= $dp->id_defect_sub_class; ?>" class="tombol-hapus"><i class="icofont-ui-delete text-danger"></i>
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

	<!-- Add Defect Standart Name-->
	<form action="<?= base_url('') ?>Defect/addDefectStandart" method="POST">
		<div class="modal fade" id="modalDefectStandart" tabindex="-1">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">DATA DEFECT STANDART NAME</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row mb-3">
							<label for="IDDefectName" class="col-sm-4 col-form-label">ID Defect Standart Name</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="id_defect_sub_class" name="id_defect_sub_class">
							</div>
						</div>
						<div class="row mb-3">
							<label for="inputEmail" class="col-sm-4 col-form-label">Defect Stage</label>
							<div class="col-sm-8">
								<select class="form-select" aria-label="Default select example" id="id_defect" name="id_defect">
									<option value=" ">----Silahkan Pilih Defect Stage----</option>
									<?php foreach ($stage as $dt) {
									?>
										<option value="<?= $dt->id_defect ?>"><?= $dt->nama_defect ?></option>
									<?php
									} ?>

								</select>
							</div>
						</div>
						<div class="row mb-3">
							<label for="inputEmail" class="col-sm-4 col-form-label">Defect Class</label>
							<div class="col-sm-8">
								<select class="form-select" aria-label="Default select example" id="id_defect_class" name="id_defect_class">
									<!-- <option value=" ">----Silahkan Pilih Defect Stage----</option> -->
								</select>
							</div>
						</div>
						<div class="row mb-3">
							<label for="Defectname" class="col-sm-4 col-form-label">Defect Standart Name</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="nama_defect_sub_class" name="nama_defect_sub_class">
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
		var base = $('#base_url').data('id');

		$(document).ready(function() {
			$('#id_defect').change(function(event) {
				var stage = $("#id_defect").val();
				// http://192.168.44.97/e-drsi/Defect/defectStage/CT
				$.ajax({
					type: "GET",
					url: `${base}Defect/defectStage/${stage}`,
					dataType: "json",
					success: function(data) {
						// console.log(data);
						var a = "<option value=''>--- SILAHKAN PILIH ---</option>";
						for (var i = 0; i < data.length; i++) a += "<option value='" + data[i].id_defect_class + "'>" + data[i].nama_defect_class + "</option>";
						$("#id_defect_class").html(a);
					}
				});
			})

		});

		function edit_defect_class(edit) {
			let id = $(edit).data('id')
			// alert(id);
			document.getElementById('id_defect_sub_class');
			document.getElementById('nama_defect_sub_class');
			document.getElementById('id_defect');
			document.getElementById('id_defect_class');
			if (id) {
				$.ajax({
					type: 'GET',
					/* http://192.168.44.97/e-drsi/Defect/detailDefecStandart/CT24 */
					url: `${base}Defect/detailDefecStandart/${id}`,
					dataType: 'json',
					success: function(data) {

						$('#id_defect_sub_class').val(data.id_defect_sub_class)
						$('#nama_defect_sub_class').val(data.nama_defect_sub_class)
						$('#id_defect').val(data.id_defect)
						$('#id_defect_class').val(data.id_defect_class)
					}
				});
			}
			$('#modalDefectStandart').modal('show')
		}
	</script>