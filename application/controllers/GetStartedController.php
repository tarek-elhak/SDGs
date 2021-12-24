<?php
class GetStartedController extends CI_Controller
{
    function __construct() {
        parent::__construct();

        $this->load->model('websiteInfoModel');
        $this->load->model('getStartedModel');
    }
    function index()
    {
        $data['logo']=$this->websiteInfoModel->display_logo();
        $data['title']=$this->websiteInfoModel->display_title();
        $this->load->view('getStarted',$data);
    }

    function statsIndex($location)
    {
        $data['logo']=$this->websiteInfoModel->display_logo();
        $data['title']=$this->websiteInfoModel->display_title();
        $data['value']=$this->getStartedModel->display_stat($location);
        
        $this->load->view('stats_view',$data);
        $this->getStartedModel->delete();
    }


    function compute()
    {
        $location = $_POST['select-state'];
        $no_goal = "not available";
        $goal1="No Poverty";
        $goal2="Zero Hunger";
        $goal3='Good Health and Well-Being';
        $goal6='Clean Water and Sanitation';
        $chart=$this->input->post("chart");
        if (isset($_POST['goal'])) {
            $goals = implode(' ', $_POST['goal']);
            
			if(strpos($goals , $goal1) !== false && strpos($goals , $goal2) !== false)
			{    
				$this->computeGoal1And2($goal1, $goal2 , $chart,$location);
            }

            elseif(strpos($goals , $goal1) !== false && strpos($goals , $goal2) !== false && strpos($goals , $goal3) !== false)
			{    
				$this->computeGoal1And2And3($goal1, $goal2 , $goal3, $chart,$location);
            }

			elseif (strpos($goals , $goal1) !== false)
			{
				$this->computeGoal1($goal1,$chart,$location);

			}
			elseif(strpos($goals , $goal2) !== false){

				$this->computeGoal2($goal2 , $chart,$location);
            
            }
            elseif(strpos($goals , $goal3) !== false){
                
				$this->computeGoal3($goal3,$chart,$location);
            
            }
            elseif(strpos($goals , $goal6) !== false){
                
                $this->computeGoal6($goal6,$chart,$location);
                
            }
            
          }
          else {
            $goal=$no_goal;
            
            $this->session->set_flashdata("not_available","Please Select one goal at least");      
            redirect("GetStartedController/index");       }
            
	

    }

    function getTotalPopulation($location)
    {
        //Begin of (Total Population)
        $loc=strtoupper(substr($location,0,3));
        $location1=[];
        $xmlfile1 = file_get_contents('XML/Population.xml');
        $ob1= simplexml_load_string($xmlfile1);
        $json1  = json_encode($ob1);
        $configData1 = json_decode($json1, true);
        foreach($configData1 as $data){
            foreach($data as $x){
                foreach($x as $y){
                    foreach($y as $z){
                        foreach($z as $h){
                            if(isset($h["@attributes"]['key']) && $h["@attributes"]['key'] == $loc){
                                
                                $location1[]=$z;
                                
                            }
                            else{

                            }
                        }
                    }
                }
            }
        }

        $year1=[];
        foreach($location1 as $arr){
            foreach($arr  as $index){
                if(isset($index[0])){
                    $index["@attributes"]['value']=$index[0];
                if($index["@attributes"]['name'] == "Year" &&  $index["@attributes"]['value'] == "2018"){
                    $year1[]=$arr;
                    
                }
                    
                }
            }
        }
        
        $population=0;
        foreach($year1 as $index){
            foreach($index  as $a){
                if(isset($a[0])){
                    $a["@attributes"]['value']=$a[0];
                    
                    if($a["@attributes"]['name'] == "Value"){
                        
                        $population=$a["@attributes"]['value'];
                    }
                }
            }
        }
        return $population;

    }


