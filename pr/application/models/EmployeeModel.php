<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
class EmployeeModel extends CI_Model {
	public function employeeList() {
		$this->db->select(array('id', 'name', 'skills', 'address', 'designation', 'age'));
		$this->db->from('pr');
		$this->db->limit(10);  
		$query = $this->db->get();
		return $query->result_array();
	}
}
?>