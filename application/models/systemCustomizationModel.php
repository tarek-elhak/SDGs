<?php
class systemCustomizationModel extends CI_Model
{
    function update_title($title)
    {
        $query=$this->db->query("update website_information SET element_content='$title'where element_type='title'");
    }

    function update_logo($logo)
    {
        $query=$this->db->query("update website_information SET element_content='$logo'where element_type='logo'");
    }

    function update_goal($goal,$description)
    {
        $query=$this->db->query("update website_information SET element_content='$description'where element_type='$goal'");
    }



}