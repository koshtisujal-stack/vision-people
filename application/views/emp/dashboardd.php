

<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">
		<div class="row g-4 align-items-stretch">

<!-- <div class="card-body text-center"> -->

    <!-- Today Date -->
   <div class="alert alert-dark" role="alert"> <div style="font-size:20px; font-weight:600; color:#000 #ccc; margin-bottom:6px;">
        <?= date('d M Y') ?>
    </div></div>

		<?php if($this->session->userdata('on_break')): ?>
<div class="alert alert-warning text-center mb-2">
    ⏸️ You are currently on break.<br>
    <button class="btn btn-sm btn-success mt-2" onclick="resumeWork()">
        Resume Work
    </button>
</div>
<?php endif; ?>


<div id="reportMsg"></div>


			<!-- ⏱ Active Session -->
			<div class="col-12 col-xl-4">
				<div class="card rounded-4 shadow-sm border-0 bg-dark text-white h-100">
					<div class="card-body text-center p-3 d-flex flex-column justify-content-center">
						<p class="text-uppercase text-secondary small mb-1">
							Active Session
						</p>
						<h2 class="font-mono mb-3 text-light" id="display">00:00:00</h2>
						<div class="d-flex justify-content-center gap-2">
							<button id="btnStart" onclick="startWatch()" class="btn btn-sm btn-success px-3" <?= $report_submitted ? 'disabled' : '' ?>>Start</button>

<button id="btnStop" onclick="stopWatch()" class="btn btn-sm btn-warning px-3" <?= $report_submitted ? 'disabled' : '' ?>>Stop</button>

<button id="btnReset" onclick="resetWatch()" class="btn btn-sm btn-outline-light px-3" <?= $report_submitted ? 'disabled' : '' ?>>Reset</button>



						</div>
					</div>
				</div>
			</div>

			<!-- break card  -->
			<div class="col-12 col-xl-4">
    <div class="card rounded-4 shadow-sm border-0 bg-light h-100">
        <div class="card-body text-center p-3 d-flex flex-column justify-content-center">
            <p class="text-uppercase text-muted small mb-1">
                Today Break Summary
            </p>

            <h4 class="mb-2 text-danger">
                <?= $break_summary->total_breaks ?? 0 ?> Breaks
            </h4>

            <h5 class="fw-bold text-dark-light">
                <?= $formattedBreakTime ?? '00h 00m 00s'; ?>
            </h5>

            <small class="text-muted">
                Total Break Time Today
            </small>
        </div>
    </div>
</div>

<!-- hourly card  -->
<div class="col-12 col-xl-4">
    <div class="card rounded-4 shadow-sm border-0 bg-success-subtle h-100">
        <div class="card-body text-center p-3 d-flex flex-column justify-content-center">

            <p class="text-uppercase text-muted small mb-1">
                Total Work Today
            </p>

            <h4 class="fw-bold text-success mb-2">
                <?= $formattedWorkTime ?? '00h 00m 00s'; ?>
            </h4>

            <small class="text-muted">
                Total active working time
            </small>

        </div>
    </div>
</div>

</div>
<!-- complete  -->
<button 
  id="completeBtn"
  class="btn btn-secondary mt-2"
  <?= $report_submitted ? 'disabled' : '' ?>
  data-bs-toggle="modal"
  data-bs-target="#reportModal"
>
  Complete Day
</button>


<!-- report  -->
<div class="modal fade" id="reportModal">
  <div class="modal-dialog">
   <form 
  id="reportForm"
  method="post"
  action="<?= base_url('emp/dashboardd/complete_day') ?>"
  class="modal-content"
>
      
      <div class="modal-header">
        <h5 class="modal-title">Today’s Work Report</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <label class="form-label">What did you work on today?</label>
        <textarea 
          name="daily_report" 
          class="form-control" 
          rows="5" 
          required
        ></textarea>
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-success">
          Submit & Complete Day
        </button>
      </div>

    </form>
  </div>
</div>



<!-- report end  -->


		<!-- Break Reason Modal -->
<div class="modal fade" id="breakModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Select Break Reason</h5>
      </div>
      <div class="modal-body">
        <select id="breakReason" class="form-select">
          <option value="">-- Select Reason --</option>
          <option>Tea Break</option>
          <option>Lunch</option>
          <option>Meeting</option>
          <option>Other</option>
        </select>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button class="btn btn-danger" onclick="submitBreak()">Submit</button>
      </div>
    </div>
  </div>
</div>

<div class="card mt-4">
  <div class="card-body">
    <h5>Employee Break Status</h5>
    <table class="table table-bordered">
      <thead class="table-primary">
        <tr>
          <!-- <th>Employee</th> -->
          <th>Reason</th>
          <th>Start</th>
          <th>End</th>
		  <th>Total Time</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($breaks as $b): ?>
        <tr>
          <!-- <td><?= htmlspecialchars($b->user_name) ?></td> -->
          <td>
            <span class="badge bg-danger"><?= $b->reason ?></span>
          </td>
          <td><?= $b->start_time ?></td>
