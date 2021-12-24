<!doctype html>
<html lang="en">
  <head>
        <title>Peace, Justice, and Strong Institutions</title>
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
            <img src="<?php echo base_url(); ?>assets/img/E_GIF_16.gif" style=width:60%;margin-left:20%;margin-top:40px;margin-bottom:40px;>
          </div>
          <p>
          <h3 style="font-style: italic;"> Goal Description</h3>
              <p><?php foreach ($goal16 as $g16){ echo $g16->element_content;}?></p>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
              Targets & Indicators
            </a>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                Goal 16 Progress (2019)
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
                    <th scope="row">16.1</th>
                    <td>
                      Significantly reduce all forms of violence and related death rates everywhere
                    </td>
                    <td>16.1.1</td>
                    <td>
                      Number of victims of intentional homicide per 100,000 population, by sex and age
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>16.1.2</td>
                    <td>
                      Conflict-related deaths per 100,000 population, by sex, age and cause
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>16.1.3</td>
                    <td>
                      Proportion of population subjected to physical, psychological or sexual violence in the previous 12 months
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>16.1.4</td>
                    <td>
                      Proportion of population that feel safe walking alone around the area they live
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">16.2</th>
                    <td>
                      End abuse, exploitation, trafficking and all forms of violence against and torture of children
                    </td>
                    <td>16.2.1</td>
                    <td>
                      Proportion of children aged 1-17 years who experienced any physical punishment and/or psychological aggression by caregivers in the past month
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>16.2.2</td>
                    <td>
                      Number of victims of human trafficking per 100,000 population, by sex, age and form of exploitation
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>16.2.3</td>
                    <td>
                      Proportion of young women and men aged 18‑29 years who experienced sexual violence by age 18
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">16.3</th>
                    <td>
                      Promote the rule of law at the national and international levels and ensure equal access to justice for all
                    </td>
                    <td>16.3.1</td>
                    <td>
                      Proportion of victims of violence in the previous 12 months who reported their victimization to competent authorities or other officially recognized conflict resolution mechanisms
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>16.3.2</td>
                    <td>
                      Unsentenced detainees as a proportion of overall prison population
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">16.4</th>
                    <td>
                      By 2030, significantly reduce illicit financial and arms flows, strengthen the recovery and return of stolen assets and combat all forms of organized crime
                    </td>
                    <td>16.4.1</td>
                    <td>
                      Total value of inward and outward illicit financial flows (in current United States dollars)
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>16.4.2</td>
                    <td>
                      Proportion of seized, found or surrendered arms whose illicit origin or context has been traced or established by a competent authority in line with international instruments
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">16.5</th>
                    <td>
                      Substantially reduce corruption and bribery in all their forms
                    </td>
                    <td>16.5.1</td>
                    <td>
                      Proportion of persons who had at least one contact with a public official and who paid a bribe to a public official, or were asked for a bribe by those public officials, during the previous 12 months
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>2.1.2</td>
                    <td>
                      Proportion of businesses that had at least one contact with a public official and that paid a bribe to a public official, or were asked for a bribe by those public officials during the previous 12 months
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">16.6</th>
                    <td>
                      Develop effective, accountable and transparent institutions at all levels
                    </td>
                    <td>16.6.1</td>
                    <td>
                      Primary government expenditures as a proportion of original approved budget, by sector (or by budget codes or similar)
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>16.6.2</td>
                    <td>
                      Proportion of the population satisfied with their last experience of public services
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">16.7</th>
                    <td>
                      Ensure responsive, inclusive, participatory and representative decision-making at all levels
                    </td>
                    <td>16.7.1</td>
                    <td>
                      Proportions of positions (by sex, age, persons with disabilities and population groups) in public institutions (national and local legislatures, public service, and judiciary) compared to national distributions
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>16.7.2</td>
                    <td>
                      Proportion of population who believe decision-making is inclusive and responsive, by sex, age, disability and population group
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">16.8</th>
                    <td>
                      Broaden and strengthen the participation of developing countries in the institutions of global governance
                    </td>
                    <td>16.8.1</td>
                    <td>
                      Proportion of members and voting rights of developing countries in international organizations
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">16.9</th>
                    <td>
                      By 2030, provide legal identity for all, including birth registration
                    </td>
                    <td>16.9.1</td>
                    <td>
                      Proportion of children under 5 years of age whose births have been registered with a civil authority, by age
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">16.10</th>
                    <td>
                      Ensure public access to information and protect fundamental freedoms, in accordance with national legislation and international agreements
                    </td>
                    <td>16.10.1</td>
                    <td>
                      Number of verified cases of killing, kidnapping, enforced disappearance, arbitrary detention and torture of journalists, associated media personnel, trade unionists and human rights advocates in the previous 12 months
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>16.10.2</td>
                    <td>
                      Number of countries that adopt and implement constitutional, statutory and/or policy guarantees for public access to information
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">10.A</th>
                    <td>
                      Strengthen relevant national institutions, including through international cooperation, for building capacity at all levels, in particular in developing countries, to prevent violence and combat terrorism and crime
                    </td>
                    <td>16.A.1</td>
                    <td>
                      Existence of independent national human rights institutions in compliance with the Paris Principles
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">16.B</th>
                    <td>
                      Promote and enforce non-discriminatory laws and policies for sustainable development
                    </td>
                    <td>16.B.1</td>
                    <td>
                      Proportion of population reporting having personally felt discriminated against or harassed in the previous 12 months on the basis of a ground of discrimination prohibited under international human rights law
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="collapse" id="collapseExample2">
            <div class="card card-body">
              <h2>PROGRESS OF GOAL 16 IN 2019</h2><br><br>
              <p>Advances in ending violence, promoting the rule of law, strengthening institutions and increasing access to justice are uneven and continue to deprive millions of their security, rights and opportunities and undermine the delivery of public services and broader economic development. Attacks on civil society are also holding back development progress. Renewed efforts are essential to move towards the achievement of Sustainable Development Goal 16.
