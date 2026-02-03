
        <!-- start page wrapper -->
<div class="page-wrapper">
<div class="page-content">

<div class="card">
<div class="card-body">

<h5>Leave List</h5>

<table class="table table-bordered">
<thead class="table-primary">
<tr>
    <th>#</th>
    <th>Date</th>
    <th>Type</th>
    <th>Reason</th>
    <th>Status</th>
	<!-- <th>Time </th> -->
</tr>
</thead>

<tbody>
<?php $i=1; foreach($leaves as $row){ ?>
<tr>
    <td><?= $i++ ?></td>
    <td><?= $row->leave_date ?></td>
   	<td>
<?php
    if ($row->leave_type == 'full_day') {
        echo 'Full Day';
    } elseif ($row->leave_type == 'half_day_1st half') {
        echo 'Half Day (1st Half)';
    } elseif ($row->leave_type == 'half_day_2') {
        echo 'Half Day (2nd Half)';
    } else {
        echo ucfirst($row->leave_type);
    }
?>
</td>
    <td><?= $row->reason ?></td>
    <td>
        <span class="badge 
        <?= $row->status=='Approved'?'bg-success':($row->status=='Rejected'?'bg-danger':'bg-warning') ?>">
            <?= $row->status ?>
        </span>
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
  
    <script>
       $(".data-attributes span").peity("donut")
    </script>
