<?php
class Attendance extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('logged_in')) {
            redirect('sign_in');
        }
    }

    public function add_attendance()
    {
        if ($this->input->post('submit')) {

            $data = [
                'user_id' => $this->session->userdata('user_id'),
                'attendance_date' => $this->input->post('attendance_date'),
                'status' => $this->input->post('status')
            ];

            $this->db->insert('attendance', $data);
            redirect('attendance_list');
        }

        $this->load->view('attendance/add_attendance');
    }

public function attendance_list()
{
   
    if ($this->input->get('month_year')) {
        [$year, $month] = explode('-', $this->input->get('month_year'));
    } else {
        $month = date('m');
        $year  = date('Y');
    }

    $this->db->select("
        employees.id,
        employees.name AS emp_name,
        SUM(CASE WHEN attendance.status = 'Present' THEN 1 ELSE 0 END) AS present_count,
        SUM(CASE WHEN attendance.status = 'Absent' THEN 1 ELSE 0 END) AS absent_count
    ");
    $this->db->from('employees');
    $this->db->join(
        'attendance',
        'attendance.user_id = employees.id 
         AND MONTH(attendance.attendance_date) = '.$month.'
         AND YEAR(attendance.attendance_date) = '.$year,
        'left'
    );
    $this->db->group_by('employees.id');
    $this->db->order_by('employees.name', 'ASC');

    $data['employees'] = $this->db->get()->result();
    $data['month'] = $month;
    $data['year']  = $year;

    $this->load->view('attendance/attendance_list', $data);
}





public function view_details($emp_id)
{
    
    if ($this->input->get('month_year')) {
        [$year, $month] = explode('-', $this->input->get('month_year'));
    } else {
        $month = date('m');
        $year  = date('Y');
    }

    
    $emp = $this->db
        ->where('id', $emp_id)
        ->get('employees')
        ->row();

   
    $this->db->where('user_id', $emp_id);
    $this->db->where('MONTH(attendance_date)', $month);
    $this->db->where('YEAR(attendance_date)', $year);
    $this->db->order_by('attendance_date', 'DESC');
    $rows = $this->db->get('attendance')->result();

  
    $this->db->where([
        'user_id' => $emp_id,
        'status'  => 'Present'
    ]);
    $this->db->where('MONTH(attendance_date)', $month);
    $this->db->where('YEAR(attendance_date)', $year);
    $present_count = $this->db->count_all_results('attendance');

  
    $this->db->where([
        'user_id' => $emp_id,
        'status'  => 'Absent'
    ]);
    $this->db->where('MONTH(attendance_date)', $month);
    $this->db->where('YEAR(attendance_date)', $year);
    $absent_count = $this->db->count_all_results('attendance');

    $data = [
        'rows'          => $rows,          
        'present_count' => $present_count,
        'absent_count'  => $absent_count,
        'emp'           => $emp,
        'month'         => $month,
        'year'          => $year
    ];

    $this->load->view('admin/header');
    $this->load->view('attendance/view_details', $data);
    $this->load->view('admin/footer');
}

}