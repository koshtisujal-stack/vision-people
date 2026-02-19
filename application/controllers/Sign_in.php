<?php
class Sign_in extends CI_Controller {

    public function index()
    {
        if ($this->session->userdata('logged_in') && 
            $this->session->userdata('user_role') === 'emp') {
            redirect('emp/dashboard');
        }

        $this->load->view('admin/sign_in'); 
    }

    public function login()
    {
        $email    = $this->input->post('email');
        $password = $this->input->post('password');

        $emp = $this->db
            ->where('email', $email)
            ->get('employees')
            ->row();

        if ($emp && password_verify($password, $emp->password)) {

            $this->session->set_userdata([
                'user_id'   => $emp->id,
                'user_name' => $emp->name,
                'user_role' => 'emp',
                'logged_in' => true
            ]);

            redirect('emp/dashboard');
            return;
        }

        $this->session->set_flashdata('login_error', 'Invalid employee credentials');
        redirect('sign_in');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('sign_in');
    }
}
