<?php
class UpdateAccountController extends CI_Controller
{
  public function __construct()
	{
	parent::__construct();
	
  $this->load->model('updateAccountModel');
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
      $this->load->view('updateAccount',$data);

    }

    public function process()
    {
    
      $config['upload_path'] = './assets/public/';
      $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
      $config['max_size'] = '1000'; 
      $config['overwrite']=TRUE;
      $this->upload->initialize($config);
      if ($this->upload->do_upload('select_image'))
      {
        var_dump($this->upload->data());
      }
      else
      {
        var_dump($this->upload->display_errors());
  
      }
  
      $admin=$this->input->post('admin');
      $firstname=$this->input->post('firstname');
      $lastname=$this->input->post('lastname');
      $email=$this->input->post('email');
      $password=md5($this->input->post('password'));
      $photo=$this->upload->data()['file_name'];
     
    $this->updateAccountModel->update_records($admin,$firstname,$lastname,$email,$password,$photo);

    $this->session->set_flashdata("update","Admin is Updated Successfully");

    $this->session->set_flashdata("not_updated","Admin Is Not Updated Successfully");      
    redirect("UpdateAccountController/index");
    

}

  
}