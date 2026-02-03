

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


        <!-- start page wrapper -->
<div class="page-wrapper">
<div class="page-content">

<div class="card">
<div class="card-body">

<h5>Leave List</h5>

<table class="table table-bordered">
<thead>
<tr>
    <th>#</th>
    <th>Employee</th>
    <th>Date</th>
    <th>Type</th>
    <th>Reason</th>
    <th>Status</th>
    <th>Action</th>
</tr>
</thead>

<tbody>
<?php $i=1; foreach($leaves as $row){ ?>
<tr>
    <td><?= $i++ ?></td>
    <td><?= $row->name ?></td>
    <td><?= $row->leave_date ?></td>
    <td><?= $row->leave_type ?></td>
    <td><?= $row->reason ?></td>
    <td>
        <span class="badge 
            <?= $row->status=='Approved'?'bg-success':($row->status=='Rejected'?'bg-danger':'bg-warning') ?>">
            <?= $row->status ?>
        </span>
    </td>
    <td>
<?php if($row->status=='Pending'){ ?>
    <a href="<?= base_url('admin/leave/approve/'.$row->id) ?>" 
       class="btn btn-success btn-sm">Approve</a>

    <a href="<?= base_url('admin/leave/reject/'.$row->id) ?>" 
       class="btn btn-danger btn-sm">Reject</a>
<?php } ?>
</td>

</tr>
<?php } ?>
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
