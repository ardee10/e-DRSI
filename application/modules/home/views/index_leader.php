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
													<img width="80px" src="<?= base_url('assets/img/img-finding/' . $dp->picture) ?>" class="rounded">
												</td>
												<td class="text-align-center">

													<button type="button" class="btn btn-success btn-sm"><i class="bi bi-check-circle"></i> View</button>
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


<script>
	var base = $('#base_url').data('id')
</script>
