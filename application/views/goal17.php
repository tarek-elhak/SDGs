<!doctype html>
<html lang="en">
  <head>
        <title>Partnerships For The Goals</title>
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
            <img src="<?php echo base_url(); ?>assets/img/E_GIF_17.gif" style=width:60%;margin-left:20%;margin-top:40px;margin-bottom:40px;>
          </div>
          <p>
          <h3 style="font-style: italic;"> Goal Description</h3>
              <p><?php foreach ($goal17 as $g17){ echo $g17->element_content;}?></p>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
              Targets & Indicators
            </a>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                Goal 17 Progress (2019)
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
                    <th scope="row">FINANCE</th>
                  </tr>
                  <tr>
                    <th scope="row">17.1</th>
                    <td>
                      Strengthen domestic resource mobilization, including through international support to developing countries, to improve domestic capacity for tax and other revenue collection
                    </td>
                    <td>17.1.1</td>
                    <td>
                      Total government revenue as a proportion of GDP, by source
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>17.1.2</td>
                    <td>
                      Proportion of domestic budget funded by domestic taxes
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">17.2</th>
                    <td>
                      Developed countries to implement fully their official development assistance commitments, including the commitment by many developed countries to achieve the target of 0.7 per cent of ODA/GNI to developing countries and 0.15 to 0.20 per cent of ODA/GNI to least developed countries; ODA providers are encouraged to consider setting a target to provide at least 0.20 per cent of ODA/GNI to least developed countries
                    </td>
                    <td>17.2.1</td>
                    <td>
                      Net official development assistance, total and to least developed countries, as a proportion of the Organization for Economic Cooperation and Development (OECD) Development Assistance Committee donors’ gross national income (GNI)
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">17.3</th>
                    <td>
                      Mobilize additional financial resources for developing countries from multiple sources
                    </td>
                    <td>17.3.1</td>
                    <td>
                      Foreign direct investments (FDI), official development assistance and South-South Cooperation as a proportion of total domestic budget
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>17.3.2</td>
                    <td>
                      Volume of remittances (in United States dollars) as a proportion of total GDP
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">17.4</th>
                    <td>
                      Assist developing countries in attaining long-term debt sustainability through coordinated policies aimed at fostering debt financing, debt relief and debt restructuring, as appropriate, and address the external debt of highly indebted poor countries to reduce debt distress
                    </td>
                    <td>17.4.1</td>
                    <td>
                      Debt service as a proportion of exports of goods and services
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">17.5</th>
                    <td>
                      Adopt and implement investment promotion regimes for least developed countries
                    </td>
                    <td>17.5.1</td>
                    <td>
                      Number of countries that adopt and implement investment promotion regimes for least developed countries
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">TECHNOLOGY</th>
                  </tr>
                  <tr>
                    <th scope="row">17.6</th>
                    <td>
                      Enhance North-South, South-South and triangular regional and international cooperation on and access to science, technology and innovation and enhance knowledge sharing on mutually agreed terms, including through improved coordination among existing mechanisms, in particular at the United Nations level, and through a global technology facilitation mechanism
                    </td>
                    <td>17.6.1</td>
                    <td>
                      Number of science and/or technology cooperation agreements and programmes between countries, by type of cooperation
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>17.6.2</td>
                    <td>
                      Fixed Internet broadband subscriptions per 100 inhabitants, by speed
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">17.7</th>
                    <td>
                      Promote the development, transfer, dissemination and diffusion of environmentally sound technologies to developing countries on favourable terms, including on concessional and preferential terms, as mutually agreed
                    </td>
                    <td>17.7.1</td>
                    <td>
                      Total amount of approved funding for developing countries to promote the development, transfer, dissemination and diffusion of environmentally sound technologies
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">17.8</th>
                    <td>
                      Fully operationalize the technology bank and science, technology and innovation capacity-building mechanism for least developed countries by 2017 and enhance the use of enabling technology, in particular information and communications technology
                    </td>
                    <td>17.8.1</td>
                    <td>
                      Proportion of individuals using the Internet
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">CAPACITY-BUILDING</th>
                  </tr>
                  <tr>
                    <th scope="row">17.9</th>
                    <td>
                      Enhance international support for implementing effective and targeted capacity-building in developing countries to support national plans to implement all the sustainable development goals, including through North-South, South-South and triangular cooperation
                    </td>
                    <td>17.9.1</td>
                    <td>
                      Dollar value of financial and technical assistance (including through North-South, South-South and triangular cooperation) committed to developing countries
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">TRADE</th>
                  </tr>
                  <tr>
                    <th scope="row">17.10</th>
                    <td>
                      Promote a universal, rules-based, open, non-discriminatory and equitable multilateral trading system under the World Trade Organization, including through the conclusion of negotiations under its Doha Development Agenda
                    </td>
                    <td>17.10.1</td>
                    <td>
                      Worldwide weighted tariff-average
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">17.11</th>
                    <td>
                      Significantly increase the exports of developing countries, in particular with a view to doubling the least developed countries’ share of global exports by 2020
                    </td>
                    <td>17.11.1</td>
                    <td>
                      Developing countries’ and least developed countries’ share of global exports
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">17.12</th>
                    <td>
                      Realize timely implementation of duty-free and quota-free market access on a lasting basis for all least developed countries, consistent with World Trade Organization decisions, including by ensuring that preferential rules of origin applicable to imports from least developed countries are transparent and simple, and contribute to facilitating market access
                    </td>
                    <td>17.12.1</td>
                    <td>
                      Average tariffs faced by developing countries, least developed countries and small island developing States
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">SYSTEMIC ISSUES <i>Policy and Institutional coherence</i> </th>
                  </tr>
                  <tr>
                    <th scope="row">17.13</th>
                    <td>
                      Enhance global macroeconomic stability, including through policy coordination and policy coherence
                    </td>
                    <td>17.13.1</td>
                    <td>
                      Macroeconomic Dashboard
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">17.14</th>
                    <td>
                      Enhance policy coherence for sustainable development
                    </td>
                    <td>17.14.1</td>
                    <td>
                      Number of countries with mechanisms in place to enhance policy coherence of sustainable development
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">17.15</th>
                    <td>
                      Respect each country’s policy space and leadership to establish and implement policies for poverty eradication and sustainable development
