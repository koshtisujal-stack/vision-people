<div class="page-wrapper">
<div class="page-content">
<?php if ($this->session->flashdata('error')): ?>
<div class="alert alert-danger"><?= $this->session->flashdata('error') ?></div>
<?php endif; ?>

<?php if ($this->session->flashdata('success')): ?>
<div class="alert alert-success"><?= $this->session->flashdata('success') ?></div>
<?php endif; ?>

<form method="post" action="<?= site_url('emp/change-password/save') ?>" class="col-md-6">

    <div class="mb-3">
        <label>Old Password</label>
        <input type="password" name="old_password" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>New Password</label>
        <input type="password" name="new_password" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Confirm Password</label>
        <input type="password" name="confirm_password" class="form-control" required>
    </div>

    <button class="btn btn-primary">Update Password</button>
</form>
</div>
</div>
