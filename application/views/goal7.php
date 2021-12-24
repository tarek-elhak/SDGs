<!doctype html>
<html lang="en">
  <head>
        <title>Affordable And Clean Energy</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/sherif1.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    </head>
  <body >


      <!-- navigation bar -->
        <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
            <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo base_url('index.php')?>"><img style="width: 60px;height: 45px;border-radius:45%;" src="<?php foreach ($logo as $l){ echo base_url(); ?>assets/public/<?php echo $l->element_content;}?>" height="50px"/></a>
            <a class="navbar-brand" href="<?php echo base_url('index.php')?>">
          <span class="Title" style="  font-size: 20pt;font-weight: bolder;font-family: Blippo, fantasy;"><?php foreach ($title as $t){ echo $t->element_content;}?></span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
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

        <!-- goals info & targets -->
        <div class="container">
          <div class="goals">
            <img src="<?php echo base_url(); ?>assets/img/E_GIF_07.gif" style=width:60%;margin-left:20%;margin-top:40px;margin-bottom:40px;>
          </div>
          <p>
          <h3 style="font-style: italic;"> Goal Description</h3>
              <p><?php foreach ($goal7 as $g7){ echo $g7->element_content;}?></p>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
              Targets & Indicators
            </a>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                Goal 7 Progress (2019)
            </a>
          </p>
          <div class="collapse" id="collapseExample1">
            <div class="card card-body">

              <table class="table table-hover">
                <thead>
                  <tr class="bg-primary">
                    <th scope="col">#</th>
                    <th scope="col">Target</th>
                    <th scope="col">sub#</th>
                    <th scope="col">Indicator</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">7.1</th>
                    <td>
                      By 2030, ensure universal access to affordable, reliable and modern energy services
                    </td>
                    <td>7.1.1</td>
                    <td>
                      Proportion of population with access to electricity
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>7.1.2</td>
                    <td>
                      Proportion of population with primary reliance on clean fuels and technology
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">7.2</th>
                    <td>
                      By 2030, increase substantially the share of renewable energy in the global energy mix
                    </td>
                    <td>7.2.1</td>
                    <td>
                      Renewable energy share in the total final energy consumption
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">7.3</th>
                    <td>
                      By 2030, double the global rate of improvement in energy efficiency
                    </td>
                    <td>7.3.1</td>
                    <td>
                      Energy intensity measured in terms of primary energy and GDP
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">7.A</th>
                    <td>
                      By 2030, enhance international cooperation to facilitate access to clean energy research and technology, including renewable energy, energy efficiency and advanced and cleaner fossil-fuel technology, and promote investment in energy infrastructure and clean energy technology
                    </td>
                    <td>7.A.1</td>
                    <td>
                      International financial flows to developing countries in support of clean energy research and development and renewable energy production, including in hybrid systems
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">7.B</th>
                    <td>
                      By 2030, expand infrastructure and upgrade technology for supplying modern and sustainable energy services for all in developing countries, in particular least developed countries, small island developing States, and land-locked developing countries, in accordance with their respective programmes of support
                    </td>
                    <td>7.B.1</td>
                    <td>
                      Investments in energy efficiency as a percentage of GDP and the amount of foreign direct investment in financial transfer for infrastructure and technology to sustainable development services
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="collapse" id="collapseExample2">
            <div class="card card-body">
              <h2>PROGRESS OF GOAL 7 IN 2019</h2><br><br>
              <p>Access to electricity in the poorest countries has begun to accelerate, energy efficiency continues to improve and renewable energy is making gains in electricity sector. Despite this progress, some 800 million people remain without electricity while access to clean cooking fuels and technologies needs dedicated attention. In addition, if Sustainable Development Goals 7, 13 and related Goals are to be met, much higher levels of ambition are required with regard to renewable energy, including transportation and heating.
<br><br>
<br>* The global electrification rate rose from 83 per cent in 2010 to 87 per cent in 2015, with the increase accelerating to reach 89 per cent in 2017. However, some 840 million people around the world are still without access to electricity.
<br>* The global share of the population with access to clean cooking fuels and technologies reached 61 per cent in 2017, up from 57 per cent in 2010. Despite this progress, close to 3 billion people still rely primarily on inefficient and polluting cooking systems.
<br>* The renewable energy share of total final energy consumption gradually increased from 16.6 per cent in 2010 to 17.5 per cent in 2016, though much faster change is required to meet climate goals. Even though the absolute level of renewable energy consumption has grown by more than 18 per cent since 2010, only since 2012 has the growth of renewables outpaced the growth of total energy consumption. E/2019/68 14/39 19-07404
<br>* Global primary energy intensity (ratio of energy used per unit of GDP) improved from 5.9 in 2010 to 5.1 in 2016, a rate of improvement of 2.3 per cent, which is still short of the 2.7 per cent annual rate needed to reach target 3 of Sustainable Development Goal 7.
<br>* International financial flows to developing countries in support of clean and renewable energy reached $18.6 billion in 2016, almost doubling from $9.9 billion in 2010.
              </p>
            </div>
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