<br>Multi-stakeholder partnerships
                    </td>
                    <td>17.15.1</td>
                    <td>
                      Extent of use of country-owned results frameworks and planning tools by providers of development cooperation
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">17.16</th>
                    <td>
                      Enhance the global partnership for sustainable development, complemented by multi-stakeholder partnerships that mobilize and share knowledge, expertise, technology and financial resources, to support the achievement of the sustainable development goals in all countries, in particular developing countries
                    </td>
                    <td>17.16.1</td>
                    <td>
                      Number of countries reporting progress in multi-stakeholder development effectiveness monitoring frameworks that support the achievement of the sustainable development goals
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">17.17</th>
                    <td>
                      Encourage and promote effective public, public-private and civil society partnerships, building on the experience and resourcing strategies of partnerships
<br>Data, monitoring and accountability
                    </td>
                    <td>17.17.1</td>
                    <td>
                      Amount of United States dollars committed to public-private and civil society partnerships
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">17.18</th>
                    <td>
                      By 2020, enhance capacity-building support to developing countries, including for least developed countries and small island developing States, to increase significantly the availability of high-quality, timely and reliable data disaggregated by income, gender, age, race, ethnicity, migratory status, disability, geographic location and other characteristics relevant in national contexts
                    </td>
                    <td>17.18.1</td>
                    <td>
                      Proportion of sustainable development indicators produced at the national level with full disaggregation when relevant to the target, in accordance with the Fundamental Principles of Official Statistics
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>17.18.2</td>
                    <td>
                      Number of countries that have national statistical legislation that complies with the Fundamental Principles of Official Statistics
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>17.18.3</td>
                    <td>
                      Number of countries with a national statistical plan that is fully funded and under implementation, by source of funding
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">17.19</th>
                    <td>
                      By 2030, build on existing initiatives to develop measurements of progress on sustainable development that complement gross domestic product, and support statistical capacity-building in developing countries
                    </td>
                    <td>17.19.1</td>
                    <td>
                      Dollar value of all resources made available to strengthen statistical capacity in developing countries
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>17.19.2</td>
                    <td>
                      Proportion of countries that (a) have conducted at least one population and housing census in the last 10 years; and (b) have achieved 100 per cent birth registration and 80 per cent death registration
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="collapse" id="collapseExample2">
            <div class="card card-body">
              <h2>PROGRESS OF GOAL 17 IN 2019</h2><br><br>
              <p>Progress on some means of implementation targets is moving rapidly: personal remittances are at an all-time high, an increasing proportion of the global population has access to the Internet and the Technology Bank for the Least Developed Countries has been established. Yet, significant challenges remain: ODA is declining, private investment flows are not well aligned with sustainable development, there continues to be a significant digital divide and there are ongoing trade tensions. Enhanced international cooperation is needed to ensure that sufficient means of implementation exist to provide countries the opportunity to achieve the Sustainable Development Goals.
