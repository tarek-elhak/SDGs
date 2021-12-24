<?php
class updateAccountModel extends CI_Model
{
	function update_records($admin,$firstname,$lastname,$email,$password,$photo)
	{
	$this->db->query("update admin SET firstname='$firstname',lastname='$lastname',email='$email' ,password='$password',photo='$photo' where AdminID='$admin'");
	}
}