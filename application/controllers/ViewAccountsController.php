<?php
class ViewAccountsController extends CI_Controller
{
    public function __construct()
	{
	parent::__construct();
	
	$this->load->model('viewAccountsModel');
	$this->load->model('personalAccountModel');
	$this->load->model('websiteInfoModel');
	$this->load->library('session');
	if(! $this->session->userdata('validated')){
		redirect('LoginController');
}
	}
   /*Display*/
	public function process()
	{
	$result['data']=$this->viewAccountsModel->display_records();
	$result['logo']=$this->websiteInfoModel->display_logo();
	$result['title']=$this->websiteInfoModel->display_title();
	$result['photo']=$this->personalAccountModel->get();
	$this->load->view('viewAccounts',$result);
	}
}