    function getPopulationUnderIPL($location)
    {
        $loc=strtoupper(substr($location,0,3));
        $IPL=0;
        $location2=[];
        $xmlfile2 = file_get_contents('XML/Goal1/IPL.xml');
        $ob2= simplexml_load_string($xmlfile2);
        $json2  = json_encode($ob2);
        $configData2 = json_decode($json2, true);
        foreach($configData2 as $data){
            foreach($data as $x){
                foreach($x as $y){
                    foreach($y as $z){
                        foreach($z as $h){
                            if(isset($h["@attributes"]['key']) && $h["@attributes"]['key'] == $loc){
                                
                                $location2[]=$z;
                                
                            }
                            else{

                            }
                        }
                    }
                }
            }
        }

        $year2=[];
        foreach($location2 as $arr){
            foreach($arr  as $index){
                if(isset($index[0])){
                    $index["@attributes"]['value']=$index[0];
                if($index["@attributes"]['name'] == "Year" &&  $index["@attributes"]['value'] == "2017"){
                    $year2[]=$arr;
                    
                }
                    
                }
            }
        }
        
        
        foreach($year2 as $index){
            foreach($index  as $a){
                if(isset($a[0])){
                    $a["@attributes"]['value']=$a[0];
                    
                    if($a["@attributes"]['name'] == "Value"){
                        
                        $IPL=$a["@attributes"]['value'];
                    }
                }
            }
        }
        return $IPL;
    }

    function getElecAccess($location)
    {
        $loc=strtoupper(substr($location,0,3));
        $Elec_Access=0;
        $location3=[];
        $xmlfile3 = file_get_contents('XML/Goal1/Elec_Access.xml');
        $ob3= simplexml_load_string($xmlfile3);
        $json3  = json_encode($ob3);
        $configData3 = json_decode($json3, true);
        foreach($configData3 as $data){
            foreach($data as $x){
                foreach($x as $y){
                    foreach($y as $z){
                        foreach($z as $h){
                            if(isset($h["@attributes"]['key']) && $h["@attributes"]['key'] == $loc){
                                
                                $location3[]=$z;
                                
                            }
                            else{

                            }
                        }
                    }
                }
            }
        }

        $year3=[];
        foreach($location3 as $arr){
            foreach($arr  as $index){
                if(isset($index[0])){
                    $index["@attributes"]['value']=$index[0];
                if($index["@attributes"]['name'] == "Year" &&  $index["@attributes"]['value'] == "2018"){
                    $year3[]=$arr;
                    
                }
                    
                }
            }
        }
        
        
        foreach($year3 as $index){
            foreach($index  as $a){
                if(isset($a[0])){
                    $a["@attributes"]['value']=$a[0];
                    
                    if($a["@attributes"]['name'] == "Value"){
                        
                        $Elec_Access=$a["@attributes"]['value'];
                    }
                }
            }
        }
        return $Elec_Access;
        
    }

    function getPrevalence($location)
    {
        $loc=strtoupper(substr($location,0,3));
        $prevalence=0;
        $location3=[];
        $xmlfile3 = file_get_contents('XML/Goal2/prevalence.xml');
        $ob3= simplexml_load_string($xmlfile3);
        $json3  = json_encode($ob3);
        $configData3 = json_decode($json3, true);
        foreach($configData3 as $data){
            foreach($data as $x){
                foreach($x as $y){
                    foreach($y as $z){
                        foreach($z as $h){
                            if(isset($h["@attributes"]['key']) && $h["@attributes"]['key'] == $loc){
                                
                                $location3[]=$z;
                                
                            }
                            else{

                            }
                        }
                    }
                }
            }
        }

        $year3=[];
        foreach($location3 as $arr){
            foreach($arr  as $index){
                if(isset($index[0])){
                    $index["@attributes"]['value']=$index[0];
                if($index["@attributes"]['name'] == "Year" &&  $index["@attributes"]['value'] == "2017"){
                    $year3[]=$arr;
                    
                }
                    
                }
            }
        }
        
        
        foreach($year3 as $index){
            foreach($index  as $a){
                if(isset($a[0])){
                    $a["@attributes"]['value']=$a[0];
                    
                    if($a["@attributes"]['name'] == "Value"){
                        
                        $prevalence=$a["@attributes"]['value'];
                    }
                }
            }
        }
        return $prevalence;

    }

