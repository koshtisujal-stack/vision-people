<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->database();
       $this->load->library(['session', 'form_validation']);
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

        /* ================= FORM VALIDATION RULES ================= */

        $this->form_validation->set_rules(
            'yourname',
            'Name',
            'required|min_length[3]',
            ['required' => 'Name is required']
        );

        $this->form_validation->set_rules(
            'phone',
            'Phone',
            'required|numeric|min_length[10]',
            ['required' => 'Phone number is required']
        );

        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|min_length[3]|is_unique[employees.username]',
            [
                'required'  => 'Username is required',
                'is_unique' => 'Username already exists'
            ]
        );

        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|valid_email|is_unique[employees.email]',
            [
                'required'    => 'Email is required',
                'valid_email' => 'Enter a valid email',
                'is_unique'   => 'Email already exists'
            ]
        );

        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|min_length[6]',
            ['required' => 'Password is required']
        );

        $this->form_validation->set_rules(
            'confirm_password',
            'Confirm Password',
            'required|matches[password]',
            [
                'required' => 'Confirm password is required',
                'matches'  => 'Password does not match'
            ]
        );

        /* ================= RUN VALIDATION ================= */

        if ($this->form_validation->run() === FALSE) {

            // 🔴 Automatically shows which field is wrong
            $this->session->set_flashdata(
                'error',
                validation_errors()
            );

            redirect('admin/employee/add');
            return;
        }

        /* ================= INSERT DATA ================= */

        $data = [
            'name'     => trim($this->input->post('yourname')),
            'phone'    => trim($this->input->post('phone')),
            'username' => strtolower(trim($this->input->post('username'))),
            'email'    => strtolower(trim($this->input->post('email'))),
            'password' => password_hash(
                $this->input->post('password'),
                PASSWORD_BCRYPT
            ),
            'country'  => $this->input->post('country'),
            'address'  => $this->input->post('address'),
            'role'     => 'emp'
        ];

        $this->db->insert('employees', $data);

        $this->session->set_flashdata(
            'success',
            'Employee added successfully'
        );

        redirect('admin/employee');
    }

    // GET request
    $this->load->view('admin/header');
    $this->load->view('admin/add_employee');
    $this->load->view('admin/footer');
}

    




public function edit($id)
{
    $data['emp'] = $this->db->where('id', $id)->get('employees')->row();
    if (!$data['emp']) show_404();

    $this->load->view('admin/header');
    $this->load->view('admin/employee_edit', $data);
    $this->load->view('admin/footer');
}


public function update($id)
{
    $data = [
        'name'    => $this->input->post('name'),
        'phone'   => $this->input->post('phone'),
        'email'   => $this->input->post('email'),
        'country' => $this->input->post('country'),
        'address' => $this->input->post('address'),
    ];

    $this->db->where('id', $id)->update('employees', $data);

    $this->session->set_flashdata('success', 'Employee updated');
    redirect('admin/employee');
}


public function delete($id)
{
    $this->db->where('id', $id)->delete('employees');

    $this->session->set_flashdata('success', 'Employee deleted');
    redirect('admin/employee');
}




}
