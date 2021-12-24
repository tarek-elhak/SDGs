<?php
class uploadDataModel extends CI_Model
{
 function select()
 {
	$query=$this->db->query("select * from location");
	return $query->result();
 }

 function insert($data)
 {
  $this->db->insert_batch('location', $data);
 }
}