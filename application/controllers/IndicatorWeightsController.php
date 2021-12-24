<?php
class IndicatorWeightsController extends CI_Controller
{
    function __construct() {
        parent::__construct();

        $this->load->model('websiteInfoModel');
        $this->load->model('personalAccountModel');
        $this->load->model('indicatorWeightsModel');
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
        $this->load->view('indicatorWeights',$data);
    }


    function update_goal1()
    {
    $i1=$this->input->post('ind111'); 
    $i2=$this->input->post('ind121');
    $i3=$this->input->post('ind122');
    $i4=$this->input->post('ind131');
    $i5=$this->input->post('ind141');
    $i6=$this->input->post('ind142');
    $i7=$this->input->post('ind151');
    $this->indicatorWeightsModel->updateGoal1($i1,$i2,$i3,$i4,$i5,$i6,$i7);
    $this->session->set_flashdata("update","Weights are Updated Successfully");

    $this->session->set_flashdata("not_updated","Weights Not Updated Successfully");      
    redirect("IndicatorWeightsController/index");
    }

    function update_goal2()
    {
    $i1=$this->input->post('ind211');
    $i2=$this->input->post('ind212');
    $i3=$this->input->post('ind221');
    $i4=$this->input->post('ind222');
    $i5=$this->input->post('ind231');
    $i6=$this->input->post('ind232');
    $i7=$this->input->post('ind241');
    $i8=$this->input->post('ind251');
    $i9=$this->input->post('ind252');
    $i10=$this->input->post('ind2a1');
    $i11=$this->input->post('ind2a2');
    $i12=$this->input->post('ind2b1');
    $i13=$this->input->post('ind2c1');
    $this->indicatorWeightsModel->updateGoal2($i1,$i2,$i3,$i4,$i5,$i6,$i7,$i8,$i9,$i10,$i11,$i12,$i13);
    $this->session->set_flashdata("update","Weights are Updated Successfully");

    $this->session->set_flashdata("not_updated","Weights Not Updated Successfully");      
    redirect("IndicatorWeightsController/index");
    }
}