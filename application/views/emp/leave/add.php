<!-- start page wrapper -->
<div class="page-wrapper">
<div class="page-content">

<div class="card">
<div class="card-body">

<h5>Add Leave</h5>

<form method="post" action="<?= site_url('emp/leave/store') ?>">


<div class="mb-3">
<label>Employee</label>
<select name="user_id" class="form-control" required>
<option value="">Select Employee</option>
<?php foreach($employees as $emp){ ?>
    <option value="<?= $emp->id ?>"><?= $emp->name ?></option>
<?php } ?>
</select>

</div>

<div class="mb-3">
<label>Leave Date</label>
<input type="date" name="leave_date" class="form-control" required>
</div>

<div class="mb-3">
<label>Leave Type</label>
  <select name="leave_type" id="leave_type" class="form-control" required>
    <option value="">Select Leave Type</option>
    <option value="full_day">Full Day</option>
    <option value="half_day_1">Half Day (1st Half)</option>
    <option value="half_day_2">Half Day (2nd Half)</option>
  </select>
</div>

<div class="mb-3">
<label>Reason</label>
<textarea name="reason" class="form-control"></textarea>
</div>

<button class="btn btn-primary">Submit</button>

</form>

</div>
</div>

</div>
</div>

    <script>
       $(".data-attributes span").peity("donut")
    </script>

	<script>
document.getElementById('leave_type').addEventListener('change', function () {
    const info = document.getElementById('leave_time_info');
    const text = document.getElementById('time_text');

    if (this.value === 'half_day_1') {
        info.style.display = 'block';
        text.innerText = '1st Half: 10:00 AM – 02:00 PM';
    } 
    else if (this.value === 'half_day_2') {
        info.style.display = 'block';
        text.innerText = '2nd Half: 03:00 PM – 07:00 PM';
    } 
    else {
        info.style.display = 'none';
        text.innerText = '';
    }
});
</script>