    function getAgriculture($location)
    {
        $loc=strtoupper(substr($location,0,3));
        $agriculture=0;
        $location3=[];
        $xmlfile3 = file_get_contents('XML/Goal2/Agriculture.xml');
        $ob3= simplexml_load_string($xmlfile3);
        $json3  = json_encode($ob3);
        $configData3 = json_decode($json3, true);
        foreach($configData3 as $data){
            foreach($data as $x){
                foreach($x as $y){
                    foreach($y as $z){
                        foreach($z as $h){
                            if(isset($h["@attributes"]['key']) && $h["@attributes"]['key'] == $loc){
                                
                                $location3[]=$z;
                                
                            }
                            else{

                            }
                        }
                    }
                }
            }
        }

        $year3=[];
        foreach($location3 as $arr){
            foreach($arr  as $index){
                if(isset($index[0])){
                    $index["@attributes"]['value']=$index[0];
                if($index["@attributes"]['name'] == "Year" &&  $index["@attributes"]['value'] == "2018"){
                    $year3[]=$arr;
                    
                }
                    
                }
            }
        }
        
        
        foreach($year3 as $index){
            foreach($index  as $a){
                if(isset($a[0])){
                    $a["@attributes"]['value']=$a[0];
                    
                    if($a["@attributes"]['name'] == "Value"){
                        
                        $agriculture=$a["@attributes"]['value'];
                    }
                }
            }
        }
        return $agriculture;

    }

    function getBirthsBySkilledHealth($location)
    {
     $xmlFile = simplexml_load_file('XML/Goal3/Births_attended_by_skilled_health_personnel.xml');
     $facts = $xmlFile->Fact;
     $birthskilled=0;
     for ($counter = 0 ; $counter<count($facts) ; $counter++){

     if ($facts[$counter]->COUNTRY == $location){
        $birthskilled=$facts[$counter]->Display;
     break;
    }
    
    }
    return $birthskilled;

    }
    function getSanitationServices($location)
    {
     $xmlFile = simplexml_load_file('XML/Goal6/Basic_and_safely_managed_sanitation_services.xml');
     $facts = $xmlFile->Fact;
     $sanitation=0;
     for ($counter = 0 ; $counter<count($facts) ; $counter++){

     if ($facts[$counter]->COUNTRY == $location){
        $sanitation=$facts[$counter]->Display;
     break;
    }
    
    }
    return $sanitation;

    }

