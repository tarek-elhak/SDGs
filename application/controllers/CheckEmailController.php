<?php
class CheckEmailController extends CI_Controller
{
    public function __construct()
	{
	parent::__construct();
	
	$this->load->model('checkEmailModel');
	}
    public function check_Email()
    {
        $this->load->model('checkEmailModel');
        if($this->checkEmailModel->checkEmail($_POST['email']))
        {
            echo '<label class="text-danger"><span><i class="fa fa-times" aria-hidden="true">
            </i> This Email Already Exists</span></label>';
           }
           else {
            echo '<label class="text-success"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i> Email is available</span></label>';
        }
    }
}