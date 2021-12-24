<!doctype html>
<html lang="en">
  <head>
        <title>Zero Hunger</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/sherif1.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/fontawesome/css/font-awesome.min.css">
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
                    <br><br>
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
            <img src="<?php echo base_url(); ?>assets/img/E_GIF_02.gif" style=width:60%;margin-left:20%;margin-top:40px;margin-bottom:40px;>
          </div>
          <p>
          <h3 style="font-style: italic;"> Goal Description</h3>
              <p><?php foreach ($goal2 as $g2){ echo $g2->element_content;}?></p>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
              Targets & Indicators
            </a>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                Goal 2 Progress (2019)
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
                    <th scope="row">2.1</th>
                    <td>
                      By 2030, end hunger and ensure access by all people, in particular the poor and people in vulnerable situations, including infants, to safe, nutritious and sufficient food all year round
                    </td>
                    <td>2.1.1</td>
                    <td>
                      Prevalence of undernourishment
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>2.1.2</td>
                    <td>
                      Prevalence of moderate or severe food insecurity in the population, based on the Food Insecurity Experience Scale (FIES)
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2.2</th>
                    <td>
                      By 2030, end all forms of malnutrition, including achieving, by 2025, the internationally agreed targets on stunting and wasting in children under 5 years of age, and address the nutritional needs of adolescent girls, pregnant and lactating women and older persons
                    </td>
                    <td>2.2.1</td>
                    <td>
                      Prevalence of stunting (height for age <'-2' standard deviation from the median of the World Health Organization (WHO) Child Growth Standards) among children under 5 years of age
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td>2.2.2</td>
                    <td>
                      Prevalence of malnutrition (weight for height >+2 or <'-2' standard deviation from the median of the WHO Child Growth Standards) among children under 5 years of age, by type (wasting and overweight)
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2.3</th>
                    <td>
                      By 2030, double the agricultural productivity and incomes of small-scale food producers, in particular women, indigenous peoples, family farmers, pastoralists and fishers, including through secure and equal access to land, other productive resources and inputs, knowledge, financial services, markets and opportunities for value addition and non-farm employment
                    </td>
                    <td>2.3.1</td>
                    <td>
                      Volume of production per labour unit by classes of farming/pastoral/forestry enterprise size
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>2.3.2</td>
                    <td>
                      Average income of small-scale food producers, by sex and indigenous status
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2.4</th>
                    <td>
                      By 2030, ensure sustainable food production systems and implement resilient agricultural practices that increase productivity and production, that help maintain ecosystems, that strengthen capacity for adaptation to climate change, extreme weather, drought, flooding and other disasters and that progressively improve land and soil quality
                    </td>
                    <td>2.4.1</td>
                    <td>
                      Proportion of agricultural area under productive and sustainable agriculture
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2.5</th>
                    <td>
                      By 2020, maintain the genetic diversity of seeds, cultivated plants and farmed and domesticated animals and their related wild species, including through soundly managed and diversified seed and plant banks at the national, regional and international levels, and promote access to and fair and equitable sharing of benefits arising from the utilization of genetic resources and associated traditional knowledge, as internationally agreed
                    </td>
                    <td>2.5.1</td>
                    <td>
                      Number of plant and animal genetic resources for food and agriculture secured in either medium or long-term conservation facilities
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td>2.5.2</td>
                    <td>
                      Proportion of local breeds classified as being at risk, not-at-risk or at unknown level of risk of extinction
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2.A</th>
                    <td>
                      Increase investment, including through enhanced international cooperation, in rural infrastructure, agricultural research and extension services, technology development and plant and livestock gene banks in order to enhance agricultural productive capacity in developing countries, in particular least developed countries
                    </td>
                    <td>2.A.1</td>
                    <td>
                      The agriculture orientation index for government expenditures
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td>2.A.2</td>
                    <td>
                      Total official flows (official development assistance plus other official flows) to the agriculture sector
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2.B</th>
                    <td>
                      Correct and prevent trade restrictions and distortions in world agricultural markets, including through the parallel elimination of all forms of agricultural export subsidies and all export measures with equivalent effect, in accordance with the mandate of the Doha Development Round
                    </td>
                    <td>2.B.1</td>
                    <td>
                      Producer Support Estimate
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>2.B.2</td>
                    <td>
                      Agricultural export subsidies
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2.C</th>
                    <td>
                      Adopt measures to ensure the proper functioning of food commodity markets and their derivatives and facilitate timely access to market information, including on food reserves, in order to help limit extreme food price volatility
                    </td>
                    <td>2.C.1</td>
                    <td>
                      Indicator of food price anomalies
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="collapse" id="collapseExample2">
            <div class="card card-body">
              <h2>PROGRESS OF GOAL 2 IN 2019</h2><br>
              <p>Hunger is on the rise again globally and undernutrition continues to affect millions of children. Public investment in agriculture globally is declining, smallscale food producers and family farmers require much greater support and increased investment in infrastructure and technology for sustainable agriculture is urgently needed.
<br><br>
* An estimated 821 million people – approximately 1 in 9 people in the world – were undernourished in 2017, up from 784 million in 2015. This represents a worrying rise in world hunger for a third consecutive year after a prolonged decline. Africa remains the continent with the highest prevalence of undernourishment, affecting one fifth of its population (more than 256 million people). Consistent with the continued growth in undernourishment, 770 million people faced severe food insecurity in   2017.
<br>* Stunting has been decreasing in nearly every region since 2000. Still, more than 1 in 5 children under 5 years of age (149 million) were stunted in 2018. Globally, 49 million children under 5 were affected by wasting and another 40 million were overweight in 2018.
<br>* Strengthening the resilience and adaptive capacity of small-scale and family farmers, whose productivity is systematically lower than all other food producers, is critical to reversing the trend of the rise in hunger. The share of small-scale food producers in terms of all food producers in countries in Africa, Asia and Latin America ranges from 40 to 85 per cent, compared with fewer than 10 per cent in Europe.
<br>* Government spending on agriculture compared to agriculture’s contribution to the total economy has declined by 37 per cent; the ratio fell from 0.42 in 2001 to 0.26 worldwide in 2017. In addition, aid to agriculture in developing countries fell from nearly 25 per cent of all donors’ sector-allocable aid in the mid-1980s to only 5 per cent in 2017, representing a decrease of $12.6 billion.
<br>* A continuous downward trend has been observed in export subsidy outlays reported to the World Trade Organization (WTO). The total outlays fell from close to $500 million in 2010 to around $120 million in 2016. This reduction in export subsidies by Governments is leading to lower distortions in agricultural markets.
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
                    <p><a href="https://www.un.org/sustainabledevelopment/development-agenda/" target="_blank" >The Sustainable Development Agenda</a></p>
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
