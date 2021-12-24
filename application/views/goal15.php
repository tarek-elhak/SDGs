<!doctype html>
<html lang="en">
  <head>
        <title>Life On Land</title>
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
            <img src="<?php echo base_url(); ?>assets/img/E_GIF_15.gif" style=width:60%;margin-left:20%;margin-top:40px;margin-bottom:40px;>
          </div>
          <p>
          <h3 style="font-style: italic;"> Goal Description</h3>
              <p><?php foreach ($goal15 as $g15){ echo $g15->element_content;}?></p>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
              Targets & Indicators
            </a>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                Goal 15 Progress (2019)
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
                    <th scope="row">15.1</th>
                    <td>
                      By 2020, ensure the conservation, restoration and sustainable use of terrestrial and inland freshwater ecosystems and their services, in particular forests, wetlands, mountains and drylands, in line with obligations under international agreements
                    </td>
                    <td>15.1.1</td>
                    <td>
                      Forest area as a proportion of total land area
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>15.1.2</td>
                    <td>
                      Proportion of important sites for terrestrial and freshwater biodiversity that are covered by protected areas, by ecosystem type
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">15.2</th>
                    <td>
                      By 2020, promote the implementation of sustainable management of all types of forests, halt deforestation, restore degraded forests and substantially increase afforestation and reforestation globally
                    </td>
                    <td>15.2.1</td>
                    <td>
                      Progress towards sustainable forest management
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">15.3</th>
                    <td>
                      By 2030, combat desertification, restore degraded land and soil, including land affected by desertification, drought and floods, and strive to achieve a land degradation-neutral world
                    </td>
                    <td>15.3.1</td>
                    <td>
                      Proportion of land that is degraded over total land area
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">15.4</th>
                    <td>
                      By 2030, ensure the conservation of mountain ecosystems, including their biodiversity, in order to enhance their capacity to provide benefits that are essential for sustainable development
                    </td>
                    <td>15.4.1</td>
                    <td>
                      Coverage by protected areas of important sites for mountain biodiversity
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>15.4.2</td>
                    <td>
                      Mountain Green Cover Index
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">15.5</th>
                    <td>
                      Take urgent and significant action to reduce the degradation of natural habitats, halt the loss of biodiversity and, by 2020, protect and prevent the extinction of threatened species
                    </td>
                    <td>15.5.1</td>
                    <td>
                      Red List Index
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">15.6</th>
                    <td>
                      Promote fair and equitable sharing of the benefits arising from the utilization of genetic resources and promote appropriate access to such resources, as internationally agreed
                    </td>
                    <td>15.6.1</td>
                    <td>
                      Number of countries that have adopted legislative, administrative and policy frameworks to ensure fair and equitable sharing of benefits
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">15.7</th>
                    <td>
                      Take urgent action to end poaching and trafficking of protected species of flora and fauna and address both demand and supply of illegal wildlife products
                    </td>
                    <td>15.7.1</td>
                    <td>
                      Proportion of traded wildlife that was poached or illicitly trafficked
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">15.8</th>
                    <td>
                      By 2020, introduce measures to prevent the introduction and significantly reduce the impact of invasive alien species on land and water ecosystems and control or eradicate the priority species
                    </td>
                    <td>15.8.1</td>
                    <td>
                      Proportion of countries adopting relevant national legislation and adequately resourcing the prevention or control of invasive alien species
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">15.9</th>
                    <td>
                      By 2020, integrate ecosystem and biodiversity values into national and local planning, development processes, poverty reduction strategies and accounts
                    </td>
                    <td>15.9.1</td>
                    <td>
                      Progress towards national targets established in accordance with Aichi Biodiversity Target 2 of the Strategic Plan for Biodiversity 2011-2020
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">15.A</th>
                    <td>
                      Mobilize and significantly increase financial resources from all sources to conserve and sustainably use biodiversity and ecosystems
                    </td>
                    <td>15.A.1</td>
                    <td>
                      Official development assistance and public expenditure on conservation and sustainable use of biodiversity and ecosystems
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">15.B</th>
                    <td>
                      Mobilize significant resources from all sources and at all levels to finance sustainable forest management and provide adequate incentives to developing countries to advance such management, including for conservation and reforestation
                    </td>
                    <td>15.B.1</td>
                    <td>
                      Official development assistance and public expenditure on conservation and sustainable use of biodiversity and ecosystems
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">15.C</th>
                    <td>
                      Enhance global support for efforts to combat poaching and trafficking of protected species, including by increasing the capacity of local communities to pursue sustainable livelihood opportunities
                    </td>
                    <td>15.C.1</td>
                    <td>
                      Proportion of traded wildlife that was poached or illicitly trafficked
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="collapse" id="collapseExample2">
            <div class="card card-body">
              <h2>PROGRESS OF GOAL 15 IN 2019</h2><br><br>
              <p>There are some encouraging global trends in protecting terrestrial ecosystems and biodiversity. Forest loss is slowing down, more key biodiversity areas are protected and more financial assistance is flowing towards biodiversity protection. Yet, the 2020 targets of Sustainable Development Goal 15 are unlikely to be met, land degradation continues, biodiversity loss is occurring at an alarming rate, and invasive species and the illicit poaching and trafficking of wildlife continue to thwart efforts to protect and restore vital ecosystems and species.
<br><br>
<br>* Protecting important sites for terrestrial and freshwater biodiversity is vital for ensuring long-term and sustainable use of terrestrial and freshwater natural resources. The global mean percentage of each key biodiversity area covered by protected areas increased from 33.1 per cent in 2000 to 46.1 per cent in 2018 for terrestrial areas, from 30.5 per cent in 2000 to 43.2 per cent in 2018 for freshwater areas, and from 32.9 per cent in 2000 to 44.7 per cent in 2018 for mountain areas.
<br>* Healthy mountain ecosystems are fundamental to ensuring the provision of ecosystem services to upland communities as well as lowland peoples. As of 2017, 76 per cent of the world’s mountain areas were covered by a form of green coverage: 41 per cent by forests, 29 per cent by grassland/shrubland and only 6 per cent by cropland.
<br>* From 2000 to 2015, more than one fifth of the Earth’s total land area was degraded, largely due to human-induced processes, such as desertification, cropland expansion and urbanization. During the same period, there were significant productivity declines in land cover, with grasslands incurring some of the greatest losses.
<br>* The most fundamental and irreversible human impact on nature is species extinction. The Red List Index – which measures the risk of extinction, in which a value of 1 indicates no threat to any species, and a value of 0 indicates that all species are extinct – has deteriorated from 0.82 in 1993 to 0.73 globally in 2019.
<br>* The Nagoya Protocol on Access to Genetic Resources and the Fair and Equitable Sharing of Benefits Arising from their Utilization to the Convention on Biological Diversity creates incentives to conserve and sustainably use genetic resources and biodiversity. As at 1 February 2019, 116 countries had ratified the Nagoya Protocol (an increase of 46 since 2016) and 61 countries had shared information on their access and benefit-sharing frameworks through the Access and Benefit-Sharing Clearing-House (representing an increase of 55 countries).
<br>* In 2017, bilateral ODA in support of biodiversity was $8.7 billion, an increase of 15 per cent in real terms over 2016.
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
