		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Add Employee</div>
					<!-- <div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Form</li>
							</ol>
						</nav>
					</div> -->
					<!-- <div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Settings</button>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div> -->
				</div>
				<!--end breadcrumb-->
				

				<div class="row">
                    <div class="col-lg-8 mx-auto">
						<div class="card">
							<div class="card-header px-4 py-3">	
								<h5 class="mb-0">Add Employee</h5>
							</div>
							<div class="card-body p-4">
								<form method="post" action="<?= base_url('admin/employee/add') ?>">
									<div class="row mb-3">
										<label for="input35" class="col-sm-3 col-form-label">Enter Your Name</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="input35" name="yourname" placeholder="Enter Your Name">
										</div>
									</div>
									<div class="row mb-3">
										<label for="input36" class="col-sm-3 col-form-label">Phone No</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="input36" name="phone" placeholder="Phone No">
										</div>
									</div>
									<div class="row mb-3">
										<label for="input37" class="col-sm-3 col-form-label">Username</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="input37" name="username" placeholder="Username">
										</div>
									</div>
									<div class="row mb-3">
										<label for="input37" class="col-sm-3 col-form-label">Email Address</label>
										<div class="col-sm-9">
											<input type="email" class="form-control" id="input37" name="email" placeholder="Email Address">
										</div>
									</div>
									<div class="row mb-3">
										<label for="input38" class="col-sm-3 col-form-label">Choose Password</label>
										<div class="col-sm-9">
											<input type="password" class="form-control" id="input38" name="password" placeholder="Choose Password">
										</div>
									</div>
									<div class="row mb-3">
										<label for="input38" class="col-sm-3 col-form-label">Confirm Password</label>
										<div class="col-sm-9">
											<input type="password" class="form-control" id="input38" name="confirm_password" placeholder="Confirm Password">
										</div>
									</div>
									<div class="row mb-3">
										<label for="input39" class="col-sm-3 col-form-label">Select Country</label>
										<div class="col-sm-9">
											<select class="form-select" name="country" required>
    <option value="">Choose...</option>
    <option value="India">India</option>
    <option value="USA">USA</option>
    <option value="UK">UK</option>
</select>
										</div>
									</div>
									<div class="row mb-3">
										<label for="input40" class="col-sm-3 col-form-label">Address</label>
										<div class="col-sm-9">
											<textarea class="form-control" id="input40" name="address" rows="3" placeholder="Address"></textarea>
										</div>
									</div>
									<div class="row mb-3">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<div class="form-check">
												<!-- <input class="form-check-input" type="checkbox" id="input41" name="agree"> -->
												<!-- <label class="form-check-label" for="input41">Check me out</label> -->
											</div>
										</div>
									</div>
									<div class="row">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<div class="d-md-flex d-grid align-items-center gap-3">
												<button type="submit" name="submit2" class="btn btn-primary">Submit</button>
												<button type="reset" class="btn btn-light px-4">Reset</button>
											</div>
										</div>
									</div>
								</form>

							</div>
						</div>
					</div>
				</div>
				<!--end row-->


			</div>
		</div>
		<!--end page wrapper -->
		

<script>
$(document).ready(function () {
    $('#example').DataTable({
        pageLength: 10,
        lengthMenu: [5,10,25,50,100],
        paging: true,
        searching: true,
        ordering: true,
        info: true,
        responsive: true
    });
});
</script>
