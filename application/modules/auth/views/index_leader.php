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

	<div class="container-fluid">
		<!-- Gagal Login -->
		<?php if ($this->session->flashdata('flash')) : ?>
			<div class="flash-data-login" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
		<?php endif; ?>
		<!-- Log Out -->
		<?php if ($this->session->flashdata('flashlogut')) : ?>
			<div class="flash-data-logout" data-flashdata="<?= $this->session->flashdata('flashlogut'); ?>"></div>
		<?php endif; ?>

		<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

						<div class="d-flex justify-content-center py-4">
							<img src="<?= base_url() ?>assets/img/3.jpeg" alt="" class="figure-img img-fluid rounded border border-light" width="200" height="200">
						</div><!-- End Logo -->

						<div class="card mb-3">
							<div class="card-body">
								<div class="pt-4 pb-2">
									<h3 class="card-title text-center pb-0 fs-4"><b>e-DRSI | Leader</b></h3>
									<p class="text-center small">Defect Reduction (DR) and Self Inspection (SF)</p>
								</div>
								<form class="row g-3 needs-validation" action="<?= base_url('auth/cek_login_leader'); ?>" method="POST" novalidate>
									<div class="col-12">
										<label for="Username" class="form-label">NIK</label>
										<div class="input-group has-validation">
											<input type="text" name="nik" class="form-control" id="nik" required>
											<div class="invalid-feedback">Please enter your NIk.</div>
										</div>
									</div>

									<div class="col-12">
										<label for="Password" class="form-label">Password</label>
										<input type="password" name="password" class="form-control" id="password" required>
										<div class="invalid-feedback">Please enter your password!</div>
									</div>
									<div class="col-12 d-flex justify-content-between">
										<button class="btn btn-primary w-50" type="submit">Login</button>
										<button class="btn btn-success w-50 ms-2" type="button" onclick="goBack()">Kembali</button>
									</div>

								</form>

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="row align-center">
			<div class="col-12">
				<div class="copyright text-center">
					&copy; Copyright PQR - <strong><span class="text-center text-light">PT Parkland Word Indonesia Jepara</span></strong>. All Rights Reserved
				</div>
				<div class="credits text-center text-light"> Designed by <strong>IT Department</strong>
				</div>
			</div>
		</div>

	</div>
	<script>
		var base = $('#base_url').data('id')

		function goBack() {
			window.open(base)
		}
	</script>
