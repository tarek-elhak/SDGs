<!doctype html>
<html lang="en">
  <head>
        <title>Gender Equality</title>
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
            <img src="<?php echo base_url(); ?>assets/img/E_GIF_05.gif" style=width:60%;margin-left:20%;margin-top:40px;margin-bottom:40px;>
          </div>
          <p>
          <h3 style="font-style: italic;"> Goal Description</h3>
              <p><?php foreach ($goal5 as $g5){ echo $g5->element_content;}?></p>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
              Targets & Indicators
            </a>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                Goal 5 Progress (2019)
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
                    <th scope="row">5.1</th>
                    <td>
                      End all forms of discrimination against all women and girls everywhere
                    </td>
                    <td>5.1.1</td>
                    <td>
                      Whether or not legal frameworks are in place to promote, enforce and monitor equality and non‑discrimination on the basis of sex
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">5.2</th>
                    <td>
                      Eliminate all forms of violence against all women and girls in the public and private spheres, including trafficking and sexual and other types of exploitation
                    </td>
                    <td>5.2.1</td>
                    <td>
                      Proportion of ever-partnered women and girls aged 15 years and older subjected to physical, sexual or psychological violence by a current or former intimate partner in the previous 12 months, by form of violence and by age
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td>5.2.2</td>
                    <td>
                      Proportion of women and girls aged 15 years and older subjected to sexual violence by persons other than an intimate partner in the previous 12 months, by age and place of occurrence
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">5.3</th>
                    <td>
                      Eliminate all harmful practices, such as child, early and forced marriage and female genital mutilation
                    </td>
                    <td>5.3.1</td>
                    <td>
                      Proportion of women aged 20-24 years who were married or in a union before age 15 and before age 18
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>5.3.2</td>
                    <td>
                      Proportion of girls and women aged 15-49 years who have undergone female genital mutilation/cutting, by age
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">5.4</th>
                    <td>
                      Recognize and value unpaid care and domestic work through the provision of public services, infrastructure and social protection policies and the promotion of shared responsibility within the household and the family as nationally appropriate
                    </td>
                    <td>5.4.1</td>
                    <td>
                      Proportion of time spent on unpaid domestic and care work, by sex, age and location
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">5.5</th>
                    <td>
                      Ensure women’s full and effective participation and equal opportunities for leadership at all levels of decision-making in political, economic and public life
                    </td>
                    <td>5.5.1</td>
                    <td>
                      Proportion of seats held by women in national parliaments and local governments
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>5.5.2</td>
                    <td>
                      Proportion of women in managerial positions
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">5.6</th>
                    <td>
                      Ensure universal access to sexual and reproductive health and reproductive rights as agreed in accordance with the Programme of Action of the International Conference on Population and Development and the Beijing Platform for Action and the outcome documents of their review conferences
                    </td>
                    <td>5.6.1</td>
                    <td>
                      Proportion of women aged 15-49 years who make their own informed decisions regarding sexual relations, contraceptive use and reproductive health care
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>5.6.2</td>
                    <td>
                      Number of countries with laws and regulations that guarantee women aged 15-49 years access to sexual and reproductive health care, information and education
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">5.A</th>
                    <td>
                      Undertake reforms to give women equal rights to economic resources, as well as access to ownership and control over land and other forms of property, financial services, inheritance and natural resources, in accordance with national laws
                    </td>
                    <td>5.A.1</td>
                    <td>
                      (a) Proportion of total agricultural population with ownership or secure rights over agricultural land, by sex; and (b) share of women among owners or rights-bearers of agricultural land, by type of tenure
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>5.A.2</td>
                    <td>
                      Proportion of countries where the legal framework (including customary law) guarantees women’s equal rights to land ownership and/or control
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">5.B</th>
                    <td>
                      Enhance the use of enabling technology, in particular information and communications technology, to promote the empowerment of women
                    </td>
                    <td>5.B.1</td>
                    <td>
                      Proportion of individuals who own a mobile telephone, by sex
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">5.C</th>
                    <td>
                      Adopt and strengthen sound policies and enforceable legislation for the promotion of gender equality and the empowerment of all women and girls at all levels
                    </td>
                    <td>5.C.1</td>
                    <td>
                      Proportion of countries with systems to track and make public allocations for gender equality and women’s empowerment
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="collapse" id="collapseExample2">
            <div class="card card-body">
              <h2>PROGRESS OF GOAL 5 IN 2019</h2><br><br>
              <p>While some indicators of gender equality are progressing, such as a significant decline in the prevalence of female genital mutilation and early marriage, the overall numbers continue to be high. Moreover, insufficient progress on structural issues at the root of gender inequality, such as legal discrimination, unfair social norms and attitudes, decision-making on sexual and reproductive issues and low levels of political participation, are undermining the ability to achieve Sustainable Development Goal 5.
<br><br>
* Recent data from 106 countries show that 18 per cent of ever-partnered women and girls aged 15 to 49 have experienced physical and/or sexual partner violence in the previous 12 months. The prevalence is highest in least developed countries, at 24 per cent.
<br>* The practice of child marriage has continued to decline around the world, largely driven by progress in South Asia, where a girl’s risk of marrying in childhood decreased by about one quarter between 2013 and 2018. In sub-Saharan Africa, levels of child marriage have declined at a more modest rate.
<br>* At least 200 million girls and women have been subjected to female genital mutilation, based on data from 30 countries where the practice is concentrated and where nationally representative prevalence data is available. In these countries, the prevalence of this harmful practice declined by one quarter between approximately 2000 and 2018.
<br>* According to recent data from some 90 countries, women devote on average roughly three times more hours a day to unpaid care and domestic work than men, limiting the time available for paid work, education and leisure and further reinforcing gender-based socioeconomic disadvantages.
<br>* Women continue to be underrepresented at all levels of political leadership. As at 1 January 2019, women’s representation in national Parliaments ranged from 0 to 61.3 per cent, with the average standing at 24.2 per cent, an increase from 19 per cent in 2010. At the local level, data from 99 countries and areas show that women’s representation in elected deliberative bodies varies from less than 1 per cent to 48 per cent, with the median of the distribution at 26 per cent. When legislated gender quotas are adopted, significantly higher proportions of women are elected at both national and local levels.
<br>* While women represented 39 per cent of world employment, only 27 per cent of managerial positions in the world were occupied by women in 2018, up only marginally from 26 per cent in 2015. The proportion of women in management has increased since 2000 in all regions except in least developed countries.
<br>* In 51 countries with data on the subject, only 57 per cent of women aged 15 to 49, married or in union, make their own decisions about sexual relations and the use of contraceptives and health services.
<br>* Over the past 25 years, there has been progress in reforming laws towards improving gender equality, yet discriminatory laws and gaps in legal protection remain in many countries. On the basis of data collected across four areas of law in 2018 from 53 countries, almost a third have legal gaps in the area of overarching legal frameworks and public life (e.g., constitutions, antidiscrimination laws, quotas, legal aid); more than a quarter have legal gaps in the area of violence against women; and 29 per cent and 24 per cent have legal gaps in the employment and economic benefits area and in the marriage and family area, respectively.
<br>* Despite progress in implementing gender-responsive budgeting globally, gaps remain in country efforts to establish comprehensive and transparent tracking systems. Based on 2018 data from 69 countries, 13 countries fully met the criteria of having in place a tracking system that measures and makes publicly available gender budget data, and 41 countries approached the requirements.
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
