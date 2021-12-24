<!doctype html>
<html lang="en">
  <head>
        <title>Responsible Consumption And Production</title>
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
            <img src="<?php echo base_url(); ?>assets/img/E_GIF_12.gif" style=width:60%;margin-left:20%;margin-top:40px;margin-bottom:40px;>
          </div>
          <p>
          <h3 style="font-style: italic;"> Goal Description</h3>
              <p><?php foreach ($goal12 as $g12){ echo $g12->element_content;}?></p>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
              Targets & Indicators
            </a>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                Goal 12 Progress (2019)
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
                    <th scope="row">12.1</th>
                    <td>
                      Implement the 10-year framework of programmes on sustainable consumption and production, all countries taking action, with developed countries taking the lead, taking into account the development and capabilities of developing countries
                    </td>
                    <td>12.1.1</td>
                    <td>
                      Number of countries with sustainable consumption and production (SCP) national action plans or SCP mainstreamed as a priority or a target into national policies
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">12.2</th>
                    <td>
                      By 2030, achieve the sustainable management and efficient use of natural resources
                    </td>
                    <td>12.2.1</td>
                    <td>
                      Material footprint, material footprint per capita, and material footprint per GDP
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td>12.2.2</td>
                    <td>
                      Domestic material consumption, domestic material consumption per capita, and domestic material consumption per GDP
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">12.3</th>
                    <td>
                      By 2030, halve per capita global food waste at the retail and consumer levels and reduce food losses along production and supply chains, including post-harvest losses
                    </td>
                    <td>12.3.1</td>
                    <td>
                      Global food loss index
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">12.4</th>
                    <td>
                      By 2020, achieve the environmentally sound management of chemicals and all wastes throughout their life cycle, in accordance with agreed international frameworks, and significantly reduce their release to air, water and soil in order to minimize their adverse impacts on human health and the environment
                    </td>
                    <td>12.4.1</td>
                    <td>
                      Number of parties to international multilateral environmental agreements on hazardous waste, and other chemicals that meet their commitments and obligations in transmitting information as required by each relevant agreement
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>12.4.2</td>
                    <td>
                      Hazardous waste generated per capita and proportion of hazardous waste treated, by type of treatment
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">12.5</th>
                    <td>
                      By 2030, substantially reduce waste generation through prevention, reduction, recycling and reuse
                    </td>
                    <td>12.5.1</td>
                    <td>
                      National recycling rate, tons of material recycled
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">12.6</th>
                    <td>
                      Encourage companies, especially large and transnational companies, to adopt sustainable practices and to integrate sustainability information into their reporting cycle
                    </td>
                    <td>12.6.1</td>
                    <td>
                      Number of companies publishing sustainability reports
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">12.7</th>
                    <td>
                      Promote public procurement practices that are sustainable, in accordance with national policies and priorities
                    </td>
                    <td>12.7.1</td>
                    <td>
                      Number of countries implementing sustainable public procurement policies and action plans
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">12.8</th>
                    <td>
                      By 2030, ensure that people everywhere have the relevant information and awareness for sustainable development and lifestyles in harmony with nature
                    </td>
                    <td>12.8.1</td>
                    <td>
                      Extent to which (i) global citizenship education and (ii) education for sustainable development (including climate change education) are mainstreamed in (a) national education policies; (b) curricula; (c) teacher education; and (d) student assessment
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">12.A</th>
                    <td>
                      Support developing countries to strengthen their scientific and technological capacity to move towards more sustainable patterns of consumption and production
                    </td>
                    <td>12.A.1</td>
                    <td>
                      Amount of support to developing countries on research and development for sustainable consumption and production and environmentally sound technologies
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">12.B</th>
                    <td>
                      Develop and implement tools to monitor sustainable development impacts for sustainable tourism that creates jobs and promotes local culture and products
                    </td>
                    <td>12.B.1</td>
                    <td>
                      Number of sustainable tourism strategies or policies and implemented action plans with agreed monitoring and evaluation tools
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">12.C</th>
                    <td>
                      Rationalize inefficient fossil-fuel subsidies that encourage wasteful consumption by removing market distortions, in accordance with national circumstances, including by restructuring taxation and phasing out those harmful subsidies, where they exist, to reflect their environmental impacts, taking fully into account the specific needs and conditions of developing countries and minimizing the possible adverse impacts on their development in a manner that protects the poor and the affected communities
                    </td>
                    <td>12.C.1</td>
                    <td>
                      Amount of fossil-fuel subsidies per unit of GDP (production and consumption) and as a proportion of total national expenditure on fossil fuels
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="collapse" id="collapseExample2">
            <div class="card card-body">
              <h2>PROGRESS OF GOAL 12 IN 2019</h2><br><br>
              <p>Worldwide material consumption has expanded rapidly, as has material footprint per capita, seriously jeopardizing the achievement of Sustainable Development Goal 12 and the Goals more broadly. Urgent action is needed to ensure that current material needs do not lead to the overextraction of resources or to the degradation of environmental resources, and should include policies that improve resource efficiency, reduce waste and mainstream sustainability practices across all sectors of the economy.
<br><br>
<br>* In 2017, worldwide material consumption reached 92.1 billion tons, up from 87 billion in 2015 and a 254 per cent increase from 27 billion in 1970, with the rate of extraction accelerating every year since 2000. This reflects the increased demand for natural resources that has defined the past decades, resulting in undue burden on environmental resources. Without urgent and concerted political action, it is projected that global resource extraction could grow to 190 billion tons by 2060.
<br>* Material footprint per capita has increased considerably as well: in 1990 some 8.1 tons of natural resources were used to satisfy a person’s need, while in 2015, almost 12 tons of resources were extracted per person.
<br>* Well-designed national policy frameworks and instruments are necessary to enable the fundamental shift towards sustainable consumption and production patterns. In 2018, 71 countries and the European Union reported on a total of 303 policy instruments.
<br>* Parties to the Montreal Protocol and the Basel, Rotterdam and Stockholm Conventions are required to transmit information on the implementation of their obligations under those agreements. However, the rate of transmission varies, with the average compliance rate across these four agreements at approximately 70 per cent.
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
