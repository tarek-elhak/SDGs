<?php
class checkEmailModel extends CI_Model
{
    public function checkEmail($email)
    {
        $this->db->where('email',$email);
        $query=$this->db->get('admin');
        if ($query->num_rows()>0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}