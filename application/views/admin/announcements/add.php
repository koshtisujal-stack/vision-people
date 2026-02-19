<div class="page-wrapper">
<div class="page-content">

<div class="card shadow-sm rounded-4">
    <div class="card-header bg-primary text-white">
        <h5>Add Announcement</h5>
    </div>

    <div class="card-body">
        <form method="post" action="<?= base_url('admin/announcements/store') ?>">

            <div class="mb-3">
                <label>Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Description</label>
                <textarea name="description" class="form-control" rows="4" required></textarea>
            </div>

            <button class="btn btn-success">Save Announcement</button>

        </form>
    </div>
</div>
</div>
</div>