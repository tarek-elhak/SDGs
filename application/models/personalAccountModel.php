<?php
class personalAccountModel extends CI_Model
{
	function __construct() {
        parent::__construct();
        $this->load->library('session');
    }	
    function update($photo,$email)
	{
	$query=$this->db->query("update admin set photo='$photo' where email='$email'");
	}

	function get()
	{
		$email=$this->session->userdata('email');
		$result=$this->db->query("select * from admin where email='$email'");
		return $result->result();
	}
	
}