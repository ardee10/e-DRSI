<style>
	.container-fluid {
		background-image: url('<?= base_url('') ?>assets/img/background/Adidas_2.jpg');
		width: auto;
		height: auto;
		background-attachment: fixed;
		background-repeat: no-repeat;

	}
</style>

<div class="container-fluid">
	<div class="container">
		<div class="row justify-content-center">
			<div class="row">
				<div class="d-flex justify-content-center py-4">
					<!-- <a href="?php echo base_url('') ?>dashboard/formSubmit">
						<img class="img-thumbnail" src="?= base_url('') ?>assets/img/5.jpeg" width="500" height="500" alt="">
					</a> -->
				</div><!-- End Logo -->
				<div class="card mb-3">
					<div class="card-body">
						<div class="d-flex justify-content-center py-4">
							<a href="<?php echo base_url('') ?>dashboard/formSubmit">
								<img class="img-thumbnail" src="<?= base_url('') ?>assets/img/5.jpeg" width="500" height="500" alt="">
							</a>
						</div>
						<div class="pt-4 pb-2">
							<h2 class="text-bold text-center pb-0 fs-2"><?= $title ?></h2>
							<p class="text-center small">Silahkan lengkapi field dibawah ini</p>
						</div>
						<form class="row g-3 needs-validation" id="submit" method="post" action="<?= base_url('') ?>dashboard/submitFinding" enctype="multipart/form-data" novalidate>
							<div class="col-12">
								<label for="yourName" class="form-label">DATE / TANGGAL TEMUAN</label>
								<input type="date" name="date" class="form-control" id="date" required>
								<div class="invalid-feedback">Tanggal harus diisi.</div>
							</div>
							<div class="col-12">
								<label for="Model" class="form-label">Factory</label>
								<div class="col-sm-12">
									<select class="form-select" id="gedung" aria-label="Default select example" name="gedung" id="gedung" required>
										<option value="">--- Silahkan pilih Gedung ---</option>
										<?php
										foreach ($gedung as $data) {
										?>
											<option value="<?= $data->gedung ?>"><?= $data->gedung ?></option>
										<?php
										}
										?>
									</select>
								</div>
								<div class="invalid-feedback">Factory harus diisi.</div>
							</div>
							<div class="col-12">
								<label for="cell" class="form-label input-cell">Cell</label>
								<div class="col-sm-12">
									<select class="form-select" name="cell" id="cellSelect" aria-label="Default select example" required>
										<!-- <option value="">--Pilih Cell--</option> -->
									</select>
								</div>
								<div class="invalid-feedback">Cell harus diisi.</div>
							</div>
							<div class="col-12">
								<label for="Artikel" class="form-label">Artikel NO</label>
								<input type="text" name="artikel" class="form-control" id="artikel" required>
								<div class="invalid-feedback">Artikel harus diisi.</div>
							</div>
							<div class="col-12">
								<label for="Model" class="form-label">Model Name (Nama Model)</label>
								<input type="text" name="model" class="form-control" id="model" required>
								<div class="invalid-feedback">Model harus diisi.</div>
							</div>
							<div class=" col-12">
								<label for="defect_category" class="form-label">Defect Stage </label>
								<select class="form-select" id="defect_stage" name="defect_stage" aria-label="Default select example">
									<option value="">--- Silahkan pilih Defect Stage ---</option>
									<?php
									foreach ($defectStage as $data) {
									?>
										<option value="<?= $data->id_defect ?>"><?= $data->nama_defect ?></option>
									<?php
									}
									?>
								</select>
								<div class="invalid-feedback">Defect Stage harus diisi.</div>
							</div>
							<div class="col-12">
								<label for="defect_category" class="form-label">Defect Name</label>
								<select class="form-select" aria-label="Default select example" name="defectName" id="defectName">
								</select>
							</div>
							<div class="col-12">
								<label for="defect_category" class="form-label">Defect Standart Name</label>
								<select class="form-select" aria-label="Default select example" name="defectName2" id="defectName2">

								</select>
							</div>
							<div class="col-12">
								<label for="picture" class="form-label">Defect Photo</label>
								<input type="file" name="picture" class="form-control" id="picture" required>
								<p class="text-lowercase form-label">Ext File: jpg|jpeg|png</p>
							</div>
							<div class="col-12">
								<label for="qty" class="form-label">Pairs (Jumlah Temuan)</label>
								<input type="number" name="pairs" class="form-control" id="pairs" required>
								<div class="invalid-feedback">Jumlah temuan harus diisi.</div>
							</div>
							<div class="col-12">
								<label for="defectt_category" class="form-label">Defect Source (Sumber Defect)</label>
								<select class="form-select" aria-label="Default select example" name="defectSource" id="defectSource">
									<option value="">--- Silahkan pilih ---</option>
									<?php
									foreach ($defectSource as $data) {
									?>
										<option value="<?= $data->source ?>"><?= $data->source ?></option>
									<?php
									}

									?>
								</select>
							</div>
							<div class="col-12">
								<label for="defectt_category" class="form-label">Production Self Inspect (Bagian Seharusnya Stop Defect)</label>
								<select class="form-select" aria-label="Default select example" name="selfInspect" id="selfInspect">
									<option value="">--- Silahkan pilih ---</option>
									<?php
									foreach ($selfInspect as $data) {
									?>
										<option value="<?= $data->self_inspect ?>"><?= $data->self_inspect ?></option>
									<?php
									}

									?>
								</select>
								<div class="invalid-feedback">Self Inspection harus diisi.</div>
							</div>
							<div class="col-12">
								<label for="who_defect_go" class="form-label">Who Let Defect Go / Operator yang Meneruskan Defect (Awareness) </label>
								<textarea class="form-control" style="height: 100px" name="who_defect_go" id="who_defect_go"></textarea>
								<!-- <div class="invalid-feedback">Artikel harus diisi.</div> -->
							</div>
							<div class="col-12">
								<label for="qty" class="form-label">Count (Jumlah Operator yang Melewatkan Defect)</label>
								<input type="number" name="count" class="form-control" id="count" required>
							</div>

							<div class="col-12">
								<label for="qty" class="form-label">Defect Found</label>
								<select class="form-select" aria-label="Default select example" name="defectArea" id="defectArea">
									<option value="">--- Silahkan pilih ---</option>
									<?php
									foreach ($defectArea as $data) {
									?>
										<option value="<?= $data->area ?>"><?= $data->area ?></option>
									<?php
									}

									?>
								</select>
							</div>
							<div class="col-12">
								<label for="qty" class="form-label">Who Stop Defect Go / Operator yang Stop Defect (Self Inspection)</label>
								<input type="text" name="who_stop_defect" class="form-control" id="who_stop_defect" required>
								<div class="invalid-feedback">Isi dengan Nama dan NIK.</div>
							</div>
							<div class="col-12">
								<label for="qty" class="form-label">Counts (Jumlah Operator stop Defect)</label>
								<input type="number" name="count2" class="form-control" id="count2" required>
							</div>
							<div class="col-12">
								<label for="qty" class="form-label">Remark</label>
								<textarea class="form-control" style="height: 100px" name="remark" id="remark"></textarea>
							</div>

							<div class="col-6 align-center">
								<button class="btn btn-primary w-100" id="submit-finding" type="submit">Kirim</button>
							</div>
							<div class="col-6 align-center">
								<button class="btn btn-success w-100" type="button" value="Cancel" onclick="window.location='<?= base_url('') ?>'">Kembali</button>
							</div>


						</form>

					</div>
				</div>

				<div class="credits text-center">
					<div class="copyright">
						&copy; <b>Copyright FAST TRACK</b><span class="text-center text-light"> - PT Parkland Word Indonesia Jepara. All Rights Reserved </span>
					</div>
					<div class="credits">
						<p class="text-light">Develop by <a href="#" class="text-light">IT Department</a></p>
					</div>

				</div>
			</div>
		</div>
	</div>


	<script>
		/* Select Building */
		var base = $('#base_url').data('id')
		$(document).ready(function() {
			$('#gedung').change(function(event) {
				var gedungselect = $("#gedung").val();
				$.ajax({
					type: "GET",
					url: `${base}dashboard/data_cell/${gedungselect}`,
					dataType: "json",
					success: function(data) {
						var a = "<option value=''>--- PILIH ---</option>";
						for (var i = 0; i < data.length; i++) a += "<option value='" + data[i].nama_cell + "'>" + data[i].nama_cell + "</option>";
						$("#cellSelect").html(a);
					}
				});
			})
			$('#defect_stage').change(function(event) {
				var stage = $("#defect_stage").val();
				$.ajax({
					type: "GET",
					url: `${base}dashboard/defectStage/${stage}`,
					dataType: "json",
					success: function(data) {
						// console.log(data);
						var a = "<option value=''>--- PILIH ---</option>";
						for (var i = 0; i < data.length; i++) a += "<option value='" + data[i].id_defect_class + "'>" + data[i].nama_defect_class + "</option>";
						$("#defectName").html(a);
					}
				});
			})
			$('#defectName').change(function(event) {
				var defName = $("#defectName").val();
				$.ajax({
					type: "GET",
					url: `${base}dashboard/subdefectName/${defName}`,
					dataType: "json",
					success: function(data) {
						// console.log(data);
						var a = "<option value=''>--- PILIH ---</option>";
						for (var i = 0; i < data.length; i++) a += "<option value='" + data[i].id_defect_sub_class + "'>" + data[i].nama_defect_sub_class + "</option>";
						$("#defectName2").html(a);
					}
				});
			})

		});
	</script>