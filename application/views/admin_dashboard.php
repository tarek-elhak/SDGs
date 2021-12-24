<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashstyle.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>Admin Dashboard</title>
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
      <a class="navbar-brand" href="<?php echo base_url('index.php')?>"><img src="<?php foreach ($logo as $l){ echo base_url(); ?>assets/public/<?php echo $l->element_content;}?>"/>  <?php foreach ($title as $t){ echo $t->element_content;}?></a>
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
                    <a href="<?php echo base_url('index.php/PersonalAccountController/index')?>"><button type="button" class="btn btn-light" style="border:1px solid; border-color:#000; margin-top:9px; width:130px; height:37px;">View Account</button></a>
                  </div>
                </div>
                <div class="col-md-5 ml-auto">
                <?php echo form_open_multipart("PersonalAccountController/process");?>
                <form class="needs-validation" method="post" name="form" enctype="multipart/form-data" novalidate>
                    <div class="input-group input-file" name="Fichier1">
                      <a href="#">
                      <label type="button" class="btn btn-light" style="color:white;background-color:#080E33; border:1px solid; border-color:#000; margin-top:9px; width:130px; height:37px;">
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
            <button type="submit" class="btn btn-primary">Save changes</button>
    </form>
            <?php echo form_close()?>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
          </div>
        </div>
      </div>

        <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
          <ul class="nav sidebar-nav">
            <div class="sidebar-header">
              <div class="sidebar-brand">
                <a href="<?php echo base_url('index.php/DashboardController/index')?>" style="color:#03178C">Dashboard</a>
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
          </div>
        </div>
    </body>
    </html>
