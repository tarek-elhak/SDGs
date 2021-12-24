<!doctype html>
<html lang="en">
  <head>
        <title>Clean Water And Sanitation</title>
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
            <img src="<?php echo base_url(); ?>assets/img/SDG-6.gif" style=width:60%;margin-left:20%;margin-top:40px;margin-bottom:40px;>
          </div>
          <p>
          <h3 style="font-style: italic;"> Goal Description</h3>
              <p><?php foreach ($goal6 as $g6){ echo $g6->element_content;}?></p>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
              Targets & Indicators
            </a>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                Goal 6 Progress (2019)
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
                    <th scope="row">6.1</th>
                    <td>
                      By 2030, achieve universal and equitable access to safe and affordable drinking water for all
                    </td>
                    <td>6.1.1</td>
                    <td>
                      Proportion of population using safely managed drinking water services
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">6.2</th>
                    <td>
                      By 2030, achieve access to adequate and equitable sanitation and hygiene for all and end open defecation, paying special attention to the needs of women and girls and those in vulnerable situations
                    </td>
                    <td>6.2.1</td>
                    <td>
                      Proportion of population using safely managed sanitation services, including a hand-washing facility with soap and water
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">6.3</th>
                    <td>
                      By 2030, improve water quality by reducing pollution, eliminating dumping and minimizing release of hazardous chemicals and materials, halving the proportion of untreated wastewater and substantially increasing recycling and safe reuse globally
                    </td>
                    <td>6.3.1</td>
                    <td>
                      Proportion of wastewater safely treated
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>6.3.2</td>
                    <td>
                      Proportion of bodies of water with good ambient water quality
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">6.4</th>
                    <td>
                      By 2030, substantially increase water-use efficiency across all sectors and ensure sustainable withdrawals and supply of freshwater to address water scarcity and substantially reduce the number of people suffering from water scarcity
                    </td>
                    <td>6.4.1</td>
                    <td>
                      Change in water-use efficiency over time
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>6.4.2</td>
                    <td>
                      Level of water stress: freshwater withdrawal as a proportion of available freshwater resources
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">6.5</th>
                    <td>
                      By 2030, implement integrated water resources management at all levels, including through transboundary cooperation as appropriate
                    </td>
                    <td>6.5.1</td>
                    <td>
                      Degree of integrated water resources management implementation (0-100)
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>6.5.2</td>
                    <td>
                      Proportion of transboundary basin area with an operational arrangement for water cooperation
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">6.6</th>
                    <td>
                      By 2020, protect and restore water-related ecosystems, including mountains, forests, wetlands, rivers, aquifers and lakes
                    </td>
                    <td>6.6.1</td>
                    <td>
                      Change in the extent of water-related ecosystems over time
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">6.A</th>
                    <td>
                      By 2030, expand international cooperation and capacity-building support to developing countries in water- and sanitation-related activities and programmes, including water harvesting, desalination, water efficiency, wastewater treatment, recycling and reuse technologies
                    </td>
                    <td>6.A.1</td>
                    <td>
                      Amount of water- and sanitation-related official development assistance that is part of a government-coordinated spending plan
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">6.B</th>
                    <td>
                      Support and strengthen the participation of local communities in improving water and sanitation management
                    </td>
                    <td>6.B.1</td>
                    <td>
                      Proportion of local administrative units with established and operational policies and procedures for participation of local communities in water and sanitation management
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="collapse" id="collapseExample2">
            <div class="card card-body">
              <h2>PROGRESS OF GOAL 6 IN 2019</h2><br><br>
              <p>Despite progress, billions of people still lack safe water, sanitation and handwashing facilities. Data suggests that achieving universal access to even basic sanitation service by 2030 would require doubling the current annual rate of progress. More efficient use and management of water are critical to addressing the growing demand for water, threats to water security and the increasing frequency and severity of droughts and floods resulting from climate change. As of the time of writing, most countries are unlikely to reach full implementation of integrated water resources management by 2030.
<br><br>
* Globally, the proportion of population using safely managed drinking water services increased from 61 to 71 per cent between 2000 and 2015 and remained unchanged in 2017. An additional 19 per cent of the global population used basic drinking water services. This means that 785 million people still lacked even a basic drinking water service.
<br>* The global population using safely managed sanitation services increased from 28 per cent in 2000 to 43 per cent in 2015 and to 45 per cent in 2017, with the greatest increases occurring in Latin America and the Caribbean, sub-Saharan Africa and East and South-East Asia. Between 2000 and 2017, the proportion lacking even a basic sanitation service decreased from 44 to 27 per cent, yet 701 million people still practiced open defecation in 2017. E/2019/68 19-07404 13/39
<br>* In 2017, some 60 per cent of people worldwide and only 38 per cent in least developed countries had a basic handwashing facility with soap and water at home, leaving an estimated 3 billion people without basic handwashing facilities at home.
<br>* In 2016, one third of all primary schools lacked basic drinking water, sanitation and hygiene services, affecting the education of millions of schoolchildren, but particularly girls managing menstruation, and one in four health-care facilities worldwide lacked basic water services, affecting more than 2 billion people.
<br>* Approximately one third of countries have medium or high levels of water stress. Almost all countries that have registered high water stress are located in North Africa and West Asia or in Central and South Asia, and these levels indicate serious water difficulties in the supply of freshwater, at least during parts of the year.
<br>* Of 172 countries, 80 per cent have medium-low implementation or better of integrated water resources management. However, 60 per cent of countries are unlikely to reach the target of full implementation by 2030.
<br>* A significant effort is needed to ensure that cooperation is operational in all transboundary basins. According to data from 67 of 153 countries that share transboundary waters, the average percentage of national transboundary basins covered by an operational arrangement was 59 per cent in the period 2017–2018, with only 17 countries reporting that all their transboundary basins were covered by such arrangements.
<br>* Following several years of steady increases and after reaching $9 billion in 2016, ODA disbursements to the water sector declined by 2 per cent from 2016 to 2017. However, ODA commitments to the water sector jumped by 36 per cent between 2016 and 2017, indicating a renewed focus by donors on the sector.
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
