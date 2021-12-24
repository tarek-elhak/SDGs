<?php
class addAccountModel extends CI_Model
{
    function saverecords($data)
	{
	$this->db->insert('admin',$data);
	}
}