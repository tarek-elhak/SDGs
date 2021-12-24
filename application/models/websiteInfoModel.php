<?php 
class websiteInfoModel extends CI_Model
{
    function display_getStarted()
    {
        $query=$this->db->query("select * from website_information where element_type='get started' ");
        return $query->result();
    }

    function display_philosophy()
    {
        $query1=$this->db->query("select * from website_information where element_type='philosophy' ");
        return $query1->result();
    }

    function display_logo()
    {
        $query2=$this->db->query("select * from website_information where element_type='logo' ");
        return $query2->result();
    }

    function display_title()
    {
        $query3=$this->db->query("select * from website_information where element_type='title' ");
        return $query3->result();
    }

    function display_goal1()
    {
        $query3=$this->db->query("select * from website_information where element_type='goal1' ");
        return $query3->result();
    }

    function display_goal2()
    {
        $query3=$this->db->query("select * from website_information where element_type='goal2' ");
        return $query3->result();
    }

    function display_goal3()
    {
        $query3=$this->db->query("select * from website_information where element_type='goal3' ");
        return $query3->result();
    }

    function display_goal4()
    {
        $query3=$this->db->query("select * from website_information where element_type='goal4' ");
        return $query3->result();
    }

    function display_goal5()
    {
        $query3=$this->db->query("select * from website_information where element_type='goal5' ");
        return $query3->result();
    }
    function display_goal6()
    {
        $query3=$this->db->query("select * from website_information where element_type='goal6' ");
        return $query3->result();
    }
    function display_goal7()
    {
        $query3=$this->db->query("select * from website_information where element_type='goal7' ");
        return $query3->result();
    }
    function display_goal8()
    {
        $query3=$this->db->query("select * from website_information where element_type='goal8' ");
        return $query3->result();
    }
    function display_goal9()
    {
        $query3=$this->db->query("select * from website_information where element_type='goal9' ");
        return $query3->result();
    }
    function display_goal10()
    {
        $query3=$this->db->query("select * from website_information where element_type='goal10' ");
        return $query3->result();
    }
    function display_goal11()
    {
        $query3=$this->db->query("select * from website_information where element_type='goal11' ");
        return $query3->result();
    }
    function display_goal12()
    {
        $query3=$this->db->query("select * from website_information where element_type='goal12' ");
        return $query3->result();
    }
    function display_goal13()
    {
        $query3=$this->db->query("select * from website_information where element_type='goal13' ");
        return $query3->result();
    }
    function display_goal14()
    {
        $query3=$this->db->query("select * from website_information where element_type='goal14' ");
        return $query3->result();
    }
    function display_goal15()
    {
        $query3=$this->db->query("select * from website_information where element_type='goal15' ");
        return $query3->result();
    }
    function display_goal16()
    {
        $query3=$this->db->query("select * from website_information where element_type='goal16' ");
        return $query3->result();
    }
    function display_goal17()
    {
        $query3=$this->db->query("select * from website_information where element_type='goal17' ");
        return $query3->result();
    }

    
}