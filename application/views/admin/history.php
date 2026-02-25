<style>
  /* ── General ── */
  .history-page .card {
    border: none;
    border-radius: 16px;
    box-shadow: 0 4px 24px rgba(0,0,0,.06);
    overflow: hidden;
  }

  /* ── Header Section ── */
  .history-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 12px;
    margin-bottom: 24px;
  }
  .history-header h5 {
    font-size: 22px;
    font-weight: 800;
    color: #2c3e50;
    margin: 0;
    display: flex;
    align-items: center;
    gap: 10px;
  }
  .history-header h5 i {
    font-size: 26px;
    color: #667eea;
  }
  .employee-count-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 8px 18px;
    border-radius: 12px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: #fff;
    font-size: 14px;
    font-weight: 600;
  }
  .employee-count-badge i {
    font-size: 18px;
  }

  /* ── Search Bar Custom ── */
  .search-wrap {
    position: relative;
    max-width: 320px;
    margin-bottom: 24px;
  }
  .search-wrap i {
    position: absolute;
    left: 14px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 18px;
    color: #999;
    transition: color .3s;
  }
  .search-wrap input {
    width: 100%;
    padding: 10px 16px 10px 42px;
    border: 2px solid #e8ecf4;
    border-radius: 12px;
    font-size: 14px;
    outline: none;
    transition: all .3s ease;
    background: #f8f9fe;
  }
  .search-wrap input:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 4px rgba(102,126,234,.12);
    background: #fff;
  }
  .search-wrap input:focus + i,
  .search-wrap input:focus ~ i {
    color: #667eea;
  }

  /* ── Employee Cards Grid ── */
  .emp-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 16px;
  }
  .emp-card {
    background: #fff;
    border-radius: 14px;
    padding: 22px 20px;
    display: flex;
    align-items: center;
    gap: 16px;
    box-shadow: 0 2px 10px rgba(0,0,0,.04);
    border: 2px solid transparent;
    transition: all .3s ease;
    cursor: default;
    position: relative;
    overflow: hidden;
  }
  .emp-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 28px rgba(102,126,234,.15);
    border-color: #667eea;
  }
  .emp-card::before {
    content: '';
    position: absolute;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    top: -25px;
    right: -20px;
    background: linear-gradient(135deg, rgba(102,126,234,.06), rgba(118,75,162,.06));
    transition: transform .3s;
  }
  .emp-card:hover::before {
    transform: scale(1.5);
  }

  /* Avatar */
  .emp-card .avatar {
    width: 50px;
    height: 50px;
    border-radius: 14px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 800;
    font-size: 18px;
    flex-shrink: 0;
    box-shadow: 0 4px 12px rgba(102,126,234,.3);
  }

  /* Info */
  .emp-card .emp-info {
    flex: 1;
    min-width: 0;
  }
  .emp-card .emp-name {
    font-size: 15px;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 2px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
  .emp-card .emp-sub {
    font-size: 12px;
    color: #999;
  }

  /* View Button */
  .btn-view {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 8px 18px;
    border-radius: 10px;
    font-size: 13px;
    font-weight: 600;
    border: none;
    cursor: pointer;
    text-decoration: none;
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: #fff;
    box-shadow: 0 3px 12px rgba(102,126,234,.3);
    transition: all .25s ease;
    white-space: nowrap;
    flex-shrink: 0;
  }
  .btn-view:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(102,126,234,.45);
    color: #fff;
  }
  .btn-view i {
    font-size: 16px;
  }

  /* ── Table Fallback (for DataTables) ── */
  .history-table {
    border-collapse: separate;
    border-spacing: 0 8px;
    width: 100%;
  }
  .history-table thead th {
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: #fff;
    border: none;
    padding: 14px 18px;
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: .7px;
    font-weight: 700;
  }
  .history-table thead th:first-child { border-radius: 12px 0 0 12px; }
  .history-table thead th:last-child  { border-radius: 0 12px 12px 0; }

  .history-table tbody tr {
    background: #fff;
    box-shadow: 0 2px 8px rgba(0,0,0,.04);
    transition: transform .2s ease, box-shadow .2s ease;
  }
  .history-table tbody tr:hover {
    transform: scale(1.01);
    box-shadow: 0 4px 16px rgba(0,0,0,.09);
  }
  .history-table tbody td {
    padding: 14px 18px;
    border: none;
    vertical-align: middle;
    font-size: 14px;
    color: #444;
  }
  .history-table tbody td:first-child { border-radius: 12px 0 0 12px; }
  .history-table tbody td:last-child  { border-radius: 0 12px 12px 0; }

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

  /* ── DataTables Overrides ── */
  .history-page .dataTables_wrapper .dataTables_filter input {
    border: 2px solid #e8ecf4;
    border-radius: 10px;
    padding: 8px 14px;
    font-size: 13px;
    transition: border-color .3s;
  }
  .history-page .dataTables_wrapper .dataTables_filter input:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 3px rgba(102,126,234,.15);
    outline: none;
  }
  .history-page .dataTables_wrapper .dataTables_length select {
    border: 2px solid #e8ecf4;
    border-radius: 8px;
    padding: 5px 10px;
  }
  .history-page .dataTables_wrapper .dataTables_paginate .paginate_button {
    border-radius: 8px !important;
    border: none !important;
    margin: 0 3px;
    transition: all .2s;
  }
  .history-page .dataTables_wrapper .dataTables_paginate .paginate_button.current {
    background: linear-gradient(135deg, #667eea, #764ba2) !important;
    color: #fff !important;
    border: none !important;
  }
  .history-page .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
    background: #eef2ff !important;
    color: #667eea !important;
    border: none !important;
  }

  /* ── Animations ── */
  @keyframes fadeUp {
    from { opacity: 0; transform: translateY(18px); }
    to   { opacity: 1; transform: translateY(0); }
  }
  .fade-up  { animation: fadeUp .5s ease forwards; }
  .fade-d1  { animation-delay: .1s; opacity: 0; }
  .fade-d2  { animation-delay: .2s; opacity: 0; }
  .fade-d3  { animation-delay: .3s; opacity: 0; }

  /* ── Responsive ── */
  @media (max-width: 576px) {
    .emp-grid { grid-template-columns: 1fr; }
    .history-header { flex-direction: column; align-items: flex-start; }
    .search-wrap { max-width: 100%; }
    div.dataTables_wrapper .row { padding: 0; margin: 0; }
    div.dataTables_filter { width: 100%; padding: 0; display: flex; }
    div.dataTables_filter input { width: 100% !important; box-sizing: border-box; margin-top: 0.5rem; }
  }
