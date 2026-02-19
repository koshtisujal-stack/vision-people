<div class="page-wrapper">
    <div class="page-content">
        <div class="container-fluid">

            <style>
                .edit-employee-wrapper {
                    max-width: 780px;
                    margin: 0 auto;
                    padding: 10px 0 40px;
                }

                /* === BREADCRUMB === */
                .page-breadcrumb {
                    display: flex;
                    align-items: center;
                    gap: 8px;
                    margin-bottom: 24px;
                    font-size: 0.85rem;
                }

                .page-breadcrumb a {
                    color: #667eea;
                    text-decoration: none;
                    font-weight: 500;
                    transition: color 0.3s ease;
                }

                .page-breadcrumb a:hover {
                    color: #4f5fd6;
                }

                .page-breadcrumb .separator {
                    color: #d1d5db;
                    font-size: 0.75rem;
                }

                .page-breadcrumb .current {
                    color: #6b7280;
                    font-weight: 500;
                }

                /* === HEADER === */
                .page-header-section {
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    margin-bottom: 32px;
                    flex-wrap: wrap;
                    gap: 16px;
                }

                .page-header-left {
                    display: flex;
                    align-items: center;
                    gap: 16px;
                }

                .header-icon-box {
                    width: 52px;
                    height: 52px;
                    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                    border-radius: 14px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    color: #fff;
                    font-size: 1.5rem;
                    box-shadow: 0 8px 24px rgba(102, 126, 234, 0.3);
                    flex-shrink: 0;
                }

                .header-text h4 {
                    font-family: 'Inter', sans-serif;
                    font-size: 1.5rem;
                    font-weight: 700;
                    color: #1a1a2e;
                    margin: 0 0 4px 0;
                    letter-spacing: -0.5px;
                }

                .header-text p {
                    font-size: 0.875rem;
                    color: #6b7280;
                    margin: 0;
                }

                .back-btn {
                    display: inline-flex;
                    align-items: center;
                    gap: 6px;
                    padding: 10px 20px;
                    border: 2px solid #e5e7eb;
                    border-radius: 12px;
                    background: #fff;
                    color: #374151;
                    font-size: 0.875rem;
                    font-weight: 600;
                    text-decoration: none;
                    transition: all 0.3s ease;
                }

                .back-btn:hover {
                    border-color: #667eea;
                    color: #667eea;
                    background: rgba(102, 126, 234, 0.04);
                    transform: translateX(-2px);
                }

                .back-btn i {
                    font-size: 1.1rem;
                    transition: transform 0.3s ease;
                }

                .back-btn:hover i {
                    transform: translateX(-3px);
                }

                /* === FORM CARD === */
                .form-card {
                    background: #fff;
                    border: 1px solid #e5e7eb;
                    border-radius: 20px;
                    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.04), 0 6px 24px rgba(0, 0, 0, 0.04);
                    overflow: hidden;
                    transition: box-shadow 0.3s ease;
                }

                .form-card:hover {
                    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.04), 0 12px 36px rgba(0, 0, 0, 0.08);
                }

                /* Section tabs */
                .form-section-tabs {
                    display: flex;
                    border-bottom: 1px solid #f3f4f6;
                    padding: 0 32px;
                    background: #fafbfc;
                }

                .section-tab {
                    padding: 16px 20px;
                    font-size: 0.85rem;
                    font-weight: 600;
                    color: #9ca3af;
                    border-bottom: 2px solid transparent;
                    cursor: pointer;
                    transition: all 0.3s ease;
                    display: flex;
                    align-items: center;
                    gap: 8px;
                }

                .section-tab.active {
                    color: #667eea;
                    border-bottom-color: #667eea;
                }

                .section-tab i {
                    font-size: 1.1rem;
                }

                .form-card-body {
                    padding: 36px 32px;
                }

                /* === AVATAR SECTION === */
                .avatar-section {
                    display: flex;
                    align-items: center;
                    gap: 20px;
                    margin-bottom: 36px;
                    padding-bottom: 32px;
                    border-bottom: 1px solid #f3f4f6;
                }

                .avatar-circle {
                    width: 72px;
                    height: 72px;
                    border-radius: 50%;
                    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    color: #fff;
                    font-size: 1.6rem;
                    font-weight: 700;
                    flex-shrink: 0;
                    box-shadow: 0 4px 16px rgba(102, 126, 234, 0.3);
                    position: relative;
                }

                .avatar-circle .status-dot {
                    position: absolute;
                    bottom: 2px;
                    right: 2px;
                    width: 16px;
                    height: 16px;
                    border-radius: 50%;
                    background: #10b981;
                    border: 3px solid #fff;
                }

                .avatar-info h5 {
                    font-size: 1.1rem;
                    font-weight: 700;
                    color: #1f2937;
                    margin: 0 0 4px 0;
                }

                .avatar-info p {
                    font-size: 0.82rem;
                    color: #9ca3af;
                    margin: 0;
                }

                .avatar-info .badge-role {
                    display: inline-flex;
                    align-items: center;
                    gap: 4px;
                    padding: 3px 10px;
                    background: rgba(102, 126, 234, 0.1);
                    color: #667eea;
                    border-radius: 20px;
                    font-size: 0.72rem;
                    font-weight: 600;
                    margin-top: 6px;
                }

                /* === SECTION TITLE === */
                .form-section-title {
                    display: flex;
                    align-items: center;
                    gap: 10px;
                    margin-bottom: 24px;
                }

                .form-section-title .dot {
                    width: 8px;
                    height: 8px;
                    border-radius: 50%;
                    background: linear-gradient(135deg, #667eea, #764ba2);
                    flex-shrink: 0;
                }

                .form-section-title h6 {
                    font-size: 0.9rem;
                    font-weight: 700;
                    color: #1f2937;
                    margin: 0;
                    text-transform: uppercase;
                    letter-spacing: 0.5px;
                }

                .form-section-title .line {
                    flex: 1;
                    height: 1px;
                    background: linear-gradient(to right, #e5e7eb, transparent);
                }

                /* === FORM GRID === */
                .form-grid {
                    display: grid;
                    grid-template-columns: 1fr 1fr;
                    gap: 20px 24px;
                    margin-bottom: 32px;
                }

                .form-grid .full-width {
                    grid-column: 1 / -1;
                }

                /* === INPUT GROUPS === */
                .input-group-modern {
                    position: relative;
                }

                .input-group-modern label {
                    display: flex;
                    align-items: center;
                    gap: 6px;
                    font-size: 0.8rem;
                    font-weight: 600;
                    color: #374151;
                    margin-bottom: 8px;
                    text-transform: uppercase;
                    letter-spacing: 0.4px;
                }

                .input-group-modern label .required-star {
                    color: #ef4444;
                    font-size: 0.85rem;
                }

                .input-group-modern label i {
                    color: #9ca3af;
                    font-size: 1rem;
                }

                .input-field-wrapper {
                    position: relative;
                }

                .input-field-wrapper .field-icon {
                    position: absolute;
                    left: 14px;
                    top: 50%;
                    transform: translateY(-50%);
                    color: #9ca3af;
                    font-size: 1.15rem;
                    transition: color 0.3s ease;
                    z-index: 1;
                    pointer-events: none;
                }

                .input-field-wrapper.textarea-wrapper .field-icon {
                    top: 18px;
                    transform: none;
                }

                .input-modern {
                    width: 100%;
                    padding: 12px 14px 12px 44px;
                    font-size: 0.9rem;
                    font-family: 'Inter', sans-serif;
                    font-weight: 400;
                    color: #1f2937;
                    background: #f9fafb;
                    border: 2px solid #e5e7eb;
                    border-radius: 12px;
                    outline: none;
                    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                }

                .input-modern::placeholder {
                    color: #b0b7c3;
                }

                .input-modern:hover {
                    border-color: #d1d5db;
                    background: #f3f4f6;
                }

                .input-modern:focus {
                    background: #fff;
                    border-color: #667eea;
                    box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
                }

                .input-modern:focus ~ .field-icon {
                    color: #667eea;
                }

                textarea.input-modern {
                    min-height: 110px;
                    resize: vertical;
                    line-height: 1.6;
                }

                .input-hint {
                    font-size: 0.72rem;
                    color: #9ca3af;
                    margin-top: 6px;
                    display: flex;
                    align-items: center;
                    gap: 4px;
                }

                .char-count {
                    font-size: 0.72rem;
                    color: #9ca3af;
                    text-align: right;
                    margin-top: 6px;
                }

                /* === FORM FOOTER === */
                .form-footer {
                    padding: 24px 32px;
                    background: #fafbfc;
                    border-top: 1px solid #f3f4f6;
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    flex-wrap: wrap;
                    gap: 12px;
                }

                .form-footer-left {
                    display: flex;
                    align-items: center;
                    gap: 8px;
                    font-size: 0.78rem;
                    color: #9ca3af;
                }

                .form-footer-left i {
                    color: #10b981;
                    font-size: 1rem;
                }

                .form-footer-right {
                    display: flex;
                    align-items: center;
                    gap: 12px;
                }

                .btn-cancel {
                    display: inline-flex;
                    align-items: center;
                    gap: 6px;
                    padding: 11px 24px;
                    border: 2px solid #e5e7eb;
                    border-radius: 12px;
                    background: #fff;
                    color: #6b7280;
                    font-size: 0.875rem;
                    font-weight: 600;
                    font-family: 'Inter', sans-serif;
                    text-decoration: none;
                    cursor: pointer;
                    transition: all 0.3s ease;
                }

                .btn-cancel:hover {
                    border-color: #d1d5db;
                    color: #374151;
                    background: #f9fafb;
                }

                .btn-update {
                    display: inline-flex;
                    align-items: center;
                    gap: 8px;
                    padding: 12px 32px;
                    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                    color: #fff;
                    border: none;
                    border-radius: 12px;
                    font-size: 0.875rem;
                    font-weight: 600;
                    font-family: 'Inter', sans-serif;
                    cursor: pointer;
                    position: relative;
                    overflow: hidden;
                    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                }

                .btn-update::before {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: -100%;
                    width: 100%;
                    height: 100%;
                    background: linear-gradient(120deg, transparent, rgba(255,255,255,0.2), transparent);
                    transition: left 0.5s ease;
                }

                .btn-update:hover {
                    transform: translateY(-2px);
                    box-shadow: 0 8px 24px rgba(102, 126, 234, 0.4);
                }

                .btn-update:hover::before {
                    left: 100%;
                }

                .btn-update:active {
                    transform: translateY(0);
                }

                .btn-update i {
                    font-size: 1.1rem;
                    transition: transform 0.3s ease;
                }

                .btn-update:hover i {
                    transform: translateX(3px);
                }

                /* Loading state */
                .btn-update .btn-spinner {
                    display: none;
                    width: 18px;
                    height: 18px;
                    border: 2px solid rgba(255,255,255,0.3);
                    border-top-color: #fff;
                    border-radius: 50%;
                    animation: btnSpin 0.6s linear infinite;
                }

                @keyframes btnSpin {
                    to { transform: rotate(360deg); }
                }

                .btn-update.saving .btn-spinner { display: block; }
                .btn-update.saving .btn-label,
                .btn-update.saving i { display: none; }

                /* === RESPONSIVE === */
                @media (max-width: 640px) {
                    .form-grid {
                        grid-template-columns: 1fr;
                    }

                    .form-card-body {
                        padding: 24px 20px;
                    }

                    .form-footer {
                        padding: 20px;
                        flex-direction: column;
                        align-items: stretch;
                    }

                    .form-footer-right {
                        flex-direction: column;
                    }

                    .btn-cancel, .btn-update {
                        justify-content: center;
                        width: 100%;
                    }

                    .page-header-section {
                        flex-direction: column;
                        align-items: flex-start;
                    }

                    .avatar-section {
                        flex-direction: column;
                        text-align: center;
                    }

                    .form-section-tabs {
                        padding: 0 16px;
                    }
                }
            </style>

            <div class="edit-employee-wrapper">

                <!-- Breadcrumb -->
                <div class="page-breadcrumb">
                    <a href="<?= base_url('admin/dashboard') ?>"><i class='bx bx-home-alt'></i> Home</a>
                    <span class="separator"><i class='bx bx-chevron-right'></i></span>
                    <a href="<?= base_url('admin/employee') ?>">Employees</a>
                    <span class="separator"><i class='bx bx-chevron-right'></i></span>
                    <span class="current">Edit Employee</span>
                </div>

                <!-- Page Header -->
                <div class="page-header-section">
                    <div class="page-header-left">
                        <div class="header-icon-box">
                            <i class='bx bx-edit-alt'></i>
                        </div>
                        <div class="header-text">
                            <h4>Edit Employee</h4>
                            <p>Update employee information and details</p>
                        </div>
                    </div>
                    <a href="<?= base_url('admin/employee') ?>" class="back-btn">
                        <i class='bx bx-arrow-back'></i>
                        Back to List
                    </a>
                </div>

                <!-- Form Card -->
                <form method="post" action="<?= base_url('admin/employee/update/'.$emp->id) ?>" id="editEmployeeForm">
                    <div class="form-card">

                        <!-- Section Tabs -->
                        <div class="form-section-tabs">
                            <div class="section-tab active">
                                <i class='bx bx-user'></i>
                                Personal Info
                            </div>
                            <div class="section-tab">
                                <i class='bx bx-briefcase'></i>
                                Work Details
                            </div>
                        </div>

                        <div class="form-card-body">

                            <!-- Avatar Preview -->
                            <div class="avatar-section">
                                <div class="avatar-circle" id="avatarCircle">
                                    <span id="avatarInitials"><?= strtoupper(substr($emp->name, 0, 1)) ?></span>
                                    <span class="status-dot"></span>
                                </div>
                                <div class="avatar-info">
                                    <h5 id="previewName"><?= $emp->name ?></h5>
                                    <p id="previewEmail"><?= $emp->email ?></p>
                                    <span class="badge-role">
                                        <i class='bx bx-check-circle'></i>
                                        Active Employee
                                    </span>
                                </div>
                            </div>

                            <!-- Personal Information -->
                            <div class="form-section-title">
                                <span class="dot"></span>
                                <h6>Personal Information</h6>
                                <span class="line"></span>
                            </div>

                            <div class="form-grid">
                                <!-- Full Name -->
                                <div class="input-group-modern">
                                    <label>
                                        <i class='bx bx-user'></i>
                                        Full Name
                                        <span class="required-star">*</span>
                                    </label>
                                    <div class="input-field-wrapper">
                                        <input 
                                            type="text" 
                                            name="name" 
                                            class="input-modern" 
                                            id="nameInput"
                                            value="<?= $emp->name ?>" 
                                            placeholder="Enter full name"
                                            required
                                        >
                                        <i class='bx bx-user field-icon'></i>
                                    </div>
                                </div>

                                <!-- Phone -->
                                <div class="input-group-modern">
                                    <label>
                                        <i class='bx bx-phone'></i>
                                        Phone Number
                                    </label>
                                    <div class="input-field-wrapper">
                                        <input 
                                            type="tel" 
                                            name="phone" 
                                            class="input-modern" 
                                            value="<?= $emp->phone ?>" 
                                            placeholder="Enter phone number"
                                        >
                                        <i class='bx bx-phone field-icon'></i>
                                    </div>
                                    <div class="input-hint">
                                        <i class='bx bx-info-circle'></i>
                                        Include country code for international numbers
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="input-group-modern">
                                    <label>
                                        <i class='bx bx-envelope'></i>
                                        Email Address
                                    </label>
                                    <div class="input-field-wrapper">
                                        <input 
                                            type="email" 
                                            name="email" 
                                            class="input-modern" 
                                            id="emailInput"
                                            value="<?= $emp->email ?>" 
                                            placeholder="Enter email address"
                                        >
                                        <i class='bx bx-envelope field-icon'></i>
                                    </div>
                                </div>

                                <!-- Country -->
                                <div class="input-group-modern">
                                    <label>
                                        <i class='bx bx-globe'></i>
                                        Country
                                    </label>
                                    <div class="input-field-wrapper">
                                        <input 
                                            type="text" 
                                            name="country" 
                                            class="input-modern" 
                                            value="<?= $emp->country ?>" 
                                            placeholder="Enter country"
                                        >
                                        <i class='bx bx-globe field-icon'></i>
                                    </div>
                                </div>

                                <!-- Address -->
                                <div class="input-group-modern full-width">
                                    <label>
                                        <i class='bx bx-map'></i>
                                        Address
                                    </label>
                                    <div class="input-field-wrapper textarea-wrapper">
                                        <textarea 
                                            name="address" 
                                            class="input-modern" 
                                            id="addressInput"
                                            placeholder="Enter full address"
                                            maxlength="300"
                                        ><?= $emp->address ?></textarea>
                                        <i class='bx bx-map field-icon'></i>
                                    </div>
                                    <div class="char-count">
                                        <span id="charCount">0</span> / 300 characters
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Form Footer -->
                        <div class="form-footer">
                            <div class="form-footer-left">
                                <i class='bx bx-shield-quarter'></i>
                                <span>All changes are saved securely</span>
                            </div>
                            <div class="form-footer-right">
                                <a href="<?= base_url('admin/employee') ?>" class="btn-cancel">
                                    <i class='bx bx-x'></i>
                                    Cancel
                                </a>
                                <button type="submit" class="btn-update" id="updateBtn">
                                    <span class="btn-label">Save Changes</span>
                                    <i class='bx bx-check'></i>
                                    <div class="btn-spinner"></div>
                                </button>
                            </div>
                        </div>

                    </div>
                </form>

            </div>

        </div>
    </div>

    <!-- Enhanced Interaction Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            // === Live Avatar Initials ===
            const nameInput = document.getElementById('nameInput');
            const avatarInitials = document.getElementById('avatarInitials');
            const previewName = document.getElementById('previewName');

            if (nameInput) {
                nameInput.addEventListener('input', function () {
                    const val = this.value.trim();
                    if (val.length > 0) {
                        const parts = val.split(' ');
                        let initials = parts[0][0].toUpperCase();
                        if (parts.length > 1 && parts[parts.length - 1].length > 0) {
                            initials += parts[parts.length - 1][0].toUpperCase();
                        }
                        avatarInitials.textContent = initials;
                        previewName.textContent = val;
                    } else {
                        avatarInitials.textContent = '?';
                        previewName.textContent = 'Employee Name';
                    }
                });
            }

            // === Live Email Preview ===
            const emailInput = document.getElementById('emailInput');
            const previewEmail = document.getElementById('previewEmail');

            if (emailInput) {
                emailInput.addEventListener('input', function () {
                    previewEmail.textContent = this.value || 'email@example.com';
                });
            }

            // === Character Counter for Address ===
            const addressInput = document.getElementById('addressInput');
            const charCount = document.getElementById('charCount');

            if (addressInput && charCount) {
                charCount.textContent = addressInput.value.length;
                addressInput.addEventListener('input', function () {
                    charCount.textContent = this.value.length;
                });
            }

            // === Focus Label Color ===
            document.querySelectorAll('.input-modern').forEach(function (input) {
                input.addEventListener('focus', function () {
                    const label = this.closest('.input-group-modern').querySelector('label');
                    if (label) label.style.color = '#667eea';
                });
                input.addEventListener('blur', function () {
                    const label = this.closest('.input-group-modern').querySelector('label');
                    if (label) label.style.color = '#374151';
                });
            });

            // === Submit Loading State ===
            const form = document.getElementById('editEmployeeForm');
            const updateBtn = document.getElementById('updateBtn');

            if (form && updateBtn) {
                form.addEventListener('submit', function () {
                    updateBtn.classList.add('saving');
                    updateBtn.disabled = true;
                });
            }

            // === Section Tab Interaction (visual only) ===
            document.querySelectorAll('.section-tab').forEach(function (tab) {
                tab.addEventListener('click', function () {
                    document.querySelectorAll('.section-tab').forEach(function (t) {
                        t.classList.remove('active');
                    });
                    this.classList.add('active');
                });
            });
        });
    </script>