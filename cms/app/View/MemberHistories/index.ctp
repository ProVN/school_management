	 <script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});
      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);
      google.setOnLoadCallback(draw2Chart);
	  google.setOnLoadCallback(draw3Chart);
      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Correct', <?php echo $num_of_correct?>],
          ['Wrong', <?php echo $num_of_wrong?>],
        ]);

        // Set chart options
        var options = {'title':'Rate about correct and wrong answer',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart1_div'));
        chart.draw(data, options);
      }
       function draw2Chart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Passed', <?php echo $num_of_passed?>],
          ['Failed', <?php echo $num_of_failed?>],
        ]);

        // Set chart options
        var options = {'title':'Rate about passed and failed examination',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart2_div'));
        chart.draw(data, options);
      }
      
      function draw3Chart() {
  // Some raw data (not necessarily accurate)
  var data = google.visualization.arrayToDataTable([
    ['Timeline', 'Number of passed', 'Number of failed'],
    ['2004/05',  165,      938,],
    ['2005/06',  135,      1120,],
    ['2006/07',  157,      1167,],
    ['2007/08',  139,      1110,],
    ['2008/09',  136,      691,]
  ]);

  var options = {
    title : 'Timeline user histories',
    vAxis: {title: "No of Examination"},
    hAxis: {title: "Month"},
    seriesType: "bars",
    series: {5: {type: "line"}}
  };

  var chart = new google.visualization.ComboChart(document.getElementById('chart3_div'));
  chart.draw(data, options);
}
    </script>
		<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-th"></i> Member Histories Rate</h2>
						<div class="box-icon">
							<!-- <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> -->
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<!-- <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> -->
						</div>
					</div>
					<div class="box-content" style="margin-left:100px">
						<div id="chart1_div" style="float:left"></div>
						<div id="chart2_div" style="float:left"></div>
					</div>
				</div><!--/span-->	
			</div><!--/row-->
		<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-th"></i> Member Histories Timeline</h2>
						<div class="box-icon">
							<!-- <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> -->
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<!-- <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> -->
						</div>
					</div>
					<div class="box-content">
						<div id="chart3_div" style="width: 900px; height: 500px;"></div>
					</div>
				</div><!--/span-->	
			</div><!--/row-->
