<ul class="sidebar-nav" id="sidebar-nav">
	<li class="nav-item">
		<a class="nav-link " href="<?= base_url('Home') ?>">
			<i class="bi bi-grid"></i>
			<span>Dashboard</span>
		</a>
	</li><!-- End Dashboard Nav -->

	<li class="nav-item">
		<a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
			<i class="bi bi-menu-button-wide"></i><span>MASTER DATA DEFECT</span><i class="bi bi-chevron-down ms-auto"></i>
		</a>
		<ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
			<li>
				<a href="<?= base_url('Defect') ?>">
					<i class="bi bi-circle"></i><span>DEFECT STAGE</span>
				</a>
			</li>
			<li>
				<a href="<?= base_url('Defect/defectClass') ?>">
					<i class="bi bi-circle"></i><span>DEFECT CLASS</span>
				</a>
			</li>
			<li>
				<a href="<?= base_url('Defect/subdefectClass') ?>">
					<i class="bi bi-circle"></i><span>DEFECT STANDART NAME</span>
				</a>
			</li>

		</ul>
	</li><!-- End Components Nav -->

	<li class="nav-heading">PAGES</li>
	<li class="nav-item">
		<a class="nav-link collapsed" href="<?= base_url('Datamodel') ?>">
			<i class="bi bi-person"></i>
			<span>DATA MODEL</span>
		</a>
	</li><!-- End Profile Page Nav -->

	<li class="nav-item">
		<a class="nav-link collapsed" href="<?= base_url('cell') ?>">
			<i class="bi bi-question-circle"></i>
			<span>DATA CELL</span>
		</a>
	</li><!-- End F.A.Q Page Nav -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="<?= base_url('Leader') ?>">
			<i class="bi bi-question-circle"></i>
			<span>DATA LEADER</span>
		</a>
	</li><!-- End F.A.Q Page Nav -->
</ul>
