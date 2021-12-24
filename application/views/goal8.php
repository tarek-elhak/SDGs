<!doctype html>
<html lang="en">
  <head>
        <title>Decent Work And Economic Growth</title>
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
            <img src="<?php echo base_url(); ?>assets/img/E_GIF_08.gif" style=width:60%;margin-left:20%;margin-top:40px;margin-bottom:40px;>
          </div>
          <p>
          <h3 style="font-style: italic;"> Goal Description</h3>
              <p><?php foreach ($goal8 as $g8){ echo $g8->element_content;}?></p>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
              Targets & Indicators
            </a>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                Goal 8 Progress (2019)
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
                    <th scope="row">8.1</th>
                    <td>
                      Sustain per capita economic growth in accordance with national circumstances and, in particular, at least 7 per cent gross domestic product growth per annum in the least developed countries
                    </td>
                    <td>8.1.1</td>
                    <td>
                      Annual growth rate of real GDP per capita
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">8.2</th>
                    <td>
                      Achieve higher levels of economic productivity through diversification, technological upgrading and innovation, including through a focus on high-value added and labour-intensive sectors
                    </td>
                    <td>8.2.1</td>
                    <td>
                      Annual growth rate of real GDP per employed person
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">8.3</th>
                    <td>
                      Promote development-oriented policies that support productive activities, decent job creation, entrepreneurship, creativity and innovation, and encourage the formalization and growth of micro-, small- and medium-sized enterprises, including through access to financial services
                    </td>
                    <td>4.3.1</td>
                    <td>
                      Proportion of informal employment in non‑agriculture employment, by sex
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">8.4</th>
                    <td>
                      Improve progressively, through 2030, global resource efficiency in consumption and production and endeavour to decouple economic growth from environmental degradation, in accordance with the 10-year framework of programmes on sustainable consumption and production, with developed countries taking the lead
                    </td>
                    <td>8.4.1</td>
                    <td>
                      Material footprint, material footprint per capita, and material footprint per GDP
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>8.4.2</td>
                    <td>
                      Domestic material consumption, domestic material consumption per capita, and domestic material consumption per GDP
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">8.5</th>
                    <td>
                      By 2030, achieve full and productive employment and decent work for all women and men, including for young people and persons with disabilities, and equal pay for work of equal value
                    </td>
                    <td>8.5.1</td>
                    <td>
                      Average hourly earnings of female and male employees, by occupation, age and persons with disabilities
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>8.5.2</td>
                    <td>
                      Unemployment rate, by sex, age and persons with disabilities
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">8.6</th>
                    <td>
                      By 2020, substantially reduce the proportion of youth not in employment, education or training
                    </td>
                    <td>8.6.1</td>
                    <td>
                      Proportion of youth (aged 15-24 years) not in education, employment or training
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">8.7</th>
                    <td>
                      Take immediate and effective measures to eradicate forced labour, end modern slavery and human trafficking and secure the prohibition and elimination of the worst forms of child labour, including recruitment and use of child soldiers, and by 2025 end child labour in all its forms
                    </td>
                    <td>8.7.1</td>
                    <td>
                      Proportion and number of children aged 5‑17 years engaged in child labour, by sex and age
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">8.8</th>
                    <td>
                      Protect labour rights and promote safe and secure working environments for all workers, including migrant workers, in particular women migrants, and those in precarious employment
                    </td>
                    <td>8.8.1</td>
                    <td>
                      Frequency rates of fatal and non-fatal occupational injuries, by sex and migrant status
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>8.8.2</td>
                    <td>
                      Increase in national compliance of labour rights (freedom of association and collective bargaining) based on International Labour Organization (ILO) textual sources and national legislation, by sex and migrant status
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">8.9</th>
                    <td>
                      By 2030, devise and implement policies to promote sustainable tourism that creates jobs and promotes local culture and products
                    </td>
                    <td>8.9.1</td>
                    <td>
                      Tourism direct GDP as a proportion of total GDP and in growth rate
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>8.9.2</td>
                    <td>
                      Number of jobs in tourism industries as a proportion of total jobs and growth rate of jobs, by sex
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">8.10</th>
                    <td>
                      Strengthen the capacity of domestic financial institutions to encourage and expand access to banking, insurance and financial services for all
                    </td>
                    <td>8.10.1</td>
                    <td>
                      Number of commercial bank branches and automated teller machines (ATMs) per 100,000 adults
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>8.10.2</td>
                    <td>
                      Proportion of adults (15 years and older) with an account at a bank or other financial institution or with a mobile-money-service provider
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">8.A</th>
                    <td>
                      Increase Aid for Trade support for developing countries, in particular least developed countries, including through the Enhanced Integrated Framework for Trade-Related Technical Assistance to Least Developed Countries
                    </td>
                    <td>8.A.1</td>
                    <td>
                      Aid for Trade commitments and disbursements
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">8.B</th>
                    <td>
                      By 2020, develop and operationalize a global strategy for youth employment and implement the Global Jobs Pact of the International Labour Organization
                    </td>
                    <td>8.B.1</td>
                    <td>
                      Total government spending in social protection and employment programmes as a proportion of the national budgets and GDP
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="collapse" id="collapseExample2">
            <div class="card card-body">
              <h2>PROGRESS OF GOAL 8 IN 2019</h2><br><br>
              <p>Inclusive and sustainable economic growth can drive progress and generate the means to implement the Sustainable Development Goals. Globally, labour productivity has increased and unemployment is back to pre-financial crisis levels. However, the global economy is growing at a slower rate. More progress is needed to increase employment opportunities, particularly for young people, reduce informal employment and the gender pay gap and promote safe and secure working environments to create decent work for all.