    function computeGoal1($goal,$chart,$location)
    {
        
        $result_set = $this->db->query("select IPL,electricity_access 
        from location WHERE location_name = '{$location}'
        ")->row();
        // $IPL = $result_set->IPL;
        // $Elec_Access = $result_set->electricity_access;
        if (empty($result_set)||$result_set->IPL==null || $result_set->electricity_access==null){
            //do parsing
            $population=$this->getTotalPopulation($location);//(Total Population)
            $IPL=$this->getPopulationUnderIPL($location);//(Population under IPL)
            $Elec_Access=$this->getElecAccess($location); //(Population with electricity access)
            //insert into DB for coming requests
            $result=$this->db->query("select * from location WHERE location_name = '{$location}'")->row();
            if(empty($result)){
            // insert into DB for coming requests
            $this->db->query(" insert into location (location_name , population , prevalence_of_undernourishment ,
            agriculture)
            values ('{$location}' , '{$population}' , '{$IPL}' , '{$Elec_Access}')
            ");
        }
        else
        {
            $this->db->query(" update location set population='{$population}',electricity_access='{$Elec_Access}',IPL='{$IPL}'
            WHERE location_name = '{$location}'"); 
        }
        }
        else{
            $result_set1 = $this->db->query("select population from location WHERE location_name = '{$location}'")->row();
            $population = $result_set1->population;
            $IPL = $result_set->IPL;
            $Elec_Access = $result_set->electricity_access;
        }
        
        $indicator1=(float)$IPL/100;
        $indicator5=((((int)$Elec_Access/100)*(int)$population)/(int)$population);
        $i1=$this->db->query("select indicator_weight from indicator where goal_id=1 and indicator_name='ind_1.1.1'")->row();
        $i5=$this->db->query("select indicator_weight from indicator where goal_id=1 and indicator_name='ind_1.4.1'")->row();



        $indicator1_weight=$i1->indicator_weight; //1.1.1
        $indicator2_weight=0; //1.2.1
        $indicator3_weight=0; //1.2.2
        $indicator4_weight=0; //1.3.1
        $indicator5_weight=$i5->indicator_weight; //1.4.1
        $indicator6_weight=0; //1.4.2
        $indicator7_weight=0; //1.5.1
        $indicator8_weight=0; //1.5.2
        $indicator9_weight=0; //1.5.3
        $indicator10_weight=0; //1.5.4
        $indicator11_weight=0; //1.a.1
        $indicator12_weight=0; //1.a.2
        $indicator13_weight=0; //1.a.3

        $goal_value=(($indicator1_weight*$indicator1)+($indicator5_weight*$indicator5));
        

        $this->getStartedModel->compute($goal,$location,$goal_value,$chart);
        $this->statsIndex($location);


    }

    function computeGoal2($goal,$chart,$location)
    {

        $result_set = $this->db->query("select prevalence_of_undernourishment,agriculture
        from location WHERE location_name = '{$location}'
        ")->row();
        // $prevalence = $result_set->prevalence_of_undernourishment;
        // $agriculture = $result_set->agriculture;

        if (empty($result_set)||$result_set->prevalence_of_undernourishment==null || $result_set->agriculture==null){
            // do parsing
            $population=$this->getTotalPopulation($location);//(Total Population)
            $prevalence=$this->getPrevalence($location);//(prevalence_of_undernourishment)
            $agriculture=$this->getAgriculture($location); //(agriculture)

            $result=$this->db->query("select * from location WHERE location_name = '{$location}'")->row();
            if(empty($result)){
            // insert into DB for coming requests
            $this->db->query(" insert into location (location_name , population , prevalence_of_undernourishment ,
            agriculture)
            values ('{$location}' , '{$population}' , '{$prevalence}' , '{$agriculture}')
            ");
        }
        else
        {
            $this->db->query(" update location set population='{$population}',prevalence_of_undernourishment='{$prevalence}',agriculture='{$agriculture}'
            WHERE location_name = '{$location}'"); 
        }
        }
        else{
            $result_set1 = $this->db->query("select population from location WHERE location_name = '{$location}'")->row();
            $population = $result_set1->population;
            $prevalence = $result_set->prevalence_of_undernourishment;
            $agriculture = $result_set->agriculture;
        }




        $indicator1=((($prevalence/100)*$population)/$population);
        $indicator10=($agriculture/100);
        $i1=$this->db->query("select indicator_weight from indicator where goal_id=2 and indicator_name='ind_2.1.1'")->row();
        $i10=$this->db->query("select indicator_weight from indicator where goal_id=2 and indicator_name='ind_2.a.1'")->row();

        $indicator1_weight=$i1->indicator_weight; //2.1.1
        $indicator2_weight=0; //2.1.2
        $indicator3_weight=0; //2.2.1
        $indicator4_weight=0; //2.2.2
        $indicator5_weight=0; //2.3.1
        $indicator6_weight=0; //2.3.2
        $indicator7_weight=0; //2.4.1
        $indicator8_weight=0; //2.5.1
        $indicator9_weight=0.4; //2.5.2
        $indicator10_weight=$i10->indicator_weight; //2.a.1
        $indicator11_weight=0.3; //2.a.2
        $indicator12_weight=0; //2.b.1
        $indicator13_weight=0.2; //2.c.1

        
        $goal_value=(($indicator1_weight*$indicator1)+($indicator10_weight*$indicator10));

        $this->getStartedModel->compute($goal,$location,$goal_value,$chart);
        $this->statsIndex($location);


    }

    function computeGoal3($goal,$chart,$location)
    {
        $result_set = $this->db->query("select births_attended_by_skilled_health
        from location WHERE location_name = '{$location}'
        ")->row();
        
        if (empty($result_set)||($result_set->births_attended_by_skilled_health==null)){
            // do parsing
            $births_by_skilled_health=$this->getBirthsBySkilledHealth($location);
            
            $result=$this->db->query("select * from location WHERE location_name = '{$location}'")->row();
            if(empty($result)){
            // insert into DB for coming requests
            $this->db->query(" insert into location (location_name,births_attended_by_skilled_health)
            values ('{$location}' , '{$births_by_skilled_health}')
            ");
        }
        else
        {
            $this->db->query(" update location set births_attended_by_skilled_health = '{$births_by_skilled_health}' 
            WHERE location_name = '{$location}'"); 
        }
        }
        else{
            $result_set1 = $this->db->query("select births_attended_by_skilled_health from location WHERE location_name = '{$location}'")->row();
            $births_by_skilled_health = $result_set1->births_attended_by_skilled_health;

        }


        $indicator1=$births_by_skilled_health;
        $i1=$this->db->query("select indicator_weight from indicator where goal_id=2 and indicator_name='ind_2.1.1'")->row();
        $i10=$this->db->query("select indicator_weight from indicator where goal_id=2 and indicator_name='ind_2.a.1'")->row();

        $indicator1_weight=$i1->indicator_weight; //2.1.1
        $indicator2_weight=0; //2.1.2
        $indicator3_weight=0; //2.2.1
        $indicator4_weight=0; //2.2.2
        $indicator5_weight=0; //2.3.1
        $indicator6_weight=0; //2.3.2
        $indicator7_weight=0; //2.4.1
        $indicator8_weight=0; //2.5.1
        $indicator9_weight=0.4; //2.5.2
        $indicator10_weight=$i10->indicator_weight; //2.a.1
        $indicator11_weight=0.3; //2.a.2
        $indicator12_weight=0; //2.b.1
        $indicator13_weight=0.2; //2.c.1

        $goal_value=($indicator1_weight*$indicator1)/100;

        $this->getStartedModel->compute($goal,$location,$goal_value,$chart);
        $this->statsIndex($location);

    }

    function computeGoal6($goal,$chart,$location)
    {
        $result_set = $this->db->query("select Basic_and_safely_managed_sanitation_services
        from location WHERE location_name = '{$location}'
        ")->row();
        
        if (empty($result_set)||($result_set->Basic_and_safely_managed_sanitation_services==null)){
            // do parsing
            $sanitation=$this->getSanitationServices($location);
            
            $result=$this->db->query("select * from location WHERE location_name = '{$location}'")->row();
            if(empty($result)){
            // insert into DB for coming requests
            $this->db->query(" insert into location (location_name,Basic_and_safely_managed_sanitation_services)
            values ('{$location}' , '{$sanitation}')
            ");
        }
        else
        {
            $this->db->query(" update location set Basic_and_safely_managed_sanitation_services = '{$sanitation}' 
            WHERE location_name = '{$location}'"); 
        }
        }
        else{
            $result_set1 = $this->db->query("select Basic_and_safely_managed_sanitation_services from location WHERE location_name = '{$location}'")->row();
            $sanitation = $result_set1->Basic_and_safely_managed_sanitation_services;
        }


        $indicator1=$sanitation;
        $i1=$this->db->query("select indicator_weight from indicator where goal_id=2 and indicator_name='ind_2.1.1'")->row();
        $i10=$this->db->query("select indicator_weight from indicator where goal_id=2 and indicator_name='ind_2.a.1'")->row();

        $indicator1_weight=$i1->indicator_weight; //2.1.1
        $indicator2_weight=0; //2.1.2
        $indicator3_weight=0; //2.2.1
        $indicator4_weight=0; //2.2.2
        $indicator5_weight=0; //2.3.1
        $indicator6_weight=0; //2.3.2
        $indicator7_weight=0; //2.4.1
        $indicator8_weight=0; //2.5.1
        $indicator9_weight=0.4; //2.5.2
        $indicator10_weight=$i10->indicator_weight; //2.a.1
        $indicator11_weight=0.3; //2.a.2
        $indicator12_weight=0; //2.b.1
        $indicator13_weight=0.2; //2.c.1

        $goal_value=($indicator1_weight*$indicator1)/100;

        $this->getStartedModel->compute($goal,$location,$goal_value,$chart);
        $this->statsIndex($location);

    }


    
    public function computeGoal1And2($goal1, $goal2, $chart,$location)
	{
		$result_set = $this->db->query("select population ,IPL,electricity_access,prevalence_of_undernourishment,agriculture
        from location WHERE location_name = '{$location}'
        ")->row();
		if (empty($result_set)){
			// do parsing
			$population =$this->getTotalPopulation($location);//(Total Population)
			$IPL =$this->getPopulationUnderIPL($location);//(IPL)
			$Elec_Access =$this->getElecAccess($location);//(electricity access)
			$prevalence =$this->getPrevalence($location);//(prevalence_of_undernourishment)
			$agriculture=$this->getAgriculture($location); //(agriculture)
			// save into DB
			$this->db->query(" insert into location (location_name , population , IPL , electricity_access , 
 			prevalence_of_undernourishment , agriculture
        	)
            values ('{$location}' , '{$population}' , '{$IPL}' , '{$Elec_Access}' , '{$prevalence}' , '{$agriculture}')
            ");
		}else{
			$population = $result_set->population;
			$IPL = $result_set->IPL;
			$Elec_Access = $result_set->electricity_access;
			$prevalence = $result_set->prevalence_of_undernourishment;
			$agriculture = $result_set->agriculture;
			if ($Elec_Access == null || $IPL == null || $prevalence == null||$agriculture == null){
//			// do parsing
			$population =$this->getTotalPopulation($location);//(Total Population)
			$IPL =$this->getPopulationUnderIPL($location);//(IPL)
			$Elec_Access =$this->getElecAccess($location);//(electricity access)
			$prevalence =$this->getPrevalence($location);//(prevalence_of_undernourishment)
			$agriculture=$this->getAgriculture($location); //(agriculture)
			// save into DB
			$this->db->query(" insert into location (location_name , population , IPL , electricity_access ,
 			prevalence_of_undernourishment , agriculture
        	)
            values ('{$location}' , '{$population}' , '{$IPL}' , '{$Elec_Access}' , '{$prevalence}' , '{$agriculture}')
            ");
			}
		}

		// No Poverty
		$indicator1=(float)$IPL/100;
		$indicator5=((((int)$Elec_Access/100)*(int)$population)/(int)$population);
		$i1=$this->db->query("select indicator_weight from indicator where goal_id=1 and indicator_name='ind_1.1.1'")->row();
		$i5=$this->db->query("select indicator_weight from indicator where goal_id=1 and indicator_name='ind_1.4.1'")->row();



		$indicator1_weight=$i1->indicator_weight; //1.1.1
		$indicator2_weight=0; //1.2.1
		$indicator3_weight=0; //1.2.2
		$indicator4_weight=0; //1.3.1
		$indicator5_weight=$i5->indicator_weight; //1.4.1
		$indicator6_weight=0; //1.4.2
		$indicator7_weight=0; //1.5.1
		$indicator8_weight=0; //1.5.2
		$indicator9_weight=0; //1.5.3
		$indicator10_weight=0; //1.5.4
		$indicator11_weight=0; //1.a.1
		$indicator12_weight=0; //1.a.2
		$indicator13_weight=0; //1.a.3

		$No_Poverty_Value=(($indicator1_weight*$indicator1)+($indicator5_weight*$indicator5));

		// No Hunger
		$indicator1=((($prevalence/100)*$population)/$population);
		$indicator10=($agriculture/100);
		$i1=$this->db->query("select indicator_weight from indicator where goal_id=2 and indicator_name='ind_2.1.1'")->row();
		$i10=$this->db->query("select indicator_weight from indicator where goal_id=2 and indicator_name='ind_2.a.1'")->row();

		$indicator1_weight=$i1->indicator_weight; //2.1.1
		$indicator2_weight=0; //2.1.2
		$indicator3_weight=0; //2.2.1
		$indicator4_weight=0; //2.2.2
		$indicator5_weight=0; //2.3.1
		$indicator6_weight=0; //2.3.2
		$indicator7_weight=0; //2.4.1
		$indicator8_weight=0; //2.5.1
		$indicator9_weight=0.4; //2.5.2
		$indicator10_weight=$i10->indicator_weight; //2.a.1
		$indicator11_weight=0.3; //2.a.2
		$indicator12_weight=0; //2.b.1
		$indicator13_weight=0.2; //2.c.1

		$No_Hunger_Value =(($indicator1_weight*$indicator1)+($indicator10_weight*$indicator10));

		$this->getStartedModel->compute1And2('No Poverty' , 'Zero Hunger' , $No_Poverty_Value ,
			$No_Hunger_Value , $location , $chart);
		$this->statsIndex($location);
    }
    
    public function computeGoal1And2And3($goal1, $goal2 , $goal3, $chart,$location)
	{
		$result_set = $this->db->query("select population ,IPL,electricity_access,prevalence_of_undernourishment,agriculture,births_attended_by_skilled_health
        from location WHERE location_name = '{$location}'
        ")->row();
		if ((empty($result_set)) || ($result_set->electricity_access == null) || ($result_set->IPL == null)|| ($result_set->prevalence_of_undernourishment == null) || ($result_set->agriculture == null) || ($result_set->births_attended_by_skilled_health == null)){
			// do parsing
			$population =$this->getTotalPopulation($location);//(Total Population)
			$IPL =$this->getPopulationUnderIPL($location);//(IPL)
			$Elec_Access =$this->getElecAccess($location);//(electricity access)
			$prevalence =$this->getPrevalence($location);//(prevalence_of_undernourishment)
            $agriculture=$this->getAgriculture($location);
            $births_attended_by_skilled_health=$this->getBirthsBySkilledHealth($location); //(agriculture)
            // save into DB
            $result=$this->db->query("select * from location WHERE location_name = '{$location}'")->row();
            if(empty($result)){
            // insert into DB for coming requests
            $this->db->query(" insert into location (location_name , population , IPL , electricity_access , 
            prevalence_of_undernourishment , agriculture,births_attended_by_skilled_health
           )
           values ('{$location}' , '{$population}' , '{$IPL}' , '{$Elec_Access}' , '{$prevalence}' , '{$agriculture}' , '{$births_attended_by_skilled_health}')
           ");
        }
        else
        {
            $this->db->query(" update location set population = '{$population}',IPL='{$IPL}',electricity_access='{$Elec_Access}',prevalence_of_undernourishment='{$prevalence}',agriculture='{$agriculture}',births_attended_by_skilled_health='{$births_attended_by_skilled_health}'
            WHERE location_name = '{$location}'"); 
        }
            

		}else{
			$population = $result_set->population;
			$IPL = $result_set->IPL;
			$Elec_Access = $result_set->electricity_access;
			$prevalence = $result_set->prevalence_of_undernourishment;
            $agriculture = $result_set->agriculture;
            $births_attended_by_skilled_health=$result_set->births_attended_by_skilled_health;
			// save into DB
			$this->db->query(" insert into location (location_name , population , IPL , electricity_access ,
 			prevalence_of_undernourishment , agriculture,births_attended_by_skilled_health
        	)
            values ('{$location}' , '{$population}' , '{$IPL}' , '{$Elec_Access}' , '{$prevalence}' , '{$agriculture}' , '{$births_attended_by_skilled_health}')
            ");
			}
		

		// No Poverty
		$indicator1=(float)$IPL/100;
		$indicator5=((((int)$Elec_Access/100)*(int)$population)/(int)$population);
		$i1=$this->db->query("select indicator_weight from indicator where goal_id=1 and indicator_name='ind_1.1.1'")->row();
		$i5=$this->db->query("select indicator_weight from indicator where goal_id=1 and indicator_name='ind_1.4.1'")->row();



		$indicator1_weight=$i1->indicator_weight; //1.1.1
		$indicator2_weight=0; //1.2.1
		$indicator3_weight=0; //1.2.2
		$indicator4_weight=0; //1.3.1
		$indicator5_weight=$i5->indicator_weight; //1.4.1
		$indicator6_weight=0; //1.4.2
		$indicator7_weight=0; //1.5.1
		$indicator8_weight=0; //1.5.2
		$indicator9_weight=0; //1.5.3
		$indicator10_weight=0; //1.5.4
		$indicator11_weight=0; //1.a.1
		$indicator12_weight=0; //1.a.2
		$indicator13_weight=0; //1.a.3

		$No_Poverty_Value=(($indicator1_weight*$indicator1)+($indicator5_weight*$indicator5));

		// No Hunger
		$indicator1=((($prevalence/100)*$population)/$population);
		$indicator10=($agriculture/100);
		$i1=$this->db->query("select indicator_weight from indicator where goal_id=2 and indicator_name='ind_2.1.1'")->row();
		$i10=$this->db->query("select indicator_weight from indicator where goal_id=2 and indicator_name='ind_2.a.1'")->row();

		$indicator1_weight=$i1->indicator_weight; //2.1.1
		$indicator2_weight=0; //2.1.2
		$indicator3_weight=0; //2.2.1
		$indicator4_weight=0; //2.2.2
		$indicator5_weight=0; //2.3.1
		$indicator6_weight=0; //2.3.2
		$indicator7_weight=0; //2.4.1
		$indicator8_weight=0; //2.5.1
		$indicator9_weight=0.4; //2.5.2
		$indicator10_weight=$i10->indicator_weight; //2.a.1
		$indicator11_weight=0.3; //2.a.2
		$indicator12_weight=0; //2.b.1
		$indicator13_weight=0.2; //2.c.1

        $No_Hunger_Value =(($indicator1_weight*$indicator1)+($indicator10_weight*$indicator10));

        $indicator=$births_attended_by_skilled_health;
        $i1=$this->db->query("select indicator_weight from indicator where goal_id=2 and indicator_name='ind_2.1.1'")->row();
        $i10=$this->db->query("select indicator_weight from indicator where goal_id=2 and indicator_name='ind_2.a.1'")->row();

        $indicator1_weight=$i1->indicator_weight; //2.1.1
        $indicator2_weight=0; //2.1.2
        $indicator3_weight=0; //2.2.1
        $indicator4_weight=0; //2.2.2
        $indicator5_weight=0; //2.3.1
        $indicator6_weight=0; //2.3.2
        $indicator7_weight=0; //2.4.1
        $indicator8_weight=0; //2.5.1
        $indicator9_weight=0.4; //2.5.2
        $indicator10_weight=$i10->indicator_weight; //2.a.1
        $indicator11_weight=0.3; //2.a.2
        $indicator12_weight=0; //2.b.1
        $indicator13_weight=0.2; //2.c.1

        $Good_health_Value=($indicator1_weight*$indicator)/100;

		$this->getStartedModel->compute1And2And3('No Poverty' , 'Zero Hunger' ,'Good Health and Well-Being', $No_Poverty_Value ,
			$No_Hunger_Value ,$Good_health_Value, $location , $chart);
		$this->statsIndex($location);
	}

}