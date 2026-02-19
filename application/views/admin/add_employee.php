<!-- Custom Styles -->
<style>
    /* Page Background */
    .page-content {
        background: linear-gradient(135deg, #f5f7fa 0%, #e4e9f2 100%);
        min-height: 100vh;
    }

    /* Breadcrumb Area */
    .breadcrumb-area {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 16px;
        padding: 24px 32px;
        margin-bottom: 30px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(102, 126, 234, 0.3);
    }

    .breadcrumb-area::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -20%;
        width: 300px;
        height: 300px;
        background: rgba(255, 255, 255, 0.08);
        border-radius: 50%;
    }

    .breadcrumb-area::after {
        content: '';
        position: absolute;
        bottom: -60%;
        right: 10%;
        width: 200px;
        height: 200px;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 50%;
    }

    .breadcrumb-area .breadcrumb-title {
        color: #fff;
        font-size: 26px;
        font-weight: 700;
        margin-bottom: 4px;
    }

    .breadcrumb-area .breadcrumb-subtitle {
        color: rgba(255, 255, 255, 0.8);
        font-size: 14px;
        margin: 0;
    }

    .breadcrumb-area .breadcrumb-icon {
        width: 60px;
        height: 60px;
        background: rgba(255, 255, 255, 0.15);
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        color: #fff;
        backdrop-filter: blur(10px);
        margin-right: 20px;
        flex-shrink: 0;
    }

    .breadcrumb-nav .breadcrumb {
        background: transparent;
        margin: 0;
        padding: 0;
    }

    .breadcrumb-nav .breadcrumb-item a {
        color: rgba(255, 255, 255, 0.7);
        text-decoration: none;
        transition: color 0.3s;
    }

    .breadcrumb-nav .breadcrumb-item a:hover {
        color: #fff;
    }

    .breadcrumb-nav .breadcrumb-item.active {
        color: #fff;
    }

    .breadcrumb-nav .breadcrumb-item + .breadcrumb-item::before {
        color: rgba(255, 255, 255, 0.5);
        content: "›";
        font-size: 18px;
    }

    /* Alert Styles */
    .custom-alert {
        border: none;
        border-radius: 12px;
        padding: 16px 24px;
        font-size: 14px;
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 24px;
        animation: slideDown 0.4s ease;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    }

    .custom-alert.alert-danger {
        background: linear-gradient(135deg, #fff5f5, #ffe0e0);
        color: #c53030;
        border-left: 4px solid #e53e3e;
    }

    .custom-alert.alert-success {
        background: linear-gradient(135deg, #f0fff4, #d4f5e0);
        color: #276749;
        border-left: 4px solid #38a169;
    }

    .custom-alert .alert-icon {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        flex-shrink: 0;
    }

    .alert-danger .alert-icon {
        background: rgba(229, 62, 62, 0.15);
    }

    .alert-success .alert-icon {
        background: rgba(56, 161, 105, 0.15);
    }

    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Main Card */
    .employee-card {
        border: none;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 50px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background: #fff;
    }

    .employee-card:hover {
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.12);
    }

    .employee-card .card-header {
        background: #fff;
        border-bottom: 1px solid #f0f0f0;
        padding: 28px 36px !important;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .card-header-left {
        display: flex;
        align-items: center;
        gap: 14px;
    }

    .card-header-left .header-icon {
        width: 44px;
        height: 44px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 20px;
    }

    .card-header-left h5 {
        margin: 0;
        font-weight: 700;
        font-size: 18px;
        color: #1a202c;
    }

    .card-header-left p {
        margin: 0;
        font-size: 13px;
        color: #a0aec0;
    }

    .required-note {
        font-size: 12px;
        color: #a0aec0;
        background: #f7fafc;
        padding: 6px 14px;
        border-radius: 20px;
    }

    .required-note span {
        color: #e53e3e;
        font-weight: 700;
    }

    .employee-card .card-body {
        padding: 36px !important;
    }

    /* Section Dividers */
    .form-section {
        margin-bottom: 32px;
    }

    .form-section-title {
        font-size: 14px;
        font-weight: 700;
        color: #667eea;
        text-transform: uppercase;
        letter-spacing: 1.2px;
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 2px solid #f0f0f0;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .form-section-title i {
        font-size: 18px;
    }

    /* Input Groups with Icons */
    .input-icon-group {
        position: relative;
    }

    .input-icon-group .input-icon {
        position: absolute;
        left: 14px;
        top: 50%;
        transform: translateY(-50%);
        color: #a0aec0;
        font-size: 18px;
        z-index: 2;
        transition: color 0.3s;
    }

    .input-icon-group .form-control,
    .input-icon-group .form-select {
        padding-left: 44px;
    }

    .input-icon-group textarea.form-control {
        padding-left: 44px;
    }

    .input-icon-group textarea.form-control + .input-icon,
    .input-icon-group textarea ~ .input-icon-textarea {
        top: 18px;
        transform: none;
    }

    /* Form Controls */
    .form-control,
    .form-select {
        border: 2px solid #e2e8f0;
        border-radius: 12px;
        padding: 12px 16px;
        font-size: 14px;
        color: #2d3748;
        background-color: #f8fafc;
        transition: all 0.3s ease;
        height: auto;
    }

    .form-control:hover,
    .form-select:hover {
        border-color: #cbd5e0;
        background-color: #fff;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: #667eea;
        background-color: #fff;
        box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
    }

    .form-control::placeholder {
        color: #a0aec0;
        font-size: 13px;
    }

    /* Labels */
    .col-form-label {
        font-weight: 600;
        color: #4a5568;
        font-size: 14px;
        display: flex;
        align-items: center;
        gap: 4px;
    }

    .col-form-label .required {
        color: #e53e3e;
        font-size: 16px;
    }

    /* Password Toggle */
    .password-toggle {
        position: absolute;
        right: 14px;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        color: #a0aec0;
        cursor: pointer;
        font-size: 18px;
        z-index: 5;
        padding: 4px;
        transition: color 0.3s;
    }

    .password-toggle:hover {
        color: #667eea;
    }

    /* Password Strength */
    .password-strength {
        margin-top: 8px;
    }

    .strength-bar {
        height: 4px;
        border-radius: 2px;
        background: #e2e8f0;
        overflow: hidden;
        margin-bottom: 4px;
    }

    .strength-bar-fill {
        height: 100%;
        border-radius: 2px;
        transition: width 0.4s ease, background 0.4s ease;
        width: 0%;
    }

    .strength-text {
        font-size: 11px;
        font-weight: 600;
    }

    /* Invalid Feedback */
    .invalid-feedback {
        font-size: 12px;
        margin-top: 6px;
        display: flex;
        align-items: center;
        gap: 4px;
    }

    .invalid-feedback::before {
        content: '⚠';
        font-size: 12px;
    }

    /* Buttons */
    .btn-submit {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
        padding: 14px 40px;
        border-radius: 12px;
        font-weight: 600;
        font-size: 15px;
        color: #fff;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: all 0.3s ease;
        box-shadow: 0 6px 20px rgba(102, 126, 234, 0.35);
        position: relative;
        overflow: hidden;
    }

    .btn-submit::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.5s;
    }

    .btn-submit:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(102, 126, 234, 0.45);
        color: #fff;
    }

    .btn-submit:hover::before {
        left: 100%;
    }

    .btn-submit:active {
        transform: translateY(0);
    }

    .btn-reset {
        background: #f7fafc;
        border: 2px solid #e2e8f0;
        padding: 14px 32px;
        border-radius: 12px;
        font-weight: 600;
        font-size: 15px;
        color: #718096;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: all 0.3s ease;
    }

    .btn-reset:hover {
        background: #edf2f7;
        border-color: #cbd5e0;
        color: #4a5568;
        transform: translateY(-1px);
    }

    /* Avatar Upload Placeholder */
    .avatar-upload {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 12px;
        padding: 24px;
        border: 2px dashed #e2e8f0;
        border-radius: 16px;
        background: #f8fafc;
        cursor: pointer;
        transition: all 0.3s ease;
        text-align: center;
    }

    .avatar-upload:hover {
        border-color: #667eea;
        background: rgba(102, 126, 234, 0.04);
    }

    .avatar-placeholder {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 32px;
        box-shadow: 0 6px 20px rgba(102, 126, 234, 0.3);
    }

    .avatar-upload p {
        margin: 0;
        font-size: 13px;
        color: #a0aec0;
    }

    .avatar-upload p strong {
        color: #667eea;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .breadcrumb-area {
            padding: 20px;
        }

        .employee-card .card-body {
            padding: 20px !important;
        }

        .employee-card .card-header {
            padding: 20px !important;
            flex-direction: column;
            align-items: flex-start;
            gap: 12px;
        }

        .btn-submit,
        .btn-reset {
            width: 100%;
            justify-content: center;
        }
    }

    /* Floating Animation */
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-6px); }
    }

    .floating {
        animation: float 3s ease-in-out infinite;
    }

    /* Focus within row highlight */
    .form-row-highlight {
        padding: 8px 12px;
        border-radius: 12px;
        transition: background 0.3s ease;
        margin-left: -12px;
        margin-right: -12px;
    }

    .form-row-highlight:focus-within {
        background: rgba(102, 126, 234, 0.03);
    }

    .form-row-highlight:focus-within .input-icon {
        color: #667eea;
    }

    /* Character counter */
    .char-counter {
        font-size: 11px;
        color: #a0aec0;
        text-align: right;
        margin-top: 4px;
    }

    /* Steps indicator */
    .form-steps {
        display: flex;
        justify-content: center;
        gap: 0;
        margin-bottom: 36px;
        position: relative;
    }

    .form-step {
        display: flex;
        flex-direction: column;
        align-items: center;
        position: relative;
        flex: 1;
    }

    .form-step:not(:last-child)::after {
        content: '';
        position: absolute;
        top: 18px;
        left: 55%;
        width: 90%;
        height: 3px;
        background: #e2e8f0;
        z-index: 0;
    }

    .form-step.completed:not(:last-child)::after {
        background: linear-gradient(135deg, #667eea, #764ba2);
    }

    .step-circle {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: #e2e8f0;
        color: #a0aec0;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 14px;
        position: relative;
        z-index: 1;
        transition: all 0.3s ease;
    }

    .form-step.active .step-circle {
        background: linear-gradient(135deg, #667eea, #764ba2);
        color: #fff;
        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
    }

    .form-step.completed .step-circle {
        background: linear-gradient(135deg, #48bb78, #38a169);
        color: #fff;
        box-shadow: 0 4px 15px rgba(72, 187, 120, 0.4);
    }

    .step-label {
        font-size: 11px;
        font-weight: 600;
        color: #a0aec0;
        margin-top: 8px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .form-step.active .step-label {
        color: #667eea;
    }

    .form-step.completed .step-label {
        color: #48bb78;
    }

    /* Tooltip styles */
    .field-hint {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background: #e2e8f0;
        color: #a0aec0;
        font-size: 11px;
        cursor: help;
        margin-left: 4px;
        transition: all 0.3s;
    }

    .field-hint:hover {
        background: #667eea;
        color: #fff;
    }
</style>

<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">

        <!-- Enhanced Breadcrumb -->
        <div class="breadcrumb-area d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <div class="breadcrumb-icon floating">
                    <i class="bx bx-user-plus"></i>
                </div>
                <div>
                    <div class="breadcrumb-title">Add New Employee</div>
                    <p class="breadcrumb-subtitle">Fill in the details below to register a new team member</p>
                </div>
            </div>
            <div class="breadcrumb-nav d-none d-md-block">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>"><i class="bx bx-home-alt"></i> Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/employee') ?>">Employees</a></li>
                        <li class="breadcrumb-item active">Add New</li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- Flash Messages -->
        <?php if ($this->session->flashdata('error')): ?>
        <div class="custom-alert alert-danger" role="alert">
            <div class="alert-icon"><i class="bx bx-error-circle"></i></div>
            <div>
                <strong>Oops!</strong> <?= $this->session->flashdata('error'); ?>
            </div>
            <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close" style="font-size:12px;"></button>
        </div>
        <?php endif; ?>

        <?php if ($this->session->flashdata('success')): ?>
        <div class="custom-alert alert-success" role="alert">
            <div class="alert-icon"><i class="bx bx-check-circle"></i></div>
            <div>
                <strong>Success!</strong> <?= $this->session->flashdata('success'); ?>
            </div>
            <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close" style="font-size:12px;"></button>
        </div>
        <?php endif; ?>

        <!-- Main Content -->
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <div class="card employee-card">

                    <!-- Card Header -->
                    <div class="card-header px-4 py-3">
                        <div class="card-header-left">
                            <div class="header-icon">
                                <i class="bx bx-id-card"></i>
                            </div>
                            <div>
                                <h5>Employee Registration</h5>
                                <p>Please fill all the required fields</p>
                            </div>
                        </div>
                        <div class="required-note">
                            <span>*</span> Required fields
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body p-4">

                        <!-- Steps Indicator -->
                        <div class="form-steps">
                            <div class="form-step active" id="step1">
                                <div class="step-circle">1</div>
                                <span class="step-label">Personal</span>
                            </div>
                            <div class="form-step" id="step2">
                                <div class="step-circle">2</div>
                                <span class="step-label">Account</span>
                            </div>
                            <div class="form-step" id="step3">
                                <div class="step-circle">3</div>
                                <span class="step-label">Location</span>
                            </div>
                        </div>

                        <form method="post"
                              action="<?= base_url('admin/employee/add') ?>"
                              class="needs-validation"
                              id="employeeForm"
                              novalidate>

                            <!-- Section 1: Personal Info -->
                            <div class="form-section">
                                <div class="form-section-title">
                                    <i class="bx bx-user"></i> Personal Information
                                </div>

                                <!-- Avatar Upload -->
                                <div class="row mb-4">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <label class="avatar-upload" for="avatarInput">
                                            <div class="avatar-placeholder">
                                                <i class="bx bx-camera" id="avatarIcon"></i>
                                            </div>
                                            <p><strong>Click to upload</strong> profile photo<br>
                                                <small>PNG, JPG up to 2MB</small>
                                            </p>
                                            <input type="file" id="avatarInput" name="avatar" accept="image/*" hidden>
                                        </label>
                                    </div>
                                </div>

                                <!-- Full Name -->
                                <div class="row mb-3 form-row-highlight">
                                    <label class="col-sm-3 col-form-label">
                                        Full Name <span class="required">*</span>
                                        <span class="field-hint" data-bs-toggle="tooltip" title="Enter employee's legal full name">?</span>
                                    </label>
                                    <div class="col-sm-9">
                                        <div class="input-icon-group">
                                            <i class="bx bx-user input-icon"></i>
                                            <input type="text"
                                                   class="form-control"
                                                   name="yourname"
                                                   placeholder="e.g. John Doe"
                                                   required
                                                   minlength="2"
                                                   maxlength="100"
                                                   autocomplete="name">
                                        </div>
                                        <div class="invalid-feedback">
                                            Please enter the employee's full name
                                        </div>
                                    </div>
                                </div>

                                <!-- Phone -->
                                <div class="row mb-3 form-row-highlight">
                                    <label class="col-sm-3 col-form-label">
                                        Phone Number <span class="required">*</span>
                                    </label>
                                    <div class="col-sm-9">
                                        <div class="input-icon-group">
                                            <i class="bx bx-phone input-icon"></i>
                                            <input type="tel"
                                                   class="form-control"
                                                   name="phone"
                                                   placeholder="e.g. +91 98765 43210"
                                                   required
                                                   pattern="[0-9+\-\s]{7,15}"
                                                   autocomplete="tel">
                                        </div>
                                        <div class="invalid-feedback">
                                            Please enter a valid phone number
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 2: Account Details -->
                            <div class="form-section">
                                <div class="form-section-title">
                                    <i class="bx bx-lock-alt"></i> Account Details
                                </div>

                                <!-- Username -->
                                <div class="row mb-3 form-row-highlight">
                                    <label class="col-sm-3 col-form-label">
                                        Username <span class="required">*</span>
                                    </label>
                                    <div class="col-sm-9">
                                        <div class="input-icon-group">
                                            <i class="bx bx-at input-icon"></i>
                                            <input type="text"
                                                   class="form-control"
                                                   name="username"
                                                   placeholder="e.g. johndoe"
                                                   required
                                                   minlength="3"
                                                   maxlength="30"
                                                   pattern="[a-zA-Z0-9_]+"
                                                   autocomplete="username">
                                        </div>
                                        <div class="invalid-feedback">
                                            Username must be 3+ characters (letters, numbers, underscores only)
                                        </div>
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="row mb-3 form-row-highlight">
                                    <label class="col-sm-3 col-form-label">
                                        Email Address <span class="required">*</span>
                                    </label>
                                    <div class="col-sm-9">
                                        <div class="input-icon-group">
                                            <i class="bx bx-envelope input-icon"></i>
                                            <input type="email"
                                                   class="form-control"
                                                   name="email"
                                                   placeholder="e.g. john@company.com"
                                                   required
                                                   autocomplete="email">
                                        </div>
                                        <div class="invalid-feedback">
                                            Please enter a valid email address
                                        </div>
                                    </div>
                                </div>

                                <!-- Password -->
                                <div class="row mb-3 form-row-highlight">
                                    <label class="col-sm-3 col-form-label">
                                        Password <span class="required">*</span>
                                    </label>
                                    <div class="col-sm-9">
                                        <div class="input-icon-group position-relative">
                                            <i class="bx bx-lock input-icon"></i>
                                            <input type="password"
                                                   class="form-control"
                                                   name="password"
                                                   id="password"
                                                   placeholder="Min. 8 characters"
                                                   required
                                                   minlength="8"
                                                   autocomplete="new-password"
                                                   style="padding-right: 44px;">
                                            <button type="button" class="password-toggle" onclick="togglePassword('password', this)">
                                                <i class="bx bx-hide"></i>
                                            </button>
                                        </div>
                                        <div class="password-strength" id="passwordStrength">
                                            <div class="strength-bar">
                                                <div class="strength-bar-fill" id="strengthBarFill"></div>
                                            </div>
                                            <span class="strength-text" id="strengthText"></span>
                                        </div>
                                        <div class="invalid-feedback">
                                            Password must be at least 8 characters
                                        </div>
                                    </div>
                                </div>

                                <!-- Confirm Password -->
                                <div class="row mb-3 form-row-highlight">
                                    <label class="col-sm-3 col-form-label">
                                        Confirm Password <span class="required">*</span>
                                    </label>
                                    <div class="col-sm-9">
                                        <div class="input-icon-group position-relative">
                                            <i class="bx bx-lock-open input-icon"></i>
                                            <input type="password"
                                                   class="form-control"
                                                   name="confirm_password"
                                                   id="confirmPassword"
                                                   placeholder="Re-enter password"
                                                   required
                                                   autocomplete="new-password"
                                                   style="padding-right: 44px;">
                                            <button type="button" class="password-toggle" onclick="togglePassword('confirmPassword', this)">
                                                <i class="bx bx-hide"></i>
                                            </button>
                                        </div>
                                        <div class="invalid-feedback" id="confirmFeedback">
                                            Please confirm your password
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 3: Location -->
                            <div class="form-section">
                                <div class="form-section-title">
                                    <i class="bx bx-map"></i> Location Details
                                </div>

                                <!-- Country -->
                                <div class="row mb-3 form-row-highlight">
                                    <label class="col-sm-3 col-form-label">
                                        Country <span class="required">*</span>
                                    </label>
                                    <div class="col-sm-9">
                                        <div class="input-icon-group">
                                            <i class="bx bx-globe input-icon"></i>
                                            <select class="form-select" name="country" required>
                                                <option value="">Select a country...</option>
                                                <option value="India">🇮🇳 India</option>
                                                <option value="USA">🇺🇸 United States</option>
                                                <option value="UK">🇬🇧 United Kingdom</option>
                                                <option value="Canada">🇨🇦 Canada</option>
                                                <option value="Australia">🇦🇺 Australia</option>
                                                <option value="Germany">🇩🇪 Germany</option>
                                            </select>
                                        </div>
                                        <div class="invalid-feedback">
                                            Please select a country
                                        </div>
                                    </div>
                                </div>

                                <!-- Address -->
                                <div class="row mb-3 form-row-highlight">
                                    <label class="col-sm-3 col-form-label">
                                        Address <span class="required">*</span>
                                    </label>
                                    <div class="col-sm-9">
                                        <div class="input-icon-group">
                                            <i class="bx bx-map-pin input-icon" style="top:18px; transform:none;"></i>
                                            <textarea class="form-control"
                                                      name="address"
                                                      id="addressField"
                                                      rows="3"
                                                      placeholder="Enter full address..."
                                                      required
                                                      maxlength="250"></textarea>
                                        </div>
                                        <div class="char-counter">
                                            <span id="charCount">0</span> / 250 characters
                                        </div>
                                        <div class="invalid-feedback">
                                            Address is required
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="row mt-4 pt-3" style="border-top: 2px solid #f0f0f0;">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <div class="d-md-flex d-grid align-items-center gap-3">
                                        <button type="submit" name="submit2" class="btn btn-submit">
                                            <i class="bx bx-check-circle"></i> Create Employee
                                        </button>
                                        <button type="reset" class="btn btn-reset" id="resetBtn">
                                            <i class="bx bx-reset"></i> Reset Form
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

                <!-- Help Card -->
                <div class="card employee-card mt-3">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center gap-3">
                            <div style="width:42px; height:42px; border-radius:12px; background:linear-gradient(135deg,#ffecd2,#fcb69f); display:flex; align-items:center; justify-content:center; font-size:20px; flex-shrink:0;">
                                <i class="bx bx-help-circle" style="color:#e17055;"></i>
                            </div>
                            <div>
                                <h6 style="margin:0; font-weight:600; color:#2d3748; font-size:14px;">Need Help?</h6>
                                <p style="margin:0; font-size:13px; color:#a0aec0;">
                                    If you encounter any issues while adding an employee, 
                                    please contact <a href="#" style="color:#667eea; text-decoration:none; font-weight:600;">support@company.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--end row-->

    </div>
</div>
<!--end page wrapper -->

<script>
$(document).ready(function () {
    // Initialize tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (el) {
        return new bootstrap.Tooltip(el);
    });

    // DataTable (if present)
    if ($('#example').length) {
        $('#example').DataTable({
            pageLength: 10,
            lengthMenu: [5, 10, 25, 50, 100],
            paging: true,
            searching: true,
            ordering: true,
            info: true,
            responsive: true
        });
    }
});

// ─── Bootstrap Validation ───
(function () {
    'use strict';
    const forms = document.querySelectorAll('.needs-validation');
    Array.from(forms).forEach(function (form) {
        form.addEventListener('submit', function (event) {
            // Check password match
            const pw = document.getElementById('password');
            const cpw = document.getElementById('confirmPassword');
            if (pw.value !== cpw.value) {
                cpw.setCustomValidity('Passwords do not match');
                document.getElementById('confirmFeedback').textContent = 'Passwords do not match';
            } else {
                cpw.setCustomValidity('');
            }

            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });
})();

// ─── Password Toggle ───
function togglePassword(fieldId, btn) {
    const field = document.getElementById(fieldId);
    const icon = btn.querySelector('i');
    if (field.type === 'password') {
        field.type = 'text';
        icon.classList.replace('bx-hide', 'bx-show');
    } else {
        field.type = 'password';
        icon.classList.replace('bx-show', 'bx-hide');
    }
}

// ─── Password Strength Meter ───
document.getElementById('password').addEventListener('input', function () {
    const val = this.value;
    const bar = document.getElementById('strengthBarFill');
    const text = document.getElementById('strengthText');
    let score = 0;

    if (val.length >= 8)  score++;
    if (val.length >= 12) score++;
    if (/[a-z]/.test(val) && /[A-Z]/.test(val)) score++;
    if (/\d/.test(val))   score++;
    if (/[^a-zA-Z0-9]/.test(val)) score++;

    const levels = [
        { width: '0%',   color: '#e2e8f0', label: '' },
        { width: '20%',  color: '#e53e3e', label: 'Very Weak' },
        { width: '40%',  color: '#ed8936', label: 'Weak' },
        { width: '60%',  color: '#ecc94b', label: 'Fair' },
        { width: '80%',  color: '#48bb78', label: 'Strong' },
        { width: '100%', color: '#38a169', label: 'Very Strong' }
    ];

    const level = levels[score] || levels[0];
    bar.style.width      = level.width;
    bar.style.background = level.color;
    text.textContent      = level.label;
    text.style.color      = level.color;
});

// ─── Character Counter for Address ───
document.getElementById('addressField').addEventListener('input', function () {
    document.getElementById('charCount').textContent = this.value.length;
});

// ─── Step Indicator Updates ───
const formInputs = document.querySelectorAll('#employeeForm input, #employeeForm select, #employeeForm textarea');
formInputs.forEach(function (input) {
    input.addEventListener('input', updateSteps);
    input.addEventListener('change', updateSteps);
});

function updateSteps() {
    const form = document.getElementById('employeeForm');
    const nameVal    = form.querySelector('[name="yourname"]').value.trim();
    const phoneVal   = form.querySelector('[name="phone"]').value.trim();
    const userVal    = form.querySelector('[name="username"]').value.trim();
    const emailVal   = form.querySelector('[name="email"]').value.trim();
    const pwVal      = form.querySelector('[name="password"]').value;
    const cpwVal     = form.querySelector('[name="confirm_password"]').value;
    const countryVal = form.querySelector('[name="country"]').value;
    const addrVal    = form.querySelector('[name="address"]').value.trim();

    const s1 = document.getElementById('step1');
    const s2 = document.getElementById('step2');
    const s3 = document.getElementById('step3');

    // Step 1 — Personal
    const step1Done = nameVal.length >= 2 && phoneVal.length >= 7;
    s1.className = step1Done ? 'form-step completed' : 'form-step active';

    // Step 2 — Account
    const step2Done = userVal.length >= 3 && emailVal.includes('@') && pwVal.length >= 8 && cpwVal === pwVal;
    if (step1Done && step2Done) {
        s2.className = 'form-step completed';
    } else if (step1Done) {
        s2.className = 'form-step active';
    } else {
        s2.className = 'form-step';
    }

    // Step 3 — Location
    const step3Done = countryVal !== '' && addrVal.length > 0;
    if (step1Done && step2Done && step3Done) {
        s3.className = 'form-step completed';
    } else if (step1Done && step2Done) {
        s3.className = 'form-step active';
    } else {
        s3.className = 'form-step';
    }
}

// ─── Reset form also resets steps & strength ───
document.getElementById('resetBtn').addEventListener('click', function () {
    setTimeout(function () {
        document.getElementById('strengthBarFill').style.width = '0%';
        document.getElementById('strengthText').textContent = '';
        document.getElementById('charCount').textContent = '0';
        document.getElementById('step1').className = 'form-step active';
        document.getElementById('step2').className = 'form-step';
        document.getElementById('step3').className = 'form-step';
        document.getElementById('employeeForm').classList.remove('was-validated');
    }, 50);
});

// ─── Avatar preview ───
document.getElementById('avatarInput').addEventListener('change', function (e) {
    const file = e.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (ev) {
            const placeholder = document.querySelector('.avatar-placeholder');
            placeholder.innerHTML = '<img src="' + ev.target.result + '" style="width:80px;height:80px;border-radius:50%;object-fit:cover;">';
        };
        reader.readAsDataURL(file);
    }
});

// ─── Confirm password live check ───
document.getElementById('confirmPassword').addEventListener('input', function () {
    const pw = document.getElementById('password').value;
    if (this.value && this.value !== pw) {
        this.setCustomValidity('Passwords do not match');
        document.getElementById('confirmFeedback').textContent = 'Passwords do not match';
    } else {
        this.setCustomValidity('');
        document.getElementById('confirmFeedback').textContent = 'Please confirm your password';
    }
});

// ─── Auto-dismiss flash alerts ───
setTimeout(function () {
    document.querySelectorAll('.custom-alert').forEach(function (el) {
        el.style.transition = 'opacity 0.5s';
        el.style.opacity = '0';
        setTimeout(function () { el.remove(); }, 500);
    });
}, 5000);
</script>