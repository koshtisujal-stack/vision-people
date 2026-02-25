<?php
class Sign_in extends CI_Controller {

  public function index()
{
    if ($this->session->userdata('logged_in')) {

        if ($this->session->userdata('user_role') == 1) {
            redirect('admin/dashboard');
        } else {
            redirect('emp/dashboard');
        }

        return;
    }

    $this->load->view('admin/sign_in'); 
}

public function login()
{
    $email    = $this->input->post('email');
    $password = $this->input->post('password');

    $user = $this->db
        ->where('email', $email)
        ->get('users')
        ->row();

    if ($user && password_verify($password, $user->password)) {

        $role = (int)$user->role;   // ✅ THIS IS THE FIX

       $this->session->set_userdata([
    'user_id'    => $user->id,
    'user_name'  => $user->name,
    'user_role'  => $role,
    'user_photo' => $user->photo,   // 🔥🔥🔥 THIS WAS MISSING
    'logged_in'  => true
]);

        if ($role == 1) {
            redirect('admin/dashboard');
        } else {
            redirect('emp/dashboard');
        }
        return;
    }

    $this->session->set_flashdata('login_error', 'Invalid credentials');
    redirect('sign_in');
}
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('sign_in');
    }
}