</style>

<!-- Main Content -->
<div class="page-wrapper history-page">
  <div class="page-content">

    <!-- Breadcrumb -->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3 fade-up">
      <div class="breadcrumb-title pe-3" style="font-weight:700;font-size:18px;">
        <i class="bx bx-history me-1" style="color:#667eea;"></i>
        Employee History
      </div>
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item">
              <a href="<?= base_url('admin/dashboard') ?>"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active">History</li>
          </ol>
        </nav>
      </div>
    </div>

    <!-- Main Card -->
    <div class="card fade-up fade-d1">
      <div class="card-body" style="padding:28px;">

        <!-- Header -->
        <div class="history-header">
          <h5><i class="bx bx-group"></i> Employee History</h5>
          <?php if(!empty($employees)): ?>
            <span class="employee-count-badge">
              <i class="bx bx-user"></i>
              <?= count($employees) ?> Employee<?= count($employees) > 1 ? 's' : '' ?>
            </span>
          <?php endif; ?>
        </div>

        <?php if(!empty($employees)): ?>

          <!-- Search -->
          <div class="search-wrap fade-up fade-d2">
            <input type="text" id="empSearch" placeholder="Search employee...">
            <i class="bx bx-search"></i>
          </div>

          <!-- Employee Grid -->
          <div class="emp-grid fade-up fade-d3" id="empGrid">
            <?php foreach($employees as $e):
              $initial = strtoupper(substr($e->email, 0, 1));
            ?>
             <div class="emp-card" data-name="<?= strtolower($e->email) ?>">
                <div class="avatar"><?= $initial ?></div>
                <div class="emp-info">
                  <div class="emp-name"><?= $e->email ?></div>
                  <div class="emp-sub">
                    <i class="bx bx-id-card" style="font-size:12px;vertical-align:middle;"></i>
                    ID: <?= $e->id ?>
                  </div>
                </div>
                <a href="<?= base_url('admin/history/view/' . $e->id) ?>" class="btn-view">
                  <i class="bx bx-right-arrow-alt"></i> View
                </a>
              </div>
            <?php endforeach; ?>
          </div>

          <!-- No results message (hidden by default) -->
          <div id="noResults" style="display:none;">
            <div class="empty-state">
              <div class="empty-icon">
                <i class="bx bx-search-alt"></i>
              </div>
              <h6>No Match Found</h6>
              <p>Try searching with a different name.</p>
            </div>
          </div>

        <?php else: ?>

          <!-- Empty State -->
          <div class="empty-state">
            <div class="empty-icon">
              <i class="bx bx-user-x"></i>
            </div>
            <h6>No Employees Found</h6>
            <p>There are no employees to display history for.</p>
          </div>

        <?php endif; ?>

      </div>
    </div>

  </div>
</div>

<script>
$(document).ready(function () {

  // Live search filter
  $('#empSearch').on('keyup', function () {
    var val = $(this).val().toLowerCase().trim();
    var visible = 0;

    $('#empGrid .emp-card').each(function () {
      var name = $(this).data('name');
      if (name.indexOf(val) > -1) {
        $(this).show();
        visible++;
      } else {
        $(this).hide();
      }
    });

    if (visible === 0) {
      $('#noResults').show();
    } else {
      $('#noResults').hide();
    }
  });

});
</script>