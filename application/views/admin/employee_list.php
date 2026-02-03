

	<style>
		@media (max-width: 576px) {
			div.example_filter{
				background: blue;
			}
			div.dataTables_wrapper .row{
				padding: 0;
				margin: 0;
			}
			div.dataTables_filter {
			width: 100%;
			padding: 0;
			display: flex;
			/* justify-content: space-between; */
			/* align-items: center; */
			}

			div.dataTables_filter input {
			width: 100% !important;
			box-sizing: border-box;
			margin-top: 0.5rem;
			}
		}
	</style>
	


        <div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">Employee List</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>#</th>
										<th>name</th>
										<th>phone</th>
										<th>email</th>
										<th>country</th>
										<th>Address</th>
									</tr>
								</thead>
								<tbody>
<?php $i=1; foreach($employees as $emp){ ?>
<tr>
    <td><?= $i++ ?></td>
    <td><?= $emp->name ?></td>
    <td><?= $emp->phone ?></td>
    <td><?= $emp->email ?></td>
    <td><?= $emp->country ?></td>
	<td><?= $emp->address ?></td>
</tr>
<?php } ?>
</tbody>


								<tfoot>
									
								</tfoot>
							</table>
						</div>
					</div>
				</div>
					
				<hr/>
			</div>
		</div>
		<!--end page wrapper -->
       
<!-- ✅ ADDED: Pagination Init -->
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
