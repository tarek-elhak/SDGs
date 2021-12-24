<?php
class viewAccountsModel extends CI_Model
{
    function display_records()
	{
	$query=$this->db->query("select * from admin");
	return $query->result();
	}
}