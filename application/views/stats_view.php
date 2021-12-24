<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Statistics</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width , initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/style2.css"/>
    <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
      google.charts.load("current", { packages: ["corechart"] });
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ["Goal", "Achievement Percentage",{ role: "style" }],
		  <?php foreach ($value as $v){?>
		  	["<?php if ($v->goal === 'No Poverty'){echo $v->goal.'(IPL , Electricity Access)';}elseif ($v->goal === 'Zero Hunger')
		  		{echo $v->goal.'(GDP , prevalence of undernourishment)';}elseif ($v->goal === 'Good Health and Well-Being')
		  		{echo $v->goal.'(births_attended_by_skilled_health)';}elseif ($v->goal === 'Clean Water And Sanitation')
		  		{echo $v->goal.'(Basic_and_safely_managed_sanitation_services)';}else
		  		{echo $v->goal.'()';}?>",
				<?php echo $v->value ?>,"<?php echo $v->goal_color?>"],
		  <?php }?>
        ]);
        <?php foreach ($value as $v){
          if ($v->chart === 'column'){?>
            var view = new google.visualization.DataView(data);
            view.setColumns([
              0,
              1,
              {
                calc: "stringify",
                sourceColumn: 1,
                type: "string",
                role: "annotation",
              },
              2,
            ]);

            var options = {
			  title: "Goal(s) Achievement in %",
              width: 900,
              height: 500,
              bar: { groupWidth: "30%" },
              legend: { position: "none"},
              vAxis: {
          minValue: 0,
			    format: 'percent',
              },
			  hAxis: {
			  	title: "2018",
			  },
            };
            var chart = new google.visualization.ColumnChart(
              document.getElementById("chart")
            );
            chart.draw(view, options);
          <?php }
          else {?>
            var options = {
              title: 'Goal(s) Achievement',
              is3D: true,
              colors : [<?php foreach ($value as $val){?>"<?php echo $val->goal_color;?>",<?php }?>],
            };
            var chart = new google.visualization.PieChart(document.getElementById('chart'));
            chart.draw(data, options);
          <?php } }?>
      }
    </script>
  </head>
  <body>
    <!-- navigation bar -->
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo base_url('index.php')?>"
          ><img style="width: 60px; height: 60px; border-radius:45%;" src="<?php foreach ($logo as $l){ echo base_url(); ?>assets/public/<?php echo $l->element_content;}?>" height="50px"
        /></a>
        <a class="navbar-brand" href="<?php echo base_url('index.php')?>">
          <span class="Title" style="  font-size: 20pt;font-weight: bolder;font-family: Blippo, fantasy;"><?php foreach ($title as $t){ echo $t->element_content;}?></span>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
        >
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
    <span class="compute">
    <center>
		<p style="font-size:30px;">The Achievement Percentage of <?php if (count($value) > 1) {echo $value[0]->goal.' and '.$value[1]->goal;}
    else{echo $value[0]->goal;}?> in
			<?php echo $value[0]->location;?>
    is </p>
		<?php foreach ($value as $v){?>  <span> <?php echo $v->goal.' '.$v->value*100?> % <img src="https://i.imgur.com/u5R1M90.gif" style="height: 90px; width: 3%;" />
		</span>
			<?php } ?>
	</center>
	  </span>
    <div id="chart" style="width: 900px; height: 500px" class = "container mt-4"></div>
  </body>
</html>
