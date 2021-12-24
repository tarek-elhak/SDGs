<?php
class indicatorWeightsModel extends CI_Model
{

    function updateGoal1($i1,$i2,$i3,$i4,$i5,$i6,$i7)
    {
        $this->db->query("update indicator SET indicator_weight='$i1'where goal_id=1 and indicator_name='ind_1.1.1'");
        $this->db->query("update indicator SET indicator_weight='$i2'where goal_id=1 and indicator_name='ind_1.2.1'");
        $this->db->query("update indicator SET indicator_weight='$i3'where goal_id=1 and indicator_name='ind_1.2.2'");
        $this->db->query("update indicator SET indicator_weight='$i4'where goal_id=1 and indicator_name='ind_1.3.1'");
        $this->db->query("update indicator SET indicator_weight='$i5'where goal_id=1 and indicator_name='ind_1.4.1'");
        $this->db->query("update indicator SET indicator_weight='$i6'where goal_id=1 and indicator_name='ind_1.4.2'");
        $this->db->query("update indicator SET indicator_weight='$i7'where goal_id=1 and indicator_name='ind_1.5.1'");
        
    }

    function updateGoal2($i1,$i2,$i3,$i4,$i5,$i6,$i7,$i8,$i9,$i10,$i11,$i12,$i13)
    {
        $this->db->query("update indicator SET indicator_weight='$i1'where goal_id=2 and indicator_name='ind_2.1.1'");
        $this->db->query("update indicator SET indicator_weight='$i2'where goal_id=2 and indicator_name='ind_2.1.2'");
        $this->db->query("update indicator SET indicator_weight='$i3'where goal_id=2 and indicator_name='ind_2.2.1'");
        $this->db->query("update indicator SET indicator_weight='$i4'where goal_id=2 and indicator_name='ind_2.2.2'");
        $this->db->query("update indicator SET indicator_weight='$i5'where goal_id=2 and indicator_name='ind_2.3.1'");
        $this->db->query("update indicator SET indicator_weight='$i6'where goal_id=2 and indicator_name='ind_2.3.2'");
        $this->db->query("update indicator SET indicator_weight='$i7'where goal_id=2 and indicator_name='ind_2.4.1'");
        $this->db->query("update indicator SET indicator_weight='$i8'where goal_id=2 and indicator_name='ind_2.5.1'");
        $this->db->query("update indicator SET indicator_weight='$i9'where goal_id=2 and indicator_name='ind_2.5.2'");
        $this->db->query("update indicator SET indicator_weight='$i10'where goal_id=2 and indicator_name='ind_2.a.1'");
        $this->db->query("update indicator SET indicator_weight='$i11'where goal_id=2 and indicator_name='ind_2.a.2'");
        $this->db->query("update indicator SET indicator_weight='$i12'where goal_id=2 and indicator_name='ind_2.b.1'");
        $this->db->query("update indicator SET indicator_weight='$i13'where goal_id=2 and indicator_name='ind_2.c.1'");

    }
}