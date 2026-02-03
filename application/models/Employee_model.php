<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_model extends CI_Model {

    public function insert_employee($data)
    {
        return $this->db->insert('employees', $data);
    }

    public function get_all_employees()
    {
        return $this->db->get('employees')->result();
    }
}
