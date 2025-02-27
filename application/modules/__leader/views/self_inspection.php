<!-- <style>
	table {
		width: 100%;
		border-collapse: collapse;
	}

	th,
	td {
		padding: 8px;
		text-align: center;
		/* Rata tengah */
		border: 1px solid #ddd;
		/* Garis tepi */
	}
</style> -->


<div class="row">
	<?php if ($this->session->flashdata('flash')) : ?>
		<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
	<?php endif; ?>
	<?php if ($this->session->flashdata('flashDataError')) : ?>
		<div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('flashDataError'); ?>"></div>
	<?php endif; ?>

	<div class="col">
		<div class="card">
			<div class="card-body">
				<!-- <div class="row">
					<div class="col-3 d-flex justify-content-between mt-4">
						<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalLeader"><i class="icofont-plus-circle"></i>Self Inspection</button>
						<button class="btn btn-sm btn-success btn-sm" type="button"><i class="icofont-upload"></i>Import</button>
					</div>
				</div> -->

				<div class="table-responsive">
					<hr>
					<!-- <table class="table table-hover table-responsive-lg"> -->
					<table class="table table-hover table-responsive-lg">
						<!-- <table> -->
						<thead>
							<tr>
								<th colspan="4"></th>
								<th colspan="<?= count($range_tanggal) ?>"></th>
								<h5 class="card-title justify-content-center"> Bulan : <?= date('F Y', strtotime($tanggal_awal)) ?></h5>
								<!-- <div class="col-2 d-flex justify-content-between mt-4">
									<select name="filterMonth" id="filterMonth" class="form-control">
										<?php
										echo $bulan;
										?>
									</select>
								</div> -->


							</tr>
							<tr>
								<th>No</th>
								<th>NIK</th>
								<th>Nama</th>
								<th>Area/Bagian</th>
								<?php foreach ($range_tanggal as $tanggal) : ?>
									<th><?= date('d', strtotime($tanggal)) ?></th>
								<?php endforeach; ?>
								<th>Total</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($leader as $dp) {
							?>
								<tr>
									<td><?= $no++ ?></td>
									<td><?= $dp->nik ?></td>
									<td><?= $dp->nama_leader ?></td>
									<td><?= $dp->area ?></td>
									<?php
									$total = 0;
									foreach ($range_tanggal as $tanggal) :
									?>
										<td>
											<?php
											$inspeksi = $this->M_leader->get_inspeksi($tanggal, $dp->nik);

											if ($inspeksi) {
												foreach ($inspeksi as $item) {
													echo $item->count2;
													$total += $item->count2; // Tambahkan ke total
													echo '<br>';
												}
											} else {
												echo '0';
											}
											?>
										</td>
									<?php endforeach; ?>
									<td><?= $total ?></td>
								</tr>
							<?php
							}
							?>
						</tbody>
					</table>
				</div>
				<!-- End Table with hoverable rows -->

			</div>
		</div>
	</div>

	<script>
		/* Select Building */
		var base = $('#base_url').data('id')
	</script>