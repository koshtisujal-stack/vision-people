

	<style>
		@media (max-width: 576px) {
			div.example_filter {
				background: blue;
			}

			div.dataTables_wrapper .row {
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




		<!-- main content  -->
		<div class="page-wrapper">
			<div class="page-content">
				<div class="card">
					<div class="card-body">
						<h5>Employee History</h5>

						<table class="table table-bordered">
							<thead class="table-primary">
								<tr>
									<th>Employee Name</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php if (!empty($employees)): ?>
									<?php foreach ($employees as $e): ?>
										<tr>
											<td><?= $e->name ?></td>
											<td>
												<a href="<?= base_url('admin/history/view/' . $e->id) ?>"
													class="btn btn-primary btn-sm">
													View History
												</a>
											</td>
										</tr>
									<?php endforeach; ?>
								<?php else: ?>
									<tr>
										<td colspan="2" class="text-center text-muted">
											No employees found
										</td>
									</tr>
								<?php endif; ?>

							</tbody>
						</table>

					</div>
				</div>
			</div>
		</div>

		<!-- end wrapper -->


	</div>
								</div>
		<!--end wrapper-->
		

	<script>
		$(document).ready(function() {
			$('#example').DataTable({
				pageLength: 10,
				lengthMenu: [5, 10, 25, 50, 100],
				paging: true,
				searching: true,
				ordering: true,
				info: true,
				responsive: true
			});
		});
	</script>
