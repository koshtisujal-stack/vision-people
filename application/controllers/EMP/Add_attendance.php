<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_attendance extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('emp/Attendance_model');

        if (
            !$this->session->userdata('logged_in') ||
            $this->session->userdata('user_role') !== 'emp'
        ) {
            redirect('sign_in');
        }
    }

    public function index()
    {
        $user_id = $this->session->userdata('user_id');

        
        $already = $this->Attendance_model->already_marked_today($user_id);

        $data = [
            'already_marked' => $already ? true : false
        ];

      
        $this->load->view('emp/attendance_add', $data);
    }

    public function save()
    {
        $user_id = $this->session->userdata('user_id');

       
        $already = $this->Attendance_model->already_marked_today($user_id);
        if ($already) {
            redirect('emp/attendance_add');
        }

        $data = [
            'user_id'         => $user_id,
            'attendance_date' => date('Y-m-d'),
            'status'          => $this->input->post('status'),
            'created_at'      => date('Y-m-d H:i:s')
        ];

        $this->Attendance_model->mark_attendance($data);

        redirect('emp/attendance_list');
    }
}

