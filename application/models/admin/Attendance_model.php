<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance_model extends CI_Model {
    public function get_employee_attendance_summary($month, $year)
{
    $sql = "
        SELECT 
            u.id,
            u.name AS emp_name,
            SUM(CASE WHEN a.status = 'Present' THEN 1 ELSE 0 END) AS present_count,
            SUM(CASE WHEN a.status = 'Absent' THEN 1 ELSE 0 END) AS absent_count
        FROM users u
        LEFT JOIN attendance a 
            ON a.user_id = u.id
            AND MONTH(a.created_at) = ?
            AND YEAR(a.created_at) = ?
        WHERE u.role = 'emp'
        GROUP BY u.id
        ORDER BY u.name ASC
    ";

    return $this->db->query($sql, [$month, $year])->result();
}

}