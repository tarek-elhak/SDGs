<!doctype html>
<html lang="en">
  <head>
        <title>Industry, Innovation, and Infrastructure</title>
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
            <img src="<?php echo base_url(); ?>assets/img/E_GIF_09.gif" style=width:60%;margin-left:20%;margin-top:40px;margin-bottom:40px;>
          </div>
          <p>
          <h3 style="font-style: italic;"> Goal Description</h3>
              <p><?php foreach ($goal9 as $g9){ echo $g9->element_content;}?></p>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
              Targets & Indicators
            </a>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                Goal 9 Progress (2019)
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
                    <th scope="row">9.1</th>
                    <td>
                      Develop quality, reliable, sustainable and resilient infrastructure, including regional and transborder infrastructure, to support economic development and human well-being, with a focus on affordable and equitable access for all
                    </td>
                    <td>9.1.1</td>
                    <td>
                      Proportion of the rural population who live within 2 km of an all-season road
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>9.1.2</td>
                    <td>
                      Passenger and freight volumes, by mode of transport
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">9.2</th>
                    <td>
                      Promote inclusive and sustainable industrialization and, by 2030, significantly raise industry’s share of employment and gross domestic product, in line with national circumstances, and double its share in least developed countries
                    </td>
                    <td>9.2.1</td>
                    <td>
                      Manufacturing value added as a proportion of GDP and per capita
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td>9.2.2</td>
                    <td>
                      Manufacturing employment as a proportion of total employment
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">9.3</th>
                    <td>
                      Increase the access of small-scale industrial and other enterprises, in particular in developing countries, to financial services, including affordable credit, and their integration into value chains and markets
                    </td>
                    <td>9.3.1</td>
                    <td>
                      Proportion of small-scale industries in total industry value added
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>9.3.2</td>
                    <td>
                      Proportion of small-scale industries with a loan or line of credit
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">9.4</th>
                    <td>
                      By 2030, upgrade infrastructure and retrofit industries to make them sustainable, with increased resource-use efficiency and greater adoption of clean and environmentally sound technologies and industrial processes, with all countries taking action in accordance with their respective capabilities
                    </td>
                    <td>9.4.1</td>
                    <td>
                      CO2 emission per unit of value added
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">9.5</th>
                    <td>
                      Enhance scientific research, upgrade the technological capabilities of industrial sectors in all countries, in particular developing countries, including, by 2030, encouraging innovation and substantially increasing the number of research and development workers per 1 million people and public and private research and development spending
                    </td>
                    <td>9.5.1</td>
                    <td>
                      Research and development expenditure as a proportion of GDP
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>9.5.2</td>
                    <td>
                      Researchers (in full-time equivalent) per million inhabitants
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">9.A</th>
                    <td>
                      Facilitate sustainable and resilient infrastructure development in developing countries through enhanced financial, technological and technical support to African countries, least developed countries, landlocked developing countries and small island developing States
                    </td>
                    <td>9.A.1</td>
                    <td>
                      Total official international support (official development assistance plus other official flows) to infrastructure
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">9.B</th>
                    <td>
                      Support domestic technology development, research and innovation in developing countries, including by ensuring a conducive policy environment for, inter alia, industrial diversification and value addition to commodities
                    </td>
                    <td>9.B.1</td>
                    <td>
                      Proportion of medium and high-tech industry value added in total value added
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">9.C</th>
                    <td>
                      Significantly increase access to information and communications technology and strive to provide universal and affordable access to the Internet in least developed countries by 2020
                    </td>
                    <td>9.C.1</td>
                    <td>
                      Proportion of population covered by a mobile network, by technology
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="collapse" id="collapseExample2">
            <div class="card card-body">
              <h2>PROGRESS OF GOAL 9 IN 2019</h2><br><br>
              <p>Aspects of the prevailing global economic environment have not been conducive to rapid progress on Sustainable Development Goal 9. While financing for economic infrastructure has increased in developing countries and impressive progress has been made in mobile connectivity, countries that are lagging behind, such as least developed countries, face serious challenges in doubling the manufacturing industry’s share of GDP by 2030, and investment in scientific research and innovation remains below the global average.
<br><br>
<br>* Efficient transportation services are key drivers of economic development, and more than 80 per cent of world merchandise trade by volume is transported by sea, making maritime transport a critical enabler of trade and globalization. International maritime freight increased by an estimated 3.7 per cent globally in 2017 and projected growth will test the capacity of existing maritime transport infrastructure to support increased freight volumes.
<br>* In 2018, global manufacturing slowed in both developing and developed regions. The slowdown was attributed mainly to emerging trade and tariff barriers that constrained investment and future growth. Despite this slowdown, the global share of GDP in terms of manufacturing value added increased marginally from 15.9 per cent in 2008 to 16.5 per cent in 2015, but stalled at the same level in 2018. The share of manufacturing in least developed countries remained low, posing a serious challenge to the target of doubling the industry’s share of GDP by 2030.
<br>* Meanwhile, the share of manufacturing employment in total employment declined from 15.3 per cent in 2000 to 14.7 per cent in 2015 and to 14.2 per cent in 2018, as countries gradually reallocated production factors from agriculture and low-value added manufacturing towards high-value added manufacturing and services.
<br>* The intensity of global carbon dioxide (CO2) emissions from manufacturing industries declined by more than 20 per cent between 2000 and 2016, to 0.30 kg CO2 per United States dollar, showing a general decoupling of CO2 emissions and GDP growth.
<br>* The proportion of global GDP invested in research and development increased from 1.52 per cent to 1.68 per cent from 2000 to 2016, with Europe and Northern America standing at 2.21 per cent of GDP spent on research and development and most developing regions falling short of the world average in 2016.
<br>* While there has been an increase in the number of researchers per million inhabitants from 804 in 2000 to 1,163 in 2016, that number reached only 91 in sub-Saharan Africa.
<br>* Total official flows for economic infrastructure in developing countries reached $59 billion in 2017, an increase of 32.5 per cent in real terms since 2010. Within this total, the main sectors assisted were transport ($21.6 billion) and banking and financial services ($13.4 billion).
<br>* In 2016, medium-high and high-tech sectors accounted for 44.7 per cent of the global manufacturing value added. Medium-high and high-tech products continued to dominate manufacturing production in Northern America and Europe, reaching 47.4 per cent in 2016 compared with 10.4 per cent in least developed countries.
<br>* Almost all people around the world now live within range of a mobile-cellular network signal, with 90 per cent living within range of a 3G-quality or higher network. This evolution of the mobile network, however, is growing more rapidly than the percentage of the population using the Internet.
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
