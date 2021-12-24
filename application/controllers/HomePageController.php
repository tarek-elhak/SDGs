<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomePageController extends CI_Controller {
    function __construct() {
        parent::__construct();

        $this->load->model('websiteInfoModel');
    }
    function index(){
		$data['get_started'] = $this->websiteInfoModel->display_getStarted();
    $data['philosophy']=$this->websiteInfoModel->display_philosophy();
    $data['logo']=$this->websiteInfoModel->display_logo();
    $data['title']=$this->websiteInfoModel->display_title();
    $data['goal1']=$this->websiteInfoModel->display_goal1();
    $data['goal2']=$this->websiteInfoModel->display_goal2();
    $data['goal3']=$this->websiteInfoModel->display_goal3();
    $data['goal4']=$this->websiteInfoModel->display_goal4();
    $data['goal5']=$this->websiteInfoModel->display_goal5();
    $data['goal6']=$this->websiteInfoModel->display_goal6();
    $data['goal7']=$this->websiteInfoModel->display_goal7();
    $data['goal8']=$this->websiteInfoModel->display_goal8();
    $data['goal9']=$this->websiteInfoModel->display_goal9();
    $data['goal10']=$this->websiteInfoModel->display_goal10();
    $data['goal11']=$this->websiteInfoModel->display_goal11();
    $data['goal12']=$this->websiteInfoModel->display_goal12();
    $data['goal13']=$this->websiteInfoModel->display_goal13();
    $data['goal14']=$this->websiteInfoModel->display_goal14();
    $data['goal15']=$this->websiteInfoModel->display_goal15();
    $data['goal16']=$this->websiteInfoModel->display_goal16();
    $data['goal17']=$this->websiteInfoModel->display_goal17();

		$this->load->view('home_page', $data);
		

    }


}
