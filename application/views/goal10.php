<!doctype html>
<html lang="en">
  <head>
        <title>Reduce Inequality</title>
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
            <img src="<?php echo base_url(); ?>assets/img/E_GIF_10.gif" style=width:60%;margin-left:20%;margin-top:40px;margin-bottom:40px;>
          </div>
          <p>
          <h3 style="font-style: italic;"> Goal Description</h3>
              <p><?php foreach ($goal10 as $g10){ echo $g10->element_content;}?></p>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
              Targets & Indicators
            </a>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                Goal 10 Progress (2019)
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
                    <th scope="row">10.1</th>
                    <td>
                      By 2030, progressively achieve and sustain income growth of the bottom 40 per cent of the population at a rate higher than the national average
                    </td>
                    <td>10.1.1</td>
                    <td>
                      Growth rates of household expenditure or income per capita among the bottom 40 per cent of the population and the total population
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">10.2</th>
                    <td>
                      By 2030, empower and promote the social, economic and political inclusion of all, irrespective of age, sex, disability, race, ethnicity, origin, religion or economic or other status
                    </td>
                    <td>10.2.1</td>
                    <td>
                      Proportion of people living below 50 per cent of median income, by age, sex and persons with disabilities
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">10.3</th>
                    <td>
                      Ensure equal opportunity and reduce inequalities of outcome, including by eliminating discriminatory laws, policies and practices and promoting appropriate legislation, policies and action in this regard
                    </td>
                    <td>10.3.1</td>
                    <td>
                      Proportion of the population reporting having personally felt discriminated against or harassed within the previous 12 months on the basis of a ground of discrimination prohibited under international human rights law
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">10.4</th>
                    <td>
                      Adopt policies, especially fiscal, wage and social protection policies, and progressively achieve greater equality
                    </td>
                    <td>10.4.1</td>
                    <td>
                      Labour share of GDP, comprising wages and social protection transfers
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">10.5</th>
                    <td>
                      Improve the regulation and monitoring of global financial markets and institutions and strengthen the implementation of such regulations
                    </td>
                    <td>10.5.1</td>
                    <td>
                      Financial Soundness Indicators
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">10.6</th>
                    <td>
                      Ensure enhanced representation and voice for developing countries in decision-making in global international economic and financial institutions in order to deliver more effective, credible, accountable and legitimate institutions
                    </td>
                    <td>10.6.1</td>
                    <td>
                      Proportion of members and voting rights of developing countries in international organizations
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">10.7</th>
                    <td>
                      Facilitate orderly, safe, regular and responsible migration and mobility of people, including through the implementation of planned and well-managed migration policies
                    </td>
                    <td>10.7.1</td>
                    <td>
                      Recruitment cost borne by employee as a proportion of yearly income earned in country of destination
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>10.7.2</td>
                    <td>
                      Number of countries that have implemented well-managed migration policies
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">10.A</th>
                    <td>
                      Implement the principle of special and differential treatment for developing countries, in particular least developed countries, in accordance with World Trade Organization agreements
                    </td>
                    <td>10.A.1</td>
                    <td>
                      Proportion of tariff lines applied to imports from least developed countries and developing countries with zero-tariff
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">10.B</th>
                    <td>
                      Encourage official development assistance and financial flows, including foreign direct investment, to States where the need is greatest, in particular least developed countries, African countries, small island developing States and landlocked developing countries, in accordance with their national plans and programmes
                    </td>
                    <td>10.B.1</td>
                    <td>
                      Total resource flows for development, by recipient and donor countries and type of flow (e.g. official development assistance, foreign direct investment and other flows)
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">10.C</th>
                    <td>
                      By 2030, reduce to less than 3 per cent the transaction costs of migrant remittances and eliminate remittance corridors with costs higher than 5 per cent
                    </td>
                    <td>10.C.1</td>
                    <td>
                      Remittance costs as a proportion of the amount remitted
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="collapse" id="collapseExample2">
            <div class="card card-body">
              <h2>PROGRESS OF GOAL 10 IN 2019</h2><br><br>
              <p>Inequality within and among nations continues to be a significant concern despite progress in and efforts at narrowing disparities of opportunity, income and power. Income inequality continues to rise in many parts of the world, even as the bottom 40 per cent of the population in many countries has experienced positive growth rates. Greater emphasis will need to be placed on reducing inequalities in income as well as those based on other factors. Additional efforts are needed to increase zero-tariff access for exports from least developed countries and developing countries, and assistance to least developed countries and small island developing States.
<br><br>
<br>* In more than half of the 92 countries with comparable data during the period 2011–2016, the bottom 40 per cent of the population experienced a growth rate that was higher than the overall national average. However, the bottom 40 per cent received less than 25 per cent of the overall income or consumption. In many places, the increasing share of income going to the top 1 per cent of earners is of significant concern.
<br>* Robust and sound financial systems are essential for supporting equal access to financial services. High loan asset impairment, measured by the ratio of non-performing loans to total loans for deposit takers, is a potential risk to the soundness of the banking system. For almost half of the 138 reporting countries, the percentage of non-performing loans to total loans was less than 5, while the average median for the period 2010–2017 was 4.3 per cent.
<br>* While countries in developing regions represent over 70 per cent of the membership of the General Assembly and World Trade Organization, which utilize a one member, one vote system, their voting share in other international organizations remains far below these levels. Governance reforms are being negotiated at the International Monetary Fund, and changes were adopted at the World Bank in October 2018. However, full implementation will leave developing countries with just over 40 per cent of the voting rights, still short of the 75 per cent they represent in World Bank membership in terms of the number of countries.
<br>* Duty-free access continued to increase for least developed countries, small island developing States and developing regions at large. More than 50 per cent of exports from developing countries are now eligible for duty-free treatment. The increase of duty-free access in world markets was the largest for least developed countries, namely in the industrial and agricultural sector.
<br>* In 2017, total receipts by developing countries from donors of the Development Assistance Committee of the Organization for Economic Cooperation and Development, multilateral agencies and other key providers were $414 billion, of which $163 billion were ODA. Total ODA to small island developing States from all donors was $4.3 billion in 2017, a decrease of 33 per cent in real terms over 2016, due to exceptional debt relief operations for Cuba in 2016.
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
