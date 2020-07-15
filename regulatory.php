<?php include('header.php') ?>

<!-- Page Title START -->
<div class="page-title-section" style="background-image:url('img/reg.jpg');">
	<div class="black-overlay-70"></div>
	<div class="container">
		<h1>CDMO Service</h1>
		<p>Regulatory</p>
	</div>
</div>
<!-- Page Title END -->
<!-- Serive Start -->
<section class="section" id="legacy" style="padding: 0px; margin-top: 5%;">
  <div class="container">
    <div class="row">

      <div class="col-md-12 col-lg-8 service-text"><br>
      <h2 class="section-title textcolor">Regulatory</h2><hr class="title-hr" ><br>
          <p>Astral Steritech has created a culture of quality through well-defined protocols and SOPs strengthened further by regular training on quality and compliance.<br><br>

We follow Regulatory Management System under Electronic Documentation System (EDS) to uphold its benchmark of high quality and compliance.<br><br>

             <b> Regulatory Management System</b> : This is a Compilation and Management tool for regulatory submissions to FDA in eCTD format, including lifecycle management.</p>
                      <div style="margin-top:10%;">
      <script>
        $(document).ready(function () {
            $(window).resize(function () {
                drawRegionsMap();
            });
        });
    </script>
    <style>
        .chart {
            width: 100%;
            height: 400px;
        }
    </style>
    <div class="chart" id="regions_div"> </div>
      </div>

      </div>
        <div class="col-md-4">
          <?php include('sidebtn.php') ?>
        </div>
  
      </div></div>
</section>
<br><br><br>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', { 'packages': ['geochart', 'corechart'] });
        google.charts.setOnLoadCallback(drawRegionsMap);
        google.charts.setOnLoadCallback(drawChart);

        function drawRegionsMap() {
            var data = google.visualization.arrayToDataTable([
                ['Country', 'Customer Count', 'Agent Count'],
                ['Canada', 999000, 100],
                ['Usa', 969000, 450],
                ['Mexico', 12000, 200],
                ['Jamaica', 850000, 250],
                ['T & T countries', 1110000, 590],
                ['Peru', 3975000, 690],
                ['Brazil', 4500, 100],
                ['Venezuela', 78600, 150],
                ['Ecuador', 67000, 400],
                ['El Salvador', 140000, 550],
                ['Guatemala', 1060000, 560],
                ['Romania', 60000, 420],
                ['South Africa', 1054000, 305],
                ['Zambia', 120000, 230],
                ['Ivory cost', 2904000, 180],
                ['Congo', 79000, 450],
                ['Albania', 15000, 290],
                ['Tanzania', 35000, 230],
                ['Uganda', 4015000, 750],
                ['Zimbabwe', 5000500, 1500],
                ['Nigeria', 5000500, 1500],
                ['Malawi', 5000500, 1500],
                ['Republic of Dominica', 5000500, 1500],
                ['Kazakhstan', 5000500, 1500],
                ['Russia', 5000500, 1500],
                ['Azerbaijan', 5000500, 1500],
                ['Ukraine', 5000500, 1500],
                ['latvia', 5000500, 1500],
                ['Yemen', 5000500, 1500],
                ['Philippines', 5000500, 1500],
                ['Malaysia', 5000500, 1500],
                ['Vietnam', 5000500, 1500],
                ['Myanmar', 5000500, 1500],
                ['Sri lanka', 5000500, 1500],
                ['Thailand', 5000500, 1500],
            ]);

            var options = {
                colorAxis: { colors: ['#0f307e', '#0f307e', '#0f307e', '#0f307e', '#0f307e', '#0f307e', '#0f307e', '#0f307e', '#0f307e', '#0f307e'] },
                legend: 'none',
            };

            var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));
            chart.draw(data, options);
        }
    </script>
    





<?php include('footer.php') ?>