<?php
class GoalsController extends CI_Controller
{
    function __construct() {
        parent::__construct();

        $this->load->model('websiteInfoModel');
    }

    function goal1()
    {
        $data['logo']=$this->websiteInfoModel->display_logo();
        $data['title']=$this->websiteInfoModel->display_title();
        $data['goal1']=$this->websiteInfoModel->display_goal1();
        $this->load->view('goal1', $data);
    }

    function goal2()
    {
        $data['logo']=$this->websiteInfoModel->display_logo();
        $data['title']=$this->websiteInfoModel->display_title();
        $data['goal2']=$this->websiteInfoModel->display_goal2();
        $this->load->view('goal2', $data);
    }

    function goal3()
    {
        $data['logo']=$this->websiteInfoModel->display_logo();
        $data['title']=$this->websiteInfoModel->display_title();
        $data['goal3']=$this->websiteInfoModel->display_goal3();
        $this->load->view('goal3', $data);
    }

    function goal4()
    {
        $data['logo']=$this->websiteInfoModel->display_logo();
        $data['title']=$this->websiteInfoModel->display_title();
        $data['goal4']=$this->websiteInfoModel->display_goal4();
        $this->load->view('goal4', $data);
    }

    function goal5()
    {
        $data['logo']=$this->websiteInfoModel->display_logo();
        $data['title']=$this->websiteInfoModel->display_title();
        $data['goal5']=$this->websiteInfoModel->display_goal5();
        $this->load->view('goal5', $data);
    }

    function goal6()
    {
        $data['logo']=$this->websiteInfoModel->display_logo();
        $data['title']=$this->websiteInfoModel->display_title();
        $data['goal6']=$this->websiteInfoModel->display_goal6();
        $this->load->view('goal6', $data);
    }

    function goal7()
    {
        $data['logo']=$this->websiteInfoModel->display_logo();
        $data['title']=$this->websiteInfoModel->display_title();
        $data['goal7']=$this->websiteInfoModel->display_goal7();
        $this->load->view('goal7', $data);
    }

    function goal8()
    {
        $data['logo']=$this->websiteInfoModel->display_logo();
        $data['title']=$this->websiteInfoModel->display_title();
        $data['goal8']=$this->websiteInfoModel->display_goal8();
        $this->load->view('goal8', $data);
    }

    function goal9()
    {
        $data['logo']=$this->websiteInfoModel->display_logo();
        $data['title']=$this->websiteInfoModel->display_title();
        $data['goal9']=$this->websiteInfoModel->display_goal9();
        $this->load->view('goal9', $data);
    }

    function goal10()
    {
        $data['logo']=$this->websiteInfoModel->display_logo();
        $data['title']=$this->websiteInfoModel->display_title();
        $data['goal10']=$this->websiteInfoModel->display_goal10();
        $this->load->view('goal10', $data);
    }

    function goal11()
    {
        $data['logo']=$this->websiteInfoModel->display_logo();
        $data['title']=$this->websiteInfoModel->display_title();
        $data['goal11']=$this->websiteInfoModel->display_goal11();
        $this->load->view('goal11', $data);
    }

    function goal12()
    {
        $data['logo']=$this->websiteInfoModel->display_logo();
        $data['title']=$this->websiteInfoModel->display_title();
        $data['goal12']=$this->websiteInfoModel->display_goal12();
        $this->load->view('goal12', $data);
    }

    function goal13()
    {
        $data['logo']=$this->websiteInfoModel->display_logo();
        $data['title']=$this->websiteInfoModel->display_title();
        $data['goal13']=$this->websiteInfoModel->display_goal13();
        $this->load->view('goal13', $data);
    }

    function goal14()
    {
        $data['logo']=$this->websiteInfoModel->display_logo();
        $data['title']=$this->websiteInfoModel->display_title();
        $data['goal14']=$this->websiteInfoModel->display_goal14();
        $this->load->view('goal14', $data);
    }

    function goal15()
    {
        $data['logo']=$this->websiteInfoModel->display_logo();
        $data['title']=$this->websiteInfoModel->display_title();
        $data['goal15']=$this->websiteInfoModel->display_goal15();
        $this->load->view('goal15', $data);
    }

    function goal16()
    {
        $data['logo']=$this->websiteInfoModel->display_logo();
        $data['title']=$this->websiteInfoModel->display_title();
        $data['goal16']=$this->websiteInfoModel->display_goal16();
        $this->load->view('goal16', $data);
    }

    function goal17()
    {
        $data['logo']=$this->websiteInfoModel->display_logo();
        $data['title']=$this->websiteInfoModel->display_title();
        $data['goal17']=$this->websiteInfoModel->display_goal17();
        $this->load->view('goal17', $data);
    }
}