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
<?php if(!empty($holidays)): ?>
  <?php foreach($holidays as $h): ?>
    <tr>
      <td><?= date('d-m-Y', strtotime($h->holiday_date)) ?></td>
      <td><?= date('l', strtotime($h->holiday_date)) ?></td>
      <td><?= $h->holiday_name ?></td>
    </tr>
  <?php endforeach; ?>
<?php else: ?>
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

</div>

</div>

