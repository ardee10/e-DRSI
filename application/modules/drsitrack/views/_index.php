<header class="container-fluid mt-3" style="background: #566787; background-image: url('<?= base_url('') ?>assets/img/background/Adidas_2.jpg';">
	<div class="row-lg-12">
		<div class="p-3 mb-2 bg-transparent text-dark">
			<form action="<?= base_url('') ?>/Drsitrack/filterDrsi" method="POST">
				<div class="row">
					<div class="col-2">
						<img class="img-thumbnail" src="<?= base_url('') ?>assets/img/5.jpeg" width="250" height="250" alt="">
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
						<button type="submit" class="btn btn-success btn-sm"><i class="icofont-filter"></i> Filter</button>
					</div>
					<div class="col-sm-1">
						<!-- <a type="btn" href="#" onclick="downloadData()" class="btn btn-info btn-sm"><i class="icofont-download"></i> Download</a> -->

						<a type="btn" href="<?= base_url('drsitrack/exportToExcel'); ?>" class="btn btn-info btn-sm">
							<i class="icofont-download"></i> Download
						</a>
					</div>
			</form>

		</div>
	</div>
	</div>

</header>
<div class="container-fluid">
	<section class="section justify-content-center">
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body justify-content-center">
						<h5 class="card-title text-center">DRSI TRACKING DATA</h5>
						<!-- Table with stripped rows -->
						<div class="table-responsive">
							<table class="table table-hover table-responsive-lg">
								<!-- class="table table-hover table-responsive-lg -->
								<thead>
									<tr>
										<th scope="col" class="bg-info text-white text-center">#</th>
										<th scope="col" class="bg-info text-white text-center">Date</th>
										<th scope="col" class="bg-info text-white text-center">Gedung</th>
										<th scope="col" class="bg-info text-white text-center">Cell</th>
										<th scope="col" class="bg-info text-white text-center">Artikel</th>
										<th scope="col" class="bg-info text-white text-center">Model</th>
										<th scope="col" class="bg-info text-white text-center">Defect Stage</th>
										<th scope="col" class="bg-info text-white text-center">Defect Name</th>
										<th scope="col" class="bg-info text-white text-center">Defect Photo</th>
										<th scope="col" class="bg-info text-white text-center">Pairs</th>
										<th scope="col" class="bg-info text-white text-center">Defect Source</th>
										<th scope="col" class="bg-info text-white text-center">Prod Self Inspection</th>
										<th scope="col" class="bg-info text-white text-center">Who Let Defect Go</th>
										<th scope="col" class="bg-info text-white text-center">Count</th>
										<th scope="col" class="bg-info text-white text-center">Defect Found</th>
										<th scope="col" class="bg-info text-white text-center">Who Stop Defect Go</th>
										<th scope="col" class="bg-info text-white text-center">Count</th>
										<th scope="col" class="bg-info text-white text-center">Remark</th>

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
						<!-- End Table with stripped rows -->

					</div>
				</div>

			</div>

			<div class="copyright justify-content-center">
				&copy; Copyright <strong><span>FAST TRACK - PT Parkland Word Indonesia Jepara</span></strong>. All Rights Reserved
			</div>
			<div class="credits justify-content-center">
				Develop by <a href="#">IT Department</a>
			</div>
	</section>
</div>



<!-- <script>
	function downloadData() {

		var base = $('#base_url').data('id')
		let building = $('select[name="filter_gedung"]').val()
		let start = $('input[name="startFilter"]').val()
		let end = $('input[name="endFilter"]').val()

		location.href = `${base}Drsitrack/tracking/${building}/${start}/${end}/exportToExcel`
	}
</script> -->