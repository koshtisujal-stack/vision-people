<div class="page-wrapper">
<div class="page-content">

<div class="container-fluid">

  <h4 class="mb-4">Company Holidays – <?= $year ?></h4>

  <!-- Year Filter -->
  <form method="get" class="mb-3">
    <div class="col-md-3">
      <select name="year" class="form-control" onchange="this.form.submit()">
        <?php for($y = date('Y')-1; $y <= date('Y')+2; $y++): ?>
          <option value="<?= $y ?>" <?= ($y == $year) ? 'selected' : '' ?>>
            <?= $y ?>
          </option>
        <?php endfor; ?>
      </select>
    </div>
  </form>

  <div class="d-flex gap-2 align-items-center mb-3">
    <!-- <input type="number" class="form-control w-25" value="<?= $year ?>" readonly> -->

    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addHolidayModal">
        + Add Holiday
    </button>
</div>


  <div class="card">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <thead class="table-primary">
            <tr>
              <th>Date</th>
              <th>Day</th>
              <th>Holiday Name</th>
            </tr>
          </thead>
      <tbody>
<?php if (!empty($holidays)) : ?>
    <?php foreach ($holidays as $h) : ?>
        <tr>
            <td><?= date('d-m-Y', strtotime($h->holiday_date)) ?></td>
            <td><?= $h->day ?></td>
            <td><?= $h->holiday_name ?></td>
        </tr>
    <?php endforeach; ?>
<?php else : ?>


  <tr>
    <td colspan="3" class="text-center text-muted">
      No holidays found for <?= $year ?>
    </td>
  </tr>
<?php endif; ?>
</tbody>


        </table>
      </div>
    </div>
  </div>

</div>




<div class="modal fade" id="addHolidayModal" tabindex="-1">
  <div class="modal-dialog">
    <form method="post" action="<?= base_url('admin/holidays/add') ?>" class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title">Add Holiday</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <div class="mb-3">
          <label class="form-label">Holiday Date</label>
          <input type="date" name="holiday_date" class="form-control" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Holiday Name</label>
          <input type="text" name="holiday_name" class="form-control" required>
        </div>
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Save Holiday</button>
      </div>

    </form>
  </div>
</div>

</div>

</div>