<br><br>
Finance
<br><br>
* Net ODA flows totalled $149 billion in 2018, down 2.7 per cent in real terms from 2017, with a declining share going to the neediest countries. Bilateral ODA to least developed countries fell by 3 per cent in real terms from 2017, aid to Africa fell by 4 per cent, and humanitarian aid fell by 8 per cent.
<br>* In 2019, annual remittance flows to low- and middle-income countries are projected to reach $550 billion. That would make remittance flows larger than foreign direct investment and ODA flows to low- and middle-income countries. In 2018, remittance flows to low- and middle-income countries reached $529 billion, an increase of 9.6 per cent over 2017.
<br>* The average overall rate of taxation among the Group of 20 and other advanced economies was around 23 per cent of GDP in 2018, compared with 18 per cent among the developing and emerging market economies. Assessing an appropriate level of “tax burden” (revenue in the form of taxes) is a critical element of fiscal policy with implications for economic growth.
<br><br>Information and communications technology
<br><br>
* At the end of 2018, more than half the world’s population (3.9 billion people) had access to the Internet – a step towards a more inclusive global information society. Over 80 per cent in developed countries were online in 2018, compared with 45 per cent in developing countries and only 20 per cent in least developed countries.
<br><br>Capacity-building
<br><br>
* Total ODA for capacity-building and national planning stood at $33.5 billion in 2017, representing 14 per cent of total sector-allocable aid – a level that has been stable since 2010. The main sectors assisted were public administration, energy and the financial sector, which received a combined total of $13.0 billion. Latin America and the Caribbean enjoyed the largest share of aid at $7.6 billion, followed by sub-Saharan Africa ($6.1 billion) and South Asia ($5.0 billion).
<br><br>Trade
<br><br>
* Decreasing tariffs applied worldwide provide wider access to goods and contribute to a more open trading system. In 2017, trade-weighted tariffs decreased to an average of 2.2 per cent worldwide, but there still remain large differences at the regional level that reflect global economic imbalances. The highest average tariff rates in 2017 were applied across African regions. In 2018, doubt was cast over the future of a sound multilateral trading system under WTO, as there were significant trade tensions among large economies.
<br>* Despite a slight upturn in 2017, the share of least developed countries in world merchandise exports remains just below 1 per cent. The slow growth could lead to missing the trade target set by the Istanbul Programme of Action – to double the least developed countries’ share of global exports by 2020. The exports from least developed countries will have to grow approximately four times faster than global exports to see their share doubled in two years.
<br>* Preferential tariffs applied to imports from the least developed countries and developing countries in the developed markets remained unchanged in 2017. While the clothing sector continued to be strongly protected in these markets, the exports from least developed countries benefited from the high preferential margins – 5.9 percentage points – in this sector.
<br><br>Systemic issues
<br><br>
* Bilateral development partners’ respect for country policies declined from 64 per cent in 2016 to 57 per cent in 2018. Some 76 per cent of new development projects and programmes aligned their objectives to those defined in the country strategies and/or plans in 2018. However, only around half of result indicators – 52 per cent – for these interventions were drawn from country-owned result frameworks and only 44 per cent of result indicators were monitored using data and statistics from government monitoring systems.
<br>* In 2018, 51 of 114 countries reported overall progress towards strengthening multi-stakeholder partnerships and the means of implementation of the 2030 Agenda. Improvements were reported with regard to the quality and use of public financial management and reporting systems for development cooperation activities and flows channelled through the public sector. There was a need to increase the space for civil society’s contribution to sustainable development and for a more inclusive and relevant dialogue between the public and private sectors.
<br><br>Data, monitoring and accountability
<br><br>
* In 2018, 111 countries had national statistical legislation that was compliant with the United Nations Fundamental Principles of Official Statistics, up from 71 countries in 2017. Entrusted with the production of official statistics, national statistical offices need to comply with strict international principles, including scientific methods, professional ethics and standard procedures for the collection, processing, storage and presentation of statistical data.
<br>* In 2016, countries received $623 million in support from multilateral and bilateral donors for all areas of statistics, up from $591 million in 2015. However, this amount accounts for only 0.33 per cent of total ODA. Over the past four years, countries in sub-Saharan Africa benefited most ($932 million), followed by Central and South Asia ($180 million) and Latin America and the Caribbean ($177 million). For developing countries to meet the data needs of the Sustainable Development Goals, current donor support for data and statistics will need to increase by nearly $200 million per year.
<br>* Population and housing censuses are a primary source of the disaggregated data needed to formulate, implement and monitor development policies and programmes. During the 10-year period from 2008 to 2017, 89 per cent of countries or areas around the world conducted at least one population and housing census.
<br>* The coverage of birth and death registration and the completeness of vital statistics remain a challenge, even among countries with functioning civil registration systems. During the period 2013-2017, 143 countries had birth registration data that were at least 90 per cent complete and 149 countries had death registration data that were at least 75 per cent complete. However, only 9 of 53 sub-Saharan African countries met these standards.

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
