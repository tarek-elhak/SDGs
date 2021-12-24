<?php
class getStartedModel extends CI_Model
{
    public function compute($goal,$location,$goal_value,$chart)
    {
        $goalsColors = array (
            'No Poverty' => '#E5243B',
            'Zero Hunger' => '#DDA63A',
            'Good Health and Well-Being' => '#4C9F38',
            'Quality Education' => '#C5192D',
            'Gender Equality' => '#FF3A21',
            'Clean Water and Sanitation' => '#26BDE2',
            'Affordable and Clean Energy' => '#FCC30B',
            'Decent Work and Economic Growth' => '#A21942',
            'Industry, Innovation and Infrastructure' => '#FD6925',
            'Reduced Inequality' => '#DD1367',
            'Sustainable Cities and Communities' => '#FD9D24',
            'Responsible Consumption and Production' => '#BF8B2E',
            'Climate Action' => '#3F7E44',
            'Life Below Water' => '#0A97D9',
            'Life on Land' => '#56C02B',
            'Peace and Justice Strong Instituation' => '#00689D',
            'Partnerships to achieve the Goal' => '#19486A'
        );
        $goal_color = $goalsColors[$goal];
        $query="insert into stats(goal,location,value,chart,goal_color) values ('$goal',
        '$location','$goal_value','$chart' , '$goal_color' )";
        $this->db->query($query);


    }

    public function compute1And2($goal1 , $goal2 , $goal1_value , $goal2_value , $location , $chart){
		$goalsColors = array (
			'No Poverty' => '#E5243B',
			'Zero Hunger' => '#DDA63A',
			'Good Health And Well-Being' => '#4C9F38',
			'Quality Education' => '#C5192D',
			'Gender Equality' => '#FF3A21',
			'Clean Water And Sanitation' => '#26BDE2',
			'Affordable and Clean Energy' => '#FCC30B',
			'Decent Work and Economic Growth' => '#A21942',
			'Industry, Innovation and Infrastructure' => '#FD6925',
			'Reduced Inequality' => '#DD1367',
			'Sustainable Cities and Communities' => '#FD9D24',
			'Responsible Consumption and Production' => '#BF8B2E',
			'Climate Action' => '#3F7E44',
			'Life Below Water' => '#0A97D9',
			'Life on Land' => '#56C02B',
			'Peace and Justice Strong Instituation' => '#00689D',
			'Partnerships to achieve the Goal' => '#19486A'
		);
		$goal_one_color = $goalsColors[$goal1];
		$goal_two_color = $goalsColors[$goal2];
		// Goal 1
		$query="insert into stats(goal,location,value,chart,goal_color) values ('$goal1',
        '$location','$goal1_value','$chart' , '$goal_one_color' )";
		$this->db->query($query);
		// Goal 2
		$query="insert into stats(goal,location,value,chart,goal_color) values ('$goal2',
        '$location','$goal2_value','$chart' , '$goal_two_color' )";
		$this->db->query($query);
    }

    function compute1And2And3($goal1 , $goal2 ,$goal3, $No_Poverty_Value ,$No_Hunger_Value ,$Good_health_Value, $location , $chart)
    {
        $goalsColors = array (
			'No Poverty' => '#E5243B',
			'Zero Hunger' => '#DDA63A',
			'Good Health And Well-Being' => '#4C9F38',
			'Quality Education' => '#C5192D',
			'Gender Equality' => '#FF3A21',
			'Clean Water And Sanitation' => '#26BDE2',
			'Affordable and Clean Energy' => '#FCC30B',
			'Decent Work and Economic Growth' => '#A21942',
			'Industry, Innovation and Infrastructure' => '#FD6925',
			'Reduced Inequality' => '#DD1367',
			'Sustainable Cities and Communities' => '#FD9D24',
			'Responsible Consumption and Production' => '#BF8B2E',
			'Climate Action' => '#3F7E44',
			'Life Below Water' => '#0A97D9',
			'Life on Land' => '#56C02B',
			'Peace and Justice Strong Instituation' => '#00689D',
			'Partnerships to achieve the Goal' => '#19486A'
		);
		$goal_one_color = $goalsColors[$goal1];
        $goal_two_color = $goalsColors[$goal2];
        $goal_three_color = $goalsColors[$goal3];
		// Goal 1
		$query="insert into stats(goal,location,value,chart,goal_color) values ('$goal1',
        '$location','$No_Poverty_Value','$chart' , '$goal_one_color' )";
		$this->db->query($query);
		// Goal 2
		$query="insert into stats(goal,location,value,chart,goal_color) values ('$goal2',
        '$location','$No_Hunger_Value','$chart' , '$goal_two_color' )";
        $this->db->query($query);
        // Goal 3
		$query="insert into stats(goal,location,value,chart,goal_color) values ('$goal3',
        '$location','$Good_health_Value','$chart' , '$goal_three_color' )";
        $this->db->query($query);

    }



    function display_stat($location)
    {
        $this->db->from('stats');
        $this->db->where('location',$location);
        $query=$this->db->get('');
        if ($query->num_rows()>0)
        {
            return $query->result();
        }
        
    }

    function delete()
    {
        $this->db->truncate('stats');
    }

}