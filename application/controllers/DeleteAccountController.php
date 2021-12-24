<?php
class DeleteAccountController extends CI_Controller
{
  public function __construct()
	{
	parent::__construct();
	
  $this->load->model('deleteAccountModel');
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
      $this->load->view('deleteAccount',$data);

    }

    public function process()
  {
    $id=$this->input->post('admin');
       
    $delete=$this->deleteAccountModel->delete_records($id);
    if($delete)
        {
          echo '<label class="text-success"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i>Admin is Deleted Successfully</span></label>';
           }
           else {
           
            echo '<label class="text-danger"><span><i class="fa fa-times" aria-hidden="true">
            </i>Admin is not deleted successfully</span></label>'; 
          }
    
  }
  
}