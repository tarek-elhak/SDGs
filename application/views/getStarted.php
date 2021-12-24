<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Get Started</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width , initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css"
      rel="stylesheet"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
  
    
    <script src="<?php echo base_url(); ?>assets/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jqvmap.min.css">
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jquery.vmap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.world.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/style2.css"/>
  </head>
  <body>
  <script>
 jQuery(document).ready(function($){
        $("#vmap").vectorMap({
          map: 'world_en',
          backgroundColor:'#555',
          color:'white',
    });
  });
  </script>

    <!-- navigation bar -->
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo base_url('index.php')?>"
          ><img style="width: 60px; height: 60px; border-radius:45%;" src="<?php foreach ($logo as $l){ echo base_url(); ?>assets/public/<?php echo $l->element_content;}?>" height="50px"
        /></a>
        <a class="navbar-brand" href="<?php echo base_url('index.php')?>">
          <span class="Title" style="  font-size: 20pt;font-weight: bolder;font-family: Blippo, fantasy;"><?php foreach ($title as $t){ echo $t->element_content;}?></span>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link active" href="<?php echo base_url('index.php')?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('index.php/LoginController/index')?>">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" target="_blank" href="https://sustainabledevelopment.un.org/news">News and Media</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" target="_blank" href="https://www.un.org/sustainabledevelopment/sustainable-development-goals/">United Nations</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Horizontal Steppers  -->
    <?php if($this->session->flashdata('not_available')){?>
            <div class="alert alert-danger">      
              <?php echo $this->session->flashdata('not_available')?>
            </div>
        <?php }?>
    <?php echo form_open("GetStartedController/compute");?>
    <form class="needs-validation" method="post" name="form">
    <div class="bs-stepper" id="steps">
      <div class="bs-stepper-header" role="tablist">
        <!--steps-->
        <div class="step locations">
          <button
            class="step-trigger"
            type="button"
            data-toggle="collapse"
            data-target="#map"
            aria-expanded="true"
            aria-controls="collapseOne"
            aria-controls="map"
          >
            <span class="bs-stepper-circle"
              ><i class="fas fa-map-marker-alt"></i
            ></span>
            <span class="bs-stepper-label">Select Location</span>
          </button>
        </div>
        <div class="line"></div>
        <div class="step Goals">
          <button
            class="step-trigger collapsed"
            type="button"
            data-toggle="collapse"
            data-target="#goals"
            aria-expanded="false"
            aria-controls="goals"
          >
            <span class="bs-stepper-circle"
              ><i class="fas fa-check-double"></i
            ></span>
            <span class="bs-stepper-label">Select Goal(s)</span>
          </button>
        </div>
        <div class="line"></div>
        <div class="step Presentations">
          <button
            class="step-trigger collapsed"
            type="button"
            data-toggle="collapse"
            data-target="#Presentation"
            aria-expanded="false"
            aria-controls="Presentation"
          >
            <span class="bs-stepper-circle"
              ><i class="fas fa-chart-line"></i
            ></span>
            <span class="bs-stepper-label">Presentation Style</span>
          </button>
        </div>
      </div>
      <div class="bs-stepper-content">
        <!-- your steps content here -->
        <div
          id="map"
          class="collapse show"
          aria-labelledby="locations"
          data-parent="#steps"
        >
          <div class="row">
            
            <div class="col-lg-10 map-section text-center">
            <!-- <div id="maps" style="height:100%"></div> -->
            
           <div id="vmap" style="margin-top:2%;margin-left:25% ; width: 50%; height: 70%"></div>
   <select style="width:30%; height: 7%;margin-top:2%" id="select-state" name="select-state" placeholder="Pick a state...">
   <option></option>
   <option value="Afganistan">Afghanistan</option>
   <option value="Albania">Albania</option>
   <option value="Algeria">Algeria</option>
   <option value="American Samoa">American Samoa</option>
   <option value="Andorra">Andorra</option>
   <option value="Angola">Angola</option>
   <option value="Anguilla">Anguilla</option>
   <option value="Antigua & Barbuda">Antigua & Barbuda</option>
   <option value="Argentina">Argentina</option>
   <option value="Armenia">Armenia</option>
   <option value="Aruba">Aruba</option>
   <option value="Australia">Australia</option>
   <option value="Austria">Austria</option>
   <option value="Azerbaijan">Azerbaijan</option>
   <option value="Bahamas">Bahamas</option>
   <option value="Bahrain">Bahrain</option>
   <option value="Bangladesh">Bangladesh</option>
   <option value="Barbados">Barbados</option>
   <option value="Belarus">Belarus</option>
   <option value="Belgium">Belgium</option>
   <option value="Belize">Belize</option>
   <option value="Benin">Benin</option>
   <option value="Bermuda">Bermuda</option>
   <option value="Bhutan">Bhutan</option>
   <option value="Bolivia">Bolivia</option>
   <option value="Bonaire">Bonaire</option>
   <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
   <option value="Botswana">Botswana</option>
   <option value="Brazil">Brazil</option>
   <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
   <option value="Brunei">Brunei</option>
   <option value="Bulgaria">Bulgaria</option>
   <option value="Burkina Faso">Burkina Faso</option>
   <option value="Burundi">Burundi</option>
   <option value="Cambodia">Cambodia</option>
   <option value="Cameroon">Cameroon</option>
   <option value="Canada">Canada</option>
   <option value="Canary Islands">Canary Islands</option>
   <option value="Cape Verde">Cape Verde</option>
   <option value="Cayman Islands">Cayman Islands</option>
   <option value="Central African Republic">Central African Republic</option>
   <option value="Chad">Chad</option>
   <option value="Channel Islands">Channel Islands</option>
   <option value="Chile">Chile</option>
   <option value="China">China</option>
   <option value="Christmas Island">Christmas Island</option>
   <option value="Cocos Island">Cocos Island</option>
   <option value="Colombia">Colombia</option>
   <option value="Comoros">Comoros</option>
   <option value="Congo">Congo</option>
   <option value="Cook Islands">Cook Islands</option>
   <option value="Costa Rica">Costa Rica</option>
   <option value="Cote DIvoire">Cote DIvoire</option>
   <option value="Croatia">Croatia</option>
   <option value="Cuba">Cuba</option>
   <option value="Curaco">Curacao</option>
   <option value="Cyprus">Cyprus</option>
   <option value="Czech Republic">Czech Republic</option>
   <option value="Denmark">Denmark</option>
   <option value="Djibouti">Djibouti</option>
   <option value="Dominica">Dominica</option>
   <option value="Dominican Republic">Dominican Republic</option>
   <option value="East Timor">East Timor</option>
   <option value="Ecuador">Ecuador</option>
   <option value="Egypt">Egypt</option>
   <option value="El Salvador">El Salvador</option>
   <option value="Equatorial Guinea">Equatorial Guinea</option>
   <option value="Eritrea">Eritrea</option>
   <option value="Estonia">Estonia</option>
   <option value="Ethiopia">Ethiopia</option>
   <option value="Falkland Islands">Falkland Islands</option>
   <option value="Faroe Islands">Faroe Islands</option>
   <option value="Fiji">Fiji</option>
   <option value="Finland">Finland</option>
   <option value="France">France</option>
   <option value="French Guiana">French Guiana</option>
   <option value="French Polynesia">French Polynesia</option>
   <option value="French Southern Ter">French Southern Ter</option>
   <option value="Gabon">Gabon</option>
   <option value="Gambia">Gambia</option>
   <option value="Georgia">Georgia</option>
   <option value="Germany">Germany</option>
   <option value="Ghana">Ghana</option>
   <option value="Gibraltar">Gibraltar</option>
   <option value="Great Britain">Great Britain</option>
   <option value="Greece">Greece</option>
   <option value="Greenland">Greenland</option>
   <option value="Grenada">Grenada</option>
   <option value="Guadeloupe">Guadeloupe</option>
   <option value="Guam">Guam</option>
   <option value="Guatemala">Guatemala</option>
   <option value="Guinea">Guinea</option>
   <option value="Guyana">Guyana</option>
   <option value="Haiti">Haiti</option>
   <option value="Hawaii">Hawaii</option>
   <option value="Honduras">Honduras</option>
   <option value="Hong Kong">Hong Kong</option>
   <option value="Hungary">Hungary</option>
   <option value="Iceland">Iceland</option>
   <option value="Indonesia">Indonesia</option>
   <option value="India">India</option>
   <option value="Iran">Iran</option>
   <option value="Iraq">Iraq</option>
   <option value="Ireland">Ireland</option>
   <option value="Isle of Man">Isle of Man</option>
  
   <option value="Italy">Italy</option>
   <option value="Jamaica">Jamaica</option>
   <option value="Japan">Japan</option>
   <option value="Jordan">Jordan</option>
   <option value="Kazakhstan">Kazakhstan</option>
   <option value="Kenya">Kenya</option>
   <option value="Kiribati">Kiribati</option>
   <option value="Korea North">Korea North</option>
   <option value="Korea Sout">Korea South</option>
   <option value="Kuwait">Kuwait</option>
   <option value="Kyrgyzstan">Kyrgyzstan</option>
   <option value="Laos">Laos</option>
   <option value="Latvia">Latvia</option>
   <option value="Lebanon">Lebanon</option>
   <option value="Lesotho">Lesotho</option>
   <option value="Liberia">Liberia</option>
   <option value="Libya">Libya</option>
   <option value="Liechtenstein">Liechtenstein</option>
   <option value="Lithuania">Lithuania</option>
   <option value="Luxembourg">Luxembourg</option>
   <option value="Macau">Macau</option>
   <option value="Macedonia">Macedonia</option>
   <option value="Madagascar">Madagascar</option>
   <option value="Malaysia">Malaysia</option>
   <option value="Malawi">Malawi</option>
   <option value="Maldives">Maldives</option>
   <option value="Mali">Mali</option>
   <option value="Malta">Malta</option>
   <option value="Marshall Islands">Marshall Islands</option>
   <option value="Martinique">Martinique</option>
   <option value="Mauritania">Mauritania</option>
   <option value="Mauritius">Mauritius</option>
   <option value="Mayotte">Mayotte</option>
   <option value="Mexico">Mexico</option>
   <option value="Midway Islands">Midway Islands</option>
   <option value="Moldova">Moldova</option>
   <option value="Monaco">Monaco</option>
   <option value="Mongolia">Mongolia</option>
   <option value="Montserrat">Montserrat</option>
   <option value="Morocco">Morocco</option>
   <option value="Mozambique">Mozambique</option>
   <option value="Myanmar">Myanmar</option>
   <option value="Nambia">Nambia</option>
   <option value="Nauru">Nauru</option>
   <option value="Nepal">Nepal</option>
   <option value="Netherland Antilles">Netherland Antilles</option>
   <option value="Netherlands">Netherlands (Holland, Europe)</option>
   <option value="Nevis">Nevis</option>
   <option value="New Caledonia">New Caledonia</option>
   <option value="New Zealand">New Zealand</option>
   <option value="Nicaragua">Nicaragua</option>
   <option value="Niger">Niger</option>
   <option value="Nigeria">Nigeria</option>
   <option value="Niue">Niue</option>
   <option value="Norfolk Island">Norfolk Island</option>
   <option value="Norway">Norway</option>
   <option value="Oman">Oman</option>
   <option value="Pakistan">Pakistan</option>
   <option value="Palau Island">Palau Island</option>
   <option value="Palestine">Palestine</option>
   <option value="Panama">Panama</option>
   <option value="Papua New Guinea">Papua New Guinea</option>
   <option value="Paraguay">Paraguay</option>
   <option value="Peru">Peru</option>
   <option value="Phillipines">Philippines</option>
   <option value="Pitcairn Island">Pitcairn Island</option>
   <option value="Poland">Poland</option>
   <option value="Portugal">Portugal</option>
   <option value="Puerto Rico">Puerto Rico</option>
   <option value="Qatar">Qatar</option>
   <option value="Republic of Montenegro">Republic of Montenegro</option>
   <option value="Republic of Serbia">Republic of Serbia</option>
   <option value="Reunion">Reunion</option>
   <option value="Romania">Romania</option>
   <option value="Russia">Russia</option>
   <option value="Rwanda">Rwanda</option>
   <option value="St Barthelemy">St Barthelemy</option>
   <option value="St Eustatius">St Eustatius</option>
   <option value="St Helena">St Helena</option>
   <option value="St Kitts-Nevis">St Kitts-Nevis</option>
   <option value="St Lucia">St Lucia</option>
   <option value="St Maarten">St Maarten</option>
   <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
   <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
   <option value="Saipan">Saipan</option>
   <option value="Samoa">Samoa</option>
   <option value="Samoa American">Samoa American</option>
   <option value="San Marino">San Marino</option>
   <option value="Sao Tome & Principe">Sao Tome & Principe</option>
   <option value="Saudi Arabia">Saudi Arabia</option>
   <option value="Senegal">Senegal</option>
   <option value="Seychelles">Seychelles</option>
   <option value="Sierra Leone">Sierra Leone</option>
   <option value="Singapore">Singapore</option>
   <option value="Slovakia">Slovakia</option>
   <option value="Slovenia">Slovenia</option>
   <option value="Solomon Islands">Solomon Islands</option>
   <option value="Somalia">Somalia</option>
   <option value="South Africa">South Africa</option>
   <option value="Spain">Spain</option>
   <option value="Sri Lanka">Sri Lanka</option>
   <option value="Sudan">Sudan</option>
   <option value="Suriname">Suriname</option>
   <option value="Swaziland">Swaziland</option>
   <option value="Sweden">Sweden</option>
   <option value="Switzerland">Switzerland</option>
   <option value="Syria">Syria</option>
   <option value="Tahiti">Tahiti</option>
   <option value="Taiwan">Taiwan</option>
   <option value="Tajikistan">Tajikistan</option>
   <option value="Tanzania">Tanzania</option>
   <option value="Thailand">Thailand</option>
   <option value="Togo">Togo</option>
   <option value="Tokelau">Tokelau</option>
   <option value="Tonga">Tonga</option>
   <option value="Trinidad & Tobago">Trinidad & Tobago</option>
   <option value="Tunisia">Tunisia</option>
   <option value="Turkey">Turkey</option>
   <option value="Turkmenistan">Turkmenistan</option>
   <option value="Turks & Caicos Is">Turks & Caicos Is</option>
   <option value="Tuvalu">Tuvalu</option>
   <option value="Uganda">Uganda</option>
   <option value="United Kingdom">United Kingdom</option>
   <option value="Ukraine">Ukraine</option>
   <option value="United Arab Erimates">United Arab Emirates</option>
   <option value="United States of America">United States of America</option>
   <option value="Uraguay">Uruguay</option>
   <option value="Uzbekistan">Uzbekistan</option>
   <option value="Vanuatu">Vanuatu</option>
   <option value="Vatican City State">Vatican City State</option>
   <option value="Venezuela">Venezuela</option>
   <option value="Vietnam">Vietnam</option>
   <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
   <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
   <option value="Wake Island">Wake Island</option>
   <option value="Wallis & Futana Is">Wallis & Futana Is</option>
   <option value="Yemen">Yemen</option>
   <option value="Zaire">Zaire</option>
   <option value="Zambia">Zambia</option>
   <option value="Zimbabwe">Zimbabwe</option>
  </select>
        <!-- <input type="submit" name="submit" value="Get Selected Values" /> -->


            </div>
            <div class="col-lg-2 d-flex flex-column">
              <a
                href="#goals"
                data-toggle="collapse"
                data-target="#goals"
                class="mt-auto"
              >
                <button class="btn btn-outline-secondary btn-lg m-2">
                  Next
                </button>
              </a>
            </div>
          </div>
        </div>
        <div
          id="goals"
          class="collapse"
          aria-labelledby="Goals"
          data-parent="#steps"
        >
          <div class="row padding">
            <div
              class="custom-control custom-checkbox image-checkbox col-xs-12 col-sm-6 col-md-4 col-lg-2"
            >
              <input type="checkbox"  name="goal[]" value="No Poverty"/>
              <label class="custom-control-label" for="goal1">
                <img
                  src="<?php echo base_url(); ?>assets/img/goal1.png"
                  alt="NO POVERTY"
                  class="card-img-top"
                />
              </label>
            </div>
            <div
              class="custom-control custom-checkbox image-checkbox col-xs-12 col-sm-6 col-md-4 col-lg-2"
            >
              <input type="checkbox"  name="goal[]" value="Zero Hunger" />
              <label class="custom-control-label" for="goal2">
                <img
                  src="<?php echo base_url(); ?>assets/img/goal2.png"
                  alt="Zero HUNGER"
                  class="card-img-top"
                />
              </label>
            </div>
            <div
              class="custom-control custom-checkbox col-xs-12 col-sm-6 col-md-4 col-lg-2"
            >
              <input type="checkbox"  name="goal[]" value="Good Health and Well-Being" />
              <label class="custom-control-label" for="goal3">
                <img
                  src="<?php echo base_url(); ?>assets/img/goal3.png"
                  alt="GOOD HEALTH AND WELL-BEING"
                  class="card-img-top"
                />
              </label>
            </div>
            <div
              class="custom-control custom-checkbox col-xs-12 col-sm-6 col-md-4 col-lg-2"
            >
              <input type="checkbox"  name="goal[]" value="Quality Education" />
              <label class="custom-control-label" for="goal4">
                <img
                  src="<?php echo base_url(); ?>assets/img/goal4.png"
                  alt="QUALITY EDUCTATION"
                  class="card-img-top"
                />
              </label>
            </div>
            <div
              class="custom-control custom-checkbox col-xs-12 col-sm-6 col-md-4 col-lg-2"
            >
              <input type="checkbox"  name="goal[]" value="Gender Equality" />
              <label class="custom-control-label" for="goal5">
                <img
                  src="<?php echo base_url(); ?>assets/img/goal5.png"
                  alt="GENDER EQUALITY"
                  class="card-img-top"
                />
              </label>
            </div>
            <div
              class="custom-control custom-checkbox col-xs-12 col-sm-6 col-md-4 col-lg-2"
            >
              <input type="checkbox"  name="goal[]" value="Clean Water and Sanitation" />
              <label class="custom-control-label" for="goal6">
                <img
                  src="<?php echo base_url(); ?>assets/img/goal6.png"
                  alt="CLEAN WATER AND SANITATION"
                  class="card-img-top"
                />
              </label>
            </div>
          </div>
          <div class="row padding">
            <div
              class="custom-control custom-checkbox col-xs-12 col-sm-6 col-md-4 col-lg-2"
            >
              <input type="checkbox"  name="goal[]" value="Affordable and Clean Energy" />
              <label class="custom-control-label" for="goal7">
                <img
                  src="<?php echo base_url(); ?>assets/img/goal7.png"
                  alt="AFFORDABLE AND CLEAN ENERGY"
                  class="card-img-top"
                />
              </label>
            </div>
            <div
              class="custom-control custom-checkbox col-xs-12 col-sm-6 col-md-4 col-lg-2"
            >
              <input type="checkbox"  name="goal[]" value="Decent Work and Economic Growth" />
              <label class="custom-control-label" for="goal8">
                <img
                  src="<?php echo base_url(); ?>assets/img/goal8.png"
                  alt="DECENT WORK AND ECONOMIC GROWTH"
                  class="card-img-top"
                />
              </label>
            </div>
            <div
              class="custom-control custom-checkbox col-xs-12 col-sm-6 col-md-4 col-lg-2"
            >
              <input type="checkbox"  name="goal[]" value="Industry, Innovation and Infrastructure" />
              <label class="custom-control-label" for="goal9">
                <img
                  src="<?php echo base_url(); ?>assets/img/goal9.png"
                  alt="INDUSTRY,INNOVATION AND INFRASTRUCTURE"
                  class="card-img-top"
                />
              </label>
            </div>
            <div
              class="custom-control custom-checkbox col-xs-12 col-sm-6 col-md-4 col-lg-2"
            >
              <input type="checkbox"  name="goal[]" value="Reduced Inequalities" />
              <label class="custom-control-label" for="goal10">
                <img
                  src="<?php echo base_url(); ?>assets/img/goal10.png"
                  alt="REDUCED INEQUALITIES"
                  class="card-img-top"
                />
              </label>
            </div>
            <div
              class="custom-control custom-checkbox col-xs-12 col-sm-6 col-md-4 col-lg-2"
            >
              <input type="checkbox"  name="goal[]" value="Sustainable Cities and Communities" />
              <label class="custom-control-label" for="goal11">
                <img
                  src="<?php echo base_url(); ?>assets/img/goal11.png"
                  alt="Sustainable CITIES AND COMMUNITIES"
                  class="card-img-top"
                />
              </label>
            </div>
            <div
              class="custom-control custom-checkbox col-xs-12 col-sm-6 col-md-4 col-lg-2"
            >
              <input type="checkbox"  name="goal[]" value="Responsible Consumption and Production" />
              <label class="custom-control-label" for="goal12">
                <img
                  src="<?php echo base_url(); ?>assets/img/goal12.png"
                  alt="RESPONSIBLE CONSUMPTION AND PRODUCTION"
                  class="card-img-top"
                />
              </label>
            </div>
          </div>
          <div class="row padding">
            <div
              class="custom-control custom-checkbox col-xs-12 col-sm-6 col-md-4 col-lg-2"
            >
              <input type="checkbox"  name="goal[]" value="Climate Action" />
              <label class="custom-control-label" for="goal13">
                <img
                  src="<?php echo base_url(); ?>assets/img/goal13.png"
                  alt="CLIMATE ACTION"
                  class="card-img-top"
                />
              </label>
            </div>
            <div
              class="custom-control custom-checkbox col-xs-12 col-sm-6 col-md-4 col-lg-2"
            >
              <input type="checkbox"  name="goal[]" value="Life Below Water" />
              <label class="custom-control-label" for="goal14">
                <img
                  src="<?php echo base_url(); ?>assets/img/goal14.png"
                  alt="LIFE BELOW WATER"
                  class="card-img-top"
                />
              </label>
            </div>
            <div
              class="custom-control custom-checkbox col-xs-12 col-sm-6 col-md-4 col-lg-2"
            >
              <input type="checkbox"  name="goal[]" value="Life On Land" />
              <label class="custom-control-label" for="goal15">
                <img
                  src="<?php echo base_url(); ?>assets/img/goal15.png"
                  alt="LIFE ON LAND"
                  class="card-img-top"
                />
              </label>
            </div>
            <div
              class="custom-control custom-checkbox col-xs-12 col-sm-6 col-md-4 col-lg-2"
            >
              <input type="checkbox" name="goal[]" value="Peace, Justice and Strong Institutions" />
              <label class="custom-control-label" for="goal16">
                <img
                  src="<?php echo base_url(); ?>assets/img/goal16.png"
                  alt="PEACE, JUSTICE AND STRONG INSTITUTIONS"
                  class="card-img-top"
                />
              </label>
            </div>
            <div
              class="custom-control custom-checkbox col-xs-12 col-sm-6 col-md-4 col-lg-2"
            >
              <input type="checkbox"  name="goal[]" value="Partnerships For The Goals" />
              <label class="custom-control-label" for="goal17">
                <img
                  src="<?php echo base_url(); ?>assets/img/goal17.png"
                  alt="PARTNERSHIP FOR THE GOALS"
                  class="card-img-top"
                />
              </label>
            </div>
            <div
              class="col-xs-12 col-sm-6 col-md-4 col-lg-2 d-flex flex-column"
            >
              <a
                href="#Presentation"
                data-toggle="collapse"
                data-target="#Presentation"
                class="mt-auto"
              >
                <button class="btn btn-outline-secondary btn-lg">
                  Next
                </button>
              </a>
            </div>
          </div>
        </div>
        <div
          id="Presentation"
          class="collapse"
          aria-labelledby="Presentations"
          data-parent="#steps"
        >
          <!-- first row -->
          <div class="row padding">
            <div class="col-5 padding">
              <i class="far fa-chart-bar graph-option1"></i>
              <h3><strong>Column Chart<strong></h3>
            </div>
            <div class="col-5 custom-control custom-radio padding">
              <input
                type="radio"
                class="custom-control-input"
                id="column"
                name="chart"
                value="column"
                checked
              />
              <label class="custom-control-label" for="column"></label>
            </div>
            
          </div>
          <!-- second row -->
          <div class="row padding">
            <div class="col-5 padding">
              <i class="fas fa-chart-pie graph-option2"></i>
              <h3><strong>Pie Chart</strong></h3>
            </div>
            <div class="col-5 custom-control custom-radio padding">
              <input
                type="radio"
                class="custom-control-input"
                id="Pie"
                name="chart"
                value="pie"
              />
              <label class="custom-control-label" for="Pie"></label>
            </div>
          </div>
          <!-- third row -->
          <div class="row padding">
            <div class="col-5 padding">
            </div>
            <div class="col-5 custom-control custom-radio padding">
              
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-2 padding">
              <button class="btn btn-outline-secondary btn-lg" name="compute" type="submit" >
              Compute
              </button>
                
              </div>
          </div>
        </div>
      </div>
    </div>
    </form>
    <?php echo form_close();?>
    <!--  Jquery , bootstrap js , popper js , MDB core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js"></script>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('maps'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWrj3XpamlmjbwmqdOiohAKGv_qYlsKZQ&callback=initMap"
    async defer></script>
  </body>

</html>
