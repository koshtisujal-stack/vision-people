<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

   

    public function get_user($id)
    {
        return $this->db->where('id',$id)->get('employees')->row();
    }

    public function get_user_photo($id)
    {
        return $this->db->select('photo')->where('id',$id)->get('employees')->row('photo');
    }

    public function update_user($id,$data)
    {
        return $this->db->where('id',$id)->update('employees',$data);
    }

    

    public function add_break($data)
    {
        return $this->db->insert('break_logs',$data);
    }

    public function get_today_breaks($user_id)
    {
        return $this->db
            ->where('user_id',$user_id)
            ->where('DATE(start_time)',date('Y-m-d'))
            ->order_by('start_time','DESC')
            ->get('break_logs')
            ->result();
    }

    public function get_today_break_summary($user_id)
    {
        return $this->db->query("
            SELECT 
                COUNT(*) AS total_breaks,
                COALESCE(SUM(TIMESTAMPDIFF(SECOND,start_time,end_time)),0) AS total_seconds
            FROM break_logs
            WHERE user_id=?
              AND DATE(start_time)=CURDATE()
        ",[$user_id])->row();
    }

    

   public function start_work($user_id)
{
    
    $open = $this->db
        ->where('user_id', $user_id)
        ->where('end_time IS NULL', null, false)
        ->get('work_logs')
        ->row();

    if ($open) {
        
        return false;
    }

    
    return $this->db->insert('work_logs', [
        'user_id'    => $user_id,
        'start_time' => date('Y-m-d H:i:s')
    ]);
}



    public function stop_work($user_id)
{
    return $this->db
        ->where('user_id', $user_id)
        ->where('end_time IS NULL', null, false)
        ->order_by('id', 'ASC') 
        ->limit(1)
        ->update('work_logs', [
            'end_time' => date('Y-m-d H:i:s')
        ]);
}


    public function get_hourly_work($user_id)
    {
       return $this->db->query("
        SELECT 
            DATE(start_time) as work_date,
            TIME(start_time) as start_time,
            TIME(end_time) as end_time,
            TIMESTAMPDIFF(SECOND, start_time, end_time) as total_seconds
        FROM work_logs
        WHERE user_id = ?
          AND end_time IS NOT NULL
          AND DATE(start_time) = CURDATE()
        ORDER BY start_time ASC
    ", [$user_id])->result();
    }

    public function get_hourly_logs($user_id)
{
    $today = date('Y-m-d');

    return $this->db
        ->select("
            start_time,
            end_time,
            TIMESTAMPDIFF(SECOND, start_time, end_time) as total_seconds
        ")
        ->from('work_logs')
        ->where('user_id', $user_id)
        ->where('DATE(start_time)', $today)   
        ->where('end_time IS NOT NULL', null, false)
        ->order_by('start_time', 'ASC')
        ->get()
        ->result();
}


    public function get_today_work_total($user_id)
    {
        $row = $this->db->query("
            SELECT COALESCE(SUM(TIMESTAMPDIFF(SECOND,start_time,end_time)),0) AS total_seconds
            FROM work_logs
            WHERE user_id=?
              AND DATE(start_time)=CURDATE()
              AND end_time IS NOT NULL
        ",[$user_id])->row();

        return (int)$row->total_seconds;
    }
}