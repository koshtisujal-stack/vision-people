<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?= base_url('assets/images/vlogo.png') ?>" type="image/png">
    <link href="<?= base_url('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/plugins/simplebar/css/simplebar.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/plugins/metismenu/css/metisMenu.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/pace.min.css') ?>" rel="stylesheet" />
    <script src="<?= base_url('assets/js/pace.min.js') ?>"></script>
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/bootstrap-extended.css') ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="<?= base_url('assets/sass/app.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/icons.css') ?>" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= base_url('assets/sass/dark-theme.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/sass/semi-dark.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/sass/bordered-theme.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>VISION TECHNOLABS - Attendance</title>

    <style>
        /* === GLOBAL OVERRIDES === */
        body {
            font-family: 'Inter', sans-serif !important;
            background: #f0f2f5;
        }

        /* === ENHANCED PAGE CONTENT === */
        .att-page-wrapper {
            padding: 0;
        }

        /* === BREADCRUMB === */
        .att-breadcrumb {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 24px;
            font-size: 0.84rem;
            flex-wrap: wrap;
        }

        .att-breadcrumb a {
            color: #667eea;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .att-breadcrumb a:hover {
            color: #4f5fd6;
        }

        .att-breadcrumb .sep {
            color: #d1d5db;
            font-size: 0.7rem;
        }

        .att-breadcrumb .current {
            color: #6b7280;
            font-weight: 500;
        }

        /* === PAGE HEADER === */
        .att-page-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 28px;
            flex-wrap: wrap;
            gap: 16px;
        }

        .att-header-left {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .att-header-icon {
            width: 56px;
            height: 56px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 1.6rem;
            box-shadow: 0 8px 24px rgba(102, 126, 234, 0.35);
            flex-shrink: 0;
        }

        .att-header-text h4 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1a1a2e;
            margin: 0 0 4px;
            letter-spacing: -0.5px;
        }

        .att-header-text p {
            font-size: 0.875rem;
            color: #6b7280;
            margin: 0;
        }

        .att-header-actions {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .btn-export {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 10px 20px;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            background: #fff;
            color: #374151;
            font-size: 0.85rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            cursor: pointer;
            font-family: 'Inter', sans-serif;
        }

        .btn-export:hover {
            border-color: #667eea;
            color: #667eea;
            background: rgba(102, 126, 234, 0.04);
        }

        .btn-export i {
            font-size: 1.1rem;
        }

        /* === STATS CARDS === */
        .att-stats-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 28px;
        }

        .att-stat-card {
            background: #fff;
            border-radius: 16px;
            padding: 24px;
            border: 1px solid #e5e7eb;
            display: flex;
            align-items: center;
            gap: 16px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .att-stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            border-radius: 0 4px 4px 0;
        }

        .att-stat-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
        }

        .att-stat-card.total::before { background: linear-gradient(180deg, #667eea, #764ba2); }
        .att-stat-card.present::before { background: linear-gradient(180deg, #10b981, #059669); }
        .att-stat-card.absent::before { background: linear-gradient(180deg, #ef4444, #dc2626); }
        .att-stat-card.late::before { background: linear-gradient(180deg, #f59e0b, #d97706); }

        .stat-icon-box {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            flex-shrink: 0;
        }

        .att-stat-card.total .stat-icon-box {
            background: rgba(102, 126, 234, 0.1);
            color: #667eea;
        }

        .att-stat-card.present .stat-icon-box {
            background: rgba(16, 185, 129, 0.1);
            color: #10b981;
        }

        .att-stat-card.absent .stat-icon-box {
            background: rgba(239, 68, 68, 0.1);
            color: #ef4444;
        }

        .att-stat-card.late .stat-icon-box {
            background: rgba(245, 158, 11, 0.1);
            color: #f59e0b;
        }

        .stat-info .stat-number {
            font-size: 1.5rem;
            font-weight: 800;
            color: #1f2937;
            line-height: 1;
            margin-bottom: 4px;
        }

        .stat-info .stat-label {
            font-size: 0.78rem;
            color: #9ca3af;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* === MAIN CARD === */
        .att-card {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 20px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.04), 0 6px 24px rgba(0, 0, 0, 0.04);
            overflow: hidden;
        }

        /* Card Header / Toolbar */
        .att-card-header {
            padding: 24px 28px;
            border-bottom: 1px solid #f3f4f6;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 16px;
            background: #fafbfc;
        }

        .att-card-header-left {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .att-card-header-left h6 {
            font-size: 1rem;
            font-weight: 700;
            color: #1f2937;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .att-card-header-left .count-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 28px;
            height: 28px;
            padding: 0 8px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: #fff;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 700;
        }

        .att-card-header-right {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* Search Box */
        .att-search-box {
            position: relative;
        }

        .att-search-box input {
            width: 260px;
            padding: 10px 14px 10px 40px;
            font-size: 0.85rem;
            font-family: 'Inter', sans-serif;
            color: #1f2937;
            background: #f3f4f6;
            border: 2px solid transparent;
            border-radius: 12px;
            outline: none;
            transition: all 0.3s ease;
        }

        .att-search-box input:focus {
            background: #fff;
            border-color: #667eea;
            box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
            width: 300px;
        }

        .att-search-box input::placeholder {
            color: #9ca3af;
        }

        .att-search-box .search-icon {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
            font-size: 1.1rem;
            pointer-events: none;
        }

        /* Filter Button */
        .btn-filter {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 10px 16px;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            background: #fff;
            color: #6b7280;
            font-size: 0.85rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            font-family: 'Inter', sans-serif;
        }

        .btn-filter:hover {
            border-color: #667eea;
            color: #667eea;
        }

        /* === TABLE === */
        .att-card-body {
            padding: 0;
        }

        .att-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
        }

        .att-table thead th {
            padding: 14px 24px;
            font-size: 0.75rem;
            font-weight: 700;
            color: #6b7280;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            background: #f9fafb;
            border-bottom: 2px solid #f3f4f6;
            position: sticky;
            top: 0;
            z-index: 1;
            white-space: nowrap;
        }

        .att-table thead th:first-child {
            padding-left: 28px;
        }

        .att-table thead th:last-child {
            padding-right: 28px;
            text-align: center;
        }

        .att-table tbody tr {
            transition: all 0.2s ease;
        }

        .att-table tbody tr:hover {
            background: rgba(102, 126, 234, 0.03);
        }

        .att-table tbody td {
            padding: 16px 24px;
            font-size: 0.9rem;
            color: #374151;
            border-bottom: 1px solid #f3f4f6;
            vertical-align: middle;
        }

        .att-table tbody td:first-child {
            padding-left: 28px;
        }

        .att-table tbody td:last-child {
            padding-right: 28px;
            text-align: center;
        }

        .att-table tbody tr:last-child td {
            border-bottom: none;
        }

        /* Employee Cell */
        .emp-cell {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .emp-avatar {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
            font-weight: 700;
            color: #fff;
            flex-shrink: 0;
            position: relative;
        }

        .emp-avatar .online-dot {
            position: absolute;
            bottom: -1px;
            right: -1px;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #10b981;
            border: 2px solid #fff;
        }

        .emp-info .emp-name {
            font-size: 0.92rem;
            font-weight: 600;
            color: #1f2937;
            margin: 0 0 2px;
        }

        .emp-info .emp-role {
            font-size: 0.78rem;
            color: #9ca3af;
            margin: 0;
        }

        /* Serial number */
        .serial-num {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 32px;
            background: #f3f4f6;
            border-radius: 8px;
            font-size: 0.8rem;
            font-weight: 600;
            color: #6b7280;
        }

        /* Status Badges */
        .status-pill {
            display: inline-flex;
            align-items: center;
            gap: 4px;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        .status-pill.active {
            background: rgba(16, 185, 129, 0.1);
            color: #059669;
        }

        .status-pill.inactive {
            background: rgba(239, 68, 68, 0.1);
            color: #dc2626;
        }

        .status-pill .dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: currentColor;
        }

        /* Action Button */
        .btn-view-details {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 8px 18px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff;
            border: none;
            border-radius: 10px;
            font-size: 0.8rem;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            font-family: 'Inter', sans-serif;
        }

        .btn-view-details::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(120deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s ease;
        }

        .btn-view-details:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
            color: #fff;
        }

        .btn-view-details:hover::before {
            left: 100%;
        }

        .btn-view-details i {
            font-size: 1rem;
            transition: transform 0.3s ease;
        }

        .btn-view-details:hover i {
            transform: translateX(3px);
        }

        /* === EMPTY STATE === */
        .empty-state {
            padding: 60px 20px;
            text-align: center;
        }

        .empty-state-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1), rgba(118, 75, 162, 0.1));
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: #667eea;
            margin: 0 auto 20px;
        }

        .empty-state h5 {
            font-size: 1.1rem;
            font-weight: 700;
            color: #1f2937;
            margin: 0 0 8px;
        }

        .empty-state p {
            font-size: 0.875rem;
            color: #9ca3af;
            margin: 0;
            max-width: 300px;
            margin: 0 auto;
        }

        /* === CARD FOOTER / PAGINATION === */
        .att-card-footer {
            padding: 16px 28px;
            border-top: 1px solid #f3f4f6;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 12px;
            background: #fafbfc;
        }

        .att-card-footer .showing-text {
            font-size: 0.82rem;
            color: #9ca3af;
        }

        .att-card-footer .showing-text strong {
            color: #374151;
        }

        .att-pagination {
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .att-pagination .page-btn {
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            border: 1px solid #e5e7eb;
            background: #fff;
            color: #6b7280;
            font-size: 0.82rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
            text-decoration: none;
        }

        .att-pagination .page-btn:hover {
            border-color: #667eea;
            color: #667eea;
        }

        .att-pagination .page-btn.active {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: #fff;
            border-color: transparent;
            box-shadow: 0 4px 12px rgba(102, 126, 234, 0.3);
        }

        /* === AVATAR COLORS === */
        .avatar-gradient-1 { background: linear-gradient(135deg, #667eea, #764ba2); }
        .avatar-gradient-2 { background: linear-gradient(135deg, #f093fb, #f5576c); }
        .avatar-gradient-3 { background: linear-gradient(135deg, #4facfe, #00f2fe); }
        .avatar-gradient-4 { background: linear-gradient(135deg, #43e97b, #38f9d7); }
        .avatar-gradient-5 { background: linear-gradient(135deg, #fa709a, #fee140); }
        .avatar-gradient-6 { background: linear-gradient(135deg, #a18cd1, #fbc2eb); }
        .avatar-gradient-7 { background: linear-gradient(135deg, #fccb90, #d57eeb); }
        .avatar-gradient-8 { background: linear-gradient(135deg, #667eea, #f093fb); }

        /* === RESPONSIVE === */
        @media (max-width: 768px) {
            .att-page-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .att-card-header {
                flex-direction: column;
                align-items: flex-start;
                padding: 20px;
            }

            .att-card-header-right {
                width: 100%;
            }

            .att-search-box {
                width: 100%;
            }

            .att-search-box input {
                width: 100%;
            }

            .att-search-box input:focus {
                width: 100%;
            }

            .att-stats-row {
                grid-template-columns: repeat(2, 1fr);
            }

            .att-table thead th,
            .att-table tbody td {
                padding: 12px 16px;
            }

            .att-table thead th:first-child,
            .att-table tbody td:first-child {
                padding-left: 16px;
            }

            .att-card-footer {
                flex-direction: column;
                align-items: flex-start;
                padding: 16px 20px;
            }

            .emp-cell {
                gap: 10px;
            }

            .emp-avatar {
                width: 38px;
                height: 38px;
                font-size: 0.85rem;
                border-radius: 10px;
            }
        }

        @media (max-width: 480px) {
            .att-stats-row {
                grid-template-columns: 1fr;
                gap: 12px;
            }

            .att-header-icon {
                width: 48px;
                height: 48px;
                font-size: 1.3rem;
                border-radius: 14px;
            }

            .att-header-text h4 {
                font-size: 1.25rem;
            }

            .att-header-actions {
                width: 100%;
            }

            .btn-export {
                flex: 1;
                justify-content: center;
            }
        }

        /* === HOVER ROW HIGHLIGHT LINE === */
        .att-table tbody tr {
            position: relative;
        }

        .att-table tbody tr::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 3px;
            background: transparent;
            transition: background 0.3s ease;
            border-radius: 0 3px 3px 0;
        }

        .att-table tbody tr:hover::before {
            background: linear-gradient(180deg, #667eea, #764ba2);
        }

        /* === LOADING SKELETON (optional) === */
        @keyframes shimmer {
            0% { background-position: -200px 0; }
            100% { background-position: 200px 0; }
        }

        .skeleton {
            background: linear-gradient(90deg, #f3f4f6 25%, #e5e7eb 50%, #f3f4f6 75%);
            background-size: 200px 100%;
            animation: shimmer 1.5s infinite;
            border-radius: 6px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <!-- ====== SIDEBAR (unchanged) ====== -->
        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header" style="display:flex;align-items:center;padding:15px;">
                <img id="logoFull" src="<?= base_url('assets/images/vision.png') ?>" style="width:160px;height:auto;">
                <img id="logoIcon" src="<?= base_url('assets/images/slogo.png') ?>" style="width:42px;height:auto;display:none;">
            </div>
            <ul class="metismenu" id="menu">
                <li>
                    <a href="<?= base_url('admin/dashboard') ?>">
                        <div class="parent-icon"><i class="bx bx-home"></i></div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="fa fa-user"></i></div>
                        <div class="menu-title">USERS</div>
                    </a>
                    <ul>
                        <li><a href="<?= base_url('admin/employee/add') ?>">Add Employee</a></li>
                        <li><a href="<?= base_url('admin/employee') ?>">List Employee</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="fa fa-calendar"></i></div>
                        <div class="menu-title">Attendance</div>
                    </a>
                    <ul>
                        <li><a href="<?= base_url('admin/attendance/attendance_list') ?>"><i class="bx bx-radio-circle"></i>Attendance List</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="fa fa-sign-out"></i></div>
                        <div class="menu-title">Leave</div>
                    </a>
                    <ul>
                        <li><a href="<?= base_url('admin/leave') ?>">Leave List</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?= site_url('admin/history') ?>">
                        <div class="parent-icon"><i class="fa fa-history"></i></div>
                        <div class="menu-title">History</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url('admin/holidays') ?>">
                        <div class="parent-icon"><i class="fa fa-calendar"></i></div>
                        <div class="menu-title">Holidays</div>
                    </a>
                </li>
            </ul>
        </div>
        <!-- ====== END SIDEBAR ====== -->

        <!-- ====== HEADER (simplified) ====== -->
        <header>
            <div class="topbar">
                <nav class="navbar navbar-expand gap-2 align-items-center">
                    <div class="mobile-toggle-menu d-flex"><i class='bx bx-menu'></i></div>
                    <div class="search-bar d-lg-block d-none" data-bs-toggle="modal" data-bs-target="#SearchModal">
                        <a href="javascript:;" class="btn d-flex align-items-center"><i class="bx bx-search"></i>Search</a>
                    </div>
                    <div class="top-menu ms-auto">
                        <ul class="navbar-nav align-items-center gap-1">
                            <li class="nav-item mobile-search-icon d-flex d-lg-none" data-bs-toggle="modal" data-bs-target="#SearchModal">
                                <a class="nav-link" href="javascript:;"><i class='bx bx-search'></i></a>
                            </li>
                            <li class="nav-item dark-mode d-none d-sm-flex">
                                <a class="nav-link dark-mode-icon" href="javascript:;"><i class='bx bx-moon'></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="user-box dropdown px-3">
                        <a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="<?= base_url('assets/images/avatars/avatar-2.png') ?>" class="user-img" alt="user avatar">
                            <div class="user-info">
                                <p class="user-name mb-0">Admin</p>
                                <p class="designattion mb-0">Administrator</p>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-user fs-5"></i><span>Profile</span></a></li>
                            <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-cog fs-5"></i><span>Settings</span></a></li>
                            <li><div class="dropdown-divider mb-0"></div></li>
                            <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-log-out-circle"></i><span>Logout</span></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- ====== END HEADER ====== -->

        <!-- ====== ENHANCED PAGE CONTENT ====== -->
        <div class="page-wrapper">
            <div class="page-content att-page-wrapper">

                <!-- Breadcrumb -->
                <div class="att-breadcrumb">
                    <a href="<?= base_url('admin/dashboard') ?>"><i class='bx bx-home-alt'></i> Home</a>
                    <span class="sep"><i class='bx bx-chevron-right'></i></span>
                    <span class="current">Employee Attendance</span>
                </div>

                <!-- Page Header -->
                <div class="att-page-header">
                    <div class="att-header-left">
                        <div class="att-header-icon">
                            <i class='bx bx-calendar-check'></i>
                        </div>
                        <div class="att-header-text">
                            <h4>Employee Attendance</h4>
                            <p>Track and manage attendance records for all employees</p>
                        </div>
                    </div>
                    <div class="att-header-actions">
                        <button class="btn-export" onclick="window.print()">
                            <i class='bx bx-printer'></i>
                            Print
                        </button>
                        <button class="btn-export">
                            <i class='bx bx-download'></i>
                            Export
                        </button>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="att-stats-row">
                    <div class="att-stat-card total">
                        <div class="stat-icon-box">
                            <i class='bx bx-group'></i>
                        </div>
                        <div class="stat-info">
                            <div class="stat-number" id="totalCount"><?= !empty($employees) ? count($employees) : 0 ?></div>
                            <div class="stat-label">Total Employees</div>
                        </div>
                    </div>
                    <div class="att-stat-card present">
                        <div class="stat-icon-box">
                            <i class='bx bx-check-circle'></i>
                        </div>
                        <div class="stat-info">
                            <div class="stat-number">—</div>
                            <div class="stat-label">Present Today</div>
                        </div>
                    </div>
                    <div class="att-stat-card absent">
                        <div class="stat-icon-box">
                            <i class='bx bx-x-circle'></i>
                        </div>
                        <div class="stat-info">
                            <div class="stat-number">—</div>
                            <div class="stat-label">Absent Today</div>
                        </div>
                    </div>
                    <div class="att-stat-card late">
                        <div class="stat-icon-box">
                            <i class='bx bx-time-five'></i>
                        </div>
                        <div class="stat-info">
                            <div class="stat-number">—</div>
                            <div class="stat-label">Late Arrivals</div>
                        </div>
                    </div>
                </div>

                <!-- Main Table Card -->
                <div class="att-card">

                    <!-- Card Header / Toolbar -->
                    <div class="att-card-header">
                        <div class="att-card-header-left">
                            <h6>
                                <i class='bx bx-list-ul' style="color: #667eea;"></i>
                                Employee List
                                <span class="count-badge"><?= !empty($employees) ? count($employees) : 0 ?></span>
                            </h6>
                        </div>
                        <div class="att-card-header-right">
                            <div class="att-search-box">
                                <i class='bx bx-search search-icon'></i>
                                <input type="text" id="employeeSearch" placeholder="Search employees..." autocomplete="off">
                            </div>
                            <button class="btn-filter">
                                <i class='bx bx-filter-alt'></i>
                                Filter
                            </button>
                        </div>
                    </div>

                    <!-- Table -->
                    <div class="att-card-body">
                        <?php if (!empty($employees)): ?>
                            <div class="table-responsive">
								<table class="att-table" id="attendanceTable">
                                    <thead>
                                        <tr>
                                            <th style="width: 60px;">#</th>
                                            <th>Employee</th>
                                            <th>Status</th>
                                            <th style="width: 160px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php
$gradients = [
'avatar-gradient-1','avatar-gradient-2','avatar-gradient-3',
'avatar-gradient-4','avatar-gradient-5','avatar-gradient-6',
'avatar-gradient-7','avatar-gradient-8'
];

$i = 0;

foreach ($employees as $emp):

    $initials = '-';

    if (!empty($emp->emp_name)) {

        $nameParts = explode(' ', trim($emp->emp_name));

        if (count($nameParts) > 1) {

            $first = substr($nameParts[0], 0, 1);
            $last  = substr(end($nameParts), 0, 1);

            $initials = strtoupper($first . $last);

        } else {

            $initials = strtoupper(substr($emp->emp_name, 0, 1));
        }
    }

    $gradientClass = $gradients[$i % count($gradients)];
    $i++;
?>
                                            <tr class="emp-row">
                                                <td>
                                                    <span class="serial-num"><?= $i ?></span>
                                                </td>
                                                <td>
                                                    <div class="emp-cell">
                                                        <div class="emp-avatar <?= $gradientClass ?>">
                                                            <?= $initials ?>
                                                            <span class="online-dot"></span>
                                                        </div>
                                                        <div class="emp-info">
                                                            <p class="emp-name"><?= ucfirst($emp->emp_name) ?></p>
                                                            <p class="emp-role">Employee</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="status-pill active">
                                                        <span class="dot"></span>
                                                        Active
                                                    </span>
                                                </td>
                                                <td>
                                                    <a href="<?= site_url('admin/attendance/view_details/'.$emp->id) ?>" class="btn-view-details">
                                                        <span>View Details</span>
                                                        <i class='bx bx-right-arrow-alt'></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php else: ?>
                            <div class="empty-state">
                                <div class="empty-state-icon">
                                    <i class='bx bx-calendar-x'></i>
                                </div>
                                <h5>No Attendance Data Found</h5>
                                <p>There are no employee attendance records to display at this time.</p>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Card Footer -->
                    <?php if (!empty($employees)): ?>
                        <div class="att-card-footer">
                            <div class="showing-text">
                                Showing <strong>1</strong> to <strong><?= count($employees) ?></strong> of <strong><?= count($employees) ?></strong> employees
                            </div>
                            <div class="att-pagination">
                                <a href="#" class="page-btn"><i class='bx bx-chevron-left'></i></a>
                                <a href="#" class="page-btn active">1</a>
                                <a href="#" class="page-btn"><i class='bx bx-chevron-right'></i></a>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>

            </div>
        </div>
        <!-- ====== END PAGE CONTENT ====== -->

        <!-- Footer -->
        <footer class="page-footer">
            <p class="mb-0">Copyright © 2024 Vision Technolabs. All rights reserved.</p>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/simplebar/js/simplebar.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/metismenu/js/metisMenu.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') ?>"></script>
    <script src="<?= base_url('assets/js/app.js') ?>"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            // === Live Search Filter ===
            const searchInput = document.getElementById('employeeSearch');
            if (searchInput) {
                searchInput.addEventListener('input', function () {
                    const query = this.value.toLowerCase().trim();
                    const rows = document.querySelectorAll('.emp-row');
                    let visibleCount = 0;

                    rows.forEach(function (row) {
                        const name = row.querySelector('.emp-name');
                        if (name) {
                            const text = name.textContent.toLowerCase();
                            if (text.includes(query)) {
                                row.style.display = '';
                                visibleCount++;
                            } else {
                                row.style.display = 'none';
                            }
                        }
                    });

                    // Update count badge
                    const countBadge = document.querySelector('.count-badge');
                    if (countBadge) {
                        countBadge.textContent = visibleCount;
                    }
                });
            }

            // === Animate Stats on Scroll ===
            const statNumbers = document.querySelectorAll('.stat-number');
            statNumbers.forEach(function (el) {
                const target = parseInt(el.textContent);
                if (isNaN(target)) return;

                let current = 0;
                const increment = Math.ceil(target / 30);
                const timer = setInterval(function () {
                    current += increment;
                    if (current >= target) {
                        current = target;
                        clearInterval(timer);
                    }
                    el.textContent = current;
                }, 30);
            });

            // === Row Entrance Animation ===
            const rows = document.querySelectorAll('.emp-row');
            rows.forEach(function (row, index) {
                row.style.opacity = '0';
                row.style.transform = 'translateY(10px)';
                row.style.transition = 'opacity 0.4s ease, transform 0.4s ease';

                setTimeout(function () {
                    row.style.opacity = '1';
                    row.style.transform = 'translateY(0)';
                }, 60 * index);
            });

            // === Stat Card Entrance ===
            const statCards = document.querySelectorAll('.att-stat-card');
            statCards.forEach(function (card, index) {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';

                setTimeout(function () {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, 100 * index);
            });
        });
    </script>
</body>

</html>