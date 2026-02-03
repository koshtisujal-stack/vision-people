
		

        <div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">Our Attendance Details</h6>
				<hr/>
				<div class="row mb-3">
  <div class="col-md-4">
    <div class="card text-center shadow-sm">
      <div class="card-body">
        <h6 class="text-muted-light">Present</h6>
        <h3 class="text-success">
          <?= $summary->present_count ?? 0 ?>
        </h3>
        <small>Total days: <?= $total_days ?></small>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card text-center shadow-sm">
      <div class="card-body">
        <h6 class="text-muted-light">Absent</h6>
        <h3 class="text-danger">
          <?= $summary->absent_count ?? 0 ?>
        </h3>
        <small>Total days: <?= $total_days ?></small>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card text-center shadow-sm">
      <div class="card-body">
        <h6 class="text-muted-light">Total Days (Month)</h6>
        <h3 class="text-primary">
          <?= $total_days ?>
        </h3>
        <small><?= date('F Y', strtotime("$year-$month-01")) ?></small>
      </div>
    </div>
  </div>
</div>

				<form method="get">
    <input type="month"
           name="month_year"
           value="<?= $year.'-'.$month ?>"
           onchange="this.form.submit()"
           class="form-control w-25">
</form>


				<div class="card">
    <div class="card-body">
        <div class="table-responsive">
           <table id="example" class="table table-bordered table-hover">

                <thead class="table-primary">
                    <tr>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php if (!empty($rows)): ?>
                    <?php foreach ($rows as $r): ?>
                        <tr>
                            <td><?= date('d-m-Y', strtotime($r->created_at)) ?></td>
                            <td><?= date('h:i A', strtotime($r->created_at)) ?></td>
                            <td>
                                <span class="badge bg-<?= $r->status == 'Present' ? 'success' : 'danger' ?>">
                                    <?= $r->status ?>
                                </span>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="3" class="text-center text-muted">
                            No attendance records found
                        </td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

					
				<hr/>
			</div>
		</div>
	</div>
		<!--end page wrapper -->
     