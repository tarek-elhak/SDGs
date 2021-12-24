<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Progress Tracker 2030</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/style4.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        
    </head>
    <body>
            <!-- navigation bar -->
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo base_url('index.php')?>"
          ><img style="width: 60px;height: 45px;border-radius:45%;" src="<?php foreach ($logo as $l){ echo base_url(); ?>assets/public/<?php echo $l->element_content;}?>" height="50px"
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
     <!-- Image Slider -->
        <div id ="slides" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#slides" data-slide-to="0" class="active"></li>
                <li data-target="#slides" data-slide-to="1" ></li>
                <li data-target="#slides" data-slide-to="2" ></li>
                <li data-target="#slides" data-slide-to="3" ></li>
                <li data-target="#slides" data-slide-to="4" ></li>
                <li data-target="#slides" data-slide-to="5" ></li>
                <li data-target="#slides" data-slide-to="6" ></li>
                <li data-target="#slides" data-slide-to="7" ></li>
                <li data-target="#slides" data-slide-to="8" ></li>
                <li data-target="#slides" data-slide-to="9" ></li>
                <li data-target="#slides" data-slide-to="10" ></li>
                <li data-target="#slides" data-slide-to="11" ></li>
                <li data-target="#slides" data-slide-to="12" ></li>
                <li data-target="#slides" data-slide-to="13" ></li>
                <li data-target="#slides" data-slide-to="14" ></li>
                <li data-target="#slides" data-slide-to="15" ></li>
                <li data-target="#slides" data-slide-to="16" ></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo base_url(); ?>assets/img/Goal 1.png"/>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url(); ?>assets/img/Goal 2.png"/>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url(); ?>assets/img/Goal 3.png"/>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url(); ?>assets/img/Goal 4.png"/>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url(); ?>assets/img/Goal 5.png"/>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url(); ?>assets/img/Goal 6.png"/>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url(); ?>assets/img/Goal 7.png"/>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url(); ?>assets/img/Goal 8.png"/>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url(); ?>assets/img/Goal 9.png"/>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url(); ?>assets/img/Goal 10.png"/>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url(); ?>assets/img/Goal 11.png"/>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url(); ?>assets/img/Goal 12.png"/>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url(); ?>assets/img/Goal 13.png"/>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url(); ?>assets/img/Goal 14.png"/>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url(); ?>assets/img/Goal 15.png"/>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url(); ?>assets/img/Goal 16.png"/>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url(); ?>assets/img/Goal 17.png"/>
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
        <div class="container-fluid">
            <div class="row jumbotron">
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                    <p class="lead"><?php foreach ($get_started as $g){ echo $g->element_content;}?>
                    </p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
                    <a href="<?php echo base_url('index.php/GetStartedController/index')?>"><button type="button" class="btn btn-outline-secondary btn-lg">Get started</button></a>
                </div>
            </div>
        </div>
        <!-- welcome section -->
        <div class="container-fluid padding">
            <div class="row welcome text-center">
                <div class="col-12">
                    <h1 class="display-4">Track The Achievement With Easy And Simple Way.</h1>
                </div>
                <hr />
                <div class="col-12">
                    <p class="lead">Welcome to our progress tracker system, with this system you can see how much a location 
                        achieving any one of the 17-United Nations Goals for better life and achieving the Sustainable development by 2030
                    </p>
                </div>
            </div>
        </div>
        <!-- three column section -->
        <div class="container-fluid padding">
            <div class="row text-center padding">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <i class="far fa-chart-bar"></i>
                    <h3>column-chart</h3>
                    <p>see the achievement of SDGs Goals in graphic column chart</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <i class="fas fa-chart-pie"></i>
                    <h3>Pie-chart</h3>
                    <p>see the achievement of SDGs Goals in graphic Pie chart</p>
                </div>
                <div class="ol-sm-6 col-md-4">
                    <i class="fas fa-chart-line"></i>
                    <h3>line-chart</h3>
                    <p>see the achievement of SDGs Goals in graphic chart-line</p>
                </div>         
            </div>
            <div>
                <hr class="my-4"/>
            </div>
            <!-- two column section -->
            <div class="container-fluid padding">
                <div class="row padding">
                    <div class="col-lg-6">
                        <h1> SDG Report 2019 </h1>
                        <p>
                            Since its inception in 2015, 
                            the 2030 Agenda has provided a blueprint for shared prosperity in a sustainable world—a world where all people
                            can live productive, vibrant and peaceful lives on a healthy planet.</p> 
                            <p>The year 2030 is just over a decade away, and we must ask ourselves if our actions today are laying the right foundation to achieve the Sustainable Development Goals (SDGs).</p>
                            <p>The Sustainable Development Goals Report 2019 provides evidence-based insights to answer this question.</p>
                            <br />
                            <p><a href="index.htm" class="btn btn-primary">Read Report</a></p>
                            
                    </div>
                    <div class="col-lg-6">
                        <img src="<?php echo base_url(); ?>assets/img/SDGs Report.png" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
        <div>
            <hr class="my-4"/>
        </div>
        <!-- SDGs Cards -->
        <div class="container">
            <div class="row welcome text-center">
                <div class="col-12">
                    <h1 class="display-4">Sustainable Development Goals.</h1>
                </div>
                <hr/>
            </div>
            <div class="row padding text-center">
                     
                <div class="col-2-lg">
                    <div class="card m-1" style="width: 11rem;">
                        <img src="<?php echo base_url(); ?>assets/img/goal1.png" alt="NO POVERTY" class="card-img-top"/>
                        <div class="card-body d-flex flex-column ">
                            <h5 class="card-title">NO POVERTY</h5>
                            <p class="card-text">
                            <?php foreach ($goal1 as $g1){ echo $g1->element_content;}?>
                            </p>
                            <div class="text-center mt-auto ">
                                <a href="<?php echo base_url('index.php/GoalsController/goal1')?>" target="_blank" class="btn btn-outline-primary ">Read More...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2-lg">
                    <div class="card m-1" style="width: 11rem;">
                        <img src="<?php echo base_url(); ?>assets/img/goal2.png" alt="Zero HUNGER" class="card-img-top"/>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Zero HUNGER</h5>
                            <p class="card-text">
                            <?php foreach ($goal2 as $g2){ echo $g2->element_content;}?>
                            </p>
                            <div class="text-center mt-auto ">
                                <a href="<?php echo base_url('index.php/GoalsController/goal2')?>" target="_blank" class="btn btn-outline-primary ">Read More...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2-lg">
                    <div class="card m-1" style="width: 11rem;">
                        <img src="<?php echo base_url(); ?>assets/img/goal3.png" alt="GOOD HEALTH AND WELL-BEING" class="card-img-top"/>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">GOOD HEALTH AND WELL-BEING</h5>
                            <p class="card-text">
                            <?php foreach ($goal3 as $g3){ echo $g3->element_content;}?>
                            </p>
                            <div class="text-center mt-auto ">
                                <a href="<?php echo base_url('index.php/GoalsController/goal3')?>" target="_blank" class="btn btn-outline-primary">Read More...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2-lg">
                    <div class="card m-1" style="width: 11rem;">
                        <img src="<?php echo base_url(); ?>assets/img/goal4.png" alt="QUALITY EDUCTATION" class="card-img-top"/>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">QUALITY EDUCTATION</h5>
                            <p class="card-text">
                            <?php foreach ($goal4 as $g4){ echo $g4->element_content;}?>                            </p>
                            <div class="text-center mt-auto ">
                                <a href="<?php echo base_url('index.php/GoalsController/goal4')?>" target="_blank" class="btn btn-outline-primary">Read More...</a>
