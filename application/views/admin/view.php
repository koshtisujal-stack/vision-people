<div class="page-wrapper">
  <div class="page-content">

    <div class="row">
      <div class="col-md-6">
        <div class="card text-center">
          <div class="card-body">
            <h6>Total Break Time</h6>
            <h4 class="text-danger">
              <?= gmdate('H:i:s', $total_break_seconds) ?>
            </h4>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card text-center bg-success-subtle text-white">
          <div class="card-body">
            <h6>Total Work Time</h6>
            <h4><?= gmdate('H:i:s', $total_work_seconds) ?></h4>
          </div>
        </div>
      </div>
    </div>








    <!-- report -->
    <div class="card mt-4">
      <div class="card-body">
        <h5>Daily Work Report</h5>

        <?php if (!empty($report)) : ?>

          <small class="text-muted">
            Report Date:
            <?= date('d-m-Y', strtotime($report->report_date)) ?>
            |
            Submitted At:
            <?= date('d-m-Y h:i A', strtotime($report->created_at)) ?>
          </small>

          <hr>

          <p class="mt-2">
            <?= nl2br(htmlspecialchars($report->report)) ?>
          </p>

        <?php else : ?>
          <p class="text-muted">No report submitted for this date.</p>
        <?php endif; ?>

      </div>
    </div>



    <!-- date picker -->
    <form method="get">
      <label class="fw-bold mb-1">Select Date</label>

      <div class="input-group" style="max-width: 250px;">
        <input
          type="date"
          name="date"
          class="form-control"
          value="<?= $selected_date ?>"
          onchange="this.form.submit()">

      </div>
    </form>


    <!-- manual  -->
    <!-- MANUAL WORK LOG (ADMIN ONLY) -->
    <!-- <div class="card mt-4 border-primary">
  <div class="card-body">
    <h6 class="text-primary">Add Manual Work Log (Admin)</h6>

    <form method="post" action="<?= base_url('admin/history/add_manual_work/' . $emp->id) ?>">
      <div class="row">
        <div class="col-md-4">
          <label>Start Time</label>
          <input type="datetime-local" name="start_time" class="form-control" required>
        </div>

        <div class="col-md-4">
          <label>End Time</label>
          <input type="datetime-local" name="end_time" class="form-control" required>
        </div>

        <div class="col-md-4">
          <label>Note</label>
          <input type="text" name="note" class="form-control"
                 placeholder="Forgot to start timer">
        </div>
      </div>

      <button class="btn btn-primary mt-3">Add Manual Log</button>
    </form>
  </div>
</div> -->
    <!-- end  -->



    <h5 class="mt-4">Break Logs</h5>
    <table class="table table-bordered">
      <thead class="table-primary">
        <tr>
          <th>Reason</th>
          <th>Start</th>
          <th>End</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($break_logs as $b): ?>
          <tr>
            <td><?= $b->reason ?></td>
            <td><?= date('h:i:s A', strtotime($b->start_time)) ?></td>
            <td><?= date('h:i:s A', strtotime($b->end_time)) ?></td>
            <td>
              <?= gmdate(
                'H:i:s',
                strtotime($b->end_time) - strtotime($b->start_time)
              ) ?>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>


    <h5 class="mt-4">Work Logs</h5>
    <table class="table table-bordered">
      <thead class="table-primary">
        <tr>
          <th>Start</th>
          <th>End</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($hour_logs as $h): ?>
          <tr>
            <td><?= date('h:i:s A', strtotime($h->start_time)) ?></td>
            <td><?= date('h:i:s A', strtotime($h->end_time)) ?></td>
            <td>
              <?= gmdate(
                'H:i:s',
                strtotime($h->end_time) - strtotime($h->start_time)
              ) ?>
              <?php if ($h->source === 'manual'): ?>
                <span class="badge bg-warning">Manual</span>
              <?php endif; ?>
            </td>


          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>







  </div>
</div>
<!-- </div> -->

<footer class="page-footer">
  <p class="mb-0">Copyright © 2024. All right reserved.</p>
</footer>