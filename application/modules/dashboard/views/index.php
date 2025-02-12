<main id="main" class="main">
	<div class="pagetitle">
		<h1>Dashboard</h1>
		<nav>
			<ol class="breadcrumb mt-2">
				<li class="breadcrumb-item"><a href="<?php base_url() ?>">Home</a></li>
				<li class="breadcrumb-item active"><?= $title ?></li>
			</ol>
		</nav>
	</div>
	<!-- Contentnya dibawah sini -->
	<section class="section dashboard">
		<div class="row-12">
			<div class="card">

				<div class="card-body">

					<!-- <div class="row">
						<div class="col">
							<div class="float-start">
								<button type="button" class="btn btn-primary btn-sm mt-3"><i class="icofont-plus-circle"></i> Data Model</button>
							</div>
						</div>
						<div class="col">
							<div class="float-end">
								<button type="button" class="btn btn-success btn-sm mt-3"><i class="icofont-long-arrow-left"></i> Kembali</button>
							</div>

						</div>
					</div> -->
					<div class="table-responsive">
						<hr>
						<table id="table_" class="table table-hover table-responsive-lg">
							<thead>
								<tr>
									<th scope="col">No</th>
									<th scope="col">Date</th>
									<th scope="col">Factory</th>
									<th scope="col">Cell</th>
									<th scope="col">Article</th>
									<th scope="col">Model</th>
									<th scope="col">Defect Stage</th>
									<th scope="col">Defect Name</th>
									<th scope="col">Photo</th>
									<th scope="col">Defect Source</th>
									<th scope="col">Who Stop It</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<?php
									$no = 1;
									foreach ($finding as $dp) {
									?>
										<td><?= $no++ ?></td>
										<td><?= $dp->date ?></td>
										<td><?= $dp->gedung ?></td>
										<td><?= $dp->cell ?></td>
										<td><?= $dp->artikel ?></td>
										<td><?= $dp->model ?></td>
										<td><?= $dp->defect_stage ?></td>
										<td><?= $dp->defect_name2 ?></td>
										<!-- Photo -->
										<td>
											<?php if ($dp->picture == null) {
												$img = 'assets/img/no-images.png';
											} else {
												$path = 'assets/img/img_finding/' . $dp->picture;
												if (file_exists($path) && $dp->picture) {
													$img = 'assets/img/img_finding/' . $dp->picture;
												} else {
													$img = 'assets/img/no-images.png';
												}
											}
											?>
											<img width="80px" src="<?= $img ?>" class="rounded">
										</td>

										<td><?= $dp->defect_source ?></td>
										<td><?= $dp->who_stop_defect ?></td>
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



	</section>

</main><!-- End #main -->
