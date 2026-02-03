<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leave_model extends CI_Model {

    public function insert_leave($data){
        return $this->db->insert('leaves',$data);
    }

    public function get_my_leaves($emp_id){
        return $this->db
            ->where('emp_id',$emp_id)
            ->order_by('id','DESC')
            ->get('leaves')
            ->result();
    }
}
