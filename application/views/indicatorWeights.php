<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboardStyle.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>Indicator Weights</title>
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
    #heading{
  background-color:#f8f8f8;
}
#btncol{
  color:#080E33;
  font-size: 1em;
  font-weight: bold;
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
              <h2>Update Indicators Weights</h2>
            <div class="col-md-2">
              <img src="<?php echo base_url(); ?>assets/img/tune.gif">
            </div>
            </div>
          </form>
          <hr class="dark">

          <div class="row">

          <!-- goal 1 -->
          <div class="col-md-3">
          <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Goal 1</div>
            <div class="card-body" style="padding:0px;">
              <img src="<?php echo base_url(); ?>assets/img/goal1.png" style="width:100%; margin-bottom:12px;">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#noPoverty" style="margin-bottom:12px; margin-left:10%;">
                update weights
              </button>
            </div>
          </div>

          <div class="modal fade" id="noPoverty" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document"  style="max-width:900px;">
              <div class="modal-content" style="height:100%; width:100%;">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <?php echo form_open("IndicatorWeightsController/update_goal1");?>
                <form method="POST">
                <div class="modal-body">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12 ml-auto">
                        <div style="height: 280px; width:100%;"><img src="<?php echo base_url(); ?>assets/img/E_GIF_01.gif" style="width:100%;height:100%; margin-bottom:12px;">
                      </div>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                          <label for="indicators"><h5>Target Weight [ Target #1.1.1 ] :</h5><h6>Proportion of population below the international poverty line </h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #1.1.1" name="ind111" value="0.0" step=".01" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                          <label for="indicators"><h5>Target Weight [ Target #1.2.1 ] :</h5><h6>Proportion of population living below the national poverty line, by sex and age </h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #1.2.1" name="ind121" value="0.0" step=".01" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                          <label for="indicators"><h5>Target Weight [ Target #1.2.2 ] :</h5><h6> Proportion of men, women and children of all ages living in poverty in all its dimensions according to national definitions</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #1.2.2" name="ind122" value="0.0" step=".01" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                          <label for="indicators"><h5>Target Weight [ Target #1.3.1 ] :</h5><h6> Proportion of population covered by social protection floors/systems, by sex, distinguishing children, unemployed persons, older persons, persons with disabilities, pregnant women, newborns, work-injury victims and the poor and the vulnerable</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #1.3.1" name="ind131" value="0.0" step=".01" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #1.4.1 ] :</h5><h6>Proportion of population living in households with access to basic services
‘basic services mean safe drinking water, proper sanitation, access to modern energy, sustainable mobility to
economic resources, information technology, healthcare, education, etc.’  limited access to basic services another poverty dimension 
</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #1.4.1" name="ind141" value="0.0" step=".01" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #1.4.2 ] :</h5><h6>Proportion of total adult population with secure tenure rights to land (natural resources), with legally recognized documentation and who perceive their rights to land as secure, by sex and by type of tenure</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #1.4.2" name="ind142" value="0.0" step=".01" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #1.5.1 ] :</h5><h6>Number of deaths, missing persons and directly affected persons attributed to disasters per 100,000 population</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #1.5.1" name="ind151" value="0.0" step=".01" required>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                  </form>
                  <?php form_close();?>
                </div>
              </div>
            </div>
        </div>
        </div>

          <!-- goal 2 -->
            <div class="col-md-3">
          <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Goal 2</div>
            <div class="card-body" style="padding:0px;">
              <img src="<?php echo base_url(); ?>assets/img/goal2.png" style="width:100%; margin-bottom:12px;">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ZeroHunger" style="margin-bottom:12px; margin-left:10%;">
                update weights
              </button>
            </div>
          </div>

          <div class="modal fade" id="ZeroHunger" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document"  style="max-width:900px;">
              <div class="modal-content" style="height:100%; width:100%;">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <?php echo form_open("IndicatorWeightsController/update_goal2");?>
                <form method="POST">
                <div class="modal-body">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12 ml-auto">
                      <div style="height: 280px; width:100%;"><img src="<?php echo base_url(); ?>assets/img/E_GIF_02.gif" style="width:100%;height:100%; margin-bottom:12px;">
                      </div>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #2.1.1 ] :</h5><h6>Prevalence of undernourishment</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #2.1.1" name="ind211" value="0.0" step=".01" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #2.1.2 ] :</h5><h6>Prevalence of moderate or severe food insecurity in the population, based on the Food Insecurity Experience Scale (FIES)</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #2.1.2" name="ind212" value="0.0" step=".01" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #2.2.1 ] :</h5><h6>Prevalence of stunting (height for age <-2 standard deviation from the median of the World Health Organization (WHO) Child Growth Standards) among children under 5 years of age</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #2.2.1" name="ind221" value="0.0" step=".01" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #2.2.2 ] :</h5><h6>Prevalence of malnutrition (weight for height >+2 or <-2 standard deviation from the median of the WHO Child Growth Standards) among children under 5 years of age, by type (wasting and overweight)</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #2.2.2" name="ind222" value="0.0" step=".01" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #2.3.1 ] :</h5><h6>Volume of production per labour unit by classes of farming/pastoral/forestry
enterprise size
</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #2.3.1" name="ind231" value="0.0" step=".01" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #2.3.2 ] :</h5><h6>Average income of small-scale food producers, by sex and indigenous status</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #2.3.2" name="ind232" value="0.0" step=".01" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #2.4.1 ] :</h5><h6>Proportion of agricultural area under productive and sustainable agriculture</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #2.4.1" name="ind241" value="0.0" step=".01" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #2.5.1 ] :</h5><h6>Number of plant and animal genetic resources for food and agriculture secured in either medium or long-term conservation facilities</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #2.5.1" name="ind251" value="0.0" step=".01" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #2.5.2 ] :</h5><h6>Proportion of local breeds classified as being at risk, not-at-risk or at unknown level of risk of extinction</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #2.5.2" name="ind252" value="0.0" step=".01" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #2.a.1 ] :</h5><h6>The agriculture orientation index for government expenditures</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #2.a.1" name="ind2a1" value="0.0" step=".01" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #2.a.2 ] :</h5><h6>Total official flows (official development assistance plus other official flows) to the agriculture sector</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #2.a.2" name="ind2a2" value="0.0" step=".01" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #2.b.1 ] :</h5><h6>Agricultural export subsidies</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #2.b.1" name="ind2b1" value="0.0" step=".01" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #2.c.1 ] :</h5><h6>Indicator of food price anomalies</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #2.c.1" name="ind2c1" value="0.0" step=".01" required>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                  </form>
                  <?php form_close();?>
                </div>
              </div>
            </div>
          </div>
        </div>

<!-- goal 3 -->
            <div class="col-md-3">
          <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Goal 3</div>
            <div class="card-body" style="padding:0px;">
              <img src="<?php echo base_url(); ?>assets/img/goal3.png" style="width:100%; margin-bottom:12px;">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#GoodHealthandWell-being" style="margin-bottom:12px; margin-left:10%;">
                update weights
              </button>
            </div>
          </div>

          <div class="modal fade" id="GoodHealthandWell-being" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document"  style="max-width:900px;">
              <div class="modal-content" style="height:100%; width:100%;">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12 ml-auto">
                      <div style="height: 280px; width:100%;"><img src="<?php echo base_url(); ?>assets/img/E_GIF_03.gif" style="width:100%;height:100%; margin-bottom:12px;">
                      </div>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #3.1.1 ] :</h5><h6>. Maternal mortality ratio</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #3.1.1" name="Tar #3.1.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #3.1.2 ] :</h5><h6>. Proportion of births attended by skilled health personnel</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #3.1.2" name="Tar #3.1.2" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #3.2.1 ] :</h5><h6>Under-five mortality rate</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #3.2.1" name="Tar #3.2.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #3.2.2 ] :</h5><h6>. Neonatal mortality rate</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #3.2.2" name="Tar #3.2.2" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #3.3.1 ] :</h5><h6>Number of new HIV infections per 1,000 uninfected population, by sex, age and key populations</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #3.3.1" name="Tar #3.3.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #3.3.2 ] :</h5><h6>Tuberculosis incidence per 100,000 population</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #3.3.2" name="Tar #3.3.2" required>
                      </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #3.3.3 ] :</h5><h6>. Malaria incidence per 1,000 population</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #3.3.3" name="Tar #3.3.3" required>
                      </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #3.3.4 ] :</h5><h6>Hepatitis B incidence per 100,000 population</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #3.3.4" name="Tar #3.3.4" required>
                      </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #3.3.5 ] :</h5><h6>Number of people requiring interventions against neglected tropical diseases</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #3.3.5" name="Tar #3.3.5" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #3.4.1 ] :</h5><h6>Mortality rate attributed to cardiovascular disease, cancer, diabetes or chronic respiratory disease</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #3.4.1" name="Tar #3.4.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #3.4.2 ] :</h5><h6>Suicide mortality rate</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #3.4.2" name="Tar #3.4.2" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #3.5.1 ] :</h5><h6>Coverage of treatment interventions (pharmacological, psychosocial and rehabilitation and aftercare services) for substance use disorders </h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #3.5.1" name="Tar #3.5.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #3.5.2 ] :</h5><h6>Harmful use of alcohol, defined according to the national context as alcohol per capita consumption (aged 15 years and older) within a calendar year in litres of pure alcohol</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #3.5.2" name="Tar #3.5.2" required>
                      </div>
                    </div>
                      <hr>
                      <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #3.6.1 ] :</h5><h6>Death rate due to road traffic injuries</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #3.6.1" name="Tar #3.6.1" required>
                      </div>
                    </div>
                      <hr>
                      <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #3.7.1 ] :</h5><h6>Proportion of women of reproductive age (aged 15-49 years) who have their need for family planning satisfied with modern methods</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #3.7.1" name="Tar #3.7.1" required>
                      </div>
                    </div>
                      <hr>
                      <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #3.7.2 ] :</h5><h6>Adolescent birth rate (aged 10-14 years; aged 15-19 years) per 1,000 women in that age group</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #3.7.2" name="Tar #3.7.2" required>
                      </div>
                    </div>
                      <hr>
                      <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #3.8.1 ] :</h5><h6>Coverage of essential health services (defined as the average coverage of essential services based on tracer interventions that include reproductive, maternal, newborn and child health, infectious diseases, non-communicable diseases and service capacity and access, among the general and the most disadvantaged population)</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #3.8.1" name="Tar #3.8.1" required>
                      </div>
                    </div>
                      <hr>
                      <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #3.8.2 ] :</h5><h6>Proportion of population with large household expenditure on health as a share of total household expenditure or income</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #3.8.2" name="Tar #3.8.2" required>
                      </div>
                    </div>
                      <hr>
                      <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #3.9.1 ] :</h5><h6>Mortality rate attributed to household and ambient air pollution</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #3.9.1" name="Tar #3.9.1" required>
                      </div>
                    </div>
                      <hr>
                      <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #3.9.2 ] :</h5><h6>Mortality rate attributed to unsafe water, unsafe sanitation and lack of hygiene (exposure to unsafe Water, Sanitation and Hygiene for All (WASH) services)</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #3.9.2" name="Tar #3.9.2" required>
                      </div>
                    </div>
                      <hr>
                      <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #3.9.3 ] :</h5><h6>Mortality rate attributed to unintentional poisoning</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #3.9.3" name="Tar #3.9.3" required>
                      </div>
                    </div>
                      <hr>
                      <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #3.a.1 ] :</h5><h6>Age-standardized prevalence of current tobacco use among persons aged 15 years and older</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #3.a.1" name="Tar #3.a.1" required>
                      </div>
                    </div>
                      <hr>
                      <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #3.b.1 ] :</h5><h6>3.b.1 Proportion of the target population covered by all vaccines included in their national program</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #3.b.1" name="Tar #3.b.1" required>
                      </div>
                    </div>
                      <hr>
                      <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #3.b.2 ] :</h5><h6>Total net official development assistance to the medical research and basic health sectors</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #3.b.2" name="Tar #3.b.2" required>
                      </div>
                    </div>
                      <hr>
                      <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #3.b.3 ] :</h5><h6>Proportion of health facilities that have a core set of relevant essential medicines available and affordable on a sustainable basis</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #3.b.3" name="Tar #3.b.3" required>
                      </div>
                    </div>
                      
                      
                       <hr>
                      <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #3.c.1 ] :</h5><h6>Health worker density and distribution</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #3.c.1" name="Tar #3.c.1" required>
                      </div>
                    </div>
                       <hr>
                      <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #3.d.1 ] :</h5><h6>International Health Regulations (IHR) capacity and health emergency preparedness</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #3.d.1" name="Tar #3.d.1" required>
                      </div>
                    </div>



                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>
          <!-- goal 4 -->
            <div class="col-md-3">
          <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Goal 4</div>
            <div class="card-body" style="padding:0px;">
              <img src="<?php echo base_url(); ?>assets/img/goal4.png" style="width:100%; margin-bottom:12px;">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#QualityEducation" style="margin-bottom:12px; margin-left:10%;">
                update weights
              </button>
            </div>
          </div>

          <div class="modal fade" id="QualityEducation" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document"  style="max-width:900px;">
              <div class="modal-content" style="height:100%; width:100%;">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12 ml-auto">
                      <div style="height: 280px; width:100%;"><img src="<?php echo base_url(); ?>assets/img/E_GIF_04.gif" style="width:100%;height:100%; margin-bottom:12px;">
                      </div>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                          <label for="indicators"><h5>Target Weight [ Target #4.1.a ] :</h5><h6>proportion of children and young people in grades 2/3 achieving at least a minimum proficiency level in (i) reading and (ii) mathematics, by sex</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #4.1.a" name="Tar #4.1.a" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #4.1.b ] :</h5><h6>proportion of children and young people at the end of primary;</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #4.1.b" name="Tar #4.1.b" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #4.1.c ] :</h5><h6>at the end of lower secondary achieving at least a minimum proficiency level in (i) reading and (ii) mathematics, by sex</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #4.1.c" name="Tar #4.1.c" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #4.2.1 ] :</h5><h6>Proportion of children under 5 years of age who are developmentally on track in health, learning and psychosocial well-being, by sex</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #4.2.1" name="Tar #4.2.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #4.2.2 ] :</h5><h6>Participation rate in organized learning (one year before the official primary entry age), by sex</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #4.2.2" name="Tar #4.2.2" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #4.3.1 ] :</h5><h6>Participation rate of youth and adults in formal and non-formal education and training in the previous 12 months, by sex</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #4.3.1" name="Tar #4.3.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #4.4.1 ] :</h5><h6>Proportion of youth and adults with information and communications technology (ICT) skills, by type of skill</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #4.4.1" name="Tar #4.4.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #4.5.1 ] :</h5><h6>Parity indices (female/male, rural/urban, bottom/top wealth quintile and others such as disability status, indigenous peoples and conflict-affected, as data become available) for all education indicators on this list that can be disaggregated</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #4.5.1" name="Tar #4.5.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #4.6.1 ] :</h5><h6>Proportion of population in a given age group achieving at least a fixed level of proficiency in functional (a) literacy and (b) numeracy skills, by sex</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #4.6.1" name="Tar #4.6.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #4.7.1 ] :</h5><h6>Extent to which (i) global citizenship education and (ii) education for sustainable development, including gender equality and human rights, are mainstreamed at all levels in: (a) national education policies, (b) curricula, (c) teacher education and (d) student assessment</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #4.7.1" name="Tar #4.7.1" required>
                      </div>
                    </div>
                      <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #4.a.1 ] :</h5><h6>Proportion of schools with access to: (a) electricity; (b) the Internet for pedagogical purposes; (c) computers for pedagogical purposes; (d) adapted infrastructure and materials for students with disabilities; (e) basic drinking water; (f) single-sex basic sanitation facilities; and (g) basic handwashing facilities (as per the WASH indicator definitions)</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #4.a.1" name="Tar #4.a.1" required>
                      </div>
                    </div>

                      <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #4.b.1 ] :</h5><h6>Volume of official development assistance flows for scholarships by sector and type of study</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #4.b.1" name="Tar #4.b.1" required>
                      </div>
                    </div>

                      <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #4.C.1 ] :</h5><h6>Proportion of teachers in: (a) pre-primary; (b) primary; (c) lower secondary; and (d) upper secondary education who have received at least the minimum organized teacher training (e.g. pedagogical training) pre-service or in-service required for teaching at the relevant level in a given country</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #4.c.1" name="Tar #4.c.1" required>
                      </div>
                    </div>


                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

        <div class="row">
          <!-- goal 5 -->
            <div class="col-md-3">
          <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Goal 5</div>
            <div class="card-body" style="padding:0px;">
              <img src="<?php echo base_url(); ?>assets/img/goal5.png" style="width:100%; margin-bottom:12px;">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#GenderEquality" style="margin-bottom:12px; margin-left:10%;">
                update weights
              </button>
            </div>
          </div>

          <div class="modal fade" id="GenderEquality" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document"  style="max-width:900px;">
              <div class="modal-content" style="height:100%; width:100%;">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12 ml-auto">
                      <div style="height: 280px; width:100%;"><img src="<?php echo base_url(); ?>assets/img/E_GIF_05.gif" style="width:100%;height:100%; margin-bottom:12px;">
                      </div>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #5.1.1 ] :</h5><h6>Whether or not legal frameworks are in place to promote, enforce and monitor equality and non discrimination on the basis of sex</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #5.1.1" name="Tar #5.1.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #5.2.1 ] :</h5><h6>Proportion of ever-partnered women and girls aged 15 years and older subjected to physical, sexual or psychological violence by a current or former intimate partner in the previous 12 months, by form of violence and by age</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #5.2.1" name="Tar #5.2.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #5.2.2 ] :</h5><h6>Proportion of women and girls aged 15 years and older subjected to sexual violence by persons other than an intimate partner in the previous 12 months, by age and place of occurrence</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #5.2.1" name="Tar #5.2.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #5.3.1 ] :</h5><h6>Proportion of women aged 20-24 years who were married or in a union before age 15 and before age 18</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #5.3.1" name="Tar #5.3.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #5.3.2 ] :</h5><h6>Proportion of girls and women aged 15-49 years who have undergone female genital mutilation/cutting, by age</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #5.3.2" name="Tar #5.3.2" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #5.4.1 ] :</h5><h6>Proportion of time spent on unpaid domestic and care work, by sex, age and location</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #5.4.1" name="Tar #5.4.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #5.5.a ] :</h5><h6>Proportion of seats held by women in national parliaments</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #5.5.a" name="Tar #5.5.a" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #5.5.b ] :</h5><h6>Proportion of seats held by women in local governments</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #5.5.b" name="Tar #5.5.b" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #5.5.2 ] :</h5><h6>Proportion of women in managerial positions</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #5.5.2" name="Tar #5.5.2" required>
                      </div>
                    </div>
                      <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #5.6.1 ] :</h5><h6>Proportion of women aged 15-49 years who make their own informed decisions regarding sexual relations, contraceptive use and reproductive health care</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #5.6.1" name="Tar #5.6.1" required>
                      </div>
                    </div>
                      <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #5.6.2 ] :</h5><h6>. Number of countries with laws and regulations that guarantee full and equal access to women and men aged 15 years and older to sexual and reproductive health care, information and education</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #5.6.2" name="Tar #5.6.2" required>
                      </div>
                    </div>
                      <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #5.a.1 ] :</h5><h6>Proportion of total agricultural population with ownership or secure rights over agricultural land, by sex; and (b) share of women among owners or rights-bearers of agricultural land, by type of tenure</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #5.a.1" name="Tar #5.a.1" required>
                      </div>
                    </div>
                      <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #5.a.2 ] :</h5><h6>Proportion of countries where the legal framework (including customary law) guarantees women’s equal rights to land ownership and/or control</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #5.a.2" name="Tar #5.a.2" required>
                      </div>
                    </div>
                      <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #5.b.1 ] :</h5><h6>Proportion of individuals who own a mobile telephone, by sex</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #5.b.1" name="Tar #5.b.1" required>
                      </div>
                    </div>
                      <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #5.C.1 ] :</h5><h6>Percentage of countries with systems to track and make public allocations for gender equality and women’s empowerment</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #5.c.1" name="Tar #5.c.1" required>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>

          <!-- goal 6 -->
            <div class="col-md-3">
          <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Goal 6</div>
            <div class="card-body" style="padding:0px;">
              <img src="<?php echo base_url(); ?>assets/img/goal6.png" style="width:100%; margin-bottom:12px;">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#CleanWaterandSanitation" style="margin-bottom:12px; margin-left:10%;">
                update weights
              </button>
            </div>
          </div>

          <div class="modal fade" id="CleanWaterandSanitation" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document"  style="max-width:900px;">
              <div class="modal-content" style="height:100%; width:100%;">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12 ml-auto">
                      <div style="height: 280px; width:100%;"><img src="<?php echo base_url(); ?>assets/img/E_GIF_06.gif" style="width:100%;height:100%; margin-bottom:12px;">
                      </div>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #6.1.1 ] :</h5><h6>Proportion of population using safely managed drinking water services</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #6.1.1" name="Tar #6.1.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #6.2.1 ] :</h5><h6>Proportion of population using safely managed sanitation services, including a handwashing facility with soap and water</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #6.2.1" name="Tar #6.2.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #6.3.1 ] :</h5><h6>Proportion of wastewater safely treated</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #6.3.1" name="Tar #6.3.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #6.3.2 ] :</h5><h6>Proportion of bodies of water with good ambient water quality</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #6.3.2" name="Tar #6.3.2" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #6.4.1 ] :</h5><h6>Change in water-use efficiency over time</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #6.4.1" name="Tar #6.4.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #6.4.2 ] :</h5><h6>Level of water stress: freshwater withdrawal as a proportion of available freshwater resources</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #6.4.2" name="Tar #6.4.2" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #6.5.1 ] :</h5><h6>Degree of integrated water resources management implementation (0-100)</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #6.5.1" name="Tar #6.5.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #6.5.2 ] :</h5><h6>6.5.2. Proportion of transboundary basin area with an operational arrangement for water cooperation</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #6.5.2" name="Tar #6.5.2" required>
                      </div>
                    </div>
                      <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #6.6.a ] :</h5><h6>Change in the extent of water-related ecosystems over time</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #6.6.a" name="Tar #6.6.a" required>
                      </div>
                    </div>
                      <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #6.6.b ] :</h5><h6>Change in the extent of water-related ecosystems over time</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #6.6.b" name="Tar #6.6.b" required>
                      </div>
                    </div>
                       <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #6.a.1 ] :</h5><h6>Amount of water- and sanitation-related official development assistance that is part of a government-coordinated spending plan</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #6.a.1" name="Tar #6.a.1" required>
                      </div>
                    </div>
                       <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #6.b.1 ] :</h5><h6>Proportion of local administrative units with established and operational policies and procedures for participation of local communities in water and sanitation management</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #6.b.1" name="Tar #6.b.1" required>
                      </div>
                    </div>


                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>

          <!-- goal 7 -->
            <div class="col-md-3">
          <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Goal 7</div>
            <div class="card-body" style="padding:0px;">
              <img src="<?php echo base_url(); ?>assets/img/goal7.png" style="width:100%; margin-bottom:12px;">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AffordableandCleanEnergy" style="margin-bottom:12px; margin-left:10%;">
                update weights
              </button>
            </div>
          </div>

          <div class="modal fade" id="AffordableandCleanEnergy" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document"  style="max-width:900px;">
              <div class="modal-content" style="height:100%; width:100%;">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12 ml-auto">
                      <div style="height: 280px; width:100%;"><img src="<?php echo base_url(); ?>assets/img/E_GIF_07.gif" style="width:100%;height:100%; margin-bottom:12px;">
                      </div>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #7.1.1 ] :</h5><h6>Proportion of population with access to electricity</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #7.1.1" name="Tar #7.1.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #7.1.2 ] :</h5><h6>Proportion of population with primary reliance on clean fuels and technology</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #7.1.2" name="Tar #7.1.2" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #7.2.1 ] :</h5><h6>Renewable energy share in the total final energy consumption</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #7.2.1" name="Tar #7.2.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #7.3.1 ] :</h5><h6>Energy intensity measured in terms of primary energy and GDP</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #7.3.1" name="Tar #7.3.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #7.a.1 ] :</h5><h6>International financial flows to developing countries in support of clean energy research and development and renewable energy production, including in hybrid systems</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #7.a.1" name="Tar #7.a.1" required>
                      </div>
                    </div>
                      <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #7.b.1 ] :</h5><h6>Investments in energy efficiency as a proportion of GDP and the amount of foreign direct investment in financial transfer for infrastructure and technology to sustainable development services</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #7.b.1" name="Tar #7.b.1" required>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>

          <!-- goal 8 -->
            <div class="col-md-3">
          <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Goal 8</div>
            <div class="card-body" style="padding:0;">
              <img src="<?php echo base_url(); ?>assets/img/goal8.png" style="width:100%; margin-bottom:12px;">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#DecentWorkandEconomicGrowth" style="margin-bottom:12px; margin-left:10%;">
                update weights
              </button>
            </div>
          </div>

          <div class="modal fade" id="DecentWorkandEconomicGrowth" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document"  style="max-width:900px;">
              <div class="modal-content" style="height:100%; width:100%;">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12 ml-auto">
                      <div style="height: 280px; width:100%;"><img src="<?php echo base_url(); ?>assets/img/E_GIF_08.gif" style="width:100%;height:100%; margin-bottom:12px;">
                      </div>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #8.1.1 ] :</h5><h6>Annual growth rate of real GDP per capita</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #8.1.1" name="Tar #8.1.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #8.2.1 ] :</h5><h6>Annual growth rate of real GDP per employed person</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #8.2.1" name="Tar #8.2.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #8.3.1 ] :</h5><h6>Proportion of informal employment in non agriculture employment, by sex</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #8.3.1" name="Tar #8.3.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #8.4.1 ] :</h5><h6>Material Footprint, material footprint per capita, and material footprint per GDP</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #8.4.1" name="Tar #8.4.1" required>
                      </div>
                    </div>
                      <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #8.4.2 ] :</h5><h6>Domestic material consumption, domestic material consumption per capita, and domestic material consumption per GDP</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #8.4.2" name="Tar #8.4.2" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #8.5.1 ] :</h5><h6>Average hourly earnings of female and male employees, by occupation, age and persons with disabilities</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #8.5.1" name="Tar #8.5.1" required>
                      </div>
                    </div>
                      <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #8.5.2 ] :</h5><h6>Unemployment rate, by sex, age and persons with disabilities</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #8.5.2" name="Tar #8.5.2" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #8.6.1 ] :</h5><h6>Proportion of youth (aged 15-24 years) not in education, employment or training</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #8.6.1" name="Tar #8.6.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #8.7.1 ] :</h5><h6>Proportion and number of children aged 5-17 years engaged in child labour, by sex and age</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #8.7.1" name="Tar #8.7.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #8.8.1 ] :</h5><h6>Frequency rates of fatal and non-fatal occupational injuries, by sex and migrant status</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #8.8.1" name="Tar #8.8.1" required>
                      </div>
                    </div>
                      <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #8.8.2 ] :</h5><h6>Level of national compliance with labour rights (freedom of association and collective bargaining) based on International Labour Organization (ILO) textual sources and national legislation, by sex and migrant status</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #8.8.2" name="Tar #8.8.2" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #8.9.1 ] :</h5><h6>Tourism direct GDP as a proportion of total GDP and in growth rate</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #8.9.1" name="Tar #8.9.1" required>
                      </div>
                    </div>
                      <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #8.9.2 ] :</h5><h6>Proportion of jobs in sustainable tourism industries out of total tourism jobs
No data for this indicator is currently available and its methodology is still under development
</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #8.9.2" name="Tar #8.9.2" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #8.10.1 ] :</h5><h6>Number of commercial bank branches per 100,000 adults and (b) number of automated teller machines (ATMs) per 100,000 adults</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #8.10.1" name="Tar #8.10.1" required>
                      </div>
                    </div>
                      <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #8.10.2 ] :</h5><h6>Proportion of adults (15 years and older) with an account at a bank or other financial institution or with a mobile-money-service provider</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #8.10.2" name="Tar #8.10.2" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #8.a.1 ] :</h5><h6>Aid for Trade commitments and disbursements</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #8.a.1" name="Tar #8.a.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #8.b.1 ] :</h5><h6>Existence of a developed and operationalized national strategy for youth employment, as a distinct strategy or as part of a national employment strategy</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #8.b.1" name="Tar #8.b.1" required>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

        <div class="row">
          <!-- goal 9 -->
            <div class="col-md-3">
          <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Goal 9</div>
            <div class="card-body" style="padding:0px;">
              <img src="<?php echo base_url(); ?>assets/img/goal9.png" style="width:100%; margin-bottom:12px;">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#IndustryInnovationandInfrastructure" style="margin-bottom:12px; margin-left:10%;">
                update weights
              </button>
            </div>
          </div>

          <div class="modal fade" id="IndustryInnovationandInfrastructure" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document"  style="max-width:900px;">
              <div class="modal-content" style="height:100%; width:100%;">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12 ml-auto">
                      <div style="height: 280px; width:100%;"><img src="<?php echo base_url(); ?>assets/img/E_GIF_09.gif" style="width:100%;height:100%; margin-bottom:12px;">
                      </div>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #9.a.1 ] :</h5><h6>Total official international support (official development assistance plus other official flows) to infrastructure.                                                     </h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #9.a.1" name="Tar #9.a.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #9.b.1 ] :</h5><h6>Proportion of medium and high-tech industry value added in total value added</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #9.b.1" name="Tar #9.b.1" required>
                      </div>
                    </div>
                      <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #9.c.1 ] :</h5><h6>Proportion of population covered by a mobile network, by technology</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #9.c.1" name="Tar #9.c.1" required>
                      </div>
                    </div>
                      <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #9.1.1 ] :</h5><h6>Proportion of the rural population who live within 2 km of an all-season road</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #9.1.1" name="Tar #9.1.1" required>
                      </div>
                    </div>
                      <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #9.1.2 ] :</h5><h6>Passenger and freight volumes, by mode of transport</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #9.1.2" name="Tar #9.1.2" required>
                      </div>
                    </div>
                      <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #9.2.1 ] :</h5><h6>Manufacturing value added as a proportion of GDP and per capita</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #9.2.1" name="Tar #9.2.1" required>
                      </div>
                    </div>
                      <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #9.2.2 ] :</h5><h6>Manufacturing employment as a proportion of total employment</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #9.2.2" name="Tar #9.2.2" required>
                      </div>
                    </div>
                      
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #9.3.1 ] :</h5><h6>Proportion of small-scale industries in total industry value added.</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #9.3.1" name="Tar #9.3.1" required>
                      </div>
                    </div>
                      <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #9.3.2 ] :</h5><h6>Proportion of small-scale industries with a loan or line of credit.</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #9.3.2" name="Tar #9.3.2" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #9.4.1 ] :</h5><h6>Proportion of small-scale industries with a loan or line of credit.</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #9.4.1" name="Tar #9.4.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #9.5.1 ] :</h5><h6>. Research and development expenditure as a proportion of GDP</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #9.5.1" name="Tar #9.5.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #9.5.2 ] :</h5><h6>Researchers (in full-time equivalent) per million inhabitants</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #9.5.2" name="Tar #9.5.2" required>
                      </div>
                    </div>
                    
                   
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>

          <!-- goal 10 -->
            <div class="col-md-3">
          <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Goal 10</div>
            <div class="card-body" style="padding:0px;">
              <img src="<?php echo base_url(); ?>assets/img/goal10.png" style="width:100%; margin-bottom:12px;">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ReducingInequality" style="margin-bottom:12px; margin-left:10%;">
                update weights
              </button>
            </div>
          </div>

          <div class="modal fade" id="ReducingInequality" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document"  style="max-width:900px;">
              <div class="modal-content" style="height:100%; width:100%;">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12 ml-auto">
                      <div style="height: 280px; width:100%;"><img src="<?php echo base_url(); ?>assets/img/E_GIF_10.gif" style="width:100%;height:100%; margin-bottom:12px;">
                      </div>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #10.1.1 ] :</h5><h6>Proportion of tariff lines applied to imports from least developed countries and developing countries with zero-tariff</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #10.1.1" name="Tar #10.1.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #10.2.1 ] :</h5><h6>Total resource flows for development, by recipient and donor countries and type of flow (e.g., official development assistance, foreign direct investment and other flows)</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #10.2.1" name="Tar #10.2.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #10.3.1 ] :</h5><h6>Growth rates of household expenditure or income per capita among the bottom 40 per cent of the population and the total population</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #10.3.1" name="Tar #10.3.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #10.4.1 ] :</h5><h6>Proportion of people living below 50 per cent of median income, by sex, age and persons with disabilities</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #10.4.1" name="Tar #10.4.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #10.5.1 ] :</h5><h6>Proportion of population reporting having personally felt discriminated against or harassed in the previous 12 months on the basis of a ground of discrimination prohibited under international human rights law</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #10.5.1" name="Tar #10.5.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #10.6.1 ] :</h5><h6>Labour share of GDP, comprising wages and social protection transfers</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #10.6.1" name="Tar #10.6.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #10.7.1 ] :</h5><h6>Financial Soundness Indicators (FSIs)

</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #10.7.1" name="Tar #10.7.1" required>
                      </div>
                    </div>
                      <hr>
                      <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #10.7.2 ] :</h5><h6>Number of countries that have implemented well-managed migration policies

</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #10.7.2" name="Tar #10.7.2" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #10.8.1 ] :</h5><h6>Proportion of members and voting rights of developing countries in international organizations</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #10.8.1" name="Tar #10.8.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #10.9.1 ] :</h5><h6>Recruitment cost borne by employee as a proportion of yearly income earned in country of destination</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #10.9.1" name="Tar #10.9.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #10.10.1 ] :</h5><h6>Number of countries with migration policies to facilitate orderly, safe, regular and responsible migration and mobility of people</h6></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #10.10.1" name="Tar #10.10.1" required>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>


          <!-- goal 11 -->
          <div class="col-md-3">
          <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Goal 11</div>
            <div class="card-body" style="padding:0px;">
              <img src="<?php echo base_url(); ?>assets/img/goal11.png" style="width:100%; margin-bottom:12px;">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#SustainableCitiesandCommunities" style="margin-bottom:12px; margin-left:10%;">
                update weights
              </button>
            </div>
          </div>

          <div class="modal fade" id="SustainableCitiesandCommunities" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document"  style="max-width:900px;">
              <div class="modal-content" style="height:100%; width:100%;">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12 ml-auto">
                      <div style="height: 280px; width:100%;"><img src="<?php echo base_url(); ?>assets/img/E_GIF_11.gif" style="width:100%;height:100%; margin-bottom:12px;">
                      </div>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #11.1.1 ] :</h5> <h6>Proportion of urban population living in slums, informal settlements or inadequate housing</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #11.1.1" name="Ind #11.1.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #11.2.1 ] :</h5> <h6>Proportion of population that has convenient access to public transport, by sex, age and persons with disabilities</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #11.2.1" name="Ind #11.2.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #11.3.1 ] :</h5> <h6>Ratio of land consumption rate to population growth rate</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #11.3.1" name="Ind #11.3.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #11.3.2 ] :</h5> <h6>Proportion of cities with a direct participation structure of civil society in urban planning and management that operate regularly and democratically</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #11.3.2" name="Ind #11.3.2" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #11.4.1 ] :</h5> <h6>Total expenditure (public and private) per capita spent on the preservation, protection and conservation of all cultural and natural heritage, by type of heritage (cultural, natural, mixed and World Heritage Centre designation), level of government (national, regional and local/municipal), type of expenditure (operating expenditure/investment) and type of private funding (donations in kind, private non-profit sector and sponsorship)</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #11.4.1" name="Ind #11.4.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #11.5.1 ] :</h5> <h6>Number of deaths, missing persons and persons affected by disaster per 100,000 peoplea</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #11.5.1" name="Ind #11.5.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #11.5.2 ] :</h5> <h6>Direct disaster economic loss in relation to global GDP, including disaster damage to critical infrastructure and disruption of basic servicesa</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #11.5.2" name="Ind #11.5.2" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #11.6.1 ] :</h5> <h6>Proportion of urban solid waste regularly collected and with adequate final discharge out of total urban solid waste generated, by cities</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #11.6.1" name="Ind #11.6.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #11.6.2 ] :</h5> <h6>Annual mean levels of fine particulate matter (e.g. PM2.5 and PM10) in cities (population weighted)</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #11.6.2" name="Ind #11.6.2" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #11.7.1 ] :</h5> <h6>Average share of the built-up area of cities that is open space for public use for all, by sex, age and persons with disabilities</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #11.7.1" name="Ind #11.7.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #11.7.2 ] :</h5> <h6>Proportion of persons victim of physical or sexual harassment, by sex, age, disability status and place of occurrence, in the previous 12 months</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #11.7.2" name="Ind #11.7.2" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #11.A.1 ] :</h5> <h6>Proportion of population living in cities that implement urban and regional development plans integrating population projections and resource needs, by size of city</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #11.A.1" name="Ind #11.A.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #11.B.1 ] :</h5> <h6>Proportion of local governments that adopt and implement local disaster risk reduction strategies in line with the Sendai Framework for Disaster Risk Reduction 2015-2030a</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #11.B.1" name="Ind #11.B.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #11.B.2 ] :</h5> <h6>Number of countries with national and local disaster risk reduction strategiesa</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #11.B.2" name="Ind #11.B.2" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #11.C.1 ] :</h5> <h6>Number of countries with sustainable consumption and production (SCP) national action plans or SCP mainstreamed as a priority or a target into national policies</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #11.C.1" name="Ind #11.C.1" required>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>


          <!-- goal 12 -->
          <div class="col-md-3">
          <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Goal 12</div>
            <div class="card-body" style="padding:0px;">
              <img src="<?php echo base_url(); ?>assets/img/goal12.png" style="width:100%; margin-bottom:12px;">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ResponsibleConsumptionandProduction" style="margin-bottom:12px; margin-left:10%;">
                update weights
              </button>
            </div>
          </div>

          <div class="modal fade" id="ResponsibleConsumptionandProduction" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document"  style="max-width:900px;">
              <div class="modal-content" style="height:100%; width:100%;">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12 ml-auto">
                      <div style="height: 280px; width:100%;"><img src="<?php echo base_url(); ?>assets/img/E_GIF_12.gif" style="width:100%;height:100%; margin-bottom:12px;">
                      </div>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #12.1.1 ] :</h5> <h6>Number of countries with sustainable consumption and production (SCP) national action plans or SCP mainstreamed as a priority or a target into national policies</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #12.1.1" name="Ind #12.1.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #12.2.1 ] :</h5> <h6>Material footprint, material footprint per capita, and material footprint per GDP</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #12.2.1" name="Ind #12.2.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #12.2.2 ] :</h5> <h6>Domestic material consumption, domestic material consumption per capita, and domestic material consumption per GDP</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #12.2.2" name="Ind #12.2.2" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #12.3.1 ] :</h5> <h6>Global food loss index</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #12.3.1" name="Ind #12.3.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #12.4.1 ] :</h5> <h6>Number of parties to international multilateral environmental agreements on hazardous waste, and other chemicals that meet their commitments and obligations in transmitting information as required by each relevant agreement</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #12.4.1" name="Ind #12.4.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #12.4.2 ] :</h5> <h6>Hazardous waste generated per capita and proportion of hazardous waste treated, by type of treatment</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #12.4.2" name="Ind #12.4.2" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #12.5.1 ] :</h5> <h6>National recycling rate, tons of material recycled</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #12.5.1" name="Ind #12.5.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #12.6.1 ] :</h5> <h6>Number of companies publishing sustainability reports</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #12.6.1" name="Ind #12.6.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #12.7.1 ] :</h5> <h6>Number of countries implementing sustainable public procurement policies and action plans</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #12.7.1" name="Ind #12.7.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #12.8.1 ] :</h5> <h6>Extent to which (i) global citizenship education and (ii) education for sustainable development (including climate change education) are mainstreamed in (a) national education policies; (b) curricula; (c) teacher education; and (d) student assessment</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #12.8.1" name="Ind #12.8.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #12.A.1 ] :</h5> <h6>Amount of support to developing countries on research and development for sustainable consumption and production and environmentally sound technologies</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #12.A.1" name="Ind #12.A.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #12.B.1 ] :</h5> <h6>Number of sustainable tourism strategies or policies and implemented action plans with agreed monitoring and evaluation tools</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #12.B.1" name="Ind #12.B.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #12.C.1 ] :</h5> <h6>Number of deaths, missing persons and persons affected by disaster per 100,000 people</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #12.C.1" name="Ind #12.C.1" required>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="row">
          <!-- goal 13 -->
            <div class="col-md-3">
          <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Goal 13</div>
            <div class="card-body" style="padding:0px;">
              <img src="<?php echo base_url(); ?>assets/img/goal13.png" style="width:100%; margin-bottom:12px;">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ClimateAction" style="margin-bottom:12px; margin-left:10%;">
                update weights
              </button>
            </div>
          </div>

          <div class="modal fade" id="ClimateAction" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document"  style="max-width:900px;">
              <div class="modal-content" style="height:100%; width:100%;">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12 ml-auto">
                      <div style="height: 280px; width:100%;"><img src="<?php echo base_url(); ?>assets/img/E_GIF_13.gif" style="width:100%;height:100%; margin-bottom:12px;">
                      </div>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #13.1.1 ] :</h5> <h6>Number of deaths, missing persons and persons affected by disaster per 100,000 people</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #13.1.1" name="Ind #13.1.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #13.1.2 ] :</h5> <h6>Number of countries with national and local disaster risk reduction strategies</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #13.1.2" name="Ind #13.1.2" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #13.1.3 ] :</h5> <h6>Proportion of local governments that adopt and implement local disaster risk reduction strategies in line with national disaster risk reduction strategies</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #13.1.3" name="Ind #13.1.3" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #13.2.1 ] :</h5> <h6>Number of countries that have communicated the establishment or operationalization of an integrated policy/strategy/plan which increases their ability to adapt to the adverse impacts of climate change, and foster climate resilience and low greenhouse gas emissions development in a manner that does not threaten food production (including a national adaptation plan, nationally determined contribution, national communication, biennial update report or other)</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #13.2.1" name="Ind #13.2.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #13.3.1 ] :</h5> <h6>Number of countries that have integrated mitigation, adaptation, impact reduction and early warning into primary, secondary and tertiary curricula</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #13.3.1" name="Ind #13.3.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #13.3.2 ] :</h5> <h6>Number of countries that have communicated the strengthening of institutional, systemic and individual capacity-building to implement adaptation, mitigation and technology transfer, and development actions</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #13.3.2" name="Ind #13.3.2" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #13.A.1 ] :</h5> <h6>Mobilized amount of United States dollars per year starting in 2020 accountable towards the $100 billion commitment</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #13.A.1" name="Ind #13.A.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #13.B.1 ] :</h5> <h6>Number of least developed countries and small island developing States that are receiving specialized support, and amount of support, including finance, technology and capacity-building, for mechanisms for raising capacities for effective climate change-related planning and management, including focusing on women, youth and local and marginalized communities</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #13.B.1" name="Ind #13.B.1" required>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>

          <!-- goal 14 -->
          <div class="col-md-3">
          <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Goal 14</div>
            <div class="card-body" style="padding:0px;">
              <img src="<?php echo base_url(); ?>assets/img/goal14.png" style="width:100%; margin-bottom:12px;">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#LifeBelowWater" style="margin-bottom:12px; margin-left:10%;">
                update weights
              </button>
            </div>
          </div>

          <div class="modal fade" id="LifeBelowWater" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document"  style="max-width:900px;">
              <div class="modal-content" style="height:100%; width:100%;">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12 ml-auto">
                      <div style="height: 280px; width:100%;"><img src="<?php echo base_url(); ?>assets/img/E_GIF_14.gif" style="width:100%;height:100%; margin-bottom:12px;">
                      </div>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #14.1.1 ] :</h5> <h6>Index of coastal eutrophication and floating plastic debris density</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #14.1.1" name="Ind #14.1.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #14.2.1 ] :</h5> <h6>Proportion of national exclusive economic zones managed using ecosystem-based approaches</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #14.2.1" name="Ind #14.2.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #14.3.1 ] :</h5> <h6>Average marine acidity (pH) measured at agreed suite of representative sampling stations</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #14.3.1" name="Ind #14.3.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #14.4.1 ] :</h5> <h6>Proportion of fish stocks within biologically sustainable levels</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #14.4.1" name="Ind #14.4.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #14.5.1 ] :</h5> <h6>Coverage of protected areas in relation to marine areas</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #14.5.1" name="Ind #14.5.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #14.6.1 ] :</h5> <h6>Progress by countries in the degree of implementation of international instruments aiming to combat illegal, unreported and unregulated fishing</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #14.6.1" name="Ind #14.6.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #14.7.1 ] :</h5> <h6>Sustainable fisheries as a percentage of GDP in small island developing States, least developed countries and all countries</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #14.7.1" name="Ind #41.7.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #14.A.1 ] :</h5> <h6>Proportion of total research budget allocated to research in the field of marine technology</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #14.A.1" name="Ind #14.A.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #14.B.1 ] :</h5> <h6>Progress by countries in the degree of application of a legal/regulatory/policy/institutional framework which recognizes and protects access rights for small-scale fisheries</h6> </label>
                      </div>
                      <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #14.B.1" name="Ind #14.B.1" required>
                      <div class="col-md-4">
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #14.C.1 ] :</h5> <h6>Number of countries making progress in ratifying, accepting and implementing through legal, policy and institutional frameworks, ocean-related instruments that implement international law, as reflected in the United Nation Convention on the Law of the Sea, for the conservation and sustainable use of the oceans and their resources</h6> </label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Ind #14.C.1" name="Ind #14.C.1" required>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>

          <!-- goal 15 -->
            <div class="col-md-3">
          <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Goal 15</div>
            <div class="card-body" style="padding:0px;">
              <img src="<?php echo base_url(); ?>assets/img/goal15.png" style="width:100%; margin-bottom:12px;">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#LifeOnLand" style="margin-bottom:12px; margin-left:10%;">
                update weights
              </button>
            </div>
          </div>

          <div class="modal fade" id="LifeOnLand" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document"  style="max-width:900px;">
              <div class="modal-content" style="height:100%; width:100%;">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12 ml-auto">
                      <div style="height: 280px; width:100%;"><img src="<?php echo base_url(); ?>assets/img/E_GIF_15.gif" style="width:100%;height:100%; margin-bottom:12px;">
                      </div>
                      </div>
                    </div>
                    <hr>
                    <h1 style="text-align:center;">No Indicators</h1>
                    <!-- <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #1.1 ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #1.1" name="id" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #1.2 ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #1.2" name="id" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #1.3 ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #1.3" name="id" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #1.4 ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #1.4" name="id" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #1.5 ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #1.5" name="id" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #1.A ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #1.A" name="id" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #1.B ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #1.B" name="id" required>
                      </div>
                    </div> -->

                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>

          <!-- goal 16 -->
            <div class="col-md-3">
          <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Goal 16</div>
            <div class="card-body" style="padding:0px;">
              <img src="<?php echo base_url(); ?>assets/img/goal16.png" style="width:100%; margin-bottom:12px;">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#PeaceJusticeandStrongInstitutions" style="margin-bottom:12px; margin-left:10%;">
                update weights
              </button>
            </div>
          </div>

          <div class="modal fade" id="PeaceJusticeandStrongInstitutions" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document"  style="max-width:900px;">
              <div class="modal-content" style="height:100%; width:100%;">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12 ml-auto">
                      <div style="height: 280px; width:100%;"><img src="<?php echo base_url(); ?>assets/img/E_GIF_16.gif" style="width:100%;height:100%; margin-bottom:12px;">
                      </div>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #16.1 ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #16.1" name="Tar #16.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #16.2 ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #16.2" name="Tar #16.2" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #16.3 ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #16.3" name="Tar #16.3" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #16.4 ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #16.4" name="Tar #16.4" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #16.5 ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #16.5" name="Tar #16.5" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #16.6 ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #16.6" name="Tar #16.6" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #16.7 ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #16.7" name="Tar #16.7" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #16.8 ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #16.8" name="Tar #16.8" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #16.9 ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #16.9" name="Tar #16.9" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #16.10 ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #16.10" name="Tar #16.10" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #16.A ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #16.A" name="Tar #16.A" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #16.B ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #16.B" name="Tar #16.B" required>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        <div class="row">

          <!-- goal 17 -->
            <div class="col-md-3">
          <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Goal 17</div>
            <div class="card-body" style="padding:0px;">
              <img src="<?php echo base_url(); ?>assets/img/goal17.png" style="width:100%; margin-bottom:12px;">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#PartnershipsfortheGoals" style="margin-bottom:12px; margin-left:10%;">
                update weights
              </button>
            </div>
          </div>

          <div class="modal fade" id="PartnershipsfortheGoals" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document"  style="max-width:900px;">
              <div class="modal-content" style="height:100%; width:100%;">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12 ml-auto">
                      <div style="height: 280px; width:100%;"><img src="<?php echo base_url(); ?>assets/img/E_GIF_17.gif" style="width:100%;height:100%; margin-bottom:12px;">
                      </div>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #17.1 ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #17.1" name="Tar #17.1" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #17.2 ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #17.2" name="Tar #17.2" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #17.3 ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #17.3" name="Tar #17.3" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #17.4 ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #17.4" name="Tar #17.4" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #17.5 ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #17.5" name="Tar #17.5" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #17.6 ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #17.6" name="Tar #17.6" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #17.7 ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #17.7" name="Tar #17.7" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #17.8 ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #17.8" name="Tar #17.8" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #17.9 ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #17.9" name="Tar #17.9" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #17.10 ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #17.10" name="Tar #17.10" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #17.11 ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #17.11" name="Tar #17.11" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #17.12 ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #17.12" name="Tar #17.12" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #17.13 ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #17.13" name="Tar #17.13" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #17.14 ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #17.14" name="Tar #17.14" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #17.15 ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #17.15" name="Tar #17.15" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #17.16 ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #17.16" name="Tar #17.16" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #17.17 ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #17.17" name="Tar #17.17" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #17.18 ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #17.18" name="Tar #17.18" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target #17.19 ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar #17.19" name="Tar #17.19" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target Finance ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar Finance" name="Tar Finance" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target Technology ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar Technology" name="Tar Technology" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target Capacity-Building ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar Capacity-Building" name="Tar Capacity-Building" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target Trade ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar Trade" name="Tar Trade" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="indicators"><h5>Target Weight [ Target Systemic Issues ] :</h5></label>
                      </div>
                      <div class="col-md-4">
                        <input type="number" class="form-control" id="validationTooltip01" placeholder="Tar Systemic Issues" name="Tar Systemic Issues" required>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-3"></div>
        <div class="col-md-3"></div>
        </div>




    </div>
  </div>

      <!-- end of page content -->

      <!-- end of page content -->


  </body>
</html>
