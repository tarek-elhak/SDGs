<?php
class AddAccountController extends CI_Controller
{
  public function __construct()
	{
	parent::__construct();
	
  $this->load->model('addAccountModel');
  $this->load->model('websiteInfoModel');
  $this->load->model('personalAccountModel');
  $this->load->library('session');
  $this->load->library('upload');
  if(! $this->session->userdata('validated')){
      redirect('LoginController');
}
	}
    public function index()
    {
      $data['logo']=$this->websiteInfoModel->display_logo();
      $data['title']=$this->websiteInfoModel->display_title();
      $data['photo']=$this->personalAccountModel->get();
      $this->load->view('addAccount',$data);

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
		$data = array(
      'AdminID'=>'',
      'firstname'=>$this->input->post('firstname'),
      'lastname'=>$this->input->post('lastname'),
      'email'=>$this->input->post('email'),
      'password'=>md5($this->input->post('password')),
      'photo' => $this->upload->data()['file_name']
    );
    
    $this->addAccountModel->saverecords($data);
    $this->session->set_flashdata('add', 'Admin is Successfully Added.');
    
    $this->session->set_flashdata('not_added', 'Admin is not Successfully Added.');

     redirect('AddAccountController/index');

    

	
  }
  
}