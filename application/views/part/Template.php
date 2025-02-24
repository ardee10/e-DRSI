<!DOCTYPE html>
<html lang="en">

<!-- Header -->
<?php require_once('header.php'); ?>

<body>
	<!-- NAV BAR -->
	<?php
	if ($this->session->userdata('username')) {
		require_once('_navbar.php');
	?>
		<aside id="sidebar" class="sidebar">
			<?php
			require_once('_sidebar.php')
			?>
		</aside><!-- End Sidebar-->

	<?php
	}
	if ($this->session->userdata('nik')) {
		require_once('navbar_leader.php');
	?>
		<aside id="sidebar" class="sidebar">
			<?php
			require_once('sidebar_leader.php')
			?>
		</aside><!-- End Sidebar-->

	<?php
	}
	?>
	<main id="main" class="main">

		<div class="pagetitle mb-3">
			<h1>Dashboard</h1>

			<nav>
				<ol class="breadcrumb mb-3">
					<li class="breadcrumb-item"><a href="index.html">Home</a></li>
					<li class="breadcrumb-item active"><?= $title; ?></li>
				</ol>
			</nav>
		</div><!-- End Page Title -->

		<section class="section dashboard">

			<?= $contents; ?>

		</section>

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<footer id="footer" class="footer">
		<!-- Footer -->
		<?php require_once('footer.php'); ?>
	</footer><!-- End Footer -->

	<!-- JS -->

	<?php require_once('_js.php'); ?>

</body>

</html>
