<section class="section profile">
	<div class="row">
		<?php if ($this->session->flashdata('flash')) : ?>
			<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
		<?php endif; ?>
		<div class="col-xl-3">

			<div class="card">
				<div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

					<img src="<?= base_url(); ?>assets/img/user.png" alt="Profile" class="rounded-circle">
					<h2><?= $leader->nama_leader; ?></h2>
					<h3><?= $leader->area; ?></h3>

				</div>
			</div>

		</div>

		<div class="col-xl-9">
			<div class="card">
				<div class="card-body pt-3">
					<!-- Bordered Tabs -->
					<ul class="nav nav-tabs nav-tabs-bordered">
						<li class="nav-item">
							<button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
						</li>
					</ul>
					<div class="tab-content pt-2">
						<div class="tab-pane fade show active profile-overview" id="profile-overview">
							<!-- Table with hoverable rows -->
							<div class="table-responsive">
								<table id="table_" class="table table-hover table-responsive-lg">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Date</th>
											<th scope="col">Factory</th>
											<th scope="col">Model</th>
											<th scope="col">Defect Stage</th>
											<th scope="col">Defect Name</th>
											<th scope="col">Photo</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<?php
											$no = 1;
											foreach ($drsidata as $dp) {
											?>
												<td scope="row"><?= $no++ ?></td>
												<td><?= shortdate_indo($dp->date) ?></td>
												<td><?= $dp->gedung ?></td>
												<td><?= $dp->model ?></td>
												<td><?= $dp->nama_defect ?></td>
												<td><?= $dp->nama_defect_sub_class ?></td>
												<!-- Photo -->
												<td>
													<img width="50px" src="<?= base_url('assets/img/img-finding/' . $dp->picture) ?>" class="rounded">
												</td>
												<td class="text-align-center">

													<button type="button" class="btn btn-success btn-sm detail-button" data-id="<?= $dp->id_finding ?>" onclick="modalDisplay(this)"><i class="bi bi-check-circle"></i> View</button>
													</a>
												</td>
										</tr>
									<?php
											}
									?>
									</tbody>
								</table>
								<!-- End Table with hoverable rows -->
							</div>
						</div>

					</div><!-- End Bordered Tabs -->

				</div>
			</div>

		</div>
	</div>
</section>

<!-- Modal -->

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

</div>


<script>
	var base = $('#base_url').data('id')

	function modalDisplay(ctx) {
		let id = $(ctx).data('id')
		// alert(id);
		if (id) {
			$.ajax({
				type: "GET",
				url: `${base}home/DataFindingId/${id}`,
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
</script>