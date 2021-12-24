<!doctype html>
<html lang="en">
  <head>
        <title>Climate Action</title>
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
            <img src="<?php echo base_url(); ?>assets/img/E_GIF_13.gif" style=width:60%;margin-left:20%;margin-top:40px;margin-bottom:40px;>
          </div>
          <p>
          <h3 style="font-style: italic;"> Goal Description</h3>
              <p><?php foreach ($goal13 as $g13){ echo $g13->element_content;}?></p>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
              Targets & Indicators
            </a>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                Goal 13 Progress (2019)
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
                    <th scope="row">13.1</th>
                    <td>
                      Strengthen resilience and adaptive capacity to climate-related hazards and natural disasters in all countries
                    </td>
                    <td>13.1.1</td>
                    <td>
                      Proportion of local governments that adopt and implement local disaster risk reduction strategies in line with national disaster risk reduction strategies
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>13.1.2</td>
                    <td>
                      Number of deaths, missing persons and persons affected by disaster per 100,000 people
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>13.1.3</td>
                    <td>
                      Number of countries with national and local disaster risk reduction strategies
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">13.2</th>
                    <td>
                      Integrate climate change measures into national policies, strategies and planning
                    </td>
                    <td>13.2.1</td>
                    <td>
                      Number of countries that have communicated the establishment or operationalization of an integrated policy/strategy/plan which increases their ability to adapt to the adverse impacts of climate change, and foster climate resilience and low greenhouse gas emissions development in a manner that does not threaten food production (including a national adaptation plan, nationally determined contribution, national communication, biennial update report or other)
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">13.3</th>
                    <td>
                      Improve education, awareness-raising and human and institutional capacity on climate change mitigation, adaptation, impact reduction and early warning
                    </td>
                    <td>13.3.1</td>
                    <td>
                      Number of countries that have integrated mitigation, adaptation, impact reduction and early warning into primary, secondary and tertiary curricula
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>13.3.2</td>
                    <td>
                      Number of countries that have communicated the strengthening of institutional, systemic and individual capacity-building to implement adaptation, mitigation and technology transfer, and development actions
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">13.A</th>
                    <td>
                      Implement the commitment undertaken by developed-country parties to the United Nations Framework Convention on Climate Change to a goal of mobilizing jointly $100 billion annually by 2020 from all sources to address the needs of developing countries in the context of meaningful mitigation actions and transparency on implementation and fully operationalize the Green Climate Fund through its capitalization as soon as possible
                    </td>
                    <td>13.A.1</td>
                    <td>
                      Mobilized amount of United States dollars per year starting in 2020 accountable towards the $100 billion commitment
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">13.B</th>
                    <td>
                      Promote mechanisms for raising capacity for effective climate change-related planning and management in least developed countries and small island developing States, including focusing on women, youth and local and marginalized communities
                      <br><br>
                      * Acknowledging that the United Nations Framework Convention on Climate Change is the primary international,
                      intergovernmental forum for negotiating the global response to climate change.
                    </td>
                    <td>13.B.1</td>
                    <td>
                      Number of least developed countries and small island developing States that are receiving specialized support, and amount of support, including finance, technology and capacity-building, for mechanisms for raising capacities for effective climate change-related planning and management, including focusing on women, youth and local and marginalized communities
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="collapse" id="collapseExample2">
            <div class="card card-body">
              <h2>PROGRESS OF GOAL 13 IN 2019</h2><br><br>
              <p>With rising greenhouse gas emissions, climate change is occurring at rates much faster than anticipated and its effects are clearly felt worldwide. While there are positive steps in terms of the climate finance flows and the development of nationally determined contributions, far more ambitious plans and accelerated action are needed on mitigation and adaptation. Access to finance and strengthened capacities need to be scaled up at a much faster rate, particularly for least developed countries and small island developing States.
<br><br>
<br>* Increasing greenhouse gas emissions are driving climate change. In 2017, greenhouse gas concentrations reached new highs, with globally averaged mole fractions of CO2 at 405.5 parts per million (ppm), up from 400.1 ppm in 2015, and at 146 per cent of pre-industrial levels. Moving towards 2030 emission objectives compatible with the 2°C and 1.5°C pathways requires a peak to be achieved as soon as possible, followed by rapid reductions.
<br>* As indicated under Sustainable Development Goal 1 (see para. 22 above), during the period 1998–2017, direct economic losses from disasters were estimated at almost $3 trillion. Climate-related and geophysical disasters claimed an estimated 1.3 million lives.
<br>* As of April 2019, 185 parties had ratified the Paris Agreement. Parties to the Paris Agreement are expected to prepare, communicate and maintain successive nationally determined contributions, and 183 parties had communicated their first nationally determined contributions to the secretariat of the United Nations Framework Convention on Climate Change, while 1 party had communicated its second. Under the Agreement, all parties are required to submit new nationally determined contributions, containing revised and much more ambitious targets, by 2020.
<br>* Global climate finance flows increased by 17 per cent in the period 2015–2016 compared with the period 2013–2014.
<br>* As at 20 May 2019, 28 countries had accessed Green Climate Fund grant financing for the formulation of national adaptation plans and other adaptation planning processes, with a value of $75 million. Of these, 67 per cent were for least developed countries, small island developing States and African States. Proposals from an additional seven countries, with a value of $17 million, are in the final stage of approval. In total, 75 countries are seeking support from the Green Climate Fund for national adaptation plans and other adaptation planning processes, with a combined value of $191 million.
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
