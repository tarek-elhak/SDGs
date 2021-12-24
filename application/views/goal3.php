<!doctype html>
<html lang="en">
  <head>
        <title>Good Health And Well-Being</title>
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
            <img src="<?php echo base_url(); ?>assets/img/E_GIF_03.gif" style=width:60%;margin-left:20%;margin-top:40px;margin-bottom:40px;>
          </div>
          <p>
          <h3 style="font-style: italic;"> Goal Description</h3>
              <p><?php foreach ($goal3 as $g3){ echo $g3->element_content;}?></p>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
              Targets & Indicators
            </a>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                Goal 3 Progress (2019)
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
                    <th scope="row">3.1</th>
                    <td>
                      By 2030, reduce the global maternal mortality ratio to less than 70 per 100,000 live births
                    </td>
                    <td>3.1.1</td>
                    <td>
                      Maternal mortality ratio
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>3.1.2</td>
                    <td>
                      Proportion of births attended by skilled health personnel
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3.2</th>
                    <td>
                      By 2030, end preventable deaths of newborns and children under 5 years of age, with all countries aiming to reduce neonatal mortality to at least as low as 12 per 1,000 live births and under-5 mortality to at least as low as 25 per 1,000 live births
                    </td>
                    <td>3.2.1</td>
                    <td>
                      Under-five mortality rate
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td>3.2.2</td>
                    <td>
                      Neonatal mortality rate
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3.3</th>
                    <td>
                      By 2030, end the epidemics of AIDS, tuberculosis, malaria and neglected tropical diseases and combat hepatitis, water-borne diseases and other communicable diseases
                    </td>
                    <td>3.3.1</td>
                    <td>
                      Number of new HIV infections per 1,000 uninfected population, by sex, age and key populations
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>3.3.2</td>
                    <td>
                      Tuberculosis incidence per 1,000 population
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>3.3.3</td>
                    <td>
                      Malaria incidence per 1,000 population
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>3.3.4</td>
                    <td>
                      Hepatitis B incidence per 100,000 population
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>3.3.5</td>
                    <td>
                      Number of people requiring interventions against neglected tropical diseases
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3.4</th>
                    <td>
                      By 2030, reduce by one third premature mortality from non-communicable diseases through prevention and treatment and promote mental health and well-being
                    </td>
                    <td>3.4.1</td>
                    <td>
                      Mortality rate attributed to cardiovascular disease, cancer, diabetes or chronic respiratory disease
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>3.4.2</td>
                    <td>
                      Suicide mortality rate
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3.5</th>
                    <td>
                      Strengthen the prevention and treatment of substance abuse, including narcotic drug abuse and harmful use of alcohol
                    </td>
                    <td>3.5.1</td>
                    <td>
                      Coverage of treatment interventions (pharmacological, psychosocial and rehabilitation and aftercare services) for substance use disorders
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td>3.5.2</td>
                    <td>
                      Harmful use of alcohol, defined according to the national context as alcohol per capita consumption (aged 15 years and older) within a calendar year in litres of pure alcohol
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3.6</th>
                    <td>
                      By 2020, halve the number of global deaths and injuries from road traffic accidents
                    </td>
                    <td>3.6.1</td>
                    <td>
                      Death rate due to road traffic injuries
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3.7</th>
                    <td>
                      By 2030, ensure universal access to sexual and reproductive health-care services, including for family planning, information and education, and the integration of reproductive health into national strategies and programmes
                    </td>
                    <td>3.7.1</td>
                    <td>
                      Proportion of women of reproductive age (aged 15-49 years) who have their need for family planning satisfied with modern methods
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>3.7.2</td>
                    <td>
                      Adolescent birth rate (aged 10-14 years; aged 15-19 years) per 1,000 women in that age group
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3.8</th>
                    <td>
                      Achieve universal health coverage, including financial risk protection, access to quality essential health-care services and access to safe, effective, quality and affordable essential medicines and vaccines for all
                    </td>
                    <td>3.8.1</td>
                    <td>
                      Coverage of essential health services (defined as the average coverage of essential services based on tracer interventions that include reproductive, maternal, newborn and child health, infectious diseases, non-communicable diseases and service capacity and access, among the general and the most disadvantaged population)
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>3.8.2</td>
                    <td>
                      Proportion of population with large household expenditures on health as a share of total household expenditure or income
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3.9</th>
                    <td>
                      By 2030, substantially reduce the number of deaths and illnesses from hazardous chemicals and air, water and soil pollution and contamination
                    </td>
                    <td>3.9.1</td>
                    <td>
                      Mortality rate attributed to household and ambient air pollution
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>3.9.2</td>
                    <td>
                      Mortality rate attributed to unsafe water, unsafe sanitation and lack of hygiene (exposure to unsafe Water, Sanitation and Hygiene for All (WASH) services)
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>3.9.3</td>
                    <td>
                      Mortality rate attributed to unintentional poisoning
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3.A</th>
                    <td>
                      Strengthen the implementation of the World Health Organization Framework Convention on Tobacco Control in all countries, as appropriate
                    </td>
                    <td>3.A.1</td>
                    <td>
                      Age-standardized prevalence of current tobacco use among persons aged 15 years and older
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2.B</th>
                    <td>
                      Support the research and development of vaccines and medicines for the communicable and non-communicable diseases that primarily affect developing countries, provide access to affordable essential medicines and vaccines, in accordance with the Doha Declaration on the TRIPS Agreement and Public Health, which affirms the right of developing countries to use to the full the provisions in the Agreement on Trade-Related Aspects of Intellectual Property Rights regarding flexibilities to protect public health, and, in particular, provide access to medicines for all
                    </td>
                    <td>2.B.1</td>
                    <td>
                      Proportion of the population with access to affordable medicines and vaccines on a sustainable basis
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                    </td>
                    <td>2.B.2</td>
                    <td>
                      Total net official development assistance to medical research and basic health sectors
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2.C</th>
                    <td>
                      Substantially increase health financing and the recruitment, development, training and retention of the health workforce in developing countries, especially in least developed countries and small island developing States
                    </td>
                    <td>2.C.1</td>
                    <td>
                      Health worker density and distribution
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3.D</th>
                    <td>
                      Strengthen the capacity of all countries, in particular developing countries, for early warning, risk reduction and management of national and global health risks
                    </td>
                    <td>3.6.1</td>
                    <td>
                      International Health Regulations (IHR) capacity and health emergency preparedness
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="collapse" id="collapseExample2">
            <div class="card card-body">
              <h2>PROGRESS OF GOAL 3 IN 2019</h2><br>
              <p>Major progress has been made in improving the health of millions of people, increasing life expectancy, reducing maternal and child mortality and fighting against leading communicable diseases. However, progress has stalled or is not happening fast enough with regard to addressing major diseases, such as malaria and tuberculosis, while at least half the global population does not have access to essential health services and many of those who do suffer undue financial hardship, potentially pushing them into extreme poverty. Concerted efforts are required to achieve universal health coverage and sustainable financing for health, to address the growing burden of non-communicable diseases, including mental health, and to tackle antimicrobial resistance and determinants of health such as air pollution and inadequate water and sanitation.
