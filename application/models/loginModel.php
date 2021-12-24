<?php
class loginModel extends CI_Model
{
    function validate()
    {
        $arr['email']=$this->input->post('email');
        $arr['password']=md5($this->input->post('password'));
        $result=$this->db->get_where('admin',$arr)->row();
        $data = array(
            'validated' => true,
            'firstname' => $result->firstname,
            'lastname' => $result->lastname,
            'email'=> $result->email, 
            'photo'=> $result->photo
            );
       //     var_dump($data);exit;
    $this->session->set_userdata($data);
    return $result;
        
    }
}