<br><br>
<br>* The number of intentional homicides per 100,000 people increased from 6.0 in 2015 to 6.1 in 2017. This slight uptick was largely the result of an increase in the homicide rates in Latin America and the Caribbean and in some countries in sub-Saharan Africa.
<br>* Various forms of violence against children persist. In 83 countries (mostly from developing regions) with recent data on the subject, nearly 8 in 10 children from 1 to 14 years of age were subjected to some form of psychological aggression and/or physical punishment at home. In all but seven of these countries, at least half of children experienced violent disciplinary methods. Sexual violence is perhaps the most disturbing of children’s rights violations. Based on the limited data available, in 14 of 46 countries with comparable data, at least 5 per cent of women between the ages of 18 and 29 experienced sexual intercourse or other sexual acts that were forced, physically or in other ways, for the first time before they were 18 years of age.
<br>* There has been an overall increase in the detection of victims of trafficking in persons, which could reflect either a positive (enhanced efforts by authorities to identify victims) or negative (larger trafficking problem) development. In a departure from prior findings, recent data show that most trafficking victims were detected domestically: 58 per cent in 2016, up from 43 per cent in 2014. The vast majority (70 per cent) of detected victims of human trafficking were women and girls, most of whom were trafficked for sexual exploitation.
<br>* The share of unsentenced detainees in the overall prison population has remained largely constant at 30 per cent in recent years. This occurred in a context where the total prison population grew in absolute values while remaining constant as a share of the total population.
<br>* Killings of human rights defenders, journalists and trade unionists are on the rise. From 2017 to 2018, the United Nations recorded and verified 431 killings across 41 countries. Every passing week saw at least eight people murdered at the front lines of efforts to build more inclusive and equal societies – a worrying increase from the previous average of one victim per day observed from 2015 to 2017. Ninety-nine journalists and bloggers were among the victims.
<br>* Birth registration plays a primary role in ensuring individual rights and access to justice and social services. Even if many regions have reached universal or near universal birth registration, globally the average is just 73 per cent. Fewer than half (46 per cent) of all children under the age of 5 in sub-Saharan Africa have had their births registered.
<br>* Binding laws and policies giving individuals a right to access information held by public authorities have been adopted by 125 countries, with at least 31 countries adopting such laws since 2013. Among the 123 countries for which data on the legal framework is available, 40 do not include the right to appeal to an independent administrative body, which has been assessed as key for the proper implementation of this right.
<br>* The pace of progress to put in place national human rights institutions compliant with the Paris Principles must be accelerated. In 2018, a total of 39 per cent of all countries had in place an institution that was fully compliant with the internationally agreed standard, seven countries more than was the case in 2015. If growth continues at the same rate, by 2030 only a little over one half (54 per cent) of all countries worldwide will have compliant national human rights institutions.
<br>* The difference between the approved and the implemented budget reflects a government’s ability to achieve development objectives, including delivering services to the public. Deviation between the approved and actual spending during the period 2006–2017 in 108 countries shows that actual spending was within plus or minus 5 per cent of the approved budget in about half of the countries. One out of 10 countries had a deviation of more than plus or minus 15 per cent. Almost half of low-income economies showed more than plus or minus 10 per cent deviation in budget execution.

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
