<!doctype html>
<html lang="en">
  <head>
        <title>Sustainable Cities And Communities</title>
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
            <img src="<?php echo base_url(); ?>assets/img/E_GIF_11.gif" style=width:60%;margin-left:20%;margin-top:40px;margin-bottom:40px;>
          </div>
          <p>
          <h3 style="font-style: italic;"> Goal Description</h3>
              <p><?php foreach ($goal11 as $g11){ echo $g11->element_content;}?></p>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
              Targets & Indicators
            </a>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                Goal 11 Progress (2019)
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
                    <th scope="row">11.1</th>
                    <td>
                      By 2030, ensure access for all to adequate, safe and affordable housing and basic services and upgrade slums
                    </td>
                    <td>11.1.1</td>
                    <td>
                      Proportion of urban population living in slums, informal settlements or inadequate housing
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">11.2</th>
                    <td>
                      By 2030, provide access to safe, affordable, accessible and sustainable transport systems for all, improving road safety, notably by expanding public transport, with special attention to the needs of those in vulnerable situations, women, children, persons with disabilities and older persons
                    </td>
                    <td>11.2.1</td>
                    <td>
                      Proportion of population that has convenient access to public transport, by sex, age and persons with disabilities
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">11.3</th>
                    <td>
                      By 2030, enhance inclusive and sustainable urbanization and capacity for participatory, integrated and sustainable human settlement planning and management in all countries
                    </td>
                    <td>11.3.1</td>
                    <td>
                      Ratio of land consumption rate to population growth rate
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>11.3.2</td>
                    <td>
                      Proportion of cities with a direct participation structure of civil society in urban planning and management that operate regularly and democratically
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">11.4</th>
                    <td>
                      Strengthen efforts to protect and safeguard the world’s cultural and natural heritage
                    </td>
                    <td>11.4.1</td>
                    <td>
                      Total expenditure (public and private) per capita spent on the preservation, protection and conservation of all cultural and natural heritage, by type of heritage (cultural, natural, mixed and World Heritage Centre designation), level of government (national, regional and local/municipal), type of expenditure (operating expenditure/investment) and type of private funding (donations in kind, private non-profit sector and sponsorship)
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">11.5</th>
                    <td>
                      By 2030, significantly reduce the number of deaths and the number of people affected and substantially decrease the direct economic losses relative to global gross domestic product caused by disasters, including water-related disasters, with a focus on protecting the poor and people in vulnerable situations
                    </td>
                    <td>11.5.1</td>
                    <td>
                      Number of deaths, missing persons and persons affected by disaster per 100,000 people
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>11.5.2</td>
                    <td>
                      Direct disaster economic loss in relation to global GDP, including disaster damage to critical infrastructure and disruption of basic services
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">11.6</th>
                    <td>
                      By 2030, reduce the adverse per capita environmental impact of cities, including by paying special attention to air quality and municipal and other waste management
                    </td>
                    <td>11.6.1</td>
                    <td>
                      Proportion of urban solid waste regularly collected and with adequate final discharge out of total urban solid waste generated, by cities
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>11.6.2</td>
                    <td>
                      Annual mean levels of fine particulate matter (e.g. PM2.5 and PM10) in cities (population weighted)
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">11.7</th>
                    <td>
                      By 2030, provide universal access to safe, inclusive and accessible, green and public spaces, in particular for women and children, older persons and persons with disabilities
                    </td>
                    <td>11.7.1</td>
                    <td>
                      Average share of the built-up area of cities that is open space for public use for all, by sex, age and persons with disabilities
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>11.7.2</td>
                    <td>
                      Proportion of persons victim of physical or sexual harassment, by sex, age, disability status and place of occurrence, in the previous 12 months
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">11.A</th>
                    <td>
                      Support positive economic, social and environmental links between urban, peri-urban and rural areas by strengthening national and regional development planning
                    </td>
                    <td>11.A.1</td>
                    <td>
                      Proportion of population living in cities that implement urban and regional development plans integrating population projections and resource needs, by size of city
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">11.B</th>
                    <td>
                      By 2020, substantially increase the number of cities and human settlements adopting and implementing integrated policies and plans towards inclusion, resource efficiency, mitigation and adaptation to climate change, resilience to disasters, and develop and implement, in line with the Sendai Framework for Disaster Risk Reduction 2015-2030, holistic disaster risk management at all levels
                    </td>
                    <td>11.B.1</td>
                    <td>
                      Proportion of local governments that adopt and implement local disaster risk reduction strategies in line with the Sendai Framework for Disaster Risk Reduction 2015-2030
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>11.B.2</td>
                    <td>
                      Number of countries with national and local disaster risk reduction strategies
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">11.C</th>
                    <td>
                      Support least developed countries, including through financial and technical assistance, in building sustainable and resilient buildings utilizing local materials
                    </td>
                    <td>11.C.1</td>
                    <td>
                      Proportion of financial support to the least developed countries that is allocated to the construction and retrofitting of sustainable, resilient and resource-efficient buildings utilizing local materials
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="collapse" id="collapseExample2">
            <div class="card card-body">
              <h2>PROGRESS OF GOAL 11 IN 2019</h2><br><br>
              <p>Substantial progress has been made in reducing the proportion of the global urban population living in slums, though more than 1 billion people continue to live in such situations. Urgent action is needed to reverse the current situation, which sees the vast majority of urban residents breathing poor-quality air and having limited access to transport and open public spaces. With the areas occupied by cities growing faster than their populations, there are profound repercussions for sustainability.
