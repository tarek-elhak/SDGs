<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboardStyle.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>Update Account</title>
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
    <style>
      .modal1 {
    display:    none;
    position:   fixed;
    z-index:    1000;
    top:        0;
    left:       0;
    height:     100%;
    width:      100%;
    background: #F2F2F2 
                url('https://i.imgur.com/uBfbQtF.gif') 
                50% 50% 
                no-repeat;
}

/* When the body has the loading class, we turn
   the scrollbar off with overflow:hidden */
body.loading .modal1 {
    overflow: hidden;   
}

/* Anytime the body has the loading class, our
   modal element will be visible */
body.loading .modal1 {
    display: block;
}
</style>
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
        <?php if($this->session->flashdata('update')){?>
            <div class="alert alert-success">      
              <?php echo $this->session->flashdata('update')?>
            </div>
        <?php }
          elseif($this->session->flashdata('not_updated')){?>
          <div class="alert alert-danger">      
              <?php echo $this->session->flashdata('not_updated')?>
            </div>
          <?php
          } ?>
        <form class="needs-validation" method="post"  novalidate>
            <div class="formf row">
              <h2>Update Admin Account</h2>
            <div class="col-md-2">
              <img src="<?php echo base_url(); ?>assets/img/rhombus.gif">
            </div>
            </div>
          </form>
          <hr class="dark">
          <?php echo form_open_multipart("UpdateAccountController/process");?>
          <form class="needs-validation" method="post"  novalidate>
          <div class="col-md-4 mb-3">
          <table class="table table-bordered table-sm" >
          <thead style="background-color:#f8f8f8">
        <tr style="color: #080E33">
          <th scope="col">Personal Photo</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">E-mail</th>
          <th scope="col">Password</th>
        </tr>
      </thead>
                  <tbody style="background-color:#f8f8f8;color: #080E33" id="admin-result">
                  </tbody>
          </table> 
        </div>
          <div class="col-md-4 mb-3">
                <label for="Admin E-mail"><b><h6>Admin ID:</h6></b></label>
                <div class="input-group">
                  <input type="number" class="form-control" id="admin" placeholder="Admin ID" name="admin" aria-describedby="validationTooltipUsernamePrepen" required>
                  <br><span id="admin-result"></span>
                  <div class="invalid-tooltip">
                    Please choose a unique and valid username.
                  </div>
                </div>
              </div>
          <hr class="dark">
          <div class="fromrow form-row">
              <div class="col-md-4 mb-3">
                <label for="validationTooltip01"><b><h6>First name:</h6></b></label>
                <input type="text" class="form-control" id="firstname" placeholder="First name" name="firstname" required>
                <div class="valid-tooltip">
                  Looks good!
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationTooltip02"><b><h6>Last name:</h6></b></label>
                <input type="text" class="form-control" id="lastname" placeholder="Last name" name="lastname" required>
                <div class="valid-tooltip">
                  Looks good!
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationTooltipUsername"><b><h6>E-mail Address:</h6></b></label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                  </div>
                  <input type="text" class="form-control" id="email" placeholder="e-mail address" name="email" aria-describedby="validationTooltipUsernamePrepend" required>
                  <br><span id="email-result"></span>

                  <div class="invalid-tooltip">
                    Please choose a unique and valid username.
                  </div>
                </div>
              </div>
            </div>
            <div class="fromrow form-row">
            <div class="col-md-6 mb-3">
                  <label for="validationTooltipUsername"><b><h6>Personal Photo:</h6></b></label>
                  <div class="input-group">
                    <label type="button" class="btn btn-light" style="border:1px solid; color:white; border-color:#2C3E50; background-color: #3b6b7c; margin-top:9px; width:130px; height:40px;">
                      Select Photo    
                      <input type="file" name="select_image" class="form-control"  id="select_image" accept="image/*" style="display:none" required />
                      </label> 
                    
                    <br><span id="email-result"></span>
                    <div class="invalid-tooltip">
                      Please choose a unique and valid username.
                    </div>
                  </div>
                </div>
              <div class="col-md-6 mb-3">
                <label for="validationTooltip03"><b><h6>Password:</h6></b></label>
                <input type="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" id="password" placeholder="password" name="password" required>

                <div id="message">
                <h3>Password must contain the following:</h3>
                <p id="letter" class="invalid">A lowercase letter</p>
                <p id="capital" class="invalid">A capital (uppercase) letter</p>
                <p id="number" class="invalid">A number</p>
                <p id="length" class="invalid">Minimum 8 characters</p>
              </div>
                <div class="invalid-tooltip">
                  Please provide a valid city.
                </div>
                <br>
              </div>

              <div class="col-md-12 mb-12">
                <button class="btn btn-primary" type="submit" name="update">Save Changes</button>
              </div>
            </div>

          </form>
          <?php echo form_close();?>

    </div>
  </div>

      <!-- end of page content -->

    <!-- <script type="text/javascript" src="main.js">

    </script> -->
    <div class="modal1"></div>
  </body>

<script type="text/javascript">
$(document).ready(function(){
  $body = $("body");

$(document).on({
    ajaxStart: function() { $body.addClass("loading");    },
     ajaxStop: function() { $body.removeClass("loading"); }    
});
  $('#admin').change(function(){
    var admin =$('#admin').val();
    if (admin != '')
    {
      $.ajax({
        url:"<?php echo base_url();?>index.php/Check_id_Controller/check_id",
        method:"POST",
        data:{admin:admin},
        success:function(data){
          $('#admin-result').html(data);
        }

      });
    }
  });
});
</script>



<script>
var myInput = document.getElementById("password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>


</html>