</div>
                        </div>
                    </div>
                </div>
                <div class="col-2-lg">
                    <div class="card m-1" style="width: 11rem;">
                        <img src="<?php echo base_url(); ?>assets/img/goal5.png" alt="GENDER EQUALITY" class="card-img-top"/>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">GENDER EQUALITY</h5>
                            <p class="card-text">
                            <?php foreach ($goal5 as $g5){ echo $g5->element_content;}?>
                            </p>
                            <div class="text-center mt-auto ">
                                <a href="<?php echo base_url('index.php/GoalsController/goal5')?>" target="_blank" class="btn btn-outline-primary">Read More...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2-lg">
                    <div class="card m-1" style="width: 11rem;">
                        <img src="<?php echo base_url(); ?>assets/img/goal6.png" alt="CLEAN WATER AND SANITATION" class="card-img-top"/>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">CLEAN WATER AND SANITATION</h5>
                            <p class="card-text">
                            <?php foreach ($goal6 as $g6){ echo $g6->element_content;}?>
                            </p>
                            <div class="text-center mt-auto ">
                                <a href="<?php echo base_url('index.php/GoalsController/goal6')?>" target="_blank" class="btn btn-outline-primary">Read More...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row padding">
                <div class="col-2-lg">
                    <div class="card m-1" style="width: 11rem;">
                        <img src="<?php echo base_url(); ?>assets/img/goal7.png" alt="AFFORDABLE AND CLEAN ENERGY" class="card-img-top"/>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">AFFORDABLE AND CLEAN ENERGY</h5>
                            <p class="card-text">
                            <?php foreach ($goal7 as $g7){ echo $g7->element_content;}?>
                            </p>
                            <div class="text-center mt-auto ">
                                <a href="<?php echo base_url('index.php/GoalsController/goal7')?>" target="_blank" class="btn btn-outline-primary">Read More...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2-lg">
                    <div class="card m-1" style="width: 11rem;">
                        <img src="<?php echo base_url(); ?>assets/img/goal8.png" alt="DECENT WORK AND ECONOMIC GROWTH" class="card-img-top"/>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">DECENT WORK AND ECONOMIC GROWTH</h5>
                            <p class="card-text">
                            <?php foreach ($goal8 as $g8){ echo $g8->element_content;}?>
                            </p>
                            <div class="text-center mt-auto ">
                                <a href="<?php echo base_url('index.php/GoalsController/goal8')?>" target="_blank" class="btn btn-outline-primary">Read More...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2-lg">
                    <div class="card m-1" style="width: 11rem;">
                        <img src="<?php echo base_url(); ?>assets/img/goal9.png" alt="INDUSTRY,INNOVATION AND INFRASTRUCTURE" class="card-img-top"/>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">INDUSTRY,INNOVATION AND INFRASTRUCTURE</h5>
                            <p class="card-text">
                            <?php foreach ($goal9 as $g9){ echo $g9->element_content;}?>
                            </p>
                            <div class="text-center mt-auto ">
                                <a href="<?php echo base_url('index.php/GoalsController/goal9')?>" target="_blank" class="btn btn-outline-primary">Read More...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2-lg">
                    <div class="card m-1" style="width: 11rem;">
                        <img src="<?php echo base_url(); ?>assets/img/goal10.png" alt="REDUCED INEQUALITIES" class="card-img-top"/>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">REDUCED INEQUALITIES</h5>
                            <p class="card-text">
                            <?php foreach ($goal10 as $g10){ echo $g10->element_content;}?>
                            </p>
                            <div class="text-center mt-auto ">
                                <a href="<?php echo base_url('index.php/GoalsController/goal10')?>" target="_blank" class="btn btn-outline-primary">Read More...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2-lg">
                    <div class="card m-1" style="width: 11rem;">
                        <img src="<?php echo base_url(); ?>assets/img/goal11.png" alt="Sustainable CITIES AND COMMUNITIES" class="card-img-top"/>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Sustainable CITIES AND COMMUNITIES</h5>
                            <p class="card-text">
                            <?php foreach ($goal11 as $g11){ echo $g11->element_content;}?>
                            </p>
                            <div class="text-center mt-auto ">
                                <a href="<?php echo base_url('index.php/GoalsController/goal11')?>" target="_blank" class="btn btn-outline-primary">Read More...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2-lg">
                    <div class="card m-1" style="width: 11rem;">
                        <img src="<?php echo base_url(); ?>assets/img/goal12.png" alt="RESPONSIBLE CONSUMPTION AND PRODUCTION" class="card-img-top"/>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">RESPONSIBLE CONSUMPTION AND PRODUCTION</h5>
                            <p class="card-text">
                            <?php foreach ($goal12 as $g12){ echo $g12->element_content;}?>
                            </p>
                            <div class="text-center mt-auto ">
                                <a href="<?php echo base_url('index.php/GoalsController/goal12')?>" target="_blank" class="btn btn-outline-primary">Read More...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="row padding">
                <div class="col-2-lg">
                    <div class="card m-1" style="width: 11rem;">
                        <img src="<?php echo base_url(); ?>assets/img/goal13.png" alt="CLIMATE ACTION" class="card-img-top"/>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">CLIMATE ACTION</h5>
                            <p class="card-text">
                            <?php foreach ($goal13 as $g13){ echo $g13->element_content;}?>
                            </p>
                            <div class="text-center mt-auto ">
                                <a href="<?php echo base_url('index.php/GoalsController/goal13')?>" target="_blank" class="btn btn-outline-primary">Read More...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2-lg">
                    <div class="card m-1" style="width: 11rem;">
                        <img src="<?php echo base_url(); ?>assets/img/goal14.png" alt="LIFE BELOW WATER" class="card-img-top"/>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">LIFE BELOW WATER</h5>
                            <p class="card-text">
                            <?php foreach ($goal14 as $g14){ echo $g14->element_content;}?>
                            </p>
                            <div class="text-center mt-auto ">
                                <a href="<?php echo base_url('index.php/GoalsController/goal14')?>" target="_blank" class="btn btn-outline-primary">Read More...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2-lg">
                    <div class="card m-1" style="width: 11rem;">
                        <img src="<?php echo base_url(); ?>assets/img/goal15.png" alt="LIFE ON LAND" class="card-img-top"/>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">LIFE ON LAND</h5>
                            <p class="card-text">
                            <?php foreach ($goal15 as $g15){ echo $g15->element_content;}?>
                            </p>
                            <div class="text-center mt-auto ">
                                <a href="<?php echo base_url('index.php/GoalsController/goal15')?>" target="_blank" class="btn btn-outline-primary">Read More...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2-lg">
                    <div class="card m-1" style="width: 11rem;">
                        <img src="<?php echo base_url(); ?>assets/img/goal16.png" alt="PEACE, JUSTICE AND STRONG INSTITUTIONS" class="card-img-top"/>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">PEACE, JUSTICE AND STRONG INSTITUTIONS</h5>
                            <p class="card-text">
                            <?php foreach ($goal16 as $g16){ echo $g16->element_content;}?>
                            </p>
                            <div class="text-center mt-auto ">
                                <a href="<?php echo base_url('index.php/GoalsController/goal16')?>" target="_blank" class="btn btn-outline-primary">Read More...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2-lg">
                    <div class="card m-1" style="width: 11rem;">
                        <img src="<?php echo base_url(); ?>assets/img/goal17.png" alt="PARTNERSHIP FOR THE GOALS" class="card-img-top"/>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">PARTNERSHIP FOR THE GOALS</h5>
                            <p class="card-text">
                            <?php foreach ($goal17 as $g17){ echo $g17->element_content;}?>
                            </p>
                            <div class="text-center mt-auto ">
                                <a href="<?php echo base_url('index.php/GoalsController/goal17')?>" target="_blank" class="btn btn-outline-primary">Read More...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <hr class="my-4"/>
        </div>
        <!-- our philosophy section -->
        <div class="container-fluid padding">
            <div class="row padding">
                <div class="col-lg-6">
                    <h1> Our Philosophy </h1>
                        <p><?php foreach ($philosophy as $p){ echo $p->element_content;}?></p>
                        <br />
                        <p><a href="<?php echo base_url('index.php/GetStartedController/index')?>"><button type="button" class="btn btn-outline-secondary btn-lg">Get started</button></a></p>
                </div>
                <div class="col-lg-6">
                    <img src="<?php echo base_url(); ?>assets/img/SDGs.png" class="img-fluid" />
                </div>
            </div>
        </div>
        <div>
            <hr class="my-4"/>
        </div>
    </div>
    <!-- Connect Section -->
    <div class="container-fluid padding">
        <div class="row text-center padding">
            
        </div>
    </div>
    <!-- footer -->
    <footer>
        <div class="container-fluid padding">
            <div class="row text-center">
                <div class="col-md-6">
                    <h3>Contact Us</h3>
                    <hr class="light">
                    <p>555-555-555</p>
                    <p>PGT@email.com</p>
                    <p>5 Ahmed Zoweil str</p>
                    <p>FCAI</p>
                    <p>Cairo University</p>
                </div>
                <div class="col-md-6">
                    <h3>United Nations and References</h3>
                    <hr class="light">
                    <p><a href="https://www.un.org/sustainabledevelopment/development-agenda/" target="_blank">The Sustainable Development Agenda</a></p>
                    <p><a href="https://www.sightsavers.org/policy-and-advocacy/global-goals/?gclid=Cj0KCQjw9tbzBRDVARIsAMBplx_aI9gi6gRAIlGTsnCH5JZwZyQIi42oz7iy-2NFnJIHYr1PvZWNT2QaAknfEALw_wcB" target="_blank">The Sustainable Development Goals</a></p>
                    <p><a href="https://www.un.org/en/card/40830" target="_blank">Why the SDGs Matter?</a></p>
                    <p><a href="https://unstats.un.org/sdgs/metadata/" target="_blank">SDGs Full Meta-Data</a></p>
                    <p><a href="https://www.un.org/sustainabledevelopment/sustainable-development-goals/" target="_blank">Learn More</a></p>
                </div>
                <div class="col-12">
                    <hr class="light-100"/>
                    <h4>&copy; Progress Tracker 2030</h4>
                    <p>All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
    </body>
</html>