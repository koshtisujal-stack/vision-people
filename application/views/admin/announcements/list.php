<div class="page-wrapper">
<div class="page-content">

<div class="card shadow-sm rounded-4">
    <div class="card-header bg-dark text-white d-flex justify-content-between">
        <h5 class=text-white>All Announcements</h5>

        <a href="<?= base_url('admin/announcements/add') ?>"
           class="btn btn-success btn-sm">
           + Add
        </a>
    </div>

    <div class="card-body">

        <table class="table table-bordered">
            <thead class="table-primary">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Date</th>
                </tr>
            </thead>

            <tbody>

            <?php if(!empty($announcements)){ ?>

                <?php foreach($announcements as $a){ ?>
                <tr>
                    <td><?= $a->id ?></td>
                    <td><?= $a->title ?></td>
                    <td><?= $a->description ?></td>
                    <td><?= date('d M Y h:i A',strtotime($a->created_at)) ?></td>
                </tr>
                <?php } ?>

            <?php } else { ?>
                <tr>
                    <td colspan="4">No Announcement</td>
                </tr>
            <?php } ?>

            </tbody>
        </table>

    </div>
</div>
</div>
</div>