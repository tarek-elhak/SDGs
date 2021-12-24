<?php 
class SystemCustomizationController extends CI_Controller
{
    function __construct() {
        parent::__construct();

        $this->load->model('systemCustomizationModel');
        $this->load->model('websiteInfoModel');
        $this->load->model('personalAccountModel');
        $this->load->library('session');
        if(! $this->session->userdata('validated')){
            redirect('LoginController');
    }
    }
    function index()
    {
        $data['logo']=$this->websiteInfoModel->display_logo();
        $data['title']=$this->websiteInfoModel->display_title();
        $data['photo']=$this->personalAccountModel->get();
        $this->load->view('systemCustomization',$data);
    }

    function updateTitle()
    {
        $title=$this->input->post('title');
        $this->systemCustomizationModel->update_title($title);
        $this->session->set_flashdata("t_update","Title is Updated Successfully");

        $this->session->set_flashdata("t_not_updated","Title Is Not Updated Successfully");      
        redirect("SystemCustomizationController/index");

    }

    function updateLogo()
    {
    $config['upload_path'] = './assets/public/';
    $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
    $config['max_size'] = '1000'; 
    $config['overwrite']=TRUE;
    $this->upload->initialize($config);
    if ($this->upload->do_upload('logo'))
    {
      var_dump($this->upload->data());
    }
    else
    {
      var_dump($this->upload->display_errors());

    }
        $logo=$this->upload->data()['file_name'];
        $this->systemCustomizationModel->update_logo($logo);
        $this->session->set_flashdata("l_update","Logo is Updated Successfully");

        $this->session->set_flashdata("l_not_updated","Logo Is Not Updated Successfully");      
        redirect("SystemCustomizationController/index");
    }

    function updateGoal()
    {
        $goal=$this->input->post('goal');
        $description=$this->input->post('description');
        $this->systemCustomizationModel->update_goal($goal,$description);
        $this->session->set_flashdata("d_update","Description is Updated Successfully");

        $this->session->set_flashdata("d_not_updated","Description Is Not Updated Successfully");      
        redirect("SystemCustomizationController/index");
    }
}