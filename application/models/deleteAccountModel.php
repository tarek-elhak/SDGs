<?php
class deleteAccountModel extends CI_Model
{
	function delete_records($id)
	{
	$query=$this->db->query(" DELETE FROM admin where AdminID='$id'");
	if($query)
	{
		return true;
	}
	

	}
}