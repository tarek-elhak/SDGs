<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboardStyle.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/animated-icons/icons/edit/edit.json">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>System Customization</title>
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
      <div id="page-content-wrapper">
        <div class="container">
          <form class="needs-validation" method="post" action="<?php echo base_url('index.php/UpdateAccountController/process')?>" novalidate>
            <div class="formf row">
              <h2>System Customizations</h2>
            <div class="col-md-2">
              <img src="<?php echo base_url(); ?>assets/img/edit.gif">
            </div>
            </div>
          </form>
          <hr class="dark">

          <h6>Custom Website Title</h6>
          <hr class="dashed" id="dashed">
          <?php echo form_open("SystemCustomizationController/updateTitle");?>
          <?php if($this->session->flashdata('t_update')){?>
            <div class="alert alert-success">      
              <?php echo $this->session->flashdata('t_update')?>
            </div>
          <?php }
          elseif($this->session->flashdata('t_not_updated')){?>
          <div class="alert alert-danger">      
              <?php echo $this->session->flashdata('t_not_updated')?>
            </div>
          <?php
          } ?>
          <form class="needs-validation" method="post" novalidate>
          <div class="fromrow form-row">
            <div class="col-md-1 mb-3">
            </div>
          <div class="col-md-4 mb-3">
                <label for="validationTooltip01"><b><h6>New Title:</h6></b></label>
                <input type="text" class="form-control" id="validationTooltip01" placeholder="Title" name="title" required>
                <div class="valid-tooltip">
                  Looks good!
                </div>
              </div>
              <div class="col-md-4 mb-3">
              </div>
              <div class="col-md-2 mb-3">
                    <label for="validationTooltip01"><b><h6></h6></b></label>
                    <button class="btn btn-primary form-control" type="submit" name="update">Save Changes</button>
                      <div class="valid-tooltip">
                      Looks good!
                    </div>
                  </div>
          </div>
          </form>
          <?php echo form_close();?>
          <br>
          <h6>Custom Website Logo</h6>
          <hr class="dashed" id="dashed">
          <?php echo form_open_multipart("SystemCustomizationController/updateLogo");?>
          <?php if($this->session->flashdata('l_update')){?>
            <div class="alert alert-success">      
              <?php echo $this->session->flashdata('l_update')?>
            </div>
          <?php }
          elseif($this->session->flashdata('l_not_updated')){?>
          <div class="alert alert-danger">      
              <?php echo $this->session->flashdata('l_not_updated')?>
            </div>
          <?php
          } ?>
          <form class="needs-validation" method="post"  novalidate>
          <div class="fromrow form-row">
            <div class="col-md-1 mb-3">
            </div>
          <div class="col-md-6 mb-3">
                <label for="validationTooltip01"><b><h6>Upload New Logo:</h6></b></label>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                      <span class="input-group-text" id="validationTooltipUsernamePrepend">Upload the new logo</span>
                    </div>
                  <div class="custom-file">
                    
                    <label type="button" class="btn btn-light" style="border:1px solid; color:white; border-color:#2C3E50; background-color: #3b6b7c; margin-top:9px; width:130px; height:40px;">
                      Select Photo    
                      <input type="file" class="form-control" id="validationTooltip01" placeholder="Upload the new logo" name="logo" accept="image/*"  style="display:none" required />
                      </label> 
                  </div>
                </div>
                <div class="valid-tooltip">
                  Looks good!
                </div>
              </div>
              <div class="col-md-2 mb-3">
              </div>
              <div class="col-md-2 mb-3">
                    <label for="validationTooltip01"><b><h6></h6></b></label>
                    <button class="btn btn-primary form-control" type="submit" name="update">Save Changes</button>
                      <div class="valid-tooltip">
                      Looks good!
                    </div>
                  </div>
          </div>
          </form>
          <?php echo form_close();?>
          <br>

          <h6>Custom Goal Description</h6>
          <hr class="dashed" id="dashed">
          <?php echo form_open("SystemCustomizationController/updateGoal");?>
          <?php if($this->session->flashdata('d_update')){?>
            <div class="alert alert-success">      
              <?php echo $this->session->flashdata('d_update')?>
            </div>
          <?php }
          elseif($this->session->flashdata('d_not_updated')){?>
          <div class="alert alert-danger">      
              <?php echo $this->session->flashdata('d_not_updated')?>
            </div>
          <?php
          } ?>
          <form class="needs-validation" method="post" novalidate>
          <div class="fromrow form-row">
            <div class="col-md-1 mb-3">
            </div>
          <div class="col-md-6 mb-3">
            <div class="form-group col-md-12">
                  <label for="inputState"><b><h6>SDGs:</h6></b></label>
                  <select id="inputState" class="form-control" name="goal">
                    <option selected>Choose Goal...</option>
                    <option value="goal1">No Poverty (Goal #1)</option>
                    <option value="goal2">Zero Hunger (Goal #2)</option>
                    <option value="goal3">Good Health And Well-Being (Goal #3)</option>
                    <option value="goal4">Quality Education (Goal #4)</option>
                    <option value="goal5">Gender Equality (Goal #5)</option>
                    <option value="goal6">Clear Water And Sanitation (Goal #6)</option>
                    <option value="goal7">Affordable and Clean Energy (Goal #7)</option>
                    <option value="goal8">Decent Work and Economic Growth (Goal #8)</option>
                    <option value="goal9">Industry, Innovation and Infrastructure (Goal #9)</option>
                    <option value="goal10">Reduced Inequality (Goal #10)</option>
                    <option value="goal11">Sustainable Cities and Communities (Goal #11)</option>
                    <option value="goal12">Responsible Consumption and Production (Goal #12)</option>
                    <option value="goal13">Climate Action (Goal #13)</option>
                    <option value="goal14">Life Below Water (Goal #14)</option>
                    <option value="goal15">Life on Land (Goal #15)</option>
                    <option value="goal16">Peace and Justice Strong Institutions (Goal #16)</option>
                    <option value="goal17">Partnerships to achieve the Goal (Goal #17)</option>
                  </select>
                </div>
                <div class="valid-tooltip">
                  Looks good!
                </div>
              </div>
              <div class="input-group col-md-12 mb-4">

                <div class="col-md-1 mb-4">
                </div>
                <div class="input-group-prepend col-md-9">
                  <span class="input-group-text">Description:</span>
                  <input class="form-control" name="description" aria-label="With textarea" required>
                </div>
              </div>
              <div class="col-md-9 mb-3">
              </div>
              <div class="col-md-2 mb-3">
                    <label for="validationTooltip01"><b><h6></h6></b></label>
                    <button class="btn btn-primary form-control" type="submit" name="update">Save Changes</button>
                      <div class="valid-tooltip">
                      Looks good!
                    </div>
                  </div>
          </div>
          </form>
          <?php echo form_close();?>
          <br>



    </div>
  </div>

      <!-- end of page content -->

    <!-- <script type="text/javascript" src="main.js">

    </script> -->
  </body>
</html>
