<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance_model extends CI_Model {

    public function already_marked_today($user_id)
    {
        return $this->db
            ->where('user_id', $user_id)
            ->where('DATE(created_at)', date('Y-m-d'))
            ->get('attendance')
            ->row();
    }

    public function mark_attendance($data)
    {
        return $this->db->insert('attendance', $data);
    }

    public function get_my_attendance($user_id)
    {
        return $this->db
            ->where('user_id', $user_id)
            ->order_by('created_at','DESC')
            ->get('attendance')
            ->result();
    }

    public function get_my_attendance_by_month($user_id, $month)
{
    return $this->db
        ->where('user_id', $user_id)
        ->like('attendance_date', $month, 'after') 
        ->order_by('attendance_date', 'DESC')
        ->get('attendance')
        ->result();
}


public function get_monthly_summary($user_id, $year, $month)
{
    $this->db->select("
        SUM(CASE WHEN status = 'Present' THEN 1 ELSE 0 END) as present_count,
        SUM(CASE WHEN status = 'Absent' THEN 1 ELSE 0 END) as absent_count
    ");
    $this->db->where('user_id', $user_id);
    $this->db->where('YEAR(attendance_date)', $year);
    $this->db->where('MONTH(attendance_date)', $month);

    return $this->db->get('attendance')->row();
}

public function get_monthly_attendance($user_id, $year, $month)
{
    return $this->db
        ->where('user_id', $user_id)
        ->where('YEAR(attendance_date)', $year)
        ->where('MONTH(attendance_date)', $month)
        ->order_by('attendance_date', 'DESC')
        ->get('attendance')
        ->result();
}



// public function get_employee_attendance_summary($month, $year)
// {
//     $sql = "
//         SELECT 
//             u.id,
//             u.name AS emp_name,
//             SUM(CASE WHEN a.status = 'Present' THEN 1 ELSE 0 END) AS present_count,
//             SUM(CASE WHEN a.status = 'Absent' THEN 1 ELSE 0 END) AS absent_count
//         FROM users u
//         LEFT JOIN attendance a 
//             ON a.user_id = u.id
//             AND MONTH(a.created_at) = ?
//             AND YEAR(a.created_at) = ?
//         WHERE u.role = 'emp'
//         GROUP BY u.id
//         ORDER BY u.name ASC
//     ";

//     return $this->db->query($sql, [$month, $year])->result();
// }

}
