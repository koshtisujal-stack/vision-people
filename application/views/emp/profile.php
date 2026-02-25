<style>
    /* ================= CUSTOM PROFILE STYLES ================= */
    :root {
        --primary: #4e73df;
        --primary-dark: #3a56c5;
        --primary-light: #eef2ff;
        --accent: #00d4aa;
        --accent-gradient: linear-gradient(135deg, #4e73df, #00d4aa);
        --danger: #e74a3b;
        --warning: #f6c23e;
        --success: #1cc88a;
        --dark: #2c3e50;
        --gray-100: #f8f9fc;
        --gray-200: #eaecf4;
        --gray-500: #b7b9cc;
        --gray-700: #5a5c69;
        --shadow-sm: 0 2px 8px rgba(78, 115, 223, 0.08);
        --shadow-md: 0 4px 24px rgba(78, 115, 223, 0.12);
        --shadow-lg: 0 8px 40px rgba(78, 115, 223, 0.18);
        --radius: 16px;
        --radius-sm: 10px;
        --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .profile-page-wrapper {
        padding: 24px;
        min-height: 100vh;
        background: linear-gradient(135deg, #f5f7fa 0%, #e8ecf1 100%);
    }

    /* ===== BREADCRUMB ===== */
    .profile-breadcrumb {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 28px;
        animation: fadeInDown 0.5s ease;
    }

    .profile-breadcrumb .breadcrumb-icon {
        width: 42px;
        height: 42px;
        background: var(--accent-gradient);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 20px;
        box-shadow: 0 4px 15px rgba(78, 115, 223, 0.3);
    }

    .profile-breadcrumb h2 {
        font-size: 24px;
        font-weight: 700;
        color: var(--dark);
        margin: 0;
    }

    .profile-breadcrumb .breadcrumb-sub {
        font-size: 13px;
        color: var(--gray-700);
        margin: 0;
    }

    /* ===== PROFILE HERO CARD ===== */
    .profile-hero-card {
        background: #fff;
        border-radius: var(--radius);
        box-shadow: var(--shadow-md);
        overflow: hidden;
        border: none;
        transition: var(--transition);
        animation: fadeInUp 0.6s ease;
    }

    .profile-hero-card:hover {
        box-shadow: var(--shadow-lg);
        transform: translateY(-2px);
    }

    .profile-cover {
        height: 140px;
        background: var(--accent-gradient);
        position: relative;
        overflow: hidden;
    }

    .profile-cover::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -20%;
        width: 300px;
        height: 300px;
        background: rgba(255, 255, 255, 0.08);
        border-radius: 50%;
    }

    .profile-cover::after {
        content: '';
        position: absolute;
        bottom: -60%;
        left: -10%;
        width: 200px;
        height: 200px;
        background: rgba(255, 255, 255, 0.06);
        border-radius: 50%;
    }

    .profile-cover .cover-pattern {
        position: absolute;
        inset: 0;
        background-image:
            radial-gradient(circle at 20% 80%, rgba(255,255,255,0.1) 0%, transparent 50%),
            radial-gradient(circle at 80% 20%, rgba(255,255,255,0.08) 0%, transparent 50%);
    }

    .profile-avatar-wrapper {
        position: relative;
        display: inline-block;
        margin-top: -60px;
        z-index: 2;
    }

    .profile-avatar-wrapper .avatar-ring {
        width: 132px;
        height: 132px;
        border-radius: 50%;
        padding: 4px;
        background: var(--accent-gradient);
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 6px 25px rgba(78, 115, 223, 0.25);
        transition: var(--transition);
    }

    .profile-avatar-wrapper:hover .avatar-ring {
        transform: scale(1.05);
        box-shadow: 0 8px 35px rgba(78, 115, 223, 0.35);
    }

    #imagePreview {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid #fff;
        background: #fff;
    }

    .camera-btn {
        position: absolute;
        bottom: 6px;
        right: 6px;
        width: 38px;
        height: 38px;
        background: var(--accent-gradient);
        color: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        border: 3px solid #fff;
        font-size: 16px;
        transition: var(--transition);
        box-shadow: 0 3px 12px rgba(78, 115, 223, 0.3);
        z-index: 3;
    }

    .camera-btn:hover {
        transform: scale(1.15);
        box-shadow: 0 5px 20px rgba(78, 115, 223, 0.4);
    }

    .profile-hero-card .profile-name {
        font-size: 22px;
        font-weight: 700;
        color: var(--dark);
        margin: 14px 0 4px;
    }

    .profile-hero-card .profile-role {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: var(--primary-light);
        color: var(--primary);
        padding: 4px 14px;
        border-radius: 20px;
        font-size: 13px;
        font-weight: 600;
        margin-bottom: 8px;
    }

    .profile-hero-card .profile-location {
        color: var(--gray-700);
        font-size: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
    }

    .profile-hero-card .profile-location i {
        color: var(--danger);
        font-size: 15px;
    }

    /* ===== STATS ROW ===== */
    .profile-stats {
        display: flex;
        justify-content: center;
        gap: 0;
        margin: 20px 0 0;
        border-top: 1px solid var(--gray-200);
        padding-top: 0;
    }

    .profile-stats .stat-item {
        flex: 1;
        padding: 16px 10px;
        text-align: center;
        border-right: 1px solid var(--gray-200);
        transition: var(--transition);
        cursor: default;
    }

    .profile-stats .stat-item:last-child {
        border-right: none;
    }

    .profile-stats .stat-item:hover {
        background: var(--gray-100);
    }

    .profile-stats .stat-value {
        font-size: 20px;
        font-weight: 700;
        color: var(--primary);
    }

    .profile-stats .stat-label {
        font-size: 12px;
        color: var(--gray-700);
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-top: 2px;
    }

    /* ===== QUICK ACTIONS ===== */
    .quick-actions {
        display: flex;
        gap: 10px;
        padding: 20px 24px;
        justify-content: center;
    }

    .btn-profile-action {
        padding: 10px 24px;
        border-radius: 10px;
        font-size: 14px;
        font-weight: 600;
        transition: var(--transition);
        display: flex;
        align-items: center;
        gap: 8px;
        border: none;
    }

    .btn-profile-follow {
        background: var(--accent-gradient);
        color: #fff;
        box-shadow: 0 4px 15px rgba(78, 115, 223, 0.3);
    }

    .btn-profile-follow:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 25px rgba(78, 115, 223, 0.4);
        color: #fff;
    }

    .btn-profile-message {
        background: var(--gray-100);
        color: var(--primary);
        border: 2px solid var(--gray-200) !important;
    }

    .btn-profile-message:hover {
        background: var(--primary-light);
        border-color: var(--primary) !important;
        transform: translateY(-2px);
        color: var(--primary);
    }

    /* ===== PROFILE COMPLETION ===== */
    .profile-completion-card {
        background: #fff;
        border-radius: var(--radius);
        box-shadow: var(--shadow-sm);
        padding: 20px 24px;
        margin-top: 20px;
        border: none;
        animation: fadeInUp 0.7s ease;
    }

    .profile-completion-card h6 {
        font-size: 14px;
        font-weight: 700;
        color: var(--dark);
        margin-bottom: 12px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .profile-completion-card h6 i {
        color: var(--warning);
    }

    .completion-bar {
        height: 8px;
        border-radius: 10px;
        background: var(--gray-200);
        overflow: hidden;
        margin-bottom: 8px;
    }

    .completion-bar .bar-fill {
        height: 100%;
        border-radius: 10px;
        background: var(--accent-gradient);
        transition: width 1.5s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .completion-text {
        font-size: 13px;
        color: var(--gray-700);
        display: flex;
        justify-content: space-between;
    }

    .completion-text span {
        font-weight: 700;
        color: var(--primary);
    }

    /* ===== SOCIAL LINKS CARD ===== */
    .social-links-card {
        background: #fff;
        border-radius: var(--radius);
        box-shadow: var(--shadow-sm);
        padding: 20px 24px;
        margin-top: 20px;
        border: none;
        animation: fadeInUp 0.8s ease;
    }

    .social-links-card h6 {
        font-size: 14px;
        font-weight: 700;
        color: var(--dark);
        margin-bottom: 16px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .social-link-item {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 10px 0;
        border-bottom: 1px solid var(--gray-200);
        transition: var(--transition);
    }

    .social-link-item:last-child {
        border-bottom: none;
    }

    .social-link-item:hover {
        padding-left: 6px;
    }

    .social-link-item .social-icon {
        width: 36px;
        height: 36px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        color: #fff;
        flex-shrink: 0;
    }

    .social-icon.github { background: #333; }
    .social-icon.twitter { background: #1da1f2; }
    .social-icon.linkedin { background: #0077b5; }
    .social-icon.globe { background: var(--accent); }

    .social-link-item .social-text {
        font-size: 13px;
        color: var(--gray-700);
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    /* ===== RIGHT FORM CARD ===== */
    .profile-form-card {
        background: #fff;
        border-radius: var(--radius);
        box-shadow: var(--shadow-md);
        border: none;
        overflow: hidden;
        transition: var(--transition);
        animation: fadeInUp 0.6s ease;
    }

    .profile-form-card:hover {
        box-shadow: var(--shadow-lg);
    }

    .form-card-header {
        padding: 24px 28px 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .form-card-header h5 {
        font-size: 18px;
        font-weight: 700;
        color: var(--dark);
        display: flex;
        align-items: center;
        gap: 10px;
        margin: 0;
    }

    .form-card-header h5 .header-icon {
        width: 36px;
        height: 36px;
        background: var(--primary-light);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary);
        font-size: 18px;
    }

    .form-card-header .edit-badge {
        font-size: 12px;
        background: #e8f5e9;
        color: #2e7d32;
        padding: 4px 12px;
        border-radius: 20px;
        font-weight: 600;
    }

    .profile-form-body {
        padding: 24px 28px 28px;
    }

    /* ===== FORM GROUPS ===== */
    .form-group-row {
        display: flex;
        align-items: flex-start;
        gap: 16px;
        padding: 14px 18px;
        margin-bottom: 8px;
        border-radius: var(--radius-sm);
        transition: var(--transition);
        position: relative;
    }

    .form-group-row:hover {
        background: var(--gray-100);
    }

    .form-group-row .field-icon-box {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        font-size: 17px;
        margin-top: 2px;
    }

    .field-icon-box.blue { background: #e3f2fd; color: #1976d2; }
    .field-icon-box.purple { background: #f3e5f5; color: #7b1fa2; }
    .field-icon-box.green { background: #e8f5e9; color: #388e3c; }
    .field-icon-box.orange { background: #fff3e0; color: #e65100; }
    .field-icon-box.red { background: #fce4ec; color: #c62828; }
    .field-icon-box.teal { background: #e0f2f1; color: #00695c; }
    .field-icon-box.indigo { background: #e8eaf6; color: #283593; }
    .field-icon-box.pink { background: #fce4ec; color: #ad1457; }

    .form-group-row .field-content {
        flex: 1;
        min-width: 0;
    }

    .form-group-row .field-label {
        font-size: 12px;
        font-weight: 700;
        color: var(--gray-700);
        text-transform: uppercase;
        letter-spacing: 0.6px;
        margin-bottom: 6px;
        display: block;
    }

    .form-group-row .form-control,
    .form-group-row textarea.form-control {
        border: 2px solid var(--gray-200);
        border-radius: var(--radius-sm);
        padding: 10px 14px;
        font-size: 14px;
        color: var(--dark);
        transition: var(--transition);
        background: #fff;
    }

    .form-group-row .form-control:focus,
    .form-group-row textarea.form-control:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 4px rgba(78, 115, 223, 0.1);
        outline: none;
    }

    .form-group-row textarea.form-control {
        resize: vertical;
        min-height: 80px;
    }

    /* ===== DIVIDER ===== */
    .form-divider {
        border: none;
        height: 1px;
        background: var(--gray-200);
        margin: 8px 18px;
    }

    /* ===== ACTION BUTTONS ===== */
    .form-actions {
        display: flex;
        gap: 12px;
        padding: 20px 18px 0;
        margin-top: 8px;
        border-top: 2px solid var(--gray-100);
    }

    .btn-save-profile {
        padding: 12px 32px;
        border-radius: 12px;
        font-size: 14px;
        font-weight: 700;
        background: var(--accent-gradient);
        color: #fff;
        border: none;
        transition: var(--transition);
        display: flex;
        align-items: center;
        gap: 8px;
        box-shadow: 0 4px 15px rgba(78, 115, 223, 0.3);
    }

    .btn-save-profile:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(78, 115, 223, 0.4);
        color: #fff;
    }

    .btn-save-profile:active {
        transform: translateY(0);
    }

    .btn-change-password {
        padding: 12px 28px;
        border-radius: 12px;
        font-size: 14px;
        font-weight: 700;
        background: #fff;
        color: var(--danger);
        border: 2px solid #fce4ec !important;
        transition: var(--transition);
        display: flex;
        align-items: center;
        gap: 8px;
        text-decoration: none;
    }

    .btn-change-password:hover {
        background: #fce4ec;
        border-color: var(--danger) !important;
        transform: translateY(-2px);
        color: var(--danger);
    }

    /* ===== SECURITY CARD ===== */
    .security-info-card {
        background: #fff;
        border-radius: var(--radius);
        box-shadow: var(--shadow-sm);
        border: none;
        margin-top: 20px;
        overflow: hidden;
        animation: fadeInUp 0.8s ease;
    }

    .security-info-card .security-header {
        padding: 20px 24px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .security-info-card .security-header .sec-icon {
        width: 36px;
        height: 36px;
        background: #e8f5e9;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #388e3c;
        font-size: 18px;
    }

    .security-info-card .security-header h6 {
        font-size: 15px;
        font-weight: 700;
        color: var(--dark);
        margin: 0;
    }

    .security-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 14px 24px;
        border-top: 1px solid var(--gray-200);
        transition: var(--transition);
    }

    .security-item:hover {
        background: var(--gray-100);
    }

    .security-item .sec-left {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .security-item .sec-left i {
        font-size: 18px;
        color: var(--gray-700);
    }

    .security-item .sec-left .sec-title {
        font-size: 14px;
        font-weight: 600;
        color: var(--dark);
    }

    .security-item .sec-left .sec-desc {
        font-size: 12px;
        color: var(--gray-500);
    }

    .status-badge {
        font-size: 12px;
        padding: 4px 14px;
        border-radius: 20px;
        font-weight: 600;
    }

    .status-badge.active {
        background: #e8f5e9;
        color: #2e7d32;
    }

    .status-badge.inactive {
        background: #fff3e0;
        color: #e65100;
    }

    /* ===== ANIMATIONS ===== */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-15px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 991px) {
        .profile-page-wrapper { padding: 16px; }

        .form-group-row {
            flex-direction: column;
            gap: 8px;
        }

        .form-group-row .field-icon-box {
            display: none;
        }

        .form-actions {
            flex-direction: column;
        }

        .btn-save-profile,
        .btn-change-password {
            justify-content: center;
            width: 100%;
        }

        .profile-stats .stat-item {
            padding: 12px 6px;
        }

        .profile-stats .stat-value {
            font-size: 17px;
        }
    }

    /* ===== TOAST NOTIFICATION ===== */
    .profile-toast {
        position: fixed;
        top: 24px;
        right: 24px;
        z-index: 9999;
        min-width: 320px;
        padding: 16px 20px;
        border-radius: var(--radius-sm);
        color: #fff;
        font-weight: 600;
        font-size: 14px;
        display: flex;
        align-items: center;
        gap: 10px;
        transform: translateX(120%);
        transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 8px 30px rgba(0,0,0,0.15);
    }

    .profile-toast.show {
        transform: translateX(0);
    }

    .profile-toast.success { background: linear-gradient(135deg, #1cc88a, #17a673); }
    .profile-toast.error { background: linear-gradient(135deg, #e74a3b, #c0392b); }

    /* ===== SKELETON LOADING ===== */
    .skeleton {
        background: linear-gradient(90deg, var(--gray-200) 25%, var(--gray-100) 50%, var(--gray-200) 75%);
        background-size: 200% 100%;
        animation: shimmer 1.5s infinite;
        border-radius: 8px;
    }

    @keyframes shimmer {
        0% { background-position: -200% 0; }
        100% { background-position: 200% 0; }
    }
</style>
<div class="page-wrapper">
  <div class="page-content">
<div class="profile-page-wrapper">

    <!-- ================= BREADCRUMB ================= -->
    <div class="profile-breadcrumb">
        <div class="breadcrumb-icon">
            <i class="bx bx-user-circle"></i>
        </div>
        <div>
            <h2>User Profile</h2>
            <p class="breadcrumb-sub">Manage your personal information and account settings</p>
        </div>
    </div>

    <!-- ================= PROFILE FORM ================= -->
    <form action="<?= site_url('emp/profile/update'); ?>" method="post" enctype="multipart/form-data" id="profileForm">

        <div class="container-fluid px-0">
            <div class="row g-4">

                <!-- ===== LEFT COLUMN ===== -->
                <div class="col-lg-4">

                    <!-- PROFILE HERO CARD -->
                    <div class="profile-hero-card">
                        <div class="profile-cover">
                            <div class="cover-pattern"></div>
                        </div>

                        <div class="text-center px-3 pb-2">
                            <div class="profile-avatar-wrapper">
                                <div class="avatar-ring">
                                    <img id="imagePreview"
                                        src="<?= !empty($user->photo)
                                                    ? base_url('uploads/profile/' . $user->photo)
                                                    : base_url('assets/images/avatars/avatar-2.png'); ?>"
                                        alt="Profile Photo">
                                </div>

                                <label for="imageUpload" class="camera-btn" title="Change photo">
                                    <i class="bx bx-camera"></i>
                                </label>

                                <input type="file"
                                    name="photo"
                                    id="imageUpload"
                                    hidden
                                    accept="image/*">
                            </div>

                            <h4 class="profile-name"><?= htmlspecialchars($user->name); ?></h4>

                            <div class="profile-role">
                                <i class="bx bx-shield-quarter"></i>
                                <?= htmlspecialchars($user->role ?? 'User'); ?>
                            </div>

                            <?php if (!empty($user->address)): ?>
                                <p class="profile-location">
                                    <i class="bx bx-map"></i>
                                    <?= htmlspecialchars($user->address); ?>
                                </p>
                            <?php endif; ?>
                        </div>

                        <!-- STATS -->
                        <div class="profile-stats">
                            <div class="stat-item">
                                <div class="stat-value">24</div>
                                <div class="stat-label">Projects</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value">156</div>
                                <div class="stat-label">Tasks</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value">98%</div>
                                <div class="stat-label">Rating</div>
                            </div>
                        </div>

                        <!-- ACTION BUTTONS -->
                        <div class="quick-actions">
                            <button type="button" class="btn btn-profile-action btn-profile-follow">
                                <i class="bx bx-user-plus"></i> Follow
                            </button>
                            <button type="button" class="btn btn-profile-action btn-profile-message">
                                <i class="bx bx-message-dots"></i> Message
                            </button>
                        </div>
                    </div>

                    <!-- PROFILE COMPLETION -->
                    <div class="profile-completion-card">
                        <h6>
                            <i class="bx bx-bar-chart-alt-2"></i>
                            Profile Completion
                        </h6>
                        <div class="completion-bar">
                            <div class="bar-fill" id="completionBar" style="width: 0%"></div>
                        </div>
                        <div class="completion-text">
                            <span id="completionPercent">0%</span>
                            <small>Complete your profile for better visibility</small>
                        </div>
                    </div>

                    <!-- SOCIAL LINKS -->
                    <div class="social-links-card">
                        <h6>
                            <i class="bx bx-link-alt"></i>
                            Connected Accounts
                        </h6>

                        <div class="social-link-item">
                            <div class="social-icon globe">
                                <i class="bx bx-globe"></i>
                            </div>
                            <div class="social-text">www.example.com</div>
                        </div>

                        <div class="social-link-item">
                            <div class="social-icon github">
                                <i class="bx bxl-github"></i>
                            </div>
                            <div class="social-text">github.com/username</div>
                        </div>

                        <div class="social-link-item">
                            <div class="social-icon twitter">
                                <i class="bx bxl-twitter"></i>
                            </div>
                            <div class="social-text">@username</div>
                        </div>

                        <div class="social-link-item">
                            <div class="social-icon linkedin">
                                <i class="bx bxl-linkedin"></i>
                            </div>
                            <div class="social-text">linkedin.com/in/username</div>
                        </div>
                    </div>

                </div>

                <!-- ===== RIGHT COLUMN ===== -->
                <div class="col-lg-8">

                    <!-- FORM CARD -->
                    <div class="profile-form-card">
                        <div class="form-card-header">
                            <h5>
                                <span class="header-icon">
                                    <i class="bx bx-edit-alt"></i>
                                </span>
                                Personal Information
                            </h5>
                            <span class="edit-badge">
                                <i class="bx bx-check-circle"></i> Editable
                            </span>
                        </div>

                        <div class="profile-form-body">

                            <!-- FULL NAME -->
                            <div class="form-group-row">
                                <div class="field-icon-box blue">
                                    <i class="bx bx-user"></i>
                                </div>
                                <div class="field-content">
                                    <label class="field-label">Full Name</label>
                                    <input type="text"
                                        name="name"
                                        class="form-control"
                                        value="<?= htmlspecialchars($user->name); ?>"
                                        placeholder="Enter your full name"
                                        required>
                                </div>
                            </div>

                            <!-- EMAIL -->
                            <div class="form-group-row">
                                <div class="field-icon-box purple">
                                    <i class="bx bx-envelope"></i>
                                </div>
                                <div class="field-content">
                                    <label class="field-label">Email Address</label>
                                    <input type="email"
                                        name="email"
                                        class="form-control"
                                        value="<?= htmlspecialchars($user->email); ?>"
                                        placeholder="name@example.com"
                                        required>
                                </div>
                            </div>

                            <!-- PHONE -->
                            <div class="form-group-row">
                                <div class="field-icon-box green">
                                    <i class="bx bx-phone"></i>
                                </div>
                                <div class="field-content">
                                    <label class="field-label">Phone Number</label>
                                    <input type="text"
                                        name="phone"
                                        class="form-control"
                                        value="<?= htmlspecialchars($user->phone ?? ''); ?>"
                                        placeholder="+91 XXXXX XXXXX">
                                </div>
                            </div>

                            <!-- ADDRESS -->
                            <div class="form-group-row">
                                <div class="field-icon-box orange">
                                    <i class="bx bx-map"></i>
                                </div>
                                <div class="field-content">
                                    <label class="field-label">Address</label>
                                    <input type="text"
                                        name="address"
                                        class="form-control"
                                        value="<?= htmlspecialchars($user->address ?? ''); ?>"
                                        placeholder="Enter your address">
                                </div>
                            </div>

                            <hr class="form-divider">

                            <!-- DESIGNATION -->
                            <div class="form-group-row">
                                <div class="field-icon-box teal">
                                    <i class="bx bx-briefcase"></i>
                                </div>
                                <div class="field-content">
                                    <label class="field-label">Designation</label>
                                    <input type="text"
                                        name="designation"
                                        class="form-control"
                                        value="<?= htmlspecialchars($user->designation ?? ''); ?>"
                                        placeholder="e.g. Senior Developer">
                                </div>
                            </div>

                            <!-- SKILLS -->
                            <div class="form-group-row">
                                <div class="field-icon-box indigo">
                                    <i class="bx bx-code-alt"></i>
                                </div>
                                <div class="field-content">
                                    <label class="field-label">Skills</label>
                                    <textarea name="skills"
                                        class="form-control"
                                        placeholder="e.g. PHP, JavaScript, MySQL..."><?= htmlspecialchars($user->skills ?? ''); ?></textarea>
                                </div>
                            </div>

                            <hr class="form-divider">

                            <!-- AADHAR CARD -->
                            <div class="form-group-row">
                                <div class="field-icon-box red">
                                    <i class="bx bx-id-card"></i>
                                </div>
                                <div class="field-content">
                                    <label class="field-label">Aadhar Card</label>
                                    <input type="text"
                                        name="aadhar_card"
                                        class="form-control"
                                        value="<?= htmlspecialchars($user->aadhar_card ?? ''); ?>"
                                        placeholder="XXXX XXXX XXXX">
                                </div>
                            </div>

                            <!-- DATE OF BIRTH -->
                            <div class="form-group-row">
                                <div class="field-icon-box pink">
                                    <i class="bx bx-cake"></i>
                                </div>
                                <div class="field-content">
                                    <label class="field-label">Date of Birth</label>
                                    <input type="date"
                                        name="dob"
                                        class="form-control"
                                        value="<?= htmlspecialchars($user->dob ?? ''); ?>">
                                </div>
                            </div>

                            <!-- ACTION BUTTONS -->
                            <div class="form-actions">
                                <button type="submit" class="btn btn-save-profile" id="saveBtn">
                                    <i class="bx bx-save"></i>
                                    Save Changes
                                </button>

                                <a href="<?= base_url('emp/change-password'); ?>"
                                    class="btn btn-change-password">
                                    <i class="bx bx-lock-alt"></i>
                                    Change Password
                                </a>
                            </div>

                        </div>
                    </div>

                    <!-- SECURITY & LOGIN INFO -->
                    <div class="security-info-card">
                        <div class="security-header">
                            <div class="sec-icon">
                                <i class="bx bx-shield-alt-2"></i>
                            </div>
                            <h6>Security & Login</h6>
                        </div>

                        <div class="security-item">
                            <div class="sec-left">
                                <i class="bx bx-lock-alt"></i>
                                <div>
                                    <div class="sec-title">Password</div>
                                    <div class="sec-desc">Last changed 30 days ago</div>
                                </div>
                            </div>
                            <span class="status-badge active">Strong</span>
                        </div>

                        <div class="security-item">
                            <div class="sec-left">
                                <i class="bx bx-shield"></i>
                                <div>
                                    <div class="sec-title">Two-Factor Auth</div>
                                    <div class="sec-desc">Add extra security to your account</div>
                                </div>
                            </div>
                            <span class="status-badge inactive">Not Enabled</span>
                        </div>

                        <div class="security-item">
                            <div class="sec-left">
                                <i class="bx bx-log-in-circle"></i>
                                <div>
                                    <div class="sec-title">Last Login</div>
                                    <div class="sec-desc">Today at 09:42 AM • Chrome on Windows</div>
                                </div>
                            </div>
                            <span class="status-badge active">Active</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </form>

    <!-- TOAST NOTIFICATION -->
    <div class="profile-toast" id="profileToast">
        <i class="bx bx-check-circle" style="font-size:20px"></i>
        <span id="toastMessage">Profile updated successfully!</span>
    </div>

</div>
  </div>
</div>
<!-- ================= SCRIPTS ================= -->
<script>
    document.addEventListener('DOMContentLoaded', function () {

        // ===== IMAGE PREVIEW =====
        const imageUpload = document.getElementById('imageUpload');
        const imagePreview = document.getElementById('imagePreview');

        imageUpload.addEventListener('change', function (e) {
            const file = e.target.files[0];
            if (!file) return;

            if (file.size > 2 * 1024 * 1024) {
                showToast('Image must be less than 2 MB', 'error');
                e.target.value = '';
                return;
            }

            const validTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
            if (!validTypes.includes(file.type)) {
                showToast('Please upload a valid image file', 'error');
                e.target.value = '';
                return;
            }

            imagePreview.style.opacity = '0.5';
            setTimeout(() => {
                imagePreview.src = URL.createObjectURL(file);
                imagePreview.style.opacity = '1';
            }, 300);
        });

        // ===== PROFILE COMPLETION BAR =====
        function calculateCompletion() {
            const fields = [
                'input[name="name"]',
                'input[name="email"]',
                'input[name="phone"]',
                'input[name="address"]',
                'input[name="designation"]',
                'textarea[name="skills"]',
                'input[name="aadhar_card"]',
                'input[name="dob"]'
            ];

            let filled = 0;
            fields.forEach(sel => {
                const el = document.querySelector(sel);
                if (el && el.value.trim() !== '') filled++;
            });

            // photo counts too
            const photoSrc = imagePreview.src;
            if (!photoSrc.includes('avatar-2.png')) filled++;

            const total = fields.length + 1; // +1 for photo
            const percent = Math.round((filled / total) * 100);

            document.getElementById('completionBar').style.width = percent + '%';
            document.getElementById('completionPercent').textContent = percent + '%';
        }

        calculateCompletion();

        // Recalculate when inputs change
        document.querySelectorAll('#profileForm input, #profileForm textarea')
            .forEach(el => {
                el.addEventListener('input', calculateCompletion);
            });

        imageUpload.addEventListener('change', () => {
            setTimeout(calculateCompletion, 500);
        });

        // ===== TOAST =====
        function showToast(message, type = 'success') {
            const toast = document.getElementById('profileToast');
            const toastMsg = document.getElementById('toastMessage');
            const icon = toast.querySelector('i');

            toastMsg.textContent = message;
            toast.className = 'profile-toast ' + type;
            icon.className = type === 'success'
                ? 'bx bx-check-circle'
                : 'bx bx-error-circle';

            toast.classList.add('show');
            setTimeout(() => toast.classList.remove('show'), 3500);
        }

        // ===== SAVE BUTTON FEEDBACK =====
        const saveBtn = document.getElementById('saveBtn');
        const form = document.getElementById('profileForm');

        form.addEventListener('submit', function () {
            saveBtn.innerHTML = '<i class="bx bx-loader-alt bx-spin"></i> Saving...';
            saveBtn.disabled = true;
        });

        // ===== ANIMATE ELEMENTS ON SCROLL =====
        const observer = new IntersectionObserver(
            entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            },
            { threshold: 0.1 }
        );

        document.querySelectorAll('.form-group-row').forEach((el, i) => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(15px)';
            el.style.transition = `all 0.4s ease ${i * 0.05}s`;
            observer.observe(el);
        });
    });
</script>