<style>
  /* ── General ── */
  .leave-page .card {
    border: none;
    border-radius: 16px;
    box-shadow: 0 4px 24px rgba(0,0,0,.06);
    overflow: hidden;
  }

  /* ── Header Section ── */
  .leave-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 12px;
    margin-bottom: 24px;
  }
  .leave-header h5 {
    font-size: 22px;
    font-weight: 800;
    color: #2c3e50;
    margin: 0;
    display: flex;
    align-items: center;
    gap: 10px;
  }
  .leave-header h5 i {
    font-size: 26px;
    color: #667eea;
  }

  /* ── Summary Cards ── */
  .summary-row {
    display: flex;
    gap: 16px;
    flex-wrap: wrap;
    margin-bottom: 28px;
  }
  .stat-card {
    flex: 1;
    min-width: 140px;
    border-radius: 14px;
    padding: 20px 18px;
    position: relative;
    overflow: hidden;
    transition: transform .25s ease, box-shadow .25s ease;
    cursor: default;
  }
  .stat-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 28px rgba(0,0,0,.12);
  }
  .stat-card::before {
    content: '';
    position: absolute;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    top: -30px;
    right: -20px;
    background: rgba(255,255,255,.2);
  }
  .stat-card::after {
    content: '';
    position: absolute;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    bottom: -15px;
    left: -15px;
    background: rgba(255,255,255,.15);
  }
  .stat-card .stat-icon {
    width: 44px;
    height: 44px;
    border-radius: 12px;
    background: rgba(255,255,255,.35);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    margin-bottom: 10px;
  }
  .stat-card .stat-count {
    font-size: 32px;
    font-weight: 800;
    line-height: 1;
    margin-bottom: 2px;
  }
  .stat-card .stat-label {
    font-size: 13px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: .6px;
    opacity: .85;
  }

  .stat-total   { background: linear-gradient(135deg, #a18cd1 0%, #667eea 100%); color: #fff; }
  .stat-pending { background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%); color: #7c4a1e; }
  .stat-approved { background: linear-gradient(135deg, #d4fc79 0%, #96e6a1 100%); color: #1b5e20; }
  .stat-rejected { background: linear-gradient(135deg, #fbc2eb 0%, #f8a4a4 100%); color: #8b1a1a; }

  .stat-total .stat-icon   { color: #fff; }
  .stat-pending .stat-icon { color: #7c4a1e; }
  .stat-approved .stat-icon { color: #1b5e20; }
  .stat-rejected .stat-icon { color: #8b1a1a; }

  /* ── Table ── */
  .leave-table {
    border-collapse: separate;
    border-spacing: 0 8px;
    width: 100%;
  }
  .leave-table thead th {
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: #fff;
    border: none;
    padding: 14px 16px;
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: .7px;
    font-weight: 700;
    white-space: nowrap;
  }
  .leave-table thead th:first-child { border-radius: 12px 0 0 12px; }
  .leave-table thead th:last-child  { border-radius: 0 12px 12px 0; }

  .leave-table tbody tr {
    background: #fff;
    box-shadow: 0 2px 8px rgba(0,0,0,.04);
    transition: transform .2s ease, box-shadow .2s ease;
  }
  .leave-table tbody tr:hover {
    transform: scale(1.01);
    box-shadow: 0 4px 16px rgba(0,0,0,.09);
  }
  .leave-table tbody td {
    padding: 14px 16px;
    border: none;
    vertical-align: middle;
    font-size: 14px;
    color: #444;
  }
  .leave-table tbody td:first-child { border-radius: 12px 0 0 12px; }
  .leave-table tbody td:last-child  { border-radius: 0 12px 12px 0; }

  /* Serial number */
  .serial-num {
    width: 32px;
    height: 32px;
    border-radius: 8px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: #fff;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 13px;
  }

  /* Employee cell */
  .emp-cell {
    display: flex;
    align-items: center;
    gap: 10px;
    font-weight: 600;
    color: #2c3e50;
  }
  .emp-avatar {
    width: 36px;
    height: 36px;
    border-radius: 10px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 14px;
    flex-shrink: 0;
  }

  /* Date cell */
  .date-cell {
    display: flex;
    align-items: center;
    gap: 8px;
  }
  .date-cell i {
    color: #667eea;
    font-size: 18px;
  }
  .date-cell .date-info {
    line-height: 1.3;
  }
  .date-cell .date-info .day-name {
    font-size: 11px;
    color: #999;
  }

  /* Leave type pill */
  .type-pill {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    background: #eef2ff;
    color: #5b73e8;
  }
  .type-pill i { font-size: 14px; }

  /* Reason cell */
  .reason-cell {
    max-width: 200px;
    font-size: 13px;
    color: #666;
    line-height: 1.4;
  }

  /* Status pills */
  .status-pill {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    padding: 5px 14px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .3px;
  }
  .status-pill.approved { background: #e6f9ee; color: #1b7a2b; }
  .status-pill.rejected { background: #fde8e8; color: #c0392b; }
  .status-pill.pending  { background: #fff3e0; color: #e67e22; }
  .status-pill i { font-size: 14px; }

  /* Action Buttons */
  .action-btns {
    display: flex;
    gap: 8px;
    flex-wrap: wrap;
  }
  .btn-approve,
  .btn-reject {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    padding: 6px 14px;
    border-radius: 10px;
    font-size: 12px;
    font-weight: 600;
    border: none;
    cursor: pointer;
    text-decoration: none;
    transition: all .25s ease;
  }
  .btn-approve {
    background: linear-gradient(135deg, #56ab2f, #a8e063);
    color: #fff;
    box-shadow: 0 3px 12px rgba(86,171,47,.3);
  }
  .btn-approve:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(86,171,47,.4);
    color: #fff;
  }
  .btn-reject {
    background: linear-gradient(135deg, #cb2d3e, #ef473a);
    color: #fff;
    box-shadow: 0 3px 12px rgba(203,45,62,.3);
  }
  .btn-reject:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(203,45,62,.4);
    color: #fff;
  }
  .no-action {
    font-size: 12px;
    color: #aaa;
    font-style: italic;
  }

  /* Empty state */
  .empty-state {
    text-align: center;
    padding: 50px 20px;
  }
  .empty-state i {
    font-size: 52px;
    color: #ccc;
    display: block;
    margin-bottom: 14px;
  }
  .empty-state p {
    color: #999;
    font-size: 15px;
    margin: 0;
  }

  /* DataTables overrides */
  .leave-page .dataTables_wrapper .dataTables_filter input {
    border: 2px solid #e8ecf4;
    border-radius: 10px;
    padding: 8px 14px;
    font-size: 13px;
    transition: border-color .3s;
  }
  .leave-page .dataTables_wrapper .dataTables_filter input:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 3px rgba(102,126,234,.15);
    outline: none;
  }
  .leave-page .dataTables_wrapper .dataTables_length select {
    border: 2px solid #e8ecf4;
    border-radius: 8px;
    padding: 5px 10px;
  }
  .leave-page .dataTables_wrapper .dataTables_paginate .paginate_button {
    border-radius: 8px !important;
    border: none !important;
    margin: 0 3px;
    transition: all .2s;
  }
  .leave-page .dataTables_wrapper .dataTables_paginate .paginate_button.current {
    background: linear-gradient(135deg, #667eea, #764ba2) !important;
    color: #fff !important;
    border: none !important;
  }
  .leave-page .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
    background: #eef2ff !important;
    color: #667eea !important;
    border: none !important;
  }

  /* Fade-in */
  @keyframes fadeUp {
    from { opacity: 0; transform: translateY(18px); }
    to   { opacity: 1; transform: translateY(0); }
  }
  .fade-up   { animation: fadeUp .5s ease forwards; }
  .fade-d1   { animation-delay: .1s; opacity: 0; }
  .fade-d2   { animation-delay: .15s; opacity: 0; }
  .fade-d3   { animation-delay: .2s; opacity: 0; }
  .fade-d4   { animation-delay: .25s; opacity: 0; }
  .fade-d5   { animation-delay: .35s; opacity: 0; }

  /* Responsive */
  @media (max-width: 576px) {
    .summary-row { gap: 10px; }
    .stat-card { min-width: 100%; }
    .leave-header { flex-direction: column; align-items: flex-start; }
    div.dataTables_wrapper .row { padding: 0; margin: 0; }
    div.dataTables_filter { width: 100%; padding: 0; display: flex; }
    div.dataTables_filter input { width: 100% !important; box-sizing: border-box; margin-top: 0.5rem; }
    .action-btns { flex-direction: column; }
  }
</style>

<div class="page-wrapper leave-page">
  <div class="page-content">

    <!-- Breadcrumb -->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3 fade-up">
      <div class="breadcrumb-title pe-3" style="font-weight:700;font-size:18px;">
        <i class="bx bx-calendar-edit me-1" style="color:#667eea;"></i>
        Leave Management
      </div>
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item">
              <a href="<?= base_url('admin/dashboard') ?>"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active">Leave List</li>
          </ol>
        </nav>
      </div>
    </div>

    <!-- Summary Cards -->
    <?php
      $total = count($leaves);
      $pending_c = 0; $approved_c = 0; $rejected_c = 0;
      foreach($leaves as $l){
        if($l->status=='Pending') $pending_c++;
        elseif($l->status=='Approved') $approved_c++;
        elseif($l->status=='Rejected') $rejected_c++;
      }
    ?>
    <div class="summary-row">
      <div class="stat-card stat-total fade-up fade-d1">
        <div class="stat-icon"><i class="bx bx-list-ul"></i></div>
        <div class="stat-count"><?= $total ?></div>
        <div class="stat-label">Total</div>
      </div>
      <div class="stat-card stat-pending fade-up fade-d2">
        <div class="stat-icon"><i class="bx bx-time"></i></div>
        <div class="stat-count"><?= $pending_c ?></div>
        <div class="stat-label">Pending</div>
      </div>
      <div class="stat-card stat-approved fade-up fade-d3">
        <div class="stat-icon"><i class="bx bx-check-circle"></i></div>
        <div class="stat-count"><?= $approved_c ?></div>
        <div class="stat-label">Approved</div>
      </div>
      <div class="stat-card stat-rejected fade-up fade-d4">
        <div class="stat-icon"><i class="bx bx-x-circle"></i></div>
        <div class="stat-count"><?= $rejected_c ?></div>
        <div class="stat-label">Rejected</div>
      </div>
    </div>

    <!-- Main Card -->
    <div class="card fade-up fade-d5">
      <div class="card-body" style="padding:28px;">

        <div class="leave-header">
          <h5><i class="bx bx-notepad"></i> Leave Requests</h5>
        </div>

        <!-- Table -->
        <div class="table-responsive">
          <table id="example" class="leave-table">
            <thead>
              <tr>
                <th><i class="bx bx-hash me-1"></i>#</th>
                <th><i class="bx bx-user me-1"></i>Employee</th>
                <th><i class="bx bx-calendar me-1"></i>Date</th>
                <th><i class="bx bx-category me-1"></i>Type</th>
                <th><i class="bx bx-message-detail me-1"></i>Reason</th>
                <th><i class="bx bx-info-circle me-1"></i>Status</th>
                <th><i class="bx bx-cog me-1"></i>Action</th>
              </tr>
            </thead>
            <tbody>
<?php if(!empty($leaves)): ?>
  <?php $i=1; foreach($leaves as $row):
   $initial  = strtoupper(substr($row->email, 0, 1));
    $dateObj  = strtotime($row->leave_date);
    $dateDisp = date('d M Y', $dateObj);
    $dayName  = date('l', $dateObj);
    $statusCls = 'pending';
    $statusIcon = 'bx-time';
    if($row->status == 'Approved') { $statusCls = 'approved'; $statusIcon = 'bx-check'; }
    elseif($row->status == 'Rejected') { $statusCls = 'rejected'; $statusIcon = 'bx-x'; }
  ?>
              <tr>
                <!-- # -->
                <td><span class="serial-num"><?= $i++ ?></span></td>

                <!-- Employee -->
                <td>
                  <div class="emp-cell">
                    <div class="emp-avatar"><?= $initial ?></div>
                   <?= $row->email ?>
                  </div>
                </td>

                <!-- Date -->
                <td>
                  <div class="date-cell">
                    <i class="bx bx-calendar"></i>
                    <div class="date-info">
                      <?= $dateDisp ?>
                      <div class="day-name"><?= $dayName ?></div>
                    </div>
                  </div>
                </td>

                <!-- Type -->
                <td>
                  <span class="type-pill">
                    <i class="bx bx-bookmark"></i>
                    <?= $row->leave_type ?>
                  </span>
                </td>

                <!-- Reason -->
                <td>
                  <div class="reason-cell"><?= $row->reason ?></div>
                </td>

                <!-- Status -->
                <td>
                  <span class="status-pill <?= $statusCls ?>">
                    <i class="bx <?= $statusIcon ?>"></i>
                    <?= $row->status ?>
                  </span>
                </td>

                <!-- Action -->
                <td>
                  <?php if($row->status == 'Pending'): ?>
                    <div class="action-btns">
                      <a href="<?= base_url('admin/leave/approve/'.$row->id) ?>"
                         class="btn-approve"
                         onclick="return confirm('Approve this leave request?')">
                        <i class="bx bx-check"></i> Approve
                      </a>
                      <a href="<?= base_url('admin/leave/reject/'.$row->id) ?>"
                         class="btn-reject"
                         onclick="return confirm('Reject this leave request?')">
                        <i class="bx bx-x"></i> Reject
                      </a>
                    </div>
                  <?php else: ?>
                    <span class="no-action">— No action —</span>
                  <?php endif; ?>
                </td>
              </tr>
  <?php endforeach; ?>
<?php else: ?>
              <tr>
                <td colspan="7">
                  <div class="empty-state">
                    <i class="bx bx-calendar-x"></i>
                    <p>No leave requests found.</p>
                  </div>
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

<script>
$(document).ready(function () {
  $('#example').DataTable({
    pageLength: 10,
    lengthMenu: [5, 10, 25, 50, 100],
    paging: true,
    searching: true,
    ordering: true,
    info: true,
    responsive: true,
    language: {
      search: '<i class="bx bx-search"></i>',
      searchPlaceholder: 'Search leaves...',
      lengthMenu: 'Show _MENU_ entries',
      info: 'Showing _START_ to _END_ of _TOTAL_ requests',
      emptyTable: '<div class="empty-state"><i class="bx bx-calendar-x"></i><p>No leave requests found.</p></div>'
    }
  });
});
</script>