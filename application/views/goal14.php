<!doctype html>
<html lang="en">
  <head>
        <title>Life Below Water</title>
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
            <img src="<?php echo base_url(); ?>assets/img/E_GIF_14.gif" style=width:60%;margin-left:20%;margin-top:40px;margin-bottom:40px;>
          </div>
          <p>
          <h3 style="font-style: italic;"> Goal Description</h3>
              <p><?php foreach ($goal14 as $g14){ echo $g14->element_content;}?></p>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
              Targets & Indicators
            </a>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                Goal 14 Progress (2019)
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
                    <th scope="row">14.1</th>
                    <td>
                      By 2025, prevent and significantly reduce marine pollution of all kinds, in particular from land-based activities, including marine debris and nutrient pollution
                    </td>
                    <td>14.1.1</td>
                    <td>
                      Index of coastal eutrophication and floating plastic debris density
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">14.2</th>
                    <td>
                      By 2020, sustainably manage and protect marine and coastal ecosystems to avoid significant adverse impacts, including by strengthening their resilience, and take action for their restoration in order to achieve healthy and productive oceans
                    </td>
                    <td>14.2.1</td>
                    <td>
                      Proportion of national exclusive economic zones managed using ecosystem-based approaches
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">14.3</th>
                    <td>
                      Minimize and address the impacts of ocean acidification, including through enhanced scientific cooperation at all levels
                    </td>
                    <td>14.3.1</td>
                    <td>
                      Average marine acidity (pH) measured at agreed suite of representative sampling stations
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">14.4</th>
                    <td>
                      By 2020, effectively regulate harvesting and end overfishing, illegal, unreported and unregulated fishing and destructive fishing practices and implement science-based management plans, in order to restore fish stocks in the shortest time feasible, at least to levels that can produce maximum sustainable yield as determined by their biological characteristics
                    </td>
                    <td>14.4.1</td>
                    <td>
                      Proportion of fish stocks within biologically sustainable levels
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">14.5</th>
                    <td>
                      By 2020, conserve at least 10 per cent of coastal and marine areas, consistent with national and international law and based on the best available scientific information
                    </td>
                    <td>14.5.1</td>
                    <td>
                      Coverage of protected areas in relation to marine areas
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">14.6</th>
                    <td>
                      By 2020, prohibit certain forms of fisheries subsidies which contribute to overcapacity and overfishing, eliminate subsidies that contribute to illegal, unreported and unregulated fishing and refrain from introducing new such subsidies, recognizing that appropriate and effective special and differential treatment for developing and least developed countries should be an integral part of the World Trade Organization fisheries subsidies negotiation
                    </td>
                    <td>14.6.1</td>
                    <td>
                      Progress by countries in the degree of implementation of international instruments aiming to combat illegal, unreported and unregulated fishing
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">14.7</th>
                    <td>
                      By 2030, increase the economic benefits to Small Island developing States and least developed countries from the sustainable use of marine resources, including through sustainable management of fisheries, aquaculture and tourism
                    </td>
                    <td>14.7.1</td>
                    <td>
                      Sustainable fisheries as a percentage of GDP in small island developing States, least developed countries and all countries
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">14.A</th>
                    <td>
                      Increase scientific knowledge, develop research capacity and transfer marine technology, taking into account the Intergovernmental Oceanographic Commission Criteria and Guidelines on the Transfer of Marine Technology, in order to improve ocean health and to enhance the contribution of marine biodiversity to the development of developing countries, in particular small island developing States and least developed countries
                    </td>
                    <td>14.A.1</td>
                    <td>
                      Proportion of total research budget allocated to research in the field of marine technology
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">14.B</th>
                    <td>
                      Provide access for small-scale artisanal fishers to marine resources and markets
                    </td>
                    <td>14.B.1</td>
                    <td>
                      Progress by countries in the degree of application of a legal/regulatory/policy/institutional framework which recognizes and protects access rights for small-scale fisheries
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">14.C</th>
                    <td>
                      Enhance the conservation and sustainable use of oceans and their resources by implementing international law as reflected in UNCLOS, which provides the legal framework for the conservation and sustainable use of oceans and their resources, as recalled in paragraph 158 of The Future We Want
                    </td>
                    <td>14.C.1</td>
                    <td>
                      Number of countries making progress in ratifying, accepting and implementing through legal, policy and institutional frameworks, ocean-related instruments that implement international law, as reflected in the United Nation Convention on the Law of the Sea, for the conservation and sustainable use of the oceans and their resources
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="collapse" id="collapseExample2">
            <div class="card card-body">
              <h2>PROGRESS OF GOAL 14 IN 2019</h2><br><br>
              <p>The expansion of protected areas for marine biodiversity and existing policies and treaties that encourage responsible use of ocean resources are still insufficient to combat the adverse effects of overfishing, growing ocean acidification due to climate change and worsening coastal eutrophication. As billions of people depend on oceans for their livelihood and food source and on the transboundary nature of oceans, increased efforts and interventions are needed to conserve and sustainably use ocean resources at all levels.
<br><br>
<br>* Ocean acidification is caused by the uptake of atmospheric CO2 by the ocean, which changes the chemical composition of the seawater. Long-term observations of ocean acidification over the past 30 years have shown an average increase of acidity of 26 per cent since pre-industrial times, and at this rate, an increase of 100 to 150 per cent is predicted by the end of the century, with serious consequences for marine life.
<br>* To achieve sustainable development of fisheries, fish stocks must be maintained at a biologically sustainable level. Analyses reveal that the fraction of world marine fish stocks that are within biologically sustainable levels declined from 90 per cent in 1974 to 66.9 per cent in 2015.
<br>* As of December 2018, over 24 million km2 (17.2 per cent) of waters under national jurisdiction (0–200 nautical miles from a national border) were covered by protected areas, a significant increase from 12 per cent in 2015 and more than double the extent covered in 2010. The global mean percentage of each marine key biodiversity area covered by protected areas increased from 31.2 per cent in 2000 to 44.7 per cent in 2015 and to 45.7 per cent in 2018.
<br>* Illegal, unreported and unregulated fishing remains one of the greatest threats to sustainable fisheries, the livelihoods of those who depend upon them and marine ecosystems. A framework of international instruments has been developed that addresses different aspects of fisheries management. Most countries have taken measures to combat such fishing and have adopted an increasing number of fisheries management instruments in the past decade. For example, the Agreement on Port State Measures to Prevent, Deter and Eliminate Illegal, Unreported and Unregulated Fishing, the first international binding agreement to combat such fishing, entered into force in June 2016. The number of parties to the Agreement has rapidly increased and stood at 58 as of February 2019.
<br>* Small-scale fisheries are present in almost all countries, accounting for more than half of total production on average, in terms of both quantity and value. To promote small-scale fishers’ access to productive resources, services and markets, most countries have developed targeted regulatory and institutional frameworks. However, more than 20 per cent of countries have a low to medium level of implementation of such frameworks, particularly in Oceania and Central and South Asia.
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