<br><br>
<br>* In 2017, the global growth rate of real GDP per capita was 1.9 per cent and is expected to remain at about 2 per cent from 2018 to 2020. This is significantly less than the 3 per cent rate attained in 2010 and slightly higher than the 2015 rate of 1.63 per cent. Real GDP growth rate for least developed countries is expected to increase from 4.5 per cent in 2017 to 5.7 per cent in 2020, which is less than the 7 per cent envisioned by the 2030 Agenda.
<br>* Since the global economic downturn of 2009, labour productivity (measured as GDP per employed person) has been increasing in the world, recording positive annual growth rates consistently since 2010. In 2018, the world’s labour productivity increased by 2.1 per cent, its highest annual growth since 2010.
<br>* Informal employment, which has an impact on the adequacy of earnings, occupational safety and health and working conditions, remains pervasive: in three quarters of countries with data on the subject, more than half of all persons employed in non-agriculture sectors are in informal employment.
<br>* Based on data for 62 countries, the median hourly gender pay gap stood at 12 per cent. The median gender pay gap exceeded 20 per cent in managerial and professional occupations, among workers in crafts and related trades and among plant machine operators and assemblers.
<br>* The global unemployment rate has finally recovered from the global economic crisis. In 2018, the global unemployment rate stood at 5.0 per cent – matching pre-crisis levels. Youth were three times more likely to be unemployed than adults.
<br>* In 2018, one fifth of the world’s youth were not in education, employment or training, meaning that they were neither gaining professional experience nor acquiring or developing skills through educational or vocational programmes in their prime years. There is a stark gender difference. Young women were more than twice as likely as young men to be unemployed or outside the labour force and not in education or training.
<br>* Many workers around the world are exposed to undue risks in their workplaces. Based on recent data from some 55 countries, a median of 3 deaths occurred per 100,000 employees and a median of 889 non-fatal injuries occurred per 100,000 employees.
<br>* Access to finance is on the rise globally, but the mode of access seems to be changing with growing reliance on technology. From 2010 to 2017, the number of automated teller machines (ATMs) per 100,000 adults grew by close to 50 per cent from 45 to 66 globally, and from 2.3 to 5.8 in the least developed countries. The number of commercial bank branches per 100,000 adults grew by only 2 per cent between 2010 and 2017, with more customers using digital banking solutions.
<br>* In 2017, aid-for-trade commitments increased to $58 billion and more than doubled when compared to the 2002–2005 baseline, when they represented $23.1 billion. In absolute terms, the increase was highest in the agriculture sector ($1.7 billion), the industry sector ($1.0 billion) and in banking and financial services ($1.0 billion).
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
                    <p><a href="https://www.un.org/sustainabledevelopment/sustainable-development-goals/" target="_blank">Learn More</a></p>                </div>
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
