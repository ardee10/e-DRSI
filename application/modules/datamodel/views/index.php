<!-- Contentnya dibawah sini -->

<div class="row-12">
	<div class="card">

		<div class="card-body">

			<div class="row">
				<div class="col">
					<div class="float-start">
						<button type="button" class="btn btn-primary btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#addmodel"><i class="icofont-plus-circle"></i> Data Model</button>
					</div>
				</div>
				<div class="col">
					<div class="float-end">
						<button type="button" class="btn btn-success btn-sm mt-3"><i class="icofont-long-arrow-left"></i> Kembali</button>
					</div>

				</div>
			</div>
			<div class="table-responsive">
				<hr>
				<table id="table_" class="table table-hover table-responsive-lg">
					<thead>
						<tr>
							<th scope="col">Nomor</th>
							<th scope="col">Nama Model</th>
							<th scope="col">Images</th>
							<th scope="col">Date Created</th>
							<th scope="col">Article</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php
							$no = 1;
							foreach ($model as $dp) {
							?>
								<td><?= $no++ ?></td>
								<td><?= $dp->nama_model ?></td>
								<td>
									<?php if ($dp->img_model == null) {
										$img = 'assets/img/no-images.png';
									} else {
										$path = 'assets/img/img-model/' . $dp->img_model;
										if (file_exists($path) && $dp->img_model) {
											$img = 'assets/img/img-model/' . $dp->img_model;
										} else {
											$img = 'assets/img/no-images.png';
										}
									}
									?>
									<img width="80px" src="<?= $img ?>" class="rounded">
								</td>
								<td><?= $dp->model_created ?></td>
								<td><?= $dp->artikel ?></td>
								<td class="text-align-center">
									<a href="#"><i class="icofont-ui-edit text-info"></i></a>
									<a href="#"><i class="icofont-ebook text-success"></i></a>
									<a href="#"><i class="icofont-ui-delete text-danger"></i></a>
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

	<!-- Modal ADD -->

	<!-- Basic Modal -->
	<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
		Basic Modal
	</button> -->
	<div class="modal fade" id="addmodel" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Tambah Data Model</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo dolor quae non quo eligendi? Alias aut, quas sapiente facilis labore quidem dolorem nostrum mollitia placeat nesciunt debitis sequi odit rem.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>

	<!-- End Basic Modal-->