<td><?= $b->end_time ?></td>
<td>
<?php
if ($b->start_time && $b->end_time) {
    $seconds = strtotime($b->end_time) - strtotime($b->start_time);

    $hours   = floor($seconds / 3600);
    $minutes = floor(($seconds % 3600) / 60);
    $secs    = $seconds % 60;

    if ($hours > 0) {
        echo "{$hours}h {$minutes}m";
    } else {
        echo "{$minutes}m {$secs}s";
    }
} else {
    echo '-';
}
?>
</td>

        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<div class="card mt-4">
  <div class="card-body">
    <h5 class="mb-3">Hourly Work Log</h5>

    <div class="table-responsive">
      <table class="table table-bordered table-hover">
        <thead class="table-primary">
          <tr>
            <!-- <th>Date</th> -->
            <th>Start Time</th>
            <th>End Time</th>
            <th>Total Work</th>
          </tr>
        </thead>
      <tbody>
<?php if(!empty($hour_logs)): ?>
  <?php foreach($hour_logs as $h): ?>
    <tr>
      <!-- Start Time -->
      <td>
        <?= $h->start_time 
            ? date('h:i:s A', strtotime($h->start_time)) 
            : '-' ?>
      </td>

      <!-- End Time -->
      <td>
        <?= $h->end_time 
            ? date('h:i:s A', strtotime($h->end_time)) 
            : '-' ?>
      </td>

      <!-- Total Work -->
      <td>
        <?php
          if (!empty($h->total_seconds)) {
            $hrs  = floor($h->total_seconds / 3600);
            $mins = floor(($h->total_seconds % 3600) / 60);
            $secs = $h->total_seconds % 60;
            echo sprintf('%02dh %02dm %02ds', $hrs, $mins, $secs);
          } else {
            echo '-';
          }
        ?>
      </td>
    </tr>
  <?php endforeach; ?>
<?php else: ?>
  <tr>
    <td colspan="3" class="text-center text-muted">
      No hourly work found for today
    </td>
  </tr>
<?php endif; ?>
</tbody>


      </table>
    </div>
  </div>
</div>


		

				

			</div>
		</div>
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

    fetch("<?= site_url('emp/dashboardd/start_work') ?>");

    timer = setInterval(updateDisplay, 1000);

    // 🔒 START disable, STOP enable
    btnStart.disabled = true;
    btnStop.disabled  = false;
    btnReset.disabled = true;
}



function stopWatch(){

    
  
// fetch("<?= site_url('emp/dashboardd/start_timer') ?>");  
    


  
    new bootstrap.Modal(
        document.getElementById('breakModal')
    ).show();
}





function submitBreak(){
    let r = document.getElementById('breakReason').value;
    if(!r){
        alert("Select reason");
        return;
    }
  fetch("<?= site_url('emp/dashboardd/stop_work') ?>");

    fetch("<?= site_url('emp/dashboardd/start_timer') ?>", {
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

    fetch("<?= site_url('emp/dashboardd/stop_work') ?>");

    localStorage.removeItem("startTime");
    display.innerText = "00:00:00";
    location.reload();
}

function resumeWork(){
    fetch("<?= site_url('emp/dashboardd/stop_timer') ?>")
    .then(() => fetch("<?= site_url('emp/dashboardd/start_work') ?>"))
   .then(() => {
    localStorage.setItem("startTime", Date.now());
    timer = setInterval(updateDisplay, 1000);

    // ▶️ WORK MODE (sirf STOP enable)
    workMode();

    location.reload();
});

}




 
// function checkCompleteButton() {
//     const now = new Date();

//     // Office timing
//     const startHour = 10;
//     const endHour   = 12; // 7 PM

//     if (now.getHours() >= endHour) {
//         const btn = document.getElementById('completeBtn');
//         btn.disabled = false;
//         btn.classList.remove('btn-secondary');
//         btn.classList.add('btn-success');
//     }
// }


// setInterval(checkCompleteButton, 60000);
// checkCompleteButton();

</script>
<script>
document.getElementById("reportForm").addEventListener("submit", function(e){
    e.preventDefault();

    fetch("<?= base_url('emp/dashboardd/complete_day') ?>", {
        method: "POST",
        body: new FormData(this)
    })
    .then(res => res.json())
    .then(data => {

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
                title: 'Report Submitted',
                text: 'Your work report has been submitted. Work is locked for today.',
            });

            bootstrap.Modal.getInstance(
                document.getElementById('reportModal')
            ).hide();
        }

        if(data.status === "already"){
            Swal.fire({
                icon: 'info',
                title: 'Already Submitted',
                text: 'You have already submitted today’s report.'
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


	</div><!--end page content -->
</div>
<!--end page wrapper -->
<!--start overlay-->
<div class="overlay mobile-toggle-icon"></div>
<!--end overlay-->
<!--Start Back To Top Button-->
<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->