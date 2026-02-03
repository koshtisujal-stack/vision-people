<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('logged_in')) {
            redirect('sign_in');
        }

        $this->load->model('Admin_model');
    }

private function headerData()
{
    return [
        'userRole'  => $this->session->userdata('user_role'),
        'userName'  => $this->session->userdata('user_name'),
        'userPhoto' => $this->session->userdata('photo'),
    ];
}



    public function index()
    {
        $userId = $this->session->userdata('user_id');

        $data['user']  = $this->Admin_model->get_user($userId);
     
 $today = date('Y-m-d'); 




// manual 



$data['manual_break_logs'] = $this->db
    ->select('break_logs.*, employees.name')
    ->from('break_logs')
    ->join('employees', 'employees.id = break_logs.user_id')
    ->where('DATE(start_time)', $today)
    ->where('source', 'manual')
    ->get()
    ->result();


$data['employees'] = $this->db
        ->select('id, name')
        ->where('role', 'emp')
        ->get('employees')
        ->result();



$data['manual_logs'] = $this->db
    ->where('DATE(start_time)', $today)
    ->where('source', 'manual')
    ->get('work_logs')
    ->result();

//  end          
    $data['present_count'] = $this->db
        ->where('attendance_date', $today)
        ->where('status', 'Present')
        ->from('attendance')
        ->count_all_results();

    
    $data['leave_count'] = $this->db
        ->where('leave_date', $today)
        ->where('status', 'Approved')
        ->from('leaves')
        ->count_all_results();


        $this->load->view('admin/header', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('admin/footer');
    }








    // profile 

                        public function profile()
                        {
                            $id = $this->session->userdata('user_id');
                            if (!$id) redirect('sign_in');
                        
                            $user = $this->Admin_model->get_user($id);
                            if (!$user) show_error('User not found');
                        
                            $data = $this->headerData();
                            $data['user'] = $user;
                        
                            $this->load->view('admin/header', $data);
                            $this->load->view('admin/profile', $data);
                            $this->load->view('admin/footer');}
                            public function update_profile()
                            {
                                $id = $this->session->userdata('user_id');
                                if (!$id) redirect('sign_in');
                            
                                $data = [
                                    'name'    => $this->input->post('name', true),
                                    'email'   => $this->input->post('email', true),
                                    'phone'   => $this->input->post('phone', true),
                                    'address' => $this->input->post('address', true),
                                ];
                            
                               
                                if (!empty($_FILES['photo']['name'])) {
                            
                                    $config = [
                                        'upload_path'   => FCPATH . 'uploads/profile/',
                                        'allowed_types' => 'jpg|jpeg|png',
                                        'max_size'      => 2048,
                                        'encrypt_name'  => true
                                    ];
                            
                                    $this->load->library('upload', $config);
                            
                                    if ($this->upload->do_upload('photo')) {
                            
                                        $upload = $this->upload->data();
                                        $data['photo'] = $upload['file_name'];
                            
                                        
                                        $old = $this->Admin_model->get_user_photo($id);
                                        if ($old && file_exists(FCPATH . 'uploads/profile/' . $old)) {
                                            unlink(FCPATH . 'uploads/profile/' . $old);
                                        }
                            
                                      
                                        $this->session->set_userdata('photo', $data['photo']);
                            
                                    } else {
                                        show_error($this->upload->display_errors());
                                    }
                                }
                            
                                $this->Admin_model->update_user($id, $data);
                            
                            
                                $this->session->set_userdata([
                                    'user_name'  => $data['name'],
                                    'user_email' => $data['email']
                                ]);
                            
                                $this->session->set_flashdata('success', 'Profile updated successfully');
                                redirect('admin/profile');
                            }

// break manual 

public function add_manual_break()
{
    $emp_id = $this->input->post('emp_id');
    $start  = $this->input->post('start_time');
    $end    = $this->input->post('end_time');

   
    if (strtotime($end) <= strtotime($start)) {
        $this->session->set_flashdata('error','End time must be greater');
        redirect('admin/dashboard');
    }

   
    $overlap = $this->db->query("
        SELECT id FROM break_logs
        WHERE user_id = ?
          AND start_time < ?
          AND end_time   > ?
    ", [
        $emp_id,
        $end,
        $start
    ])->row();

    if ($overlap) {
        $this->session->set_flashdata(
            'error',
            'Break time overlaps with existing break'
        );
        redirect('admin/dashboard');
    }

   
    $this->db->insert('break_logs', [
        'user_id'    => $emp_id,
        'start_time' => $start,
        'end_time'   => $end,
        'source'     => 'manual',
        'note'       => $this->input->post('note')
    ]);

    redirect('admin/dashboard');
}



public function save_fcm_token()
{
    $data = json_decode(file_get_contents("php://input"), true);
    if (!isset($data['token'])) return;

    $this->db->insert('fcm_tokens', [
        'user_id'    => $this->session->userdata('user_id'),
        'token'      => $data['token'],
        'role'       => 'admin',
        'created_at' => date('Y-m-d H:i:s')
    ]);
}

                            
                        }
         
                        


