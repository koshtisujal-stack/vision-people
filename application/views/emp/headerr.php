<!doctype html>
<html lang="en" data-bs-theme="light">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="<?= base_url('assets/images/vlogo.png') ?>" type="image/png">
	<!--plugins-->
	<link href="<?= base_url('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/plugins/simplebar/css/simplebar.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/plugins/metismenu/css/metisMenu.min.css') ?>" rel="stylesheet">
	<!-- loader-->
	<link href="<?= base_url('assets/css/pace.min.css') ?>" rel="stylesheet"/>    
	<script src="<?= base_url('assets/js/pace.min.js') ?>"></script>
	<!-- Bootstrap CSS -->
	<link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/bootstrap-extended.css') ?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	
	<link href="<?= base_url('assets/sass/app.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/icons.css') ?>" rel="stylesheet">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/sass/dark-theme.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/sass/semi-dark.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/sass/bordered-theme.css') ?>">
	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<title>VISION TECHNOLABS</title>

	



<link rel="manifest" href="<?= base_url('manifest.json') ?>">
<meta name="theme-color" content="#667eea">


</head>
<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header" style="display:flex;align-items:center;padding:15px;">

				<img id="logoFull"
					src="<?= base_url('assets/images/vision.png') ?>"
					style="width:160px;height:auto;">

				<img id="logoIcon"
					src="<?= base_url('assets/images/slogo.png') ?>"
					style="width:42px;height:auto;display:none;">

			</div>

			<!--navigation-->
			<ul class="metismenu" id="menu">

<li>
    <a href="<?= base_url('emp/dashboard') ?>">
        <div class="parent-icon"><i class="bx bx-home"></i></div>
        <div class="menu-title">Dashboard</div>
    </a>
</li>

<li>
    <a href="javascript:;" class="has-arrow">
        <div class="parent-icon"><i class="fa fa-calendar"></i></div>
        <div class="menu-title">Attendance</div>
    </a>
    <ul>
        <li>
            <a href="<?= base_url('emp/attendance_add') ?>">
                Add Attendance
            </a>
        </li>
        <li>
            <a href="<?= base_url('emp/attendance_list') ?>">
                Attendance List
            </a>
        </li>
    </ul>
</li>

<li>
    <a href="javascript:;" class="has-arrow">
        <div class="parent-icon"><i class="fa fa-sign-out"></i></div>
        <div class="menu-title">Leave</div>
    </a>
    <ul>
        <li>
            <a href="<?= base_url('emp/leave/add') ?>">Add Leave</a>
        </li>
        <li>
            <a href="<?= base_url('emp/leave') ?>">My Leave</a>
        </li>
    </ul>
</li>

<li>
    <a href="<?= base_url('emp/holidays') ?>">
        <div class="parent-icon"><i class="fa fa-calendar"></i></div>
        <div class="menu-title">Holidays</div>
    </a>
</li>

</ul>


						
                 
				
		</div>
		<!--end sidebar wrapper -->

				

                 
				
		
		<!--start header -->
		<header>
			<div class="topbar">
				<nav class="navbar navbar-expand gap-2 align-items-center">
					<div class="mobile-toggle-menu d-flex"><i class='bx bx-menu'></i>
					</div>

					

					  <div class="top-menu ms-auto">
						 <ul class="navbar-nav align-items-center gap-1">
							<li class="nav-item mobile-search-icon d-flex d-lg-none" data-bs-toggle="modal" data-bs-target="#SearchModal">
								<a class="nav-link" href="avascript:;"><i class='bx bx-search'></i>
								</a>
							</li>
							<li class="nav-item dark-mode d-none d-sm-flex">
								<a class="nav-link dark-mode-icon" href="javascript:;"><i class='bx bx-moon'></i>
								</a>
							</li>

							<li class="nav-item dropdown dropdown-app">
								<div class="dropdown-menu dropdown-menu-end p-0">
									<div class="app-container p-2 my-2">

									</div>
								</div>
							</li>

							<!--  -->
							
						</ul> 
					</div>
					<div class="user-box dropdown px-3">
						<a  class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret"
							href="<?= site_url('emp/profile'); ?>"
							role="button"
							data-bs-toggle="dropdown"
							aria-expanded="false">

							<img
								src="<?= !empty($userPhoto)
								
											? base_url('uploads/profile/' . $userPhoto)
											: base_url('assets/images/avatars/avatar-2.png'); ?>"
								class="user-img rounded-circle"
								alt="user avatar"
								width="40"
								height="40"
								style="object-fit: cover;"
								>

							<div class="user-info">
								<p class="user-name mb-0 fw-semibold">
									<?= htmlspecialchars($userName ?: 'User'); ?>

								</p>
								<p class="designattion mb-0 text-muted small">
									<?= isset($userRole) ? $userRole : '' ?>
								</p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item d-flex align-items-center" href="profile"><i class="bx bx-user fs-5"></i><span>Profile</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-cog fs-5"></i><span>Settings</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-home-circle fs-5"></i><span>Dashboard</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-dollar-circle fs-5"></i><span>Earnings</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-download fs-5"></i><span>Downloads</span></a>
							</li>
							<li>
								<div class="dropdown-divider mb-0"></div>
							</li>
							<li><a class="dropdown-item" href="<?= site_url('emp/logout'); ?>">
    <i class="bx bx-log-out-circle"></i>
    Logout
</a>

							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header> 
		<!--end header -->