<br><br>
<br>* Between 1990 and 2016, the proportion of the global urban population living in slums fell from 46 to 23 per cent. This progress was largely offset by internal population growth and rural-urban migration. In 2016, just over 1 billion people lived in slums or informal settlements, with over half (589 million) living in East, South-East, Central and South Asia.
<br>* The proportion of urban residents who have convenient access to public transport (defined as living within 500 m walking distance of a bus stop and within 1,000 m of a railway and/or ferry terminal) remains low, particularly in developing countries. Based on data from 227 cities from 78 countries in 2018, on average, 53 per cent of urban residents in all regions had convenient access to public transport, from a low of 18 per cent in sub-Saharan Africa to a high of 75 per cent in Australia and New Zealand. In some regions that have low access to public transport, informal transport modes are highly prevalent and in many cases provide reliable transport for the majority of urban populations.
<br>* Globally, urban areas are expanding at a faster rate than their populations. Between 2000 and 2014, areas occupied by cities grew 1.28 times faster than their populations. Closely related to this trend is that the urban densities of cities have been declining, creating profound repercussions for environmental sustainability at the local, regional and global scale. Better management of urban growth will be crucial in order to guarantee sustainable urbanization.
<br>* Globally, 2 billion people do not have access to waste collection services and 3 billion people lack access to controlled waste disposal facilities. With increasing urban populations and the existence of consumer-oriented economies amid rising income levels and rapid urbanization, it is estimated that the total waste generated in the world will double from nearly 2 billion tons in 2016 to about 4 billion tons by 2050. While from 2010 to 2018 the proportion of solid waste collected was about 81 per cent globally, in sub-Saharan Africa it was only 52 per cent.
<br>* In 2016, 9 in 10 people living in urban areas still breathed air that did not meet the World Health Organization’s air quality guidelines value for particulate matter – that particulate matter 2.5 microns or less in size (PM2.5) not exceed an annual mean of 10 micrograms per m3 or a daily mean of 25 micrograms per m3 – and more than half of the world population experienced an increase in PM2.5 from 2010 to 2016.
<br>* Most cities have struggled to ensure that their populations have convenient access to open public spaces (defined as spaces within 400 m walking distance of their residence). Based on data from 220 cities in 77 countries in 2018, only 21 per cent of the population had convenient access to open public spaces. However, these results do not necessarily mean that there is an inadequate share of land dedicated to open public spaces in these cities, but rather that their distribution across urban areas is uneven.
<br>* National urban policies are policy strategies that specifically respond to the urbanization challenges of today. As of the beginning of 2019, 150 countries had developed such policies, and almost half are already implementing them.
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
