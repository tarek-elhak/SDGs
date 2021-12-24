<?php
class check_id_Model extends CI_Model
{
    public function checkID($admin)
    {
        $query=$this->db->query(" select * FROM admin where AdminID='$admin' ");
        if($query->num_rows()>0){
            return false;
            return $query->result();
        }
        else {
         return true;
        }
    }

    public function checkID_delete($admin)
    {
        $query=$this->db->query(" select * FROM admin where AdminID='$admin' ");
        if($query->num_rows()>0){
         return false;
        }
        else {
         return true;
        }
    }

}