<div class="page-wrapper">
  <div class="page-content">

    <!-- Breadcrumb / Title -->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
      <div class="breadcrumb-title pe-3">
        Attendance Details
      </div>
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item">
              <a href="<?= base_url('admin/dashboard') ?>">
                <i class="bx bx-home-alt"></i>
              </a>
            </li>
            <li class="breadcrumb-item active">View Details</li>
          </ol>
        </nav>
      </div>
    </div>

    <!-- Card -->
    <div class="card">
      <div class="card-body">






      <div class="row mb-4">

  <!-- Present Card -->
  <div class="col-md-6">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="text-success">Present</h5>
        <h2><?= $present_count ?></h2>
        <small>
          <?= date('F Y', strtotime($year.'-'.$month.'-01')) ?>
        </small>
      </div>
    </div>
  </div>

  <!-- Absent Card -->
  <div class="col-md-6">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="text-danger">Absent</h5>
        <h2><?= $absent_count ?></h2>
        <small>
          <?= date('F Y', strtotime($year.'-'.$month.'-01')) ?>
        </small>
      </div>
    </div>
  </div>

</div>




        <!-- Filter -->
        <form method="get" class="mb-3">
          <input
            type="month"
            name="month_year"
            value="<?= $year.'-'.$month ?>"
            class="form-control"
            style="max-width:220px"
            onchange="this.form.submit()"
          >
        </form>

        <!-- Table -->
        <div class="table-responsive">
          <table class="table table-bordered table-hover align-middle">
            <thead class="table-primary">
              <tr>
                <th>Date</th>
                <th>Time</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
<?php if(!empty($rows)): ?>
  <?php foreach($rows as $r): ?>
    <tr>
      <td><?= date('d-m-Y', strtotime($r->attendance_date)) ?></td>
      <td><?= date('h:i A', strtotime($r->created_at)) ?></td>
      <td>
        <span class="badge bg-<?= $r->status=='Present'?'success':'danger' ?>">
          <?= $r->status ?>
        </span>
      </td>
    </tr>
  <?php endforeach; ?>
<?php else: ?>
  <tr>
    <td colspan="3" class="text-center text-muted">
      No attendance found for this month
    </td>
  </tr>
<?php endif; ?>
</tbody>

          </table>
        </div>

      </div>
    </div>

  </div>
</div>
