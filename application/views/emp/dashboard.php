<!-- Custom Styles -->
<style>
/* ========== GLOBAL STYLES ========== */
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

.page-wrapper {
    font-family: 'Inter', sans-serif;
    background: #f0f2f5;
}

/* ========== ANIMATIONS ========== */
@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes fadeInLeft {
    from { opacity: 0; transform: translateX(-20px); }
    to { opacity: 1; transform: translateX(0); }
}

@keyframes pulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.05); }
}

@keyframes shimmer {
    0% { background-position: -200% center; }
    100% { background-position: 200% center; }
}

@keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-6px); }
}

@keyframes blink {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.4; }
}

@keyframes slideDown {
    from { opacity: 0; max-height: 0; }
    to { opacity: 1; max-height: 500px; }
}

.animate-card {
    animation: fadeInUp 0.5s ease forwards;
    opacity: 0;
}

.animate-card:nth-child(1) { animation-delay: 0.05s; }
.animate-card:nth-child(2) { animation-delay: 0.1s; }
.animate-card:nth-child(3) { animation-delay: 0.15s; }
.animate-card:nth-child(4) { animation-delay: 0.2s; }
.animate-card:nth-child(5) { animation-delay: 0.25s; }
.animate-card:nth-child(6) { animation-delay: 0.3s; }
.animate-card:nth-child(7) { animation-delay: 0.35s; }
.animate-card:nth-child(8) { animation-delay: 0.4s; }

/* ========== DATE BANNER ========== */
.date-banner {
    background: linear-gradient(135deg, #1e1e2f 0%, #2d2d44 100%);
    border: none;
    border-radius: 16px;
    padding: 18px 24px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-shadow: 0 4px 20px rgba(0,0,0,0.15);
    position: relative;
    overflow: hidden;
}

.date-banner::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -20%;
    width: 200px;
    height: 200px;
    background: radial-gradient(circle, rgba(99, 102, 241, 0.15) 0%, transparent 70%);
    border-radius: 50%;
}

.date-banner .date-text {
    font-size: 22px;
    font-weight: 700;
    color: #fff;
    letter-spacing: 0.5px;
}

.date-banner .date-greeting {
    font-size: 13px;
    color: rgba(255,255,255,0.5);
    margin-top: 2px;
}

.date-banner .date-icon {
    font-size: 32px;
    animation: float 3s ease-in-out infinite;
}

