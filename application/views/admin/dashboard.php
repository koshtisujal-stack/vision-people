<!-- Custom Styles -->
<style>
/* ========== IMPORTS ========== */
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;600;700&display=swap');

/* ========== ROOT VARIABLES ========== */
:root {
    --primary: #6366f1;
    --primary-light: #818cf8;
    --primary-dark: #4f46e5;
    --success: #22c55e;
    --success-light: #4ade80;
    --danger: #ef4444;
    --danger-light: #f87171;
    --warning: #f59e0b;
    --info: #3b82f6;
    --dark: #1e1e2f;
    --dark-light: #2d2d44;
    --text-primary: #1e1e2f;
    --text-secondary: #6b7280;
    --text-muted: #9ca3af;
    --bg-page: #f0f2f5;
    --bg-card: #ffffff;
    --border-light: #e5e7eb;
    --radius-sm: 10px;
    --radius-md: 14px;
    --radius-lg: 18px;
    --radius-xl: 24px;
    --shadow-sm: 0 2px 12px rgba(0,0,0,0.04);
    --shadow-md: 0 4px 25px rgba(0,0,0,0.06);
    --shadow-lg: 0 8px 40px rgba(0,0,0,0.08);
    --shadow-xl: 0 12px 50px rgba(0,0,0,0.12);
}

/* ========== GLOBAL ========== */
.page-wrapper {
    font-family: 'Inter', sans-serif;
    background: var(--bg-page);
}

.page-content {
    padding: 20px;
}

/* ========== ANIMATIONS ========== */
@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(25px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes fadeInLeft {
    from { opacity: 0; transform: translateX(-25px); }
    to { opacity: 1; transform: translateX(0); }
}

@keyframes fadeInRight {
    from { opacity: 0; transform: translateX(25px); }
    to { opacity: 1; transform: translateX(0); }
}

@keyframes scaleIn {
    from { opacity: 0; transform: scale(0.9); }
    to { opacity: 1; transform: scale(1); }
}

@keyframes pulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.03); }
}

@keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-8px); }
}

@keyframes shimmer {
    0% { background-position: -200% center; }
    100% { background-position: 200% center; }
}

@keyframes blink {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.3; }
}

