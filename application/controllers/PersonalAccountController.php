<?php 
class PersonalAccountController extends CI_Controller
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
        $this->load->view('personalAccount',$data);
    }
    public function process()
    {
    $config['upload_path'] = './assets/public/';
    $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
    $config['max_size'] = '1000'; 
    $config['overwrite']=TRUE;
    $this->upload->initialize($config);
    if ($this->upload->do_upload('personal'))
    {
      var_dump($this->upload->data());
    }
    else
    {
      var_dump($this->upload->display_errors());

    }
    $photo=$this->upload->data()['file_name'];
    $email=$this->session->userdata('email');
    $this->personalAccountModel->update($photo,$email);
    $this->session->set_flashdata('add', 'Photo Updated Successfully.');
    
    $this->session->set_flashdata('not_added', 'Photo is not Updated Successfully.');

     redirect('PersonalAccountController/index');


    }

    
}