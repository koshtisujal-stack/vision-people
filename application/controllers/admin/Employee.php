<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->library(['session']);
        $this->load->helper(['url','form']);

        if(!$this->session->userdata('logged_in')){
            redirect('sign_in');
        }
    }

    // 🔹 LIST EMPLOYEE
    public function index(){
        $data['employees'] = $this->db->get('employees')->result();
        $this->load->view('admin/header');
        $this->load->view('admin/employee_list', $data);
        $this->load->view('admin/footer');
    }

    // 🔹 ADD EMPLOYEE
public function add()
{
    if ($this->input->method() === 'post') {

        $password = $this->input->post('password');
        $confirm  = $this->input->post('confirm_password');

        if ($password !== $confirm) {
            $this->session->set_flashdata('error', 'Password not matched');
            redirect('admin/employee/add');
        }

        $data = [
            'name'     => $this->input->post('yourname'),
            'phone'    => $this->input->post('phone'),
            'username' => $this->input->post('username'),
            'email'    => $this->input->post('email'),
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'country'  => $this->input->post('country'),
            'address'  => $this->input->post('address'),
            'role'     => 'emp'
        ];

        $this->db->insert('employees', $data);

        redirect('admin/employee');
    }

    $this->load->view('admin/header');
    $this->load->view('admin/add_employee');
    $this->load->view('admin/footer');
}


}