/* ========== BREAK WARNING ========== */
.break-alert {
    background: linear-gradient(135deg, #fef3cd 0%, #fff8e1 100%);
    border: 1px solid #ffc107;
    border-left: 5px solid #ffc107;
    border-radius: 14px;
    padding: 18px 24px;
    display: flex;
    align-items: center;
    gap: 16px;
    box-shadow: 0 4px 15px rgba(255, 193, 7, 0.15);
}

.break-alert .break-icon {
    font-size: 40px;
    animation: pulse 2s ease-in-out infinite;
}

.break-alert .break-text {
    font-weight: 600;
    color: #856404;
    font-size: 15px;
}

.break-alert .btn-resume {
    background: linear-gradient(135deg, #28a745, #20c997);
    border: none;
    color: #fff;
    padding: 8px 22px;
    border-radius: 10px;
    font-weight: 600;
    font-size: 13px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(40, 167, 69, 0.3);
}

.break-alert .btn-resume:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(40, 167, 69, 0.4);
}

/* ========== ANNOUNCEMENTS ========== */
.announcement-card {
    border: none;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 4px 25px rgba(0,0,0,0.08);
    transition: transform 0.3s ease;
}

.announcement-card:hover {
    transform: translateY(-3px);
}

.announcement-card .card-header {
    background: linear-gradient(135deg, #dc3545 0%, #c82333 50%, #a71d2a 100%);
    padding: 16px 24px;
    border: none;
    display: flex;
    align-items: center;
    gap: 10px;
}

.announcement-card .card-header h5 {
    font-weight: 700;
    font-size: 16px;
    letter-spacing: 0.3px;
}

.announcement-item {
    padding: 16px 24px;
    border-bottom: 1px solid #f0f0f0;
    transition: background 0.3s ease;
    position: relative;
}

.announcement-item:hover {
    background: #fafbff;
}

.announcement-item::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 4px;
    background: linear-gradient(180deg, #dc3545, #ff6b6b);
    border-radius: 0 4px 4px 0;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.announcement-item:hover::before {
    opacity: 1;
}

.announcement-item h6 {
    font-weight: 700;
    font-size: 15px;
    color: #1e1e2f;
    margin-bottom: 6px;
}

.announcement-item p {
    font-size: 13px;
    color: #6c757d;
    line-height: 1.6;
}

.announcement-item .time-badge {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    background: #fff0f0;
    color: #dc3545;
    padding: 3px 10px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 600;
}

/* ========== HOLIDAYS CARD ========== */
.holiday-card {
    border: none;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 4px 25px rgba(0,0,0,0.08);
    transition: transform 0.3s ease;
}

.holiday-card:hover {
    transform: translateY(-3px);
}

.holiday-card .card-header {
    background: linear-gradient(135deg, #4e54c8 0%, #6366f1 50%, #818cf8 100%);
    padding: 16px 24px;
    border: none;
    display: flex;
    align-items: center;
    gap: 10px;
}

.holiday-card .card-header h5 {
    font-weight: 700;
    font-size: 16px;
    letter-spacing: 0.3px;
}

.holiday-item {
    padding: 14px 24px;
    border-bottom: 1px solid #f0f0f5;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: background 0.3s ease;
}

.holiday-item:last-child {
    border-bottom: none;
}

.holiday-item:hover {
    background: #f5f3ff;
}

.holiday-item .holiday-info strong {
    font-size: 14px;
    color: #1e1e2f;
    display: block;
    margin-bottom: 3px;
}

.holiday-item .holiday-info small {
    color: #8b8fa3;
    font-size: 12px;
}

.holiday-days-badge {
    background: linear-gradient(135deg, #10b981, #059669);
    color: #fff;
    padding: 6px 14px;
    border-radius: 24px;
    font-size: 12px;
    font-weight: 700;
    box-shadow: 0 3px 10px rgba(16, 185, 129, 0.3);
    white-space: nowrap;
}

/* ========== TIMER / SESSION CARDS ========== */
.session-card {
    border: none;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 8px 30px rgba(0,0,0,0.12);
    position: relative;
}

.session-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, #0f0f1a 0%, #1a1a2e 50%, #16213e 100%);
    z-index: 0;
}

.session-card .card-body {
    position: relative;
    z-index: 1;
    padding: 28px 20px;
}

.session-label {
    text-transform: uppercase;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 2px;
    color: rgba(255,255,255,0.4);
    margin-bottom: 12px;
}

.timer-display {
    font-family: 'JetBrains Mono', 'Courier New', monospace;
    font-size: 42px;
    font-weight: 800;
    color: #fff;
    text-shadow: 0 0 30px rgba(99, 102, 241, 0.4);
    letter-spacing: 4px;
    margin-bottom: 20px;
}

.timer-btn-group {
    display: flex;
    gap: 8px;
    justify-content: center;
}

.timer-btn-group .btn {
    border-radius: 12px;
    padding: 8px 20px;
    font-weight: 600;
    font-size: 13px;
    transition: all 0.3s ease;
    border: none;
}

.btn-timer-start {
    background: linear-gradient(135deg, #10b981, #059669);
    color: #fff;
    box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);
}

.btn-timer-start:hover:not(:disabled) {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(16, 185, 129, 0.5);
    color: #fff;
}

.btn-timer-stop {
    background: linear-gradient(135deg, #f59e0b, #d97706);
    color: #fff;
    box-shadow: 0 4px 15px rgba(245, 158, 11, 0.3);
}

.btn-timer-stop:hover:not(:disabled) {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(245, 158, 11, 0.5);
    color: #fff;
}

.btn-timer-reset {
    background: rgba(255,255,255,0.1);
    color: rgba(255,255,255,0.7);
    border: 1px solid rgba(255,255,255,0.15) !important;
}

.btn-timer-reset:hover:not(:disabled) {
    background: rgba(255,255,255,0.15);
    color: #fff;
    transform: translateY(-2px);
}

.btn:disabled {
    opacity: 0.35;
    cursor: not-allowed;
    transform: none !important;
}

/* ========== STAT CARDS (Break & Work) ========== */
.stat-card {
    border: none;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 4px 25px rgba(0,0,0,0.06);
    transition: all 0.3s ease;
    position: relative;
}

.stat-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 30px rgba(0,0,0,0.1);
}

.stat-card .stat-icon {
    width: 50px;
    height: 50px;
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    margin: 0 auto 14px;
}

.stat-card .stat-label {
    text-transform: uppercase;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1.5px;
    color: #8b8fa3;
    margin-bottom: 8px;
}

.stat-card .stat-value {
    font-size: 26px;
    font-weight: 800;
    margin-bottom: 4px;
}

.stat-card .stat-sub {
    font-size: 12px;
    color: #a0a4b8;
}

/* Break Card Specific */
.break-stat-card {
    background: linear-gradient(135deg, #fff5f5 0%, #ffe8e8 100%);
    border-left: 4px solid #ef4444;
}

.break-stat-card .stat-icon {
    background: linear-gradient(135deg, #fee2e2, #fecaca);
    color: #ef4444;
}

.break-stat-card .stat-value {
    color: #dc2626;
}

.break-stat-card .stat-count {
    font-size: 16px;
    font-weight: 700;
    color: #ef4444;
}

/* Work Card Specific */
.work-stat-card {
    background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
    border-left: 4px solid #22c55e;
}

.work-stat-card .stat-icon {
    background: linear-gradient(135deg, #dcfce7, #bbf7d0);
    color: #16a34a;
}

.work-stat-card .stat-value {
    color: #15803d;
}

/* ========== COMPLETE DAY BUTTON ========== */
.btn-complete-day {
    background: linear-gradient(135deg, #6b7280, #4b5563);
    border: none;
    color: #fff;
    padding: 12px 30px;
    border-radius: 14px;
    font-weight: 700;
    font-size: 15px;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(107, 114, 128, 0.3);
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.btn-complete-day:not(:disabled):hover {
    background: linear-gradient(135deg, #22c55e, #16a34a);
    transform: translateY(-2px);
    box-shadow: 0 6px 25px rgba(34, 197, 94, 0.4);
    color: #fff;
}

.btn-complete-day:disabled {
    opacity: 0.5;
    cursor: not-allowed;
}

.btn-complete-day.btn-success {
    background: linear-gradient(135deg, #22c55e, #16a34a) !important;
    box-shadow: 0 4px 20px rgba(34, 197, 94, 0.4);
    animation: pulse 2s ease-in-out infinite;
}

/* ========== LEAVES CARD ========== */
.leave-card {
    border: none;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 4px 25px rgba(0,0,0,0.08);
    transition: transform 0.3s ease;
}

.leave-card:hover {
    transform: translateY(-3px);
}

.leave-card .card-header {
    background: linear-gradient(135deg, #ef4444 0%, #dc2626 50%, #b91c1c 100%);
    padding: 16px 24px;
    border: none;
}

.leave-card .card-header h5 {
    font-weight: 700;
    font-size: 16px;
}

.leave-item {
    padding: 14px 24px;
    border-bottom: 1px solid #f0f0f0;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: background 0.3s ease;
}

.leave-item:hover {
    background: #fff5f5;
}

.leave-item strong {
    font-size: 14px;
    color: #1e1e2f;
}

.leave-item small {
    color: #8b8fa3;
}

.leave-time-badge {
    background: #1e1e2f;
    color: #fff;
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 600;
}

/* ========== BREAK TABLE ========== */
.break-table-card {
    border: none;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 4px 25px rgba(0,0,0,0.06);
}

.break-table-card .card-body {
    padding: 24px;
}

.break-table-card h5 {
    font-weight: 700;
    font-size: 18px;
    color: #1e1e2f;
    margin-bottom: 16px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.table-modern {
    border-collapse: separate;
    border-spacing: 0;
    width: 100%;
}

.table-modern thead th {
    background: linear-gradient(135deg, #4e54c8, #6366f1);
    color: #fff;
    font-weight: 600;
    font-size: 13px;
    text-transform: uppercase;
    letter-spacing: 1px;
    padding: 14px 18px;
    border: none;
}

.table-modern thead th:first-child {
    border-radius: 12px 0 0 0;
}

.table-modern thead th:last-child {
    border-radius: 0 12px 0 0;
}

.table-modern tbody tr {
    transition: all 0.3s ease;
}

.table-modern tbody tr:hover {
    background: #f5f3ff;
    transform: scale(1.005);
}

.table-modern tbody td {
    padding: 14px 18px;
    font-size: 14px;
    color: #374151;
    border-bottom: 1px solid #f0f0f5;
    vertical-align: middle;
}

.table-modern tbody tr:last-child td {
    border-bottom: none;
}

.reason-badge {
    background: linear-gradient(135deg, #fef2f2, #fecaca);
    color: #dc2626;
    padding: 5px 14px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 4px;
}

.time-cell {
    font-family: 'JetBrains Mono', monospace;
    font-weight: 600;
    font-size: 13px;
    color: #4b5563;
}

.duration-badge {
    background: linear-gradient(135deg, #eff6ff, #dbeafe);
    color: #2563eb;
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 700;
    font-family: 'JetBrains Mono', monospace;
}

/* ========== MODAL ENHANCEMENTS ========== */
.modal-content {
    border: none;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0,0,0,0.2);
}

.modal-header {
    background: linear-gradient(135deg, #1e1e2f, #2d2d44);
    color: #fff;
    padding: 20px 24px;
    border: none;
}

.modal-header .modal-title {
    font-weight: 700;
    font-size: 18px;
}

.modal-header .btn-close {
    filter: invert(1);
}

.modal-body {
    padding: 24px;
}

.modal-body .form-select,
.modal-body .form-control {
    border-radius: 12px;
    border: 2px solid #e5e7eb;
    padding: 12px 16px;
    font-size: 14px;
    transition: all 0.3s ease;
}

.modal-body .form-select:focus,
.modal-body .form-control:focus {
    border-color: #6366f1;
    box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1);
}

.modal-body .form-label {
    font-weight: 600;
    color: #374151;
    margin-bottom: 8px;
}

.modal-footer {
    padding: 16px 24px;
    border-top: 1px solid #f0f0f5;
}

.modal-footer .btn-success {
    background: linear-gradient(135deg, #22c55e, #16a34a);
    border: none;
    border-radius: 12px;
    padding: 10px 24px;
    font-weight: 700;
    box-shadow: 0 4px 15px rgba(34, 197, 94, 0.3);
}

.modal-footer .btn-secondary {
    border-radius: 12px;
    padding: 10px 24px;
    font-weight: 600;
}

/* ========== EMPTY STATES ========== */
.empty-state {
    padding: 30px;
    text-align: center;
    color: #a0a4b8;
}

.empty-state .empty-icon {
    font-size: 40px;
    margin-bottom: 10px;
    opacity: 0.5;
}

.empty-state p {
    font-size: 14px;
    font-weight: 500;
}

/* ========== SCROLLBAR ========== */
::-webkit-scrollbar {
    width: 6px;
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

/* ========== SECTION DIVIDER ========== */
.section-divider {
    width: 100%;
    height: 1px;
    background: linear-gradient(90deg, transparent, #e0e0e0, transparent);
    margin: 8px 0;
}

/* ========== RESPONSIVE ========== */
@media (max-width: 768px) {
    .timer-display {
        font-size: 32px;
        letter-spacing: 2px;
    }

    .date-banner {
        padding: 14px 18px;
    }

    .date-banner .date-text {
        font-size: 18px;
    }

    .stat-card .stat-value {
        font-size: 22px;
    }

    .timer-btn-group .btn {
        padding: 7px 16px;
        font-size: 12px;
    }
}

/* ========== LIVE DOT ========== */
.live-dot {
    width: 8px;
    height: 8px;
    background: #22c55e;
    border-radius: 50%;
    display: inline-block;
    animation: blink 1.5s ease-in-out infinite;
    margin-right: 6px;
}

/* ========== CARD RIBBON ========== */
.card-ribbon {
    position: absolute;
    top: 14px;
    right: -30px;
    background: linear-gradient(135deg, #f59e0b, #d97706);
    color: #fff;
    padding: 4px 40px;
    font-size: 10px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    transform: rotate(45deg);
    box-shadow: 0 2px 8px rgba(0,0,0,0.15);
}
</style>

<!-- ========== START PAGE WRAPPER ========== -->
<div class="page-wrapper">
    <div class="page-content">

        <!-- ========== DATE BANNER ========== -->
        <div class="date-banner mb-3 animate-card">
            <div>
                <div class="date-text"><?= date('d M Y') ?></div>
                <div class="date-greeting">
                    <?php
                        $hour = date('H');
                        if ($hour < 12) echo '🌅 Good Morning!';
                        elseif ($hour < 17) echo '☀️ Good Afternoon!';
                        else echo '🌙 Good Evening!';
                    ?>
                    Have a productive day.
                </div>
            </div>
            <div class="date-icon">📅</div>
        </div>

        <!-- ========== BREAK ALERT ========== -->
        <?php if($this->session->userdata('on_break')): ?>
        <div class="break-alert mb-3 animate-card">
            <div class="break-icon">⏸️</div>
            <div class="flex-grow-1">
                <div class="break-text">You are currently on a break</div>
                <small style="color:#a16207;">Your timer is paused. Click resume to continue working.</small>
            </div>
            <button class="btn btn-resume" onclick="resumeWork()">
                ▶ Resume Work
            </button>
        </div>
        <?php endif; ?>


 <div class="row g-3 mb-3">

            <!-- ⏱ Active Session -->
            <div class="col-12 col-xl-4 animate-card">
                <div class="session-card h-100">
                    <div class="card-body text-center d-flex flex-column justify-content-center">
                        <p class="session-label">
                            <span class="live-dot"></span> Active Session
                        </p>
                        <div class="timer-display" id="display">00:00:00</div>
                        <div class="timer-btn-group">
                            <button id="btnStart" onclick="startWatch()"
                                class="btn btn-timer-start"
                                <?= $report_submitted ? 'disabled' : '' ?>>
                                ▶ Start
                            </button>
                            <button id="btnStop" onclick="stopWatch()"
                                class="btn btn-timer-stop"
                                <?= $report_submitted ? 'disabled' : '' ?>>
                                ⏸ Stop
                            </button>
                            <button id="btnReset" onclick="resetWatch()"
                                class="btn btn-timer-reset"
                                <?= $report_submitted ? 'disabled' : '' ?>>
                                ↺ Reset
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Break Summary -->
            <div class="col-12 col-xl-4 animate-card">
                <div class="stat-card break-stat-card h-100">
                    <div class="card-body text-center p-4 d-flex flex-column justify-content-center">
                        <div class="stat-icon">☕</div>
                        <p class="stat-label">Today's Breaks</p>
                        <div class="stat-count mb-2">
                            <?= $break_summary->total_breaks ?? 0 ?> Breaks
                        </div>
                        <div class="stat-value">
                            <?= $formattedBreakTime ?? '00h 00m 00s'; ?>
                        </div>
                        <span class="stat-sub">Total Break Time Today</span>
                    </div>
                </div>
            </div>

            <!-- Work Summary -->
            <div class="col-12 col-xl-4 animate-card">
                <div class="stat-card work-stat-card h-100">
                    <div class="card-body text-center p-4 d-flex flex-column justify-content-center">
                        <div class="stat-icon">💼</div>
                        <p class="stat-label">Total Work Today</p>
                        <div class="stat-value">
                            <?= $formattedWorkTime ?? '00h 00m 00s'; ?>
                        </div>
                        <span class="stat-sub">Total Active Working Time</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- ========== COMPLETE DAY BUTTON ========== -->
        <div class="text-center mb-3 animate-card">
            <button
                id="completeBtn"
                class="btn btn-complete-day"
                <?= $report_submitted ? 'disabled' : '' ?>
                data-bs-toggle="modal"
                data-bs-target="#reportModal">
                🏁 Complete Day
            </button>
        </div>

        <!-- ========== REPORT MODAL ========== -->
        <div class="modal fade" id="reportModal">
            <div class="modal-dialog modal-dialog-centered">
                <form id="reportForm" method="post"
                    action="<?= base_url('emp/dashboard/complete_day') ?>"
                    class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">📝 Today's Work Report</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <label class="form-label">What did you work on today?</label>
                        <textarea
                            name="daily_report"
                            class="form-control"
                            rows="5"
                            placeholder="Describe your tasks, achievements, and any blockers..."
                            required></textarea>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">
                            ✅ Submit & Complete Day
                        </button>
                    </div>

                </form>
            </div>
        </div>



        <!-- ========== ANNOUNCEMENTS ========== -->
        <div class="announcement-card card mb-3 animate-card">
            <div class="card-header">
                <span style="font-size:20px;">📢</span>
                <h5 class="mb-0 text-white">Announcements</h5>
            </div>
            <div class="card-body p-0">
                <?php if(!empty($announcements)): ?>
                    <?php foreach($announcements as $a): ?>
                    <div class="announcement-item">
                        <h6><?= $a->title ?></h6>
                        <p class="mb-2"><?= $a->description ?></p>
                        <span class="time-badge">
                            🕐 <?= timespan(strtotime($a->created_at), time(), 1) ?> ago
                        </span>
                    </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="empty-state">
                        <div class="empty-icon">📭</div>
                        <p>No Announcements Available</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- ========== UPCOMING HOLIDAYS ========== -->
        <div class="holiday-card card mb-3 animate-card">
            <div class="card-header">
                <span style="font-size:20px;">🎉</span>
                <h5 class="mb-0 text-white">Upcoming Holidays</h5>
            </div>
            <div class="card-body p-0">
                <?php if(!empty($upcoming_holidays)): ?>
                    <?php foreach($upcoming_holidays as $h):
                        $today = new DateTime(date('Y-m-d'));
                        $holiday = new DateTime($h->holiday_date);
                        $diff = $today->diff($holiday)->days;
                    ?>
                    <div class="holiday-item">
                        <div class="holiday-info">
                            <strong><?= $h->holiday_name ?></strong>
                            <small><?= date('d M Y', strtotime($h->holiday_date)) ?> (<?= $h->day ?>)</small>
                        </div>
                        <span class="holiday-days-badge">
                            🗓 In <?= $diff ?> Days
                        </span>
                    </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="empty-state">
                        <div class="empty-icon">🏖️</div>
                        <p>No Upcoming Holidays</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="section-divider"></div>

        <div id="reportMsg"></div>

        
       
        <!-- ========== TODAY LEAVES ========== -->
        <div class="leave-card card mb-3 animate-card">
            <div class="card-header">
                <h5 class="mb-0 text-white">🏠 Employees On Leave Today</h5>
            </div>
            <div class="card-body p-0">
                <?php if(!empty($today_leaves)): ?>
                    <?php foreach($today_leaves as $l): ?>
                    <div class="leave-item">
                        <div>
                            <strong><?= $l->name ?></strong><br>
                            <small><?= $l->reason ?></small>
                        </div>
                        <span class="leave-time-badge">
                            <?= timespan(strtotime($l->created_at), time(), 1); ?> ago
                        </span>
                    </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="empty-state">
                        <div class="empty-icon">✅</div>
                        <p>No employee on leave today</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- ========== BREAK REASON MODAL ========== -->
        <div class="modal fade" id="breakModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">☕ Select Break Reason</h5>
                    </div>
                    <div class="modal-body">
                        <select id="breakReason" class="form-select">
                            <option value="">-- Select Reason --</option>
                            <option value="Tea Break">🍵 Tea Break</option>
                            <option value="Lunch">🍽️ Lunch</option>
                            <option value="Meeting">📋 Meeting</option>
                            <option value="Other">📌 Other</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-danger" onclick="submitBreak()"
                            style="background: linear-gradient(135deg, #ef4444, #dc2626); border:none; border-radius:12px; font-weight:600;">
                            ⏸ Start Break
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- ========== BREAK LOG TABLE ========== -->
        <div class="break-table-card card mb-3 animate-card">
            <div class="card-body">
                <h5>📊 Break Log</h5>
                <div class="table-responsive">
                    <table class="table-modern">
                        <thead>
                            <tr>
                                <th>Reason</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Duration</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($breaks)): ?>
                                <?php foreach($breaks as $b): ?>
                                <tr>
                                    <td>
                                        <span class="reason-badge">
                                            <?php
                                                $icons = [
                                                    'Tea Break' => '🍵',
                                                    'Lunch' => '🍽️',
                                                    'Meeting' => '📋',
                                                    'Other' => '📌'
                                                ];
                                                echo ($icons[$b->reason] ?? '⏸') . ' ' . $b->reason;
                                            ?>
                                        </span>
                                    </td>
                                    <td class="time-cell">
                                        <?= $b->start_time ? date('h:i:s A', strtotime($b->start_time)) : '-' ?>
                                    </td>
                                    <td class="time-cell">
                                        <?= $b->end_time ? date('h:i:s A', strtotime($b->end_time)) : '-' ?>
                                    </td>
                                    <td>
                                        <?php
                                        if ($b->start_time && $b->end_time) {
                                            $seconds = strtotime($b->end_time) - strtotime($b->start_time);
                                            $hours   = floor($seconds / 3600);
                                            $minutes = floor(($seconds % 3600) / 60);
                                            $secs    = $seconds % 60;
                                            $formatted = $hours > 0
                                                ? "{$hours}h {$minutes}m"
                                                : "{$minutes}m {$secs}s";
                                            echo '<span class="duration-badge">' . $formatted . '</span>';
                                        } else {
                                            echo '<span class="text-muted">—</span>';
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="4" class="text-center" style="padding:30px; color:#a0a4b8;">
                                        No breaks recorded today
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
<a href="javascript:;" class="back-to-top" style="
    background: linear-gradient(135deg, #6366f1, #4e54c8);
    border-radius: 14px;
    box-shadow: 0 4px 15px rgba(99,102,241,0.4);
"><i class='bx bxs-up-arrow-alt'></i></a>


<!-- ========== SCRIPTS ========== -->
<script>
let timer = null;
let display = document.getElementById("display");

function updateDisplay(){
    let start = localStorage.getItem("startTime");
    if(!start) return;

    let s = Math.floor((Date.now() - start) / 1000);
    let h = String(Math.floor(s / 3600)).padStart(2,'0');
    let m = String(Math.floor((s % 3600) / 60)).padStart(2,'0');
    let sec = String(s % 60).padStart(2,'0');

    display.innerHTML = `${h}:${m}:${sec}`;
}

function startWatch(){
    if(timer) return;

    localStorage.setItem("startTime", Date.now());
    fetch("<?= site_url('emp/dashboard/start_work') ?>");
    timer = setInterval(updateDisplay, 1000);

    btnStart.disabled = true;
    btnStop.disabled  = false;
    btnReset.disabled = true;
}

function stopWatch(){
    new bootstrap.Modal(
        document.getElementById('breakModal')
    ).show();
}

function submitBreak(){
    let r = document.getElementById('breakReason').value;
    if(!r){
        Swal.fire({
            icon: 'warning',
            title: 'Missing Reason',
            text: 'Please select a break reason',
            confirmButtonColor: '#6366f1'
        });
        return;
    }
    fetch("<?= site_url('emp/dashboard/stop_work') ?>");

    fetch("<?= site_url('emp/dashboard/start_timer') ?>", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: "reason=" + encodeURIComponent(r)
    })
    .then(() => {
        clearInterval(timer);
        timer = null;
        localStorage.removeItem("startTime");
        breakMode();
        location.reload();
    });
}

window.onload = function(){
    const today = new Date().toISOString().slice(0,10);
    const savedDate = localStorage.getItem("work_date");

    if(savedDate === today && localStorage.getItem("startTime")){
        timer = setInterval(updateDisplay, 1000);
    } else {
        localStorage.removeItem("startTime");
    }

    localStorage.setItem("work_date", today);
};

function resetWatch(){
    if(timer){
        clearInterval(timer);
        timer = null;
    }

    fetch("<?= site_url('emp/dashboard/stop_work') ?>");

    localStorage.removeItem("startTime");
    display.innerText = "00:00:00";
    location.reload();
}

function resumeWork(){
    fetch("<?= site_url('emp/dashboard/stop_timer') ?>")
    .then(() => fetch("<?= site_url('emp/dashboard/start_work') ?>"))
    .then(() => {
        localStorage.setItem("startTime", Date.now());
        timer = setInterval(updateDisplay, 1000);
        workMode();
        location.reload();
    });
}
</script>

<script>
document.getElementById("reportForm").addEventListener("submit", function(e){
    e.preventDefault();

    fetch("<?= base_url('emp/dashboard/complete_day') ?>", {
        method: "POST",
        body: new FormData(this)
    })
    .then(res => res.json())
    .then(data => {
        if(data.status === "time_error"){
            Swal.fire({
                icon: 'warning',
                title: 'Too Early!',
                text: 'You can submit report only after 7 PM',
                confirmButtonColor: '#f59e0b'
            });
            return;
        }

        if(data.status === "success"){
            clearInterval(timer);
            timer = null;
            localStorage.removeItem("startTime");
            localStorage.removeItem("work_date");
            document.getElementById("display").innerText = "00:00:00";

            document.querySelectorAll(
                "button[onclick='startWatch()'], \
                 button[onclick='stopWatch()'], \
                 button[onclick='resetWatch()'], \
                 #completeBtn"
            ).forEach(btn => btn.disabled = true);

            Swal.fire({
                icon: 'success',
                title: '🎉 Report Submitted!',
                text: 'Your work report has been submitted. Great work today!',
                confirmButtonColor: '#22c55e'
            });

            bootstrap.Modal.getInstance(
                document.getElementById('reportModal')
            ).hide();
        }

        if(data.status === "already"){
            Swal.fire({
                icon: 'info',
                title: 'Already Submitted',
                text: "You have already submitted today's report.",
                confirmButtonColor: '#6366f1'
            });
        }
    });
});
</script>

<script>
const reportSubmitted = <?= $report_submitted ? 'true' : 'false' ?>;
const onBreak = <?= $this->session->userdata('on_break') ? 'true' : 'false' ?>;

function lockAllButtons() {
    document.querySelectorAll(
        "button[onclick='startWatch()'], \
         button[onclick='stopWatch()'], \
         button[onclick='resetWatch()'], \
         #completeBtn"
    ).forEach(btn => btn.disabled = true);
}

function checkCompleteButton() {
    if (reportSubmitted) {
        lockAllButtons();
        return;
    }

    const now = new Date();
    const startHour = 19;

    if (now.getHours() >= startHour) {
        document.querySelectorAll(
            "button[onclick='startWatch()'], \
             button[onclick='stopWatch()'], \
             button[onclick='resetWatch()']"
        ).forEach(btn => btn.disabled = false);

        const completeBtn = document.getElementById('completeBtn');
        completeBtn.disabled = false;
        completeBtn.classList.remove('btn-secondary');
        completeBtn.classList.add('btn-success');
    }
}

checkCompleteButton();

if (!reportSubmitted) {
    setInterval(checkCompleteButton, 60000);
}
</script>

<script>
function lockAllWorkButtons() {
    btnStart.disabled = true;
    btnStop.disabled  = true;
    btnReset.disabled = true;
}

function breakMode() {
    lockAllWorkButtons();
}

function workMode() {
    btnStop.disabled = false;
    btnStart.disabled = true;
    btnReset.disabled = true;
}

window.addEventListener("load", () => {
    if (reportSubmitted) {
        lockAllWorkButtons();
        document.getElementById("completeBtn").disabled = true;
        return;
    }

    if (onBreak) {
        breakMode();
        return;
    }

    if (localStorage.getItem("startTime")) {
        btnStart.disabled = true;
        btnStop.disabled  = false;
        btnReset.disabled = true;
        timer = setInterval(updateDisplay, 1000);
        return;
    }

    btnStart.disabled = false;
    btnStop.disabled  = true;
    btnReset.disabled = true;
});
</script>