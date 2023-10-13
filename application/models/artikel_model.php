<?php
 
class artikel_model extends CI_Model {
 
	function __construct()
	{
		parent::__construct();
	}

	function list_artikel($filter){
		$this->db->select('*');
		$this->db->from('artikel');
		$this->db->where($filter);
		$query = $this->db->get();
		// var_dump($this->db->last_query());
		return $query;
	}

	function save_artikel($new_artikel){
		$save = $this->db->insert('artikel', $new_artikel);
		$last_id = $this->db->insert_id();
		return $last_id;
	}	

	function update_artikel($new_artikel, $filter){
		$this->db->where($filter);
		return $this->db->update('artikel', $new_artikel);
		// var_dump($this->db->last_query());
	}
}

?>
