<?php 
class Check_id_Controller extends CI_Controller
{
    public function __construct()
	{
	parent::__construct();
	}
    function check_id()
    {
        $admin=$this->input->post('admin');
        $query=$this->db->query("select photo,firstname,lastname,email,password from admin where AdminID='$admin'");
        
        if($query->num_rows()>0)
        {
            foreach($query->result() as $row)
                {     echo "<tr>";
                      echo"<td style='width:70px;'>"?><img style="width:68px; height:58px; border-radius:50%;" src="<?php echo base_url().'assets/public/'.$row->photo ?>"><?php echo "</td>";
                      echo "<td>".$row->firstname."</td>";
                      echo "<td>".$row->lastname."</td>";
					  echo "<td>".$row->email."</td>";
                      echo "<td>".$row->password."</td>";
                      echo"<td style='width:70px;>"?><?php echo'-----'?><?php echo"</td>";
                      echo "</tr>";
                      
                    }
        }
        else 
        {
            echo '<label class="text-danger"><span><i class="fa fa-times" aria-hidden="true">
            </i> Admin Not Found</span></label>';
        }
        
    }
    
    function check_id_delete()
    {
        $admin=$this->input->post('admin');
        $query=$this->db->query("select photo,firstname,lastname,email,password from admin where AdminID='$admin'");
        
        if($query->num_rows()>0)
        {
            foreach($query->result() as $row)
                {     echo "<tr>";
                      echo"<td style='width:70px;'>"?><img style="width:68px; height:58px; border-radius:50%;" src="<?php echo base_url().'assets/public/'.$row->photo ?>"><?php echo "</td>";
                      echo "<td>".$row->firstname."</td>";
                      echo "<td>".$row->lastname."</td>";
					  echo "<td>".$row->email."</td>";
					  echo "<td>".$row->password."</td>";
                      echo "</tr>";
                      
                    }
        }
        else 
        {
            echo '<label class="text-danger"><span><i class="fa fa-times" aria-hidden="true">
            </i> Admin Not Found</span></label>';
        }
    }

}