<br><br>
<h2>Reproductive, maternal, newborn and child health</h2>

<br><br>* An estimated 303,000 women around the world died due to complications of pregnancy and childbirth in 2015. Almost all of these deaths occurred in low- and middle-income countries, and almost two thirds of those were in sub-Saharan Africa. These deaths are preventable with appropriate management and care. Globally in 2018, 81 per cent of births took place with the assistance of a skilled birth attendant, a significant improvement from 69 per cent in 2012. Coverage of skilled birth attendants in 2018 was only 59 per cent in sub-Saharan Africa.
<br>* The under-5 mortality rate fell to 39 deaths per 1,000 live births in 2017, a 6.7 per cent reduction from 42 deaths in 2015, and an overall reduction of 49 per cent from 77 deaths per 1,000 live births in 2000. The total number of under-5 deaths dropped to 5.4 million in 2017 from 9.8 million in 2000. Still, most of these deaths were from preventable causes and almost half, or 2.5 million, occurred in the first month of life – the most crucial period for child survival. The global neonatal mortality rate has continued to decline after a long downward trend from 31 deaths per 1,000 live births in 2000 to 18 in 2017, a 41 per cent reduction.
<br>* Immunization saves millions of lives and is widely recognized as one of the world’s most successful and cost-effective health interventions. Coverage of the required three doses of the vaccine that prevents diphtheria, tetanus and pertussis increased from 72 per cent in 2000 to 85 per cent in 2015 and has remained unchanged between 2015 and 2017. An estimated 19.9 million children did not receive the vaccines during the first year of life, putting them at serious risk of these potentially fatal diseases. The global coverage of pneumococcal conjugate vaccine, which has the potential to significantly reduce deaths in children under age of 5, has yet to reach 50 per cent. Two doses of the measles vaccine are required to prevent the disease and the illnesses, disabilities and deaths caused by complications associated with it. Coverage with the second dose of measles vaccine increased from 59 per cent in 2015 to 67 per cent in 2017, but that is still insufficient to prevent this highly contagious disease.
<br>* Expanding access to modern contraceptive methods is essential to ensuring universal access to sexual and reproductive health-care services. Globally, the proportion of women of reproductive age (15 to 49 years old) who have their need for family planning satisfied with modern contraceptive methods has continued to increase slowly, from 74 per cent in 2000 to 76 per cent in 2019.
<br>* Adolescent fertility declined from 56 births per 1,000 adolescent women in 2000 to 45 births in 2015 and 44 births in 2019. The level of adolescent fertility has remained high in sub-Saharan Africa, at 101 births per 1,000 adolescent women.
<br><br>
<h2>Infectious diseases</h2>

