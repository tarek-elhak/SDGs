<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>No Poverty</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/sherif1.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    </head>
    <body>
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
            <img src="<?php echo base_url(); ?>assets/img/E_GIF_01.gif" style=width:60%;margin-left:20%;margin-top:40px;margin-bottom:40px;>
          </div>
          <p>
          <h3 style="font-style: italic;"> Goal Description</h3>
              <p><?php foreach ($goal1 as $g1){ echo $g1->element_content;}?></p>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
              Targets & Indicators
            </a>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                Goal 1 Progress (2019)
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
                    <th scope="row">1.1</th>
                    <td>
                      By 2030, eradicate extreme poverty for all people everywhere, currently measured as people living on less than $1.25 a day
                    </td>
                    <td>1.1.1</td>
                    <td>
                      Proportion of population below the international poverty line, by sex, age, employment status and geographical location (urban/rural)
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">1.2</th>
                    <td>
                      By 2030, reduce at least by half the proportion of men, women and children of all ages living in poverty in all its dimensions according to national definitions
                    </td>
                    <td>1.2.1</td>
                    <td>
                      Proportion of population living below the national poverty line, by sex and age
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td>1.2.2</td>
                    <td>
                      Proportion of men, women and children of all ages living in poverty in all its dimensions according to national definitions
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">1.3</th>
                    <td>
                      Implement nationally appropriate social protection systems and measures for all, including floors, and by 2030 achieve substantial coverage of the poor and the vulnerable
                    </td>
                    <td>1.3.1</td>
                    <td>
                      Proportion of population covered by social protection floors/systems, by sex, distinguishing children, unemployed persons, older persons, persons with disabilities, pregnant women, newborns, work-injury victims and the poor and the vulnerable
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">1.4</th>
                    <td>
                      By 2030, ensure that all men and women, in particular the poor and the vulnerable, have equal rights to economic resources, as well as access to basic services, ownership and control over land and other forms of property, inheritance, natural resources, appropriate new technology and financial services, including microfinance
                    </td>
                    <td>1.4.1</td>
                    <td>
                      Proportion of population living in households with access to basic services
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td>1.4.2</td>
                    <td>
                      Proportion of total adult population with secure tenure rights to land, with legally recognized documentation and who perceive their rights to land as secure, by sex and by type of tenure
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">1.5</th>
                    <td>
                      By 2030, build the resilience of the poor and those in vulnerable situations and reduce their exposure and vulnerability to climate-related extreme events and other economic, social and environmental shocks and disasters
                    </td>
                    <td>1.5.1</td>
                    <td>
                      Number of deaths, missing persons and persons affected by disaster per 100,000 people
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td>1.5.2</td>
                    <td>
                      Direct disaster economic loss in relation to global gross domestic product (GDP)a
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td>1.5.3</td>
                    <td>
                      Number of countries with national and local disaster risk reduction strategies
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">1.A</th>
                    <td>
                      Ensure significant mobilization of resources from a variety of sources, including through enhanced development cooperation, in order to provide adequate and predictable means for developing countries, in particular least developed countries, to implement programmes and policies to end poverty in all its dimensions
                    </td>
                    <td>1.A.1</td>
                    <td>
                      Proportion of resources allocated by the government directly to poverty reduction programmes
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td>1.A.2</td>
                    <td>
                      Proportion of total government spending on essential services (education, health and social protection)
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">1.B</th>
                    <td>
                      Create sound policy frameworks at the national, regional and international levels, based on pro-poor and gender-sensitive development strategies, to support accelerated investment in poverty eradication actions
                    </td>
                    <td>1.B.1</td>
                    <td>
                      Proportion of government recurrent and capital spending to sectors that disproportionately benefit women, the poor and vulnerable groups
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="collapse" id="collapseExample2">
            <div class="card card-body">
              <h2>PROGRESS OF GOAL 1 IN 2019</h2><br>
              <p>The decline of global extreme poverty continues, but has slowed. The deceleration indicates that the world is not on track to achieve the target of less than 3 per cent of the world living in extreme poverty by 2030. People who continue to live in extreme poverty face deep, entrenched deprivation often exacerbated by violent conflicts and vulnerability to disasters. Strong social protection systems and government spending on key services often help those left behind get back on their feet and escape poverty, but these services need to be brought to scale.

              The share of the world population living in extreme poverty declined to 10 per cent in 2015, down from 16 per cent in 2010 and 36 per cent in 1990. However, the pace of poverty reduction is decelerating, with a “nowcast” of 8.6 per cent in 2018. Moreover, baseline projections suggest that 6 per cent of the world population will still be living in extreme poverty in 2030, missing the target of ending poverty.
              Despite having a job, 8 per cent of the world’s workers and their families still lived in extreme poverty in 2018. The situation remains particularly alarming in sub-Saharan Africa, where the share of working poor stood at 38 per cent in 2018.
              Social protection systems help prevent and reduce poverty and provide a safety net for the vulnerable. However, social protection is not a reality for a large majority of the world’s population. In 2016, 55 per cent – as many as 4 billion people – were not covered by any social protection cash benefits, with large variations across regions: from 87 per cent without coverage in sub-Saharan Africa to 14 per cent in Europe and Northern America.
              Only 22 per cent of unemployed persons receive unemployment cash benefits, only 28 per cent of persons with severe disabilities receive disability cash benefits, only 35 per cent of children worldwide enjoy effective access to social protection and only 41 per cent of women giving birth receive maternity cash benefits.
              Disasters often lead to a downturn in the trajectory of socioeconomic development and exacerbate poverty. From 1998 to 2017, direct economic losses from disasters were estimated at almost $3 trillion, of which climate - related disasters accounted for 77 per cent of the total – a rise of 151 per cent compared with the period from 1978 to 1997 – and climate-related and geophysical disasters claimed an estimated 1.3 million lives. More than 90 per cent of deaths reported internationally were due to disaster events in low- and middle-income countries, and economic losses from disasters as a percentage of gross domestic product (GDP) were also much higher in these countries.
              Countries have reported progress in the development and implementation of national and local disaster risk reduction strategies in line with the Sendai Framework for Disaster Risk Reduction 2015–2030. As at 31 March 2019, 67 countries had reported progress in such alignment and 24 countries reported that their respective local governments had developed local strategies consistent with national strategies and plans.
              Only one third of all countries spend between 15 per cent and 20 per cent of total government expenditure on education, as recommended in the Education 2030 Framework for Action
              </p>
            </div>
          </div>
        </div>
    <!-- footer -->
    <footer>
        <div class="container-fluid padding" >
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