@keyframes countUp {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes gradientShift {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

@keyframes borderGlow {
    0%, 100% { box-shadow: 0 0 5px rgba(99, 102, 241, 0.2); }
    50% { box-shadow: 0 0 20px rgba(99, 102, 241, 0.4); }
}

.anim-up {
    animation: fadeInUp 0.6s ease forwards;
    opacity: 0;
}

.anim-left {
    animation: fadeInLeft 0.6s ease forwards;
    opacity: 0;
}

.anim-right {
    animation: fadeInRight 0.6s ease forwards;
    opacity: 0;
}

.anim-scale {
    animation: scaleIn 0.5s ease forwards;
    opacity: 0;
}

.delay-1 { animation-delay: 0.05s; }
.delay-2 { animation-delay: 0.1s; }
.delay-3 { animation-delay: 0.15s; }
.delay-4 { animation-delay: 0.2s; }
.delay-5 { animation-delay: 0.25s; }
.delay-6 { animation-delay: 0.3s; }
.delay-7 { animation-delay: 0.35s; }
.delay-8 { animation-delay: 0.4s; }

/* ========== WELCOME BANNER ========== */
.welcome-banner {
    background: linear-gradient(135deg, var(--dark) 0%, var(--dark-light) 40%, #1a1a3e 100%);
    border-radius: var(--radius-xl);
    padding: 28px 32px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-shadow: var(--shadow-xl);
    position: relative;
    overflow: hidden;
    margin-bottom: 24px;
}

.welcome-banner::before {
    content: '';
    position: absolute;
    top: -60%;
    right: -10%;
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, rgba(99, 102, 241, 0.12) 0%, transparent 70%);
    border-radius: 50%;
}

.welcome-banner::after {
    content: '';
    position: absolute;
    bottom: -40%;
    left: 20%;
    width: 200px;
    height: 200px;
    background: radial-gradient(circle, rgba(34, 197, 94, 0.08) 0%, transparent 70%);
    border-radius: 50%;
}

.welcome-banner .welcome-content {
    position: relative;
    z-index: 1;
}

.welcome-banner .welcome-title {
    font-size: 26px;
    font-weight: 800;
    color: #fff;
    margin-bottom: 4px;
    letter-spacing: -0.5px;
}

.welcome-banner .welcome-sub {
    font-size: 14px;
    color: rgba(255,255,255,0.45);
    font-weight: 400;
}

.welcome-banner .welcome-date {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(255,255,255,0.08);
    padding: 8px 16px;
    border-radius: var(--radius-md);
    color: rgba(255,255,255,0.7);
    font-size: 14px;
    font-weight: 600;
    margin-top: 12px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.06);
}

.welcome-banner .welcome-illustration {
    font-size: 56px;
    position: relative;
    z-index: 1;
    animation: float 3s ease-in-out infinite;
}

/* ========== STAT CARDS ========== */
.stat-card-wrapper {
    margin-bottom: 24px;
}

.stat-card {
    border: none;
    border-radius: var(--radius-lg);
    overflow: hidden;
    box-shadow: var(--shadow-md);
    transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
    position: relative;
    height: 100%;
}

.stat-card:hover {
    transform: translateY(-6px);
    box-shadow: var(--shadow-xl);
}

.stat-card .card-body {
    padding: 24px;
    position: relative;
    z-index: 1;
}

.stat-card .stat-icon-wrapper {
    width: 56px;
    height: 56px;
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 26px;
    margin-bottom: 16px;
    position: relative;
}

.stat-card .stat-icon-wrapper::after {
    content: '';
    position: absolute;
    inset: -4px;
    border-radius: 20px;
    opacity: 0.15;
}

.stat-card .stat-label {
    font-size: 13px;
    font-weight: 600;
    color: var(--text-secondary);
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 8px;
}

.stat-card .stat-number {
    font-size: 36px;
    font-weight: 900;
    line-height: 1;
    margin-bottom: 8px;
    animation: countUp 0.8s ease forwards;
}

.stat-card .stat-footer {
    font-size: 12px;
    font-weight: 500;
    color: var(--text-muted);
    display: flex;
    align-items: center;
    gap: 6px;
}

.stat-card .live-indicator {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    display: inline-block;
    animation: blink 1.5s ease-in-out infinite;
}

/* Present Card */
.stat-present {
    background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
    border-left: 5px solid var(--success);
}

.stat-present .stat-icon-wrapper {
    background: linear-gradient(135deg, #dcfce7, #bbf7d0);
    color: var(--success);
}

.stat-present .stat-icon-wrapper::after {
    background: var(--success);
}

.stat-present .stat-number {
    color: #15803d;
}

.stat-present .live-indicator {
    background: var(--success);
}

/* Leave Card */
.stat-leave {
    background: linear-gradient(135deg, #fef2f2 0%, #fee2e2 100%);
    border-left: 5px solid var(--danger);
}

.stat-leave .stat-icon-wrapper {
    background: linear-gradient(135deg, #fee2e2, #fecaca);
    color: var(--danger);
}

.stat-leave .stat-icon-wrapper::after {
    background: var(--danger);
}

.stat-leave .stat-number {
    color: #dc2626;
}

.stat-leave .live-indicator {
    background: var(--danger);
}

/* ========== SECTION HEADERS ========== */
.section-header {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 20px;
    padding-bottom: 16px;
    border-bottom: 2px solid var(--border-light);
    position: relative;
}

.section-header::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 60px;
    height: 2px;
    background: linear-gradient(90deg, var(--primary), var(--primary-light));
    border-radius: 2px;
}

.section-header .section-icon {
    width: 42px;
    height: 42px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
}

.section-header .section-title {
    font-size: 18px;
    font-weight: 700;
    color: var(--text-primary);
    margin: 0;
}

.section-header .section-subtitle {
    font-size: 12px;
    color: var(--text-muted);
    font-weight: 500;
}

/* ========== FORM CARDS ========== */
.form-card {
    border: none;
    border-radius: var(--radius-lg);
    box-shadow: var(--shadow-md);
    overflow: hidden;
    transition: all 0.3s ease;
    margin-bottom: 24px;
}

.form-card:hover {
    box-shadow: var(--shadow-lg);
}

.form-card .card-body {
    padding: 28px;
}

.form-card .form-label-custom {
    font-size: 13px;
    font-weight: 700;
    color: var(--text-primary);
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    gap: 6px;
}

.form-card .form-label-custom .label-icon {
    font-size: 16px;
    opacity: 0.6;
}

.form-card .form-select,
.form-card .form-control {
    border: 2px solid var(--border-light);
    border-radius: var(--radius-sm);
    padding: 11px 16px;
    font-size: 14px;
    font-weight: 500;
    color: var(--text-primary);
    transition: all 0.3s ease;
    background-color: #fafbfc;
}

.form-card .form-select:focus,
.form-card .form-control:focus {
    border-color: var(--primary);
    box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1);
    background-color: #fff;
}

.form-card .form-control::placeholder {
    color: var(--text-muted);
    font-weight: 400;
}

/* ========== SUBMIT BUTTONS ========== */
.btn-submit-work {
    background: linear-gradient(135deg, var(--primary), var(--primary-dark));
    border: none;
    color: #fff;
    padding: 14px 28px;
    border-radius: var(--radius-md);
    font-weight: 700;
    font-size: 15px;
    letter-spacing: 0.3px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(99, 102, 241, 0.3);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    width: 100%;
    margin-top: 16px;
}

.btn-submit-work:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(99, 102, 241, 0.4);
    color: #fff;
    background: linear-gradient(135deg, var(--primary-dark), #4338ca);
}

.btn-submit-break {
    background: linear-gradient(135deg, var(--danger), #dc2626);
    border: none;
    color: #fff;
    padding: 14px 28px;
    border-radius: var(--radius-md);
    font-weight: 700;
    font-size: 15px;
    letter-spacing: 0.3px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(239, 68, 68, 0.3);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    width: 100%;
    margin-top: 16px;
}

.btn-submit-break:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(239, 68, 68, 0.4);
    color: #fff;
    background: linear-gradient(135deg, #dc2626, #b91c1c);
}

/* ========== TABLE CARDS ========== */
.table-card {
    border: none;
    border-radius: var(--radius-lg);
    box-shadow: var(--shadow-md);
    overflow: hidden;
    margin-bottom: 24px;
    transition: all 0.3s ease;
}

.table-card:hover {
    box-shadow: var(--shadow-lg);
}

.table-card .card-body {
    padding: 24px;
}

/* ========== MODERN TABLE ========== */
.table-modern {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
}

.table-modern thead th {
    padding: 14px 20px;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1.2px;
    border: none;
    white-space: nowrap;
}

.table-modern thead th:first-child {
    border-radius: var(--radius-sm) 0 0 0;
}

.table-modern thead th:last-child {
    border-radius: 0 var(--radius-sm) 0 0;
}

/* Work Log Table Header */
.thead-work {
    background: linear-gradient(135deg, var(--primary), var(--primary-dark));
    color: #fff;
}

/* Break Log Table Header */
.thead-break {
    background: linear-gradient(135deg, var(--danger), #dc2626);
    color: #fff;
}

.table-modern tbody tr {
    transition: all 0.3s ease;
}

.table-modern tbody tr:hover {
    background: #f8f9ff;
    transform: scale(1.003);
}

.table-modern tbody td {
    padding: 16px 20px;
    font-size: 14px;
    color: var(--text-primary);
    border-bottom: 1px solid #f0f0f5;
    vertical-align: middle;
}

.table-modern tbody tr:last-child td {
    border-bottom: none;
}

/* ========== TABLE BADGES & CELLS ========== */
.emp-name-cell {
    display: flex;
    align-items: center;
    gap: 10px;
}

.emp-avatar {
    width: 36px;
    height: 36px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 14px;
    color: #fff;
    flex-shrink: 0;
}

.emp-avatar.bg-1 { background: linear-gradient(135deg, #6366f1, #4f46e5); }
.emp-avatar.bg-2 { background: linear-gradient(135deg, #f59e0b, #d97706); }
.emp-avatar.bg-3 { background: linear-gradient(135deg, #22c55e, #16a34a); }
.emp-avatar.bg-4 { background: linear-gradient(135deg, #ef4444, #dc2626); }
.emp-avatar.bg-5 { background: linear-gradient(135deg, #3b82f6, #2563eb); }
.emp-avatar.bg-6 { background: linear-gradient(135deg, #ec4899, #db2777); }

.emp-name-text {
    font-weight: 600;
    color: var(--text-primary);
}

.time-cell {
    font-family: 'JetBrains Mono', monospace;
    font-weight: 600;
    font-size: 13px;
    color: var(--text-secondary);
}

.duration-badge {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    padding: 5px 14px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 700;
    font-family: 'JetBrains Mono', monospace;
}

.duration-badge.work {
    background: linear-gradient(135deg, #eff6ff, #dbeafe);
    color: #2563eb;
}

.duration-badge.break-d {
    background: linear-gradient(135deg, #fef2f2, #fecaca);
    color: #dc2626;
}

.note-cell {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: #f8f9ff;
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 500;
    color: var(--text-secondary);
    max-width: 200px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

/* ========== EMPTY STATE ========== */
.empty-state {
    padding: 40px 20px;
    text-align: center;
}

.empty-state .empty-icon {
    font-size: 48px;
    margin-bottom: 12px;
    opacity: 0.4;
}

.empty-state .empty-text {
    font-size: 14px;
    font-weight: 600;
    color: var(--text-muted);
}

.empty-state .empty-sub {
    font-size: 12px;
    color: #d1d5db;
    margin-top: 4px;
}

/* ========== FORM SECTION BADGE ========== */
.form-section-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 4px 14px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.form-section-badge.admin {
    background: linear-gradient(135deg, #fef3c7, #fde68a);
    color: #92400e;
}

/* ========== DECORATIVE ELEMENTS ========== */
.card-decoration {
    position: absolute;
    top: 0;
    right: 0;
    width: 120px;
    height: 120px;
    opacity: 0.05;
    pointer-events: none;
}

.form-divider {
    width: 100%;
    height: 1px;
    background: linear-gradient(90deg, transparent, var(--border-light), transparent);
    margin: 20px 0;
}

/* ========== INPUT GROUP ENHANCEMENTS ========== */
.input-group-modern {
    position: relative;
}

.input-group-modern .input-icon {
    position: absolute;
    left: 14px;
    top: 50%;
    transform: translateY(-50%);
    color: var(--text-muted);
    font-size: 16px;
    z-index: 2;
    pointer-events: none;
}

.input-group-modern .form-control,
.input-group-modern .form-select {
    padding-left: 42px;
}

/* ========== RESPONSIVE ========== */
@media (max-width: 768px) {
    .welcome-banner {
        padding: 20px;
        flex-direction: column;
        text-align: center;
        gap: 16px;
    }

    .welcome-banner .welcome-title {
        font-size: 22px;
    }

    .welcome-banner .welcome-illustration {
        font-size: 40px;
    }

    .stat-card .stat-number {
        font-size: 28px;
    }

    .form-card .card-body {
        padding: 20px;
    }

    .table-card .card-body {
        padding: 16px;
    }

    .section-header .section-title {
        font-size: 16px;
    }
}

/* ========== SCROLLBAR ========== */
::-webkit-scrollbar {
    width: 6px;
    height: 6px;
}

::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 10px;
}

::-webkit-scrollbar-thumb {
    background: #c1c1c1;
    border-radius: 10px;
}

::-webkit-scrollbar-thumb:hover {
    background: #a1a1a1;
}

/* ========== BACK TO TOP ========== */
.back-to-top {
    background: linear-gradient(135deg, var(--primary), var(--primary-dark)) !important;
    border-radius: var(--radius-md) !important;
    box-shadow: 0 4px 15px rgba(99, 102, 241, 0.4) !important;
    transition: all 0.3s ease !important;
}

.back-to-top:hover {
    transform: translateY(-3px) !important;
    box-shadow: 0 8px 25px rgba(99, 102, 241, 0.5) !important;
}

/* ========== FLASH MESSAGES ========== */
.flash-message {
    border-radius: var(--radius-md);
    padding: 14px 20px;
    font-weight: 600;
    font-size: 14px;
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 20px;
    animation: fadeInUp 0.5s ease forwards;
    border: none;
}

.flash-success {
    background: linear-gradient(135deg, #f0fdf4, #dcfce7);
    color: #15803d;
    border-left: 4px solid var(--success);
}

.flash-error {
    background: linear-gradient(135deg, #fef2f2, #fee2e2);
    color: #dc2626;
    border-left: 4px solid var(--danger);
}

/* ========== ROW HOVER EFFECT ========== */
.row-hover-effect {
    position: relative;
}

.row-hover-effect::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 3px;
    background: var(--primary);
    border-radius: 0 3px 3px 0;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.table-modern tbody tr:hover .row-hover-effect::before {
    opacity: 1;
}

/* ========== TOOLTIP STYLES ========== */
.custom-tooltip {
    position: relative;
    cursor: help;
}

.custom-tooltip::after {
    content: attr(data-tip);
    position: absolute;
    bottom: 100%;
    left: 50%;
    transform: translateX(-50%);
    background: var(--dark);
    color: #fff;
    padding: 6px 12px;
    border-radius: 8px;
    font-size: 11px;
    font-weight: 600;
    white-space: nowrap;
    opacity: 0;
    pointer-events: none;
    transition: all 0.3s ease;
}

.custom-tooltip:hover::after {
    opacity: 1;
    bottom: calc(100% + 8px);
}
</style>

<!-- ========== START PAGE WRAPPER ========== -->
<div class="page-wrapper">
    <div class="page-content">

        <!-- ========== WELCOME BANNER ========== -->
        <div class="welcome-banner anim-up delay-1">
            <div class="welcome-content">
                <div class="welcome-title">
                    <?php
                        $hour = date('H');
                        if ($hour < 12) echo 'Good Morning';
                        elseif ($hour < 17) echo 'Good Afternoon';
                        else echo 'Good Evening';
                    ?>, Admin 👋
                </div>
                <div class="welcome-sub">
                    Here's what's happening with your team today
                </div>
                <div class="welcome-date">
                    📅 <?= date('l, d M Y') ?>
                </div>
            </div>
            <div class="welcome-illustration">🏢</div>
        </div>

        <!-- ========== STAT CARDS ========== -->
        <div class="row g-4 stat-card-wrapper">

            <!-- Present Employees -->
            <div class="col-md-6 col-xl-3 anim-up delay-2">
                <div class="stat-card stat-present">
                    <div class="card-body">
                        <div class="stat-icon-wrapper">
                            <i class='bx bx-user-check' style="font-size:28px;"></i>
                        </div>
                        <div class="stat-label">Present Today</div>
                        <div class="stat-number"><?= $present_count ?? 0 ?></div>
                        <div class="stat-footer">
                            <span class="live-indicator"></span>
                            Live count · Updated now
                        </div>
                    </div>
                </div>
            </div>

            <!-- On Leave -->
            <div class="col-md-6 col-xl-3 anim-up delay-3">
                <div class="stat-card stat-leave">
                    <div class="card-body">
                        <div class="stat-icon-wrapper">
                            <i class='bx bx-user-minus' style="font-size:28px;"></i>
                        </div>
                        <div class="stat-label">On Leave</div>
                        <div class="stat-number"><?= $leave_count ?? 0 ?></div>
                        <div class="stat-footer">
                            <span class="live-indicator"></span>
                            Approved leaves today
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- ========== MANUAL WORK LOG FORM ========== -->
        <div class="form-card anim-up delay-4">
            <div class="card-body">

                <div class="section-header">
                    <div class="section-icon" style="background: linear-gradient(135deg, #eff6ff, #dbeafe); color: var(--primary);">
                        <i class='bx bx-time-five'></i>
                    </div>
                    <div>
                        <div class="section-title">
                            Manual Work Log
                            <span class="form-section-badge admin ms-2">🔑 Admin</span>
                        </div>
                        <div class="section-subtitle">Add work entries for employees who forgot to log</div>
                    </div>
                </div>

                <form method="post" action="<?= base_url('admin/history/add_manual_work') ?>">
                    <div class="row g-3">

                        <div class="col-md-6 col-lg-3">
                            <label class="form-label-custom">
                                <span class="label-icon">👤</span> Employee
                            </label>
                            <div class="input-group-modern">
                                <select name="emp_id" class="form-select" required>
                                    <option value="">Select Employee</option>
                                    <?php foreach ($employees as $emp) { ?>
                                        <option value="<?= $emp->id ?>"><?= $emp->name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <label class="form-label-custom">
                                <span class="label-icon">🟢</span> Start Time
                            </label>
                            <input type="datetime-local" name="start_time" class="form-control" required>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <label class="form-label-custom">
                                <span class="label-icon">🔴</span> End Time
                            </label>
                            <input type="datetime-local" name="end_time" class="form-control" required>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <label class="form-label-custom">
                                <span class="label-icon">📝</span> Note
                            </label>
                            <input type="text" name="note" class="form-control" placeholder="e.g., Forgot to start timer">
                        </div>

                    </div>

                    <button type="submit" class="btn btn-submit-work">
                        <i class='bx bx-plus-circle'></i> Add Work Log Entry
                    </button>
                </form>

            </div>
        </div>

        <!-- ========== MANUAL BREAK LOG FORM ========== -->
        <div class="form-card anim-up delay-5">
            <div class="card-body">

                <div class="section-header">
                    <div class="section-icon" style="background: linear-gradient(135deg, #fef2f2, #fecaca); color: var(--danger);">
                        <i class='bx bx-coffee'></i>
                    </div>
                    <div>
                        <div class="section-title">
                            Manual Break Log
                            <span class="form-section-badge admin ms-2">🔑 Admin</span>
                        </div>
                        <div class="section-subtitle">Add break entries for employees</div>
                    </div>
                </div>

                <form method="post" action="<?= base_url('admin/dashboard/add_manual_break') ?>">
                    <div class="row g-3">

                        <div class="col-md-6 col-lg-3">
                            <label class="form-label-custom">
                                <span class="label-icon">👤</span> Employee
                            </label>
                            <select name="emp_id" class="form-select" required>
                                <option value="">Select Employee</option>
                                <?php foreach ($employees as $emp) { ?>
                                    <option value="<?= $emp->id ?>"><?= $emp->name ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <label class="form-label-custom">
                                <span class="label-icon">🟢</span> Start Time
                            </label>
                            <input type="datetime-local" name="start_time" class="form-control" required>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <label class="form-label-custom">
                                <span class="label-icon">🔴</span> End Time
                            </label>
                            <input type="datetime-local" name="end_time" class="form-control" required>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <label class="form-label-custom">
                                <span class="label-icon">📝</span> Note
                            </label>
                            <input type="text" name="note" class="form-control" placeholder="e.g., Late break start">
                        </div>

                    </div>

                    <button type="submit" class="btn btn-submit-break">
                        <i class='bx bx-plus-circle'></i> Add Break Log Entry
                    </button>
                </form>

            </div>
        </div>

        <!-- ========== TODAY MANUAL WORK LOGS TABLE ========== -->
        <div class="table-card anim-up delay-6">
            <div class="card-body">

                <div class="section-header">
                    <div class="section-icon" style="background: linear-gradient(135deg, #f0fdf4, #dcfce7); color: var(--success);">
                        <i class='bx bx-list-check'></i>
                    </div>
                    <div>
                        <div class="section-title">Today's Manual Work Logs</div>
                        <div class="section-subtitle">Work entries added manually by admin</div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table-modern">
                        <thead class="thead-work">
                            <tr>
                                <th>Employee</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Duration</th>
                                <th>Note</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($manual_logs)): ?>
                                <?php $i = 0; foreach($manual_logs as $m): $i++; ?>
                                <tr>
                                    <td>
                                        <div class="emp-name-cell">
                                            <div class="emp-avatar bg-<?= ($i % 6) + 1 ?>">
                                                <?php
                                                    $emp = $this->db
                                                        ->where('id', $m->user_id)
                                                        ->get('employees')
                                                        ->row();
                                                    $name = $emp->name ?? 'Unknown';
                                                    echo strtoupper(substr($name, 0, 1));
                                                ?>
                                            </div>
                                            <span class="emp-name-text"><?= $name ?></span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="time-cell">
                                            <?= date('d M · h:i A', strtotime($m->start_time)) ?>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="time-cell">
                                            <?= date('d M · h:i A', strtotime($m->end_time)) ?>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="duration-badge work">
                                            ⏱ <?= gmdate('H:i:s', strtotime($m->end_time) - strtotime($m->start_time)) ?>
                                        </span>
                                    </td>
                                    <td>
                                        <?php if(!empty($m->note)): ?>
                                            <span class="note-cell">
                                                📝 <?= htmlspecialchars($m->note) ?>
                                            </span>
                                        <?php else: ?>
                                            <span style="color: var(--text-muted); font-size: 13px;">—</span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="5">
                                        <div class="empty-state">
                                            <div class="empty-icon">📋</div>
                                            <div class="empty-text">No Manual Work Logs Today</div>
                                            <div class="empty-sub">Use the form above to add entries</div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

        <!-- ========== TODAY MANUAL BREAK LOGS TABLE ========== -->
        <div class="table-card anim-up delay-7">
            <div class="card-body">

                <div class="section-header">
                    <div class="section-icon" style="background: linear-gradient(135deg, #fef3c7, #fde68a); color: #92400e;">
                        <i class='bx bx-coffee-togo'></i>
                    </div>
                    <div>
                        <div class="section-title">Today's Manual Break Logs</div>
                        <div class="section-subtitle">Break entries added manually by admin</div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table-modern">
                        <thead class="thead-break">
                            <tr>
                                <th>Employee</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Duration</th>
                                <th>Note</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($manual_break_logs)): ?>
                                <?php $j = 0; foreach ($manual_break_logs as $b): $j++; ?>
                                <tr>
                                    <td>
                                        <div class="emp-name-cell">
                                            <div class="emp-avatar bg-<?= ($j % 6) + 1 ?>">
                                                <?= strtoupper(substr($b->name ?? 'U', 0, 1)) ?>
                                            </div>
                                            <span class="emp-name-text"><?= $b->name ?></span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="time-cell">
                                            <?= date('d M · h:i A', strtotime($b->start_time)) ?>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="time-cell">
                                            <?= date('d M · h:i A', strtotime($b->end_time)) ?>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="duration-badge break-d">
                                            ☕ <?= gmdate('H:i:s', strtotime($b->end_time) - strtotime($b->start_time)) ?>
                                        </span>
                                    </td>
                                    <td>
                                        <?php if(!empty($b->note)): ?>
                                            <span class="note-cell">
                                                📝 <?= htmlspecialchars($b->note) ?>
                                            </span>
                                        <?php else: ?>
                                            <span style="color: var(--text-muted); font-size: 13px;">—</span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="5">
                                        <div class="empty-state">
                                            <div class="empty-icon">☕</div>
                                            <div class="empty-text">No Manual Break Logs Today</div>
                                            <div class="empty-sub">Use the form above to add entries</div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div><!-- end page content -->
</div>
<!-- end page wrapper -->

<!-- Overlay -->
<div class="overlay mobile-toggle-icon"></div>

<!-- Back To Top -->
<a href="javascript:;" class="back-to-top">
    <i class='bx bxs-up-arrow-alt'></i>
</a>