<br><br>* Strong and steady domestic and international commitment and funding has fuelled an acceleration of evidence-informed HIV prevention, testing and treatment programmes. As a result, the incidence of HIV in sub-Saharan Africa (among adults aged 15 to 49) has declined by 37 per cent, from 3.39 infections per 1,000 uninfected people in 2010 to 2.49 in 2015 and 2.14 in 2017. However, the rate of global HIV incidence among adults aged 15 to 49 declined from 0.44 to 0.40 between 2015 and 2017 and overall by 22 per cent between 2010 and 2017, well short of the declines required to meet 2020 and 2030 targets.
<br>* Tuberculosis remains a leading cause of ill health and death. In 2017, an estimated 10 million people fell ill with tuberculosis. The burden is falling globally: incidence of tuberculosis has continued to decline from 170 new and relapse cases per 100,000 people in 2000 to 140 in 2015, and 134 in 2017; and the tuberculosis mortality rate among HIV-negative people fell by 42 per cent between 2000 and 2017. However, large gaps in detection and treatment persist and the current pace of progress is not fast enough to meet the Sustainable Development Goal target, with drug-resistant tuberculosis remaining a continuing threat.
<br>* After more than a decade of steady advances in fighting malaria, progress has stalled.  No significant gains were made in reducing the number of malaria cases worldwide in the period 2015–2017. Sub-Saharan Africa continues to carry the heaviest burden of disease, accounting for more than 90 per cent of the global malaria burden. Worryingly, there were an estimated 3.5 million more malaria cases in the 10 highest-burden African countries in 2017 compared with the previous year.
<br>* In 2015, an estimated 325 million people worldwide were living with hepatitis B virus or hepatitis C virus infection. The widespread use of hepatitis B vaccine in infants has considerably reduced the incidence of new chronic HBV infections, as reflected by the decline in hepatitis B prevalence among children under 5 years of age, from 4.7 per cent in the pre-vaccine era to 0.8 per cent in 2017.
<br>* In 2017, 1.58 billion people were reported as requiring mass or individual treatment and care for neglected tropical diseases, down from 1.63 billion in 2015 and 2.03 billion in 2010. Improved surveillance meant that further populations requiring interventions against such diseases were identified in 2017. The 522 million people requiring treatment and care in least developed countries represented 52 per cent of those countries’ populations, down from 584 million in 2015.
<br><br>
<h2>Non-communicable diseases, mental health and environmental risks</h2>

<br><br>* The probability of dying from any of the four main non-communicable diseases – cardiovascular diseases, cancers, chronic respiratory diseases and diabetes – between the ages of 30 and 70 was 18 per cent in 2016. The risk remains markedly higher for men globally, at 21.6 per cent, compared with 15 per cent for women.
<br>* Progress has been made in reducing the global suicide rate (from 12.9 per 100,000 in 2000 to 10.6 per 100,000 in 2016). However, suicide remains the second-highest cause of death among people aged 15 to 29 globally, with 79 per cent of suicides found in low- and middle-income countries in 2016.
<br>* The prevalence of tobacco use declined from 27 per cent in 2000 to 20 per cent in 2016. Prevalence fell faster for women, from 11 per cent in 2000 to 6 per cent in 2016, compared with men: prevalence in men only fell from 43 per cent to 34 per cent. Despite the positive trends, the number of people dying from a tobacco-related illness was estimated to be more than 8.1 million in 2017.
<br>* The number of road traffic deaths climbed from 1.31 million in 2013 to 1.35 million in 2016. Road traffic injury is the leading cause of death for children and young adults aged 5 to 29.
<br>* Air pollution, both ambient and household, increases the risk of cardiovascular and respiratory disease and, in 2016, led to some 7 million deaths worldwide. Sub-Saharan Africa and most of Asia and Oceania (excluding Australia/New Zealand) have the highest mortality rates associated with air pollution, as a large proportion of the population still rely on polluting fuels and technologies for cooking.
<br>* Inadequate and unsafe drinking water, sanitation and hygiene is linked to 60 per cent of the disease burden from diarrhoea, 100 per cent of the burden from infections with soil-transmitted helminths and 16 per cent of the burden from protein-energy malnutrition, leading to a total of 870,000 deaths in 2016 from the three conditions.
<br><br>
<h2>Health systems and funding</h2>
<br>
<br>
* Official development assistance (ODA) for basic health from all donors increased by 61 per cent in real terms since 2010 and reached $10.7 billion in 2017. In 2017, some $2.0 billion was spent on malaria control, $1.0 billion on tuberculosis control and $2.3 billion on other infectious diseases, excluding HIV/AIDS.
<br>* Available data from 2013 to 2018 indicate that close to 40 per cent of all countries had fewer than 10 medical doctors per 10,000 people, and more than 55 per cent had fewer than 40 nursing and midwifery personnel per 10,000 people. All least developed countries had fewer than 10 medical doctors and fewer than 5 dentists and 5 pharmacists per 10,000 people, and 98 per cent had fewer than 40 nursing and midwifery personnel per 10,000 people.
<br>
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
