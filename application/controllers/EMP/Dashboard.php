<?php
date_default_timezone_set('Asia/Kolkata');

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  public function __construct()
{
    parent::__construct();
    
    $this->load->helper('fcm');
    $this->load->helper('date');   // ✅ ADD THIS LINE
    $this->load->library('session');
    $this->load->database();
    $this->load->model('Dashboard_model');

    if (!$this->session->userdata('logged_in')) {
        redirect('sign_in');
    }

    if ($this->session->userdata('user_role') !== 'emp') {
        redirect('admin/dashboard');
    }
}

    protected function headerData()
    {
        return [
            'userPhoto' => $this->session->userdata('user_photo'),
            'userRole'  => $this->session->userdata('user_role'),
            'userName'  => $this->session->userdata('user_name'),
        ];
    }

 public function index()
{
    $data = $this->headerData();
    $user_id = $this->session->userdata('user_id');

    $this->load->model('emp/Dashboard_model');

    $data['hour_logs'] = $this->Dashboard_model->get_hourly_logs($user_id);
    $data['breaks'] = $this->Dashboard_model->get_today_breaks($user_id);
    $data['break_summary'] = $this->Dashboard_model->get_today_break_summary($user_id);

    $bs = (int)$data['break_summary']->total_seconds;
    $data['formattedBreakTime'] = sprintf(
        '%02dh %02dm %02ds',
        floor($bs/3600),
        floor(($bs%3600)/60),
        $bs%60
    );

    $ws = $this->Dashboard_model->get_today_work_total($user_id);
    $data['formattedWorkTime'] = sprintf(
        '%02dh %02dm %02ds',
        floor($ws/3600),
        floor(($ws%3600)/60),
        $ws%60
    );

    $today = date('Y-m-d');

    $data['report_submitted'] = $this->db
        ->where('employee_id', $user_id)
        ->where('report_date', $today)
        ->get('daily_reports')
        ->row() ? true : false;


    // 🔥🔥🔥 TODAY APPROVED LEAVES FOR ALL EMPLOYEES
 $this->db->select('employees.name, leaves.leave_type, leaves.reason, leaves.created_at');
$this->db->from('leaves');
$this->db->join('employees','employees.id = leaves.user_id'); // ✅ FIXED
$this->db->where('DATE(leaves.leave_date)', date('Y-m-d'));
$this->db->where('leaves.status', 'Approved');

$data['today_leaves'] = $this->db->get()->result();



// 🔥 UPCOMING HOLIDAYS (NEXT 4)
$today = date('Y-m-d');

$this->db->select('*');
$this->db->from('holidays');
$this->db->where('holiday_date >=', $today);
$this->db->order_by('holiday_date','ASC');
$this->db->limit(4);

$data['upcoming_holidays'] = $this->db->get()->result();



// 🔥 ANNOUNCEMENTS
$this->db->order_by('id','DESC');
$this->db->limit(5);
$data['announcements'] = $this->db->get('announcements')->result();





    // ✅ LOAD VIEW ONLY ONCE
    $this->load->view('emp/headerr',$data);
    $this->load->view('emp/dashboard',$data);
    $this->load->view('emp/footerr');
}


















   
    public function start_work()
    {
        $this->session->unset_userdata('on_break');

        $this->Dashboard_model->start_work($this->session->userdata('user_id'));
        echo json_encode(['status'=>'started']);
    }

    public function stop_work()
    {
        $this->Dashboard_model->stop_work($this->session->userdata('user_id'));
        echo json_encode(['status'=>'stopped']);
    }

  
  public function start_timer()
{
    
    if ($this->session->userdata('break_id')) {
        echo json_encode(['status'=>'already']);
        return;
    }

    $this->db->insert('break_logs', [
        'user_id'    => $this->session->userdata('user_id'),
        'user_name'  => $this->session->userdata('user_name'),
        'reason'     => $this->input->post('reason'),
        'start_time' => date('Y-m-d H:i:s'),
        'end_time'   => NULL
    ]);

    $this->session->set_userdata([
        'break_id' => $this->db->insert_id(),
        'on_break' => true
    ]);

    echo json_encode(['status'=>'started']);
}


public function stop_timer()
{
    $break_id = $this->session->userdata('break_id');

    if(!$break_id){
        echo json_encode(['status'=>'no_break']);
        return;
    }

    $this->db->where('id', $break_id)
             ->update('break_logs', [
                 'end_time' => date('Y-m-d H:i:s')
             ]);

    $this->session->unset_userdata(['break_id','on_break']);

    echo json_encode(['status'=>'ended']);
}



public function auto_close()
{
    $user_id = $this->session->userdata('user_id');
    if(!$user_id) return;

    
    $this->Dashboard_model->stop_work($user_id);

  
    if ($this->session->userdata('break_start')) {

        $this->Dashboard_model->add_break([
            'user_id'    => $user_id,
            'user_name'  => $this->session->userdata('user_name'),
            'reason'     => 'Auto Closed (Page Closed)',
            'start_time' => $this->session->userdata('break_start'),
            'end_time'   => date('Y-m-d H:i:s')
        ]);

        $this->session->unset_userdata('break_start');
    }
}

