<?php
class LoginController extends CI_Controller
{
  public function __construct()
	{
  parent::__construct();
  $this->load->helper('url');
  $this->load->model('websiteInfoModel');
  }

    public function index()
    {
        $data['logo']=$this->websiteInfoModel->display_logo();
        $data['title']=$this->websiteInfoModel->display_title();
        $this->load->view('login',$data);
    }


    public function process()
    {
        
      $this->load->model('loginModel');
      $check=$this->loginModel->validate();

      if($check)
      {
        
        redirect('PersonalAccountController');

      }
      else
      {
        $this->session->set_flashdata("not_available","Login Failed, Please check your email or password again");
          redirect('LoginController/index');
      }

    }


    public function logout()
    {
      $this->session->sess_destroy();
      redirect('HomePageController/index');
    }


}