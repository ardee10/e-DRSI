<ul class="sidebar-nav" id="sidebar-nav">
	<!-- <li class="nav-item">
		<a class="nav-link " href="<?= base_url('Home/PageLeader') ?>">
			<i class="icofont-dashboard-web"></i>
			<span>Dashboard</span>
		</a>
	</li> -->

	<li class="nav-item">
		<a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
			<i class="bi bi-menu-button-wide"></i><span>PAGES LEADER</span><i class="bi bi-chevron-down ms-auto"></i>
		</a>
		<ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
			<li>
				<a href="<?= base_url('Home/drsiform') ?>">
					<i class="bi bi-circle"></i><span>Form DRSI</span>
				</a>
			</li>
			<!-- <li>
				<a href="<?= base_url('#') ?>">
					<i class="bi bi-circle"></i><span>Data Submit Form</span>
				</a>
			</li> -->
			<li>
				<a href="<?= base_url('Home/displayGraph') ?>">
					<i class="bi bi-circle"></i><span>Lihat Grafik </span>
				</a>
			</li>

		</ul>
	</li><!-- End Components Nav -->


</ul>