public function daily_reset()
{
    $user_id = $this->session->userdata('user_id');
    if (!$user_id) return;

    
    $this->Dashboard_model->stop_work($user_id);

   
    if ($this->session->userdata('break_start')) {
        $this->Dashboard_model->add_break([
            'user_id'    => $user_id,
            'user_name'  => $this->session->userdata('user_name'),
            'reason'     => 'Auto Reset (New Day)',
            'start_time' => $this->session->userdata('break_start'),
            'end_time'   => date('Y-m-d H:i:s')
        ]);

        $this->session->unset_userdata('break_start');
    }

    echo json_encode(['status' => 'reset']);
}


                        
public function resume_work()
{
    $user_id = $this->session->userdata('user_id');

    
    $this->db->where('id', function($db) use ($user_id) {
        $db->select('id')
           ->from('break_logs')
           ->where('user_id', $user_id)
           ->where('end_time IS NULL', null, false)
           ->order_by('id', 'DESC')
           ->limit(1);
    })->update('break_logs', [
        'end_time' => date('Y-m-d H:i:s')
    ]);

   
    $this->Dashboard_model->start_work($user_id);

    $this->session->unset_userdata('on_break');
}

               
                        











// profile 

                        // public function profile()
                        // {
                        //     $id = $this->session->userdata('user_id');
                        //     if (!$id) redirect('sign_in');
                        
                        //     $user = $this->Dashboard_model->get_user($id);
                        //     if (!$user) show_error('User not found');
                        
                        //     $data = $this->headerData();
                        //     $data['user'] = $user;



                            
                        
                        //     $this->load->view('emp/headerr', $data);
                        //     $this->load->view('emp/profile', $data);
                        //     $this->load->view('emp/footerr');
                        //     }
                        //     public function update_profile()
                        //     {
                        //         $id = $this->session->userdata('user_id');
                        //        if (!$id) redirect('sign_in');

                            
                        //         $data = [
                        //             'name'    => $this->input->post('name', true),
                        //             'email'   => $this->input->post('email', true),
                        //             'phone'   => $this->input->post('phone', true),
                        //             'address' => $this->input->post('address', true),
                        //         ];
                            
                               
                        //         if (!empty($_FILES['photo']['name'])) {
                            
                        //             $config = [
                        //                 'upload_path'   => FCPATH . 'uploads/profile/',
                        //                 'allowed_types' => 'jpg|jpeg|png',
                        //                 'max_size'      => 2048,
                        //                 'encrypt_name'  => true
                        //             ];
                            
                        //             $this->load->library('upload', $config);
                            
                        //             if ($this->upload->do_upload('photo')) {
                            
                        //                 $upload = $this->upload->data();
                        //                 $data['photo'] = $upload['file_name'];
                            
                                        
                        //                 $old = $this->Dashboard_model->get_user_photo($id);
                        //                 if ($old && file_exists(FCPATH . 'uploads/profile/' . $old)) {
                        //                     unlink(FCPATH . 'uploads/profile/' . $old);
                        //                 }
                            
                                      
                        //                 $this->session->set_userdata('user_photo', $data['photo']);
                            
                        //             } else {
                        //                 show_error($this->upload->display_errors());
                        //             }

                        //         }
                            
                        //         $this->Dashboard_model->update_user($id, $data);
                            
                            
                        //         $this->session->set_userdata([
                        //             'user_name'  => $data['name'],
                        //             'user_email' => $data['email']
                        //         ]);
                            
                        //         $this->session->set_flashdata('success', 'Profile updated successfully');
                        //         redirect('emp/profile');
                        //     }





public function complete_day()
{
    date_default_timezone_set('Asia/Kolkata');

    $emp_id = $this->session->userdata('user_id');
    $today  = date('Y-m-d');
    $currentHour = date('H'); // 00-23 format

    // 🚫 BEFORE 7 PM BLOCK SUBMISSION
    if ($currentHour < 19) {
        echo json_encode([
            'status' => 'time_error',
            'message' => 'You can submit report only after 7 PM'
        ]);
        return;
    }

    // already submitted check
    $exists = $this->db
        ->where('employee_id', $emp_id)
        ->where('report_date', $today)
        ->get('daily_reports')
        ->row();

    if ($exists) {
        echo json_encode(['status' => 'already']);
        return;
    }

    $this->db->insert('daily_reports', [
        'employee_id' => $emp_id,
        'report_date' => $today,
        'report'      => $this->input->post('daily_report'),
        'created_at'  => date('Y-m-d H:i:s')
    ]);

    $this->db->where('user_id', $emp_id)
             ->where('end_time IS NULL', null, false)
             ->update('work_logs', [
                 'end_time' => date('Y-m-d H:i:s')
             ]);

    echo json_encode(['status' => 'success']);
}

 

public function save_fcm_token()
{
    $data = json_decode(file_get_contents("php://input"), true);

    if (empty($data['token'])) {
        echo json_encode(['status' => 'no_token']);
        return;
    }

    // duplicate token avoid
    $exists = $this->db
        ->where('token', $data['token'])
        ->get('fcm_tokens')
        ->row();

    if ($exists) {
        echo json_encode(['status' => 'already_saved']);
        return;
    }

    $this->db->insert('fcm_tokens', [
        'user_id'    => $this->session->userdata('user_id'),
        'token'      => $data['token'],
        'role'       => $this->session->userdata('user_role'), // emp / admin
        'created_at' => date('Y-m-d H:i:s')
    ]);

    echo json_encode(['status' => 'saved']);
}




}

                        
         
                        