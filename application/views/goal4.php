<!doctype html>
<html lang="en">
  <head>
        <title>Quality Education</title>
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
            <img src="<?php echo base_url(); ?>assets/img/E_GIF_04.gif" style=width:60%;margin-left:20%;margin-top:40px;margin-bottom:40px;>
          </div>
          <p>
          <h3 style="font-style: italic;"> Goal Description</h3>
              <p><?php foreach ($goal4 as $g4){ echo $g4->element_content;}?></p>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
              Targets & Indicators
            </a>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                Goal 4 Progress (2019)
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
                    <th scope="row">4.1</th>
                    <td>
                      By 2030, ensure that all girls and boys complete free, equitable and quality primary and secondary education leading to relevant and effective learning outcomes
                    </td>
                    <td>4.1.1</td>
                    <td>
                      Proportion of children and young people: (a) in grades 2/3; (b) at the end of primary; and (c) at the end of lower secondary achieving at least a minimum proficiency level in (i) reading and (ii) mathematics, by sex
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">4.2</th>
                    <td>
                      By 2030, ensure that all girls and boys have access to quality early childhood development, care and pre-primary education so that they are ready for primary education
                    </td>
                    <td>4.2.1</td>
                    <td>
                      Proportion of children under 5 years of age who are developmentally on track in health, learning and psychosocial well-being, by sex
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td>4.2.2</td>
                    <td>
                      Participation rate in organized learning (one year before the official primary entry age), by sex
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">4.3</th>
                    <td>
                      By 2030, ensure equal access for all women and men to affordable and quality technical, vocational and tertiary education, including university
                    </td>
                    <td>4.3.1</td>
                    <td>
                      Participation rate of youth and adults in formal and non-formal education and training in the previous 12 months, by sex
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">4.4</th>
                    <td>
                      By 2030, substantially increase the number of youth and adults who have relevant skills, including technical and vocational skills, for employment, decent jobs and entrepreneurship
                    </td>
                    <td>4.4.1</td>
                    <td>
                      Proportion of youth and adults with information and communications technology (ICT) skills, by type of skill
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">4.5</th>
                    <td>
                      By 2030, eliminate gender disparities in education and ensure equal access to all levels of education and vocational training for the vulnerable, including persons with disabilities, indigenous peoples and children in vulnerable situations
                    </td>
                    <td>4.5.1</td>
                    <td>
                      Parity indices (female/male, rural/urban, bottom/top wealth quintile and others such as disability status, indigenous peoples and conflict-affected, as data become available) for all education indicators on this list that can be disaggregated
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">4.6</th>
                    <td>
                      By 2030, ensure that all youth and a substantial proportion of adults, both men and women, achieve literacy and numeracy
                    </td>
                    <td>4.6.1</td>
                    <td>
                      Percentage of population in a given age group achieving at least a fixed level of proficiency in functional (a) literacy and (b) numeracy skills, by sex
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">4.7</th>
                    <td>
                      By 2030, ensure that all learners acquire the knowledge and skills needed to promote sustainable development, including, among others, through education for sustainable development and sustainable lifestyles, human rights, gender equality, promotion of a culture of peace and non-violence, global citizenship and appreciation of cultural diversity and of culture’s contribution to sustainable development
                    </td>
                    <td>4.7.1</td>
                    <td>
                      Extent to which (i) global citizenship education and (ii) education for sustainable development, including gender equality and human rights, are mainstreamed at all levels in: (a) national education policies, (b) curricula, (c) teacher education and (d) student assessment
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">4.A</th>
                    <td>
                      Build and upgrade education facilities that are child, disability and gender sensitive and provide safe, non-violent, inclusive and effective learning environments for all
                    </td>
                    <td>4.A.1</td>
                    <td>
                      Proportion of schools with access to: (a) electricity; (b) the Internet for pedagogical purposes; (c) computers for pedagogical purposes; (d) adapted infrastructure and materials for students with disabilities; (e) basic drinking water; (f) single-sex basic sanitation facilities; and (g) basic handwashing facilities (as per the WASH indicator definitions)
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">4.B</th>
                    <td>
                      By 2020, substantially expand globally the number of scholarships available to developing countries, in particular least developed countries, small island developing States and African countries, for enrolment in higher education, including vocational training and information and communications technology, technical, engineering and scientific programmes, in developed countries and other developing countries
                    </td>
                    <td>4.B.1</td>
                    <td>
                      Volume of official development assistance flows for scholarships by sector and type of study
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">4.C</th>
                    <td>
                      By 2030, substantially increase the supply of qualified teachers, including through international cooperation for teacher training in developing countries, especially least developed countries and small island developing States
                    </td>
                    <td>4.C.1</td>
                    <td>
                      Proportion of teachers in: (a) pre-primary; (b) primary; (c) lower secondary; and (d) upper secondary education who have received at least the minimum organized teacher training (e.g. pedagogical training) pre-service or in-service required for teaching at the relevant level in a given country
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="collapse" id="collapseExample2">
            <div class="card card-body">
              <h2>PROGRESS OF GOAL 4 IN 2019</h2><br><br>
              <p>Despite the considerable progress on education access and participation over the past years, 262 million children and youth aged 6 to 17 were still out of school in 2017, and more than half of children and adolescents are not meeting minimum proficiency standards in reading and mathematics. Rapid technological changes present opportunities and challenges, but the learning environment, the capacities of teachers and the quality of education have not kept pace. Refocused efforts are needed to improve learning outcomes for the full life cycle, especially for women, girls and marginalized people in vulnerable settings.
<br><br>
* In 72 countries with recent data, approximately 7 in 10 children aged 3 and 4 were developmentally on track in at least three of the following domains: literacy-numeracy, physical development, social-emotional development and learning.
<br>* In 2015, an estimated 617 million children and adolescents of primary and lower secondary school age worldwide – more than 50 per cent – were not achieving minimum proficiency levels in reading and mathematics. Of these, about two thirds were attending school but were not learning in the classroom, or dropped out school.
<br>* Some 750 million adults – two thirds of them women – remained illiterate in 2016. Half of the global illiterate population lives in South Asia, and a quarter live in sub-Saharan Africa.
<br>* Many developing countries still lack basic infrastructure and facilities to provide effective learning environments. Sub-Saharan Africa faces the biggest challenges: at the primary and lower secondary levels, less than half of schools have access to electricity, the Internet, computers and basic drinking water.
<br>* ODA for scholarships amounted to $1.3 billion in 2017. Australia, France, Japan, the United Kingdom of Great Britain and Northern Ireland and institutions of the European Union accounted for nearly two thirds of this total.
<br>* Globally, there has been little progress in the percentage of primary school teachers who are trained: it has been stagnating at about 85 per cent since 2015. The proportion is lowest in sub-Saharan Africa (64 per cent).
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
