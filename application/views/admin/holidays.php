<style>
  /* ── General ── */
  .holiday-page .card {
    border: none;
    border-radius: 16px;
    box-shadow: 0 4px 24px rgba(0, 0, 0, .06);
    overflow: hidden;
  }

  /* ── Page Header ── */
  .page-header-wrap {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 16px;
    margin-bottom: 28px;
  }

  .page-header-wrap .title-section h4 {
    font-size: 24px;
    font-weight: 800;
    color: #2c3e50;
    margin: 0 0 4px 0;
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .page-header-wrap .title-section h4 i {
    font-size: 28px;
    color: #667eea;
  }

  .page-header-wrap .title-section p {
    margin: 0;
    font-size: 13px;
    color: #999;
  }

  .header-actions {
    display: flex;
    align-items: center;
    gap: 12px;
    flex-wrap: wrap;
  }

  /* Year Selector */
  .year-selector {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #f0f4ff;
    padding: 6px 16px;
    border-radius: 12px;
  }

  .year-selector i {
    font-size: 20px;
    color: #667eea;
  }

  .year-selector select {
    border: none;
    background: transparent;
    font-weight: 700;
    font-size: 15px;
    color: #333;
    outline: none;
    cursor: pointer;
    padding: 4px 8px;
  }

  /* Add Button */
  .btn-add-holiday {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 10px 22px;
    border-radius: 12px;
    font-size: 14px;
    font-weight: 700;
    border: none;
    cursor: pointer;
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: #fff;
    box-shadow: 0 4px 16px rgba(102, 126, 234, .35);
    transition: all .25s ease;
    text-decoration: none;
  }

  .btn-add-holiday:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 24px rgba(102, 126, 234, .45);
    color: #fff;
  }

  .btn-add-holiday i {
    font-size: 18px;
  }

  /* ── Summary Strip ── */
  .summary-strip {
    display: flex;
    gap: 16px;
    flex-wrap: wrap;
    margin-bottom: 24px;
  }

  .strip-card {
    flex: 1;
    min-width: 180px;
    border-radius: 14px;
    padding: 20px 22px;
    position: relative;
    overflow: hidden;
    transition: transform .25s ease, box-shadow .25s ease;
  }

  .strip-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 28px rgba(0, 0, 0, .12);
  }

  .strip-card::before {
    content: '';
    position: absolute;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    top: -30px;
    right: -20px;
    background: rgba(255, 255, 255, .2);
  }

  .strip-card .strip-icon {
    width: 44px;
    height: 44px;
    border-radius: 12px;
    background: rgba(255, 255, 255, .35);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    margin-bottom: 10px;
  }

  .strip-card .strip-count {
    font-size: 32px;
    font-weight: 800;
    line-height: 1;
    margin-bottom: 4px;
  }

  .strip-card .strip-label {
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: .6px;
    opacity: .85;
  }

  .strip-total {
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: #fff;
  }

  .strip-upcoming {
    background: linear-gradient(135deg, #43e97b, #38f9d7);
    color: #0d5e3a;
  }

  .strip-past {
    background: linear-gradient(135deg, #ffecd2, #fcb69f);
    color: #7c4a1e;
  }

  /* ── Holiday Table ── */
  .holiday-table {
    border-collapse: separate;
    border-spacing: 0 8px;
    width: 100%;
  }

  .holiday-table thead th {
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: #fff;
    border: none;
    padding: 14px 18px;
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: .7px;
    font-weight: 700;
    white-space: nowrap;
  }

  .holiday-table thead th:first-child {
    border-radius: 12px 0 0 12px;
  }

  .holiday-table thead th:last-child {
    border-radius: 0 12px 12px 0;
  }

  .holiday-table tbody tr {
    background: #fff;
    box-shadow: 0 2px 8px rgba(0, 0, 0, .04);
    transition: transform .2s ease, box-shadow .2s ease;
  }

  .holiday-table tbody tr:hover {
    transform: scale(1.01);
    box-shadow: 0 4px 18px rgba(0, 0, 0, .09);
  }

  .holiday-table tbody tr.past-holiday {
    opacity: .55;
  }

  .holiday-table tbody tr.today-holiday {
    border-left: 4px solid #667eea;
    background: #f0f4ff;
  }

  .holiday-table tbody td {
    padding: 14px 18px;
    border: none;
    vertical-align: middle;
    font-size: 14px;
    color: #444;
  }

  .holiday-table tbody td:first-child {
    border-radius: 12px 0 0 12px;
  }

  .holiday-table tbody td:last-child {
    border-radius: 0 12px 12px 0;
  }

  /* Date cell */
  .date-cell {
    display: flex;
    align-items: center;
    gap: 12px;
  }

  .date-box {
    width: 46px;
    height: 46px;
    border-radius: 12px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: #fff;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    font-weight: 800;
    line-height: 1;
    flex-shrink: 0;
  }

  .date-box .d-num {
    font-size: 18px;
  }

  .date-box .d-mon {
    font-size: 9px;
    text-transform: uppercase;
    letter-spacing: .5px;
    opacity: .85;
  }

  .date-full {
    font-size: 13px;
    color: #888;
  }

  /* Day pill */
  .day-pill {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    padding: 5px 14px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 600;
    background: #eef2ff;
    color: #5b73e8;
  }

  .day-pill i {
    font-size: 14px;
  }

  /* Holiday name cell */
  .holiday-name-cell {
    display: flex;
    align-items: center;
    gap: 10px;
    font-weight: 600;
    color: #2c3e50;
  }

  .holiday-emoji {
    font-size: 22px;
    line-height: 1;
  }

  /* Status indicator */
  .status-dot {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    font-size: 11px;
    font-weight: 600;
    padding: 3px 10px;
    border-radius: 20px;
  }

  .status-dot.upcoming {
    background: #e6f9ee;
    color: #1b7a2b;
  }

  .status-dot.passed {
    background: #f5f5f5;
    color: #999;
  }

  .status-dot.is-today {
    background: #eef2ff;
    color: #667eea;
  }

  /* ── Empty State ── */
  .empty-state {
    text-align: center;
    padding: 60px 20px;
  }

  .empty-state .empty-icon {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: #f0f4ff;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 16px;
  }

  .empty-state .empty-icon i {
    font-size: 36px;
    color: #b0bec5;
  }

  .empty-state h6 {
    color: #666;
    font-weight: 700;
    margin-bottom: 6px;
  }

  .empty-state p {
    color: #999;
    font-size: 14px;
    margin: 0;
  }

  /* ── Enhanced Modal ── */
  .modal-content.enhanced {
    border: none;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0, 0, 0, .15);
  }

  .modal-header.enhanced {
    background: linear-gradient(135deg, #667eea, #764ba2);
    border: none;
    padding: 20px 24px;
  }

  .modal-header.enhanced .modal-title {
    color: #fff;
    font-weight: 800;
    font-size: 18px;
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .modal-header.enhanced .btn-close {
    filter: brightness(0) invert(1);
    opacity: .8;
  }

  .modal-body.enhanced {
    padding: 28px 24px;
  }

  .modal-body.enhanced .form-label {
    font-weight: 600;
    font-size: 13px;
    color: #555;
    margin-bottom: 6px;
  }

  .modal-body.enhanced .form-control {
    border: 2px solid #e8ecf4;
    border-radius: 10px;
    padding: 10px 14px;
    font-size: 14px;
    transition: all .3s ease;
  }

  .modal-body.enhanced .form-control:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 4px rgba(102, 126, 234, .12);
  }

  .modal-footer.enhanced {
    border: none;
    padding: 16px 24px 24px;
  }

  .btn-save-holiday {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 10px 28px;
    border-radius: 12px;
    font-size: 14px;
    font-weight: 700;
    border: none;
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: #fff;
    box-shadow: 0 4px 16px rgba(102, 126, 234, .35);
    transition: all .25s ease;
    cursor: pointer;
  }

  .btn-save-holiday:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(102, 126, 234, .45);
  }

  .btn-cancel {
    padding: 10px 22px;
    border-radius: 12px;
    font-size: 14px;
    font-weight: 600;
    border: 2px solid #e8ecf4;
    background: #fff;
    color: #666;
    cursor: pointer;
    transition: all .2s ease;
  }

  .btn-cancel:hover {
    border-color: #ccc;
    background: #f9f9f9;
  }

  /* ── Animations ── */
  @keyframes fadeUp {
    from {
      opacity: 0;
      transform: translateY(18px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .fade-up {
    animation: fadeUp .5s ease forwards;
  }

  .fade-d1 {
    animation-delay: .1s;
    opacity: 0;
  }

  .fade-d2 {
    animation-delay: .2s;
    opacity: 0;
  }

  .fade-d3 {
    animation-delay: .3s;
    opacity: 0;
  }

  .fade-d4 {
    animation-delay: .35s;
    opacity: 0;
  }

  /* ── Responsive ── */
  @media (max-width: 576px) {
    .page-header-wrap {
      flex-direction: column;
      align-items: flex-start;
    }

    .header-actions {
      width: 100%;
    }

    .year-selector {
      flex: 1;
    }

    .summary-strip {
      flex-direction: column;
    }

    .strip-card {
      min-width: 100%;
    }

    .date-cell {
      flex-direction: column;
      align-items: flex-start;
      gap: 6px;
    }

    .date-box {
      width: 38px;
      height: 38px;
    }

    .date-box .d-num {
      font-size: 14px;
    }
  }
</style>

<!-- Main Content -->
<div class="page-wrapper holiday-page">
  <div class="page-content">

    <!-- Breadcrumb -->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3 fade-up">
      <div class="breadcrumb-title pe-3" style="font-weight:700;font-size:18px;">
        <i class="bx bx-calendar-star me-1" style="color:#667eea;"></i>
        Holidays
      </div>
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item">
              <a href="<?= base_url('admin/dashboard') ?>"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active">Company Holidays</li>
          </ol>
        </nav>
      </div>
    </div>

    <!-- Page Header -->
    <div class="page-header-wrap fade-up fade-d1">
      <div class="title-section">
        <h4><i class="bx bx-party"></i> Company Holidays – <?= $year ?></h4>
        <p>Manage and track all company holidays for the year</p>
      </div>
      <div class="header-actions">
        <form method="get" id="yearForm">
          <div class="year-selector">
            <i class="bx bx-calendar"></i>
            <select name="year" onchange="document.getElementById('yearForm').submit()">
              <?php for ($y = date('Y') - 1; $y <= date('Y') + 2; $y++): ?>
                <option value="<?= $y ?>" <?= ($y == $year) ? 'selected' : '' ?>>
                  <?= $y ?>
                </option>
              <?php endfor; ?>
            </select>
          </div>
        </form>
        <button class="btn-add-holiday" data-bs-toggle="modal" data-bs-target="#addHolidayModal">
          <i class="bx bx-plus-circle"></i> Add Holiday
        </button>
      </div>
    </div>

    <!-- Summary Strip -->
    <?php
    $total_holidays = count($holidays);
    $upcoming_c = 0;
    $past_c = 0;
    $today = date('Y-m-d');
    if (!empty($holidays)) {
      foreach ($holidays as $h) {
        if ($h->holiday_date >= $today) $upcoming_c++;
        else $past_c++;
      }
    }
    ?>
    <div class="summary-strip">
      <div class="strip-card strip-total fade-up fade-d1">
        <div class="strip-icon"><i class="bx bx-calendar-star"></i></div>
        <div class="strip-count"><?= $total_holidays ?></div>
        <div class="strip-label">Total Holidays</div>
      </div>
      <div class="strip-card strip-upcoming fade-up fade-d2">
        <div class="strip-icon"><i class="bx bx-calendar-check"></i></div>
        <div class="strip-count"><?= $upcoming_c ?></div>
        <div class="strip-label">Upcoming</div>
      </div>
      <div class="strip-card strip-past fade-up fade-d3">
        <div class="strip-icon"><i class="bx bx-calendar-minus"></i></div>
        <div class="strip-count"><?= $past_c ?></div>
        <div class="strip-label">Passed</div>
      </div>
    </div>

    <!-- Holidays Table Card -->
    <div class="card fade-up fade-d4">
      <div class="card-body" style="padding:28px;">

        <div class="table-responsive">
          <table class="holiday-table">
            <thead>
              <tr>
                <th><i class="bx bx-calendar me-1"></i>Date</th>
                <th><i class="bx bx-calendar-week me-1"></i>Day</th>
                <th><i class="bx bx-star me-1"></i>Holiday Name</th>
                <th><i class="bx bx-info-circle me-1"></i>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php if (!empty($holidays)): ?>
                <?php foreach ($holidays as $h):
                  $hDate    = strtotime($h->holiday_date);
                  $dayNum   = date('d', $hDate);
                  $monthAbr = date('M', $hDate);
                  $fullDate = date('d M Y', $hDate);
                  $dayName  = $h->day;
                  $isToday  = (date('Y-m-d', $hDate) == $today);
                  $isPast   = (date('Y-m-d', $hDate) < $today);

                  $rowClass = '';
                  if ($isToday) $rowClass = 'today-holiday';
                  elseif ($isPast) $rowClass = 'past-holiday';
                ?>
                  <tr class="<?= $rowClass ?>">
                    <!-- Date -->
                    <td>
                      <div class="date-cell">
                        <div class="date-box">
                          <span class="d-num"><?= $dayNum ?></span>
                          <span class="d-mon"><?= $monthAbr ?></span>
                        </div>
                        <span class="date-full"><?= $fullDate ?></span>
                      </div>
                    </td>

                    <!-- Day -->
                    <td>
                      <span class="day-pill">
                        <i class="bx bx-calendar-week"></i>
                        <?= $dayName ?>
                      </span>
                    </td>

                    <!-- Holiday Name -->
                    <td>
                      <div class="holiday-name-cell">
                        <span class="holiday-emoji">🎉</span>
                        <?= $h->holiday_name ?>
                      </div>
                    </td>

                    <!-- Status -->
                    <td>
                      <?php if ($isToday): ?>
                        <span class="status-dot is-today">
                          <i class="bx bxs-circle" style="font-size:8px;"></i> Today
                        </span>
                      <?php elseif ($isPast): ?>
                        <span class="status-dot passed">
                          <i class="bx bxs-circle" style="font-size:8px;"></i> Passed
                        </span>
                      <?php else: ?>
                        <span class="status-dot upcoming">
                          <i class="bx bxs-circle" style="font-size:8px;"></i> Upcoming
                        </span>
                      <?php endif; ?>
                    </td>

                    <td>
                      <!-- EDIT -->
                      <button class="btn btn-sm btn-primary"
                        data-bs-toggle="modal"
                        data-bs-target="#editHolidayModal<?= $h->id ?>">
                        <i class="bx bx-edit"></i>
                      </button>

                      <!-- DELETE -->
                      <a href="<?= base_url('admin/holidays/delete/' . $h->id) ?>"
                        class="btn btn-sm btn-danger"
                        onclick="return confirm('Delete this holiday?')">
                        <i class="bx bx-trash"></i>
                      </a>
                    </td>
                  </tr>



                <?php endforeach; ?>
              <?php else: ?>
                <tr>
                  <td colspan="4">
                    <div class="empty-state">
                      <div class="empty-icon">
                        <i class="bx bx-calendar-x"></i>
                      </div>
                      <h6>No Holidays Found</h6>
                      <p>No holidays have been added for <?= $year ?> yet.</p>
                    </div>
                  </td>
                </tr>
              <?php endif; ?>
            </tbody>
          </table>
          <?php if (!empty($holidays)): ?>
<?php foreach ($holidays as $h): ?>
<div class="modal fade" id="editHolidayModal<?= $h->id ?>" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <form method="post"
      action="<?= base_url('admin/holidays/update/'.$h->id) ?>"
      class="modal-content enhanced">

      <div class="modal-header enhanced">
        <h5 class="modal-title">
          <i class="bx bx-edit"></i> Edit Holiday
        </h5>
        <button type="button" class="btn-close"
          data-bs-dismiss="modal"></button>
      </div>
<div class="modal-body enhanced">

  <!-- DATE -->
  <div class="mb-3">
    <label class="form-label">Holiday Date</label>
    <input type="date"
      name="holiday_date"
      value="<?= date('Y-m-d', strtotime($h->holiday_date)) ?>"
      class="form-control"
      required>
  </div>

  <!-- NAME -->
  <div class="mb-3">
    <label class="form-label">Holiday Name</label>
    <input type="text"
      name="holiday_name"
      value="<?= $h->holiday_name ?>"
      class="form-control"
      required>
  </div>

</div>

      <div class="modal-footer enhanced">
        <button type="button"
          class="btn-cancel"
          data-bs-dismiss="modal">Cancel</button>

        <button type="submit"
          class="btn-save-holiday">
          Update
        </button>
      </div>

    </form>
  </div>
</div>
<?php endforeach; ?>
<?php endif; ?> 
        </div>

      </div>
    </div>

  </div>
</div>

<!-- Enhanced Modal -->
<div class="modal fade" id="addHolidayModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <form method="post" action="<?= base_url('admin/holidays/add') ?>" class="modal-content enhanced">

      <div class="modal-header enhanced">
        <h5 class="modal-title">
          <i class="bx bx-calendar-plus"></i> Add New Holiday
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body enhanced">
        <div class="mb-3">
          <label class="form-label">
            <i class="bx bx-calendar me-1"></i>Holiday Date
          </label>
          <input type="date" name="holiday_date" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">
            <i class="bx bx-edit me-1"></i>Holiday Name
          </label>
          <input type="text" name="holiday_name" class="form-control"
            placeholder="e.g. Independence Day" required>
        </div>
      </div>

      <div class="modal-footer enhanced">
        <button type="button" class="btn-cancel" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn-save-holiday">
          <i class="bx bx-check"></i> Save Holiday
        </button>
      </div>

    </form>
  </div>
</div>