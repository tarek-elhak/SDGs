<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/dashboardStyle.css">
    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap.min.css" integrity="sha512-BMbq2It2D3J17/C7aRklzOODG1IQ3+MHw3ifzBHMBwGO/0yUqYmsStgBjI0z5EYlaDEFnvYV7gNYdD3vFLRKsA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.jqueryui.min.css" integrity="sha512-x2AeaPQ8YOMtmWeicVYULhggwMf73vuodGL7GwzRyrPDjOUSABKU7Rw9c3WNFRua9/BvX/ED1IK3VTSsISF6TQ==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.material.min.css" integrity="sha512-xvrm5KqgBtR7kE0ehXfSSkQvzArzm/iBSx6aXcINru5dM0YWCaqrHfsN1PHCQBgL03/7fJHqypWZoA5w0T6lMA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css" integrity="sha512-PT0RvABaDhDQugEbpNMwgYBCnGCiTZMh9yOzUsJHDgl/dMhD9yjHAwoumnUk3JydV3QTcIkNDuN40CJxik5+WQ==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.foundation.min.css" integrity="sha512-jyhJOXPqmwwlzhhy2/7edoig3tkyTClebiDZsV2zGb5k4nBol09WyZhK7w1KLl11q79UJjPWgybVu1m52cVehw==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous"></script>
    <title>upload data</title>

    <script type="text/javascript">
        function bs_input_file() {
          $(".input-file").before(
      		function() {
      			if ( ! $(this).prev().hasClass('input-ghost') ) {
      				var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0'>");
      				element.attr("name",$(this).attr("name"));
      				element.change(function(){
      					element.next(element).find('input').val((element.val()).split('\\').pop());
      				});
      				$(this).find("button.btn-choose").click(function(){
      					element.click();
      				});
      				$(this).find("button.btn-reset").click(function(){
      					element.val(null);
      					$(this).parents(".input-file").find('input').val('');
      				});
      				$(this).find('input').css("cursor","pointer");
      				$(this).find('input').mousedown(function() {
      					$(this).parents('.input-file').prev().click();
      					return false;
      				});
      				return element;
      			}
      		}
      	);
      }
      $(function() {
      	bs_input_file();
      });
    </script>
  </head>
  <body>

    <!-- start of nav bar -->
    <nav id="navl" class="navbar sticky-top">
    <strong><a class="navbar-brand" style="font-size:18px" href="<?php echo base_url('index.php')?>"><img src="<?php foreach ($logo as $l){ echo base_url(); ?>assets/public/<?php echo $l->element_content;}?>"/>  <?php foreach ($title as $t){ echo $t->element_content;}?></a></strong>
    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModalCenter" style="margin-right:30px; padding:0; border-radius:50%;">
    <img src="<?php foreach ($photo as $p){ echo base_url(); ?>assets/public/<?php echo $p->photo;}?>" style="width:38px; height:38px; border-radius:50%;">
    </button>
    </nav>
    <!-- end of nav bar -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-2 ml-auto"></div>
                <div class="col-md-5 ml-auto">
                  <img src="<?php foreach ($photo as $p){ echo base_url(); ?>assets/public/<?php echo $p->photo;}?>" style="width:120px; height:120px; border-radius:50%;">
                </div>
                <div class="col-md-2 ml-auto"></div>
              </div>
              <div class="row">
                <div class="col-md-12" style="text-align: center;">
                <?php echo ($this->session->userdata('firstname'));?>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12" style="text-align: center; font-size:12px; color:gray;">
                <?php echo ($this->session->userdata('email'));?>
                </div>
              </div>
              <div class="row">
              <div class="col-md-2 ml-auto"></div>
                <div class="col-md-4 ml-auto">
                  <div class="input-group input-file" name="Fichier1">
                    <a href="<?php echo base_url('index.php/PersonalAccountController/index')?>"><button type="button" class="btn btn-light" style="border:1px solid; border-color:#2C3E50; background-color: #4CA1AF; margin-top:9px; width:130px; height:37px;">View Account</button></a>
                  </div>
                </div>
                <div class="col-md-5 ml-auto">
                <?php echo form_open_multipart("PersonalAccountController/process");?>
                <form class="needs-validation" method="post" name="form" enctype="multipart/form-data" novalidate>
                    <div class="input-group input-file" name="Fichier1">
                      <a href="#">
                      <label type="button" class="btn btn-light" style="color:white;border:1px solid; border-color:#2C3E50; background-color: #4CA1AF; margin-top:9px; width:130px; height:37px;">
                      Change Photo    
                      <input type="file" name="personal" id="personal" style="display:none"/>
                      </label>                    
                    </div>
                </div>
                <div class="col-md-1 ml-auto"></div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" style="background-color: #3b6b7c;">Save changes</button>
    </form>
            <?php echo form_close()?>
            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #2C3E50;">Close</button>
          </div>
        </div>
      </div>
    </div>

      <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
        <ul class="nav sidebar-nav">
          <div class="sidebar-header">
            <div class="sidebar-brand">
              <a href="#" style="color:#2C3E50">Dashboard</a>
            </div>
          </div>

          <hr class="sidebarDivider">

          <li>
            <a rel="#addAccount" href="<?php echo base_url('index.php/AddAccountController/index')?>"> Add Account</a>
          </li>

          <li>
            <a rel="#viewAccount" href="<?php echo base_url('index.php/ViewAccountsController/process')?>"> View Accounts</a>
          </li>

          <li>
            <a rel="#updateAccount" href="<?php echo base_url('index.php/UpdateAccountController/index')?>"> Update Account</a>
          </li>

          <li>
            <a rel="#deleteAccount" href="<?php echo base_url('index.php/DeleteAccountController/index')?>"> Delete Account</a>
          </li>

          <hr class="sidebarDivider">

          <li>
            <a rel="#uploadData" href="<?php echo base_url('index.php/UploadDataController/index')?>"> Upload</a>
          </li>

          <li>
            <a rel="#updateweight" href="<?php echo base_url('index.php/IndicatorWeightsController/index')?>">Indicators</a>
          </li>

          <hr class="sidebarDivider">

          <li>
            <a rel="#updateProfile" href="<?php echo base_url('index.php/PersonalAccountController/index')?>"> Profile</a>
          </li>

          <li>
            <a rel="#systemCustom" href="<?php echo base_url('index.php/SystemCustomizationController/index')?>"> System<span class="caret"></span></a>
          </li>

          <li>
            <a rel="#logout" href="<?php echo base_url('index.php/LoginController/logout')?>">Log out</a>
          </li>


        </ul>
      </nav>
      <!-- end of sidebar -->
      <?php if($this->session->flashdata('add')){?>
            <div class="alert alert-success">      
              <?php echo $this->session->flashdata('add')?>
            </div>
          <?php }
          elseif($this->session->flashdata('not_added')){?>
          <div class="alert alert-danger">      
              <?php echo $this->session->flashdata('not_added')?>
            </div>
          <?php
          } ?>
      <div id="page-content-wrapper">
        <div class="container">
        <form class="needs-validation" method="post"  novalidate>
            <div class="formf row">
              <h2>Upload Data</h2>
            <div class="col-md-2">
              <img src="<?php echo base_url(); ?>assets/img/upload.gif">
            </div>
            </div>
          </form>
          <hr class="dark">
          <?php echo form_open_multipart("UploadDataController/import");?>
          <form method="post" id="import_form" enctype="multipart/form-data">
            <div class="fromrow form-row">
              <div class="col-md-8 mb-3">
                <h3>You Can Upload Data of any location With the following attributes</h3>
              </div>
              <div class="col-md-8 mb-3">
                <div class="form-group">
                  
                  <div class="input-group">
                    <!-- <label type="button" class="btn btn-light" style="border:1px solid; color:white; border-color:#2C3E50; background-color: #3b6b7c; margin-top:9px; width:130px; height:40px;">
                      Choose csv File   -->
                      
                      <input type="file" name="file" id="file" required accept=".xls, .xlsx" />
                      <div class="col"></div>
                      <input type="submit" name="import" value="Import" class="btn btn-info"/>
                      <!-- </label> -->
                      
              		</div>
                </div>
                
              </div>

            </div>

          </form>
          <?php echo form_close();?>

    </div>
    <div class="table-responsive">
    <table class="table table-striped table-bordered" style="width:100%" id="location_data">
    <thead>
     <tr>
      <th>Location Name</th>
      <th>Population</th>
      <th>% Under International Poverty Line</th>
      <th>% Electricity Access</th>
      <th>Prevalence of Undernourishment</th>
      <th>% Of GDP</th>
      <th>% Births_attended_by_skilled_health</th>
      <th>% Using Basic_and_safely_managed_sanitation_services</th>

     </tr>
     </thead>
     <tbody style="background-color:#f8f8f8;color: #080E33">
        <tr>
          <?php
              $i=1;
              foreach($location as $row)
              {
              echo "<tr>";
              echo "<td> $row->location_name </td>";
              echo "<td> $row->population </td>";
              echo "<td> $row->IPL %</td>";
              echo "<td> $row->electricity_access %</td>";
              echo "<td> $row->prevalence_of_undernourishment </td>";
              echo "<td> $row->agriculture %</td>";
              echo "<td> $row->births_attended_by_skilled_health %</td>";
              echo "<td> $row->Basic_and_safely_managed_sanitation_services %</td>";
              echo "</tr>";
              $i++;
              }
              ?>
          </tr>
      </tbody>
    </table>
    </div>
  </div>

      <!-- end of page content -->

<script>
  $(document).ready(function() {
    $('#location_data').DataTable();
} );
</script>
  </body>
</html>
