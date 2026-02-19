<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if (!$this->session->userdata('logged_in')) {
            redirect('sign_in');
        }

        $this->load->model('Dashboard_model');
        $this->load->database();
    }

    public function index()
{
    $id = $this->session->userdata('user_id');

    $user = $this->Dashboard_model->get_user($id);
    if (!$user) show_error('User not found');

    // 🔥 HEADER DATA (IMPORTANT)
    $data = [
        'user'      => $user,
        'userName'  => $this->session->userdata('user_name'),
        'userPhoto' => $this->session->userdata('user_photo'),
        'userRole'  => $this->session->userdata('user_role'),
    ];

    $this->load->view('emp/headerr', $data);
    $this->load->view('emp/profile', $data);
    $this->load->view('emp/footerr');
}


    public function update_profile()
    {
        $id = $this->session->userdata('user_id');

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

                $old = $this->Dashboard_model->get_user_photo($id);
                if ($old && file_exists(FCPATH.'uploads/profile/'.$old)) {
                    unlink(FCPATH.'uploads/profile/'.$old);
                }

                $this->session->set_userdata('user_photo', $data['photo']);
            }
        }

        $this->Dashboard_model->update_user($id, $data);

        $this->session->set_userdata([
            'user_name'  => $data['name'],
            'user_email' => $data['email']
        ]);

        $this->session->set_flashdata('success','Profile updated');
        redirect('emp/profile');
    }

  public function change_password()
{
    $data = [
        'userName'  => $this->session->userdata('user_name'),
        'userPhoto' => $this->session->userdata('user_photo'),
        'userRole'  => $this->session->userdata('user_role'),
    ];

    $this->load->view('emp/headerr', $data);
    $this->load->view('emp/change_password');
    $this->load->view('emp/footerr');
}
    

    public function save_password()
    {
        $id = $this->session->userdata('user_id');

        $old = $this->input->post('old_password');
        $new = $this->input->post('new_password');
        $con = $this->input->post('confirm_password');

        if ($new !== $con) {
            $this->session->set_flashdata('error','Password not matched');
            redirect('emp/change-password');
            return;
        }

        $emp = $this->db->where('id',$id)->get('employees')->row();

        if (!password_verify($old, $emp->password)) {
            $this->session->set_flashdata('error','Old password wrong');
            redirect('emp/change-password');
            return;
        }

        $this->db->where('id',$id)->update('employees',[
            'password' => password_hash($new, PASSWORD_BCRYPT)
        ]);

        $this->session->set_flashdata('success','Password updated successfully');
        redirect('emp/change-password');
    }
}
