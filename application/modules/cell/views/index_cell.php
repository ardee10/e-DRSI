<div class="row-12">
	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col">
					<div class="float-start">
						<button type="button" class="btn btn-primary btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#modalCell"><i class="icofont-plus-circle"></i> Data Cell</button>
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
							<th scope="col">ID Cell</th>
							<th scope="col">Factory</th>
							<th scope="col">Nama</th>
							<th scope="col">Jenis</th>
							<th scope="col">Status</th>
							<th scope="col">Action</th>

						</tr>
					</thead>
					<tbody>

						<tr>
							<?php
							$no = 1;
							foreach ($cell as $dp) {
							?>
								<td><?= $no++ ?></td>
								<td><?= $dp->id_cell ?></td>
								<td><?= $dp->kode_factory ?></td>
								<td><?= $dp->nama_cell ?></td>
								<td><?= $dp->jenis ?></td>
								<td><?php
									if ($dp->is_active == '1') {
										$status = '<button type="button" class="btn btn-success btn-sm"><i class="bi bi-check-circle"></i> Active</button>';
									} else {
										$status = '<button type="button" class="btn btn-danger btn-sm"><i class="bi bi-exclamation-octagon"></i> Not Active</button>';
									}
									?>
									<?= $status ?>
								</td>
								<td class="text-align-center">
									<a href="#"><i class="icofont-ui-edit text-info"></i></a>
									<a href="#"><i class="icofont-ebook text-success"></i></a>
									<a href=" #"><i class="icofont-ui-delete text-danger"></i></a>
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


	<!-- Modal Cell Add -->
	<form action="<?= base_url('') ?>#" method="POST">
		<div class="modal fade" id="modalCell" tabindex="-1">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Tambah Data Cell</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row mb-6">
							<label for="inputEmail3" class="col-sm-4 col-form-label">ID Cell</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="id_cell" name="id_cell">
							</div>
						</div>
						<div class="row mb-6">
							<label for="inputEmail3" class="col-sm-4 col-form-label">Kode Factory</label>
							<div class="col-sm-8">
								<!-- <input type="text" class="form-control" id="kode_factory" name="kode_factory"> -->
								<select class="form-select" aria-label="Default select example" id="kode_factory" name="kode_factory">
									<option value=" ">----Silahkan Pilih----</option>
									<!-- <option value="1">Active</option>
									<option value="0">Not Active</option> -->
								</select>
							</div>
						</div>
						<div class="row mb-6">
							<label for="inputEmail3" class="col-sm-4 col-form-label">Nama Cell</label>
							<div class="col-sm-8">
								<!-- <input type="text" class="form-control" id="nama_cell" name="nama_cell"> -->
								<select class="form-select" aria-label="Default select example" id="nama_cell" name="nama_cell">
									<option value=" ">----Silahkan Pilih----</option>
									<!-- <option value="1">Active</option>
									<option value="0">Not Active</option> -->
								</select>
							</div>
						</div>
						<div class="row mb-6">
							<label for="inputEmail3" class="col-sm-4 col-form-label">Status</label>
							<div class="col-sm-8">
								<select class="form-select" aria-label="Default select example" id="is_active" name="is_active">
									<option value=" ">----Silahkan Pilih----</option>
									<option value="1">Active</option>
									<option value="0">Not Active</option>
								</select>
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