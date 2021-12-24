<?php
class UploadDataController extends CI_Controller 
{
    function __construct() {
        parent::__construct();

        $this->load->model('websiteInfoModel');
        $this->load->model('personalAccountModel');
        $this->load->model('uploadDataModel');
        $this->load->library('session');
        $this->load->library('Excel');
        if(! $this->session->userdata('validated')){
            redirect('LoginController');
    }
    }
    public function index()
    {
        $data['logo']=$this->websiteInfoModel->display_logo();
        $data['title']=$this->websiteInfoModel->display_title();
        $data['photo']=$this->personalAccountModel->get();
        $data['location']=$this->uploadDataModel->select();
        $this->load->view('uploadData',$data);
    }
    function import()
    {
     if(isset($_FILES["file"]["name"]))
     {
      $path = $_FILES["file"]["tmp_name"];
      $object = PHPExcel_IOFactory::load($path);
      foreach($object->getWorksheetIterator() as $worksheet)
      {
       $highestRow = $worksheet->getHighestRow();
       $highestColumn = $worksheet->getHighestColumn();
       for($row=2; $row<=$highestRow; $row++)
       {
        $location_name = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
        $population = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
        $IPL = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
        $electricity_access = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
        $prevalence_of_undernourishment = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
        $agriculture = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
        $births_attended_by_skilled_health = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
        $Basic_and_safely_managed_sanitation_services = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
        
        $data[] = array(
         'location_name'  => $location_name,
         'population'   => $population,
         'IPL'    => $IPL,
         'electricity_access'  => $electricity_access,
         'prevalence_of_undernourishment'   =>$prevalence_of_undernourishment,
         'agriculture'   => $agriculture,
         'births_attended_by_skilled_health'=>$births_attended_by_skilled_health,
         'Basic_and_safely_managed_sanitation_services'=>$Basic_and_safely_managed_sanitation_services
        );
       }
      }
      $this->uploadDataModel->insert($data);
      $this->session->set_flashdata('add', 'Location Data is Successfully Added.');
    
      $this->session->set_flashdata('not_added', 'Location Data is not Successfully Added.');
  
       redirect('UploadDataController/index');
     } 

    }
}

?>