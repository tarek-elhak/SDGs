<?php 
class DashboardController extends CI_Controller
{
    function __construct() {
        parent::__construct();

        $this->load->model('websiteInfoModel');
        $this->load->model('personalAccountModel');
        $this->load->library('session');
        if(! $this->session->userdata('validated')){
            redirect('LoginController');
    }
    }

    public function index()
    {
        $data['logo']=$this->websiteInfoModel->display_logo();
        $data['title']=$this->websiteInfoModel->display_title();
        $data['photo']=$this->personalAccountModel->get();
        $this->load->view('admin_dashboard',$data);
    }

    
}