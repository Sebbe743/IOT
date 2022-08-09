<head>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
<head>
<body>

<div id="Chart" style="width:80%; height:400px">
	<canvas id="BarChart"  style="display: block; box-sizing: border-box; width:100%; height:400px;"></canvas>
	<script>
	const ctx = document.getElementById('BarChart').getContext('2d');
	const BarChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: [ <?php 
				  //connect to sql
				  include'Connection.PHP';
				  
				  //select all values by default
				  $sql = "SELECT * FROM `Values`";
				  //show all values
				  $result = mysqli_query($conn, $sql);
					if($result)
					{
						$i = 1;
					while($row = mysqli_fetch_assoc($result))
					{
					//get data to pop up for graph
					echo sprintf("%d",$i);?> ,
					<?php	
					$i++;
				}
					}
				
				?>	],
			datasets: [{
				label: 'Temperature',
				data: [	<?php 
				  //connect to sql
				  include'Connection.PHP';
				  
				  //select all values by default
				  $sql = "SELECT * FROM `Values`";
				  //show all values
				  $result = mysqli_query($conn, $sql);
					if($result)
					{
					while($row = mysqli_fetch_assoc($result))
					{
					//get data to pop up for graph
					echo sprintf("%02.1f",$row["Waarde"]);?> ,
					<?php	
				}
					}
				
				?> ], 
				backgroundColor: [
					'rgba(97, 153, 59, 0.8)'
				],
				borderColor: [
					'rgba(97, 153, 59, 1)'
				],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				y: {
				suggestedMin: -5,
                suggestedMax: 30
				}
			}
		}
	});
	</script>
</div>


<div id="Chart" style="width:80%; height:400px;">
	<canvas id="LineChart" style="display: block; box-sizing: border-box; width:100%; height:400px;"></canvas>
	<script>
	const content = document.getElementById('LineChart').getContext('2d');
	const LineChart = new Chart(content, {
		type: 'line',
		data: {
			labels: [<?php 
				  //connect to sql
				  include'Connection.PHP';
				  
				  //select all values by default
				  $sql = "SELECT * FROM `Values`";
				  //show all values
				  $result = mysqli_query($conn, $sql);
					if($result)
					{
						$i = 1;
					while($row = mysqli_fetch_assoc($result))
					{
					//get data to pop up for graph
					echo sprintf("%d",$i);?> ,
					<?php	
					$i++;
				}
					}
				
				?>],
			datasets: [{
				label: 'Temperature',
				data: [<?php 
				  //connect to sql
				  include'Connection.PHP';
				  
				  //select all values by default
				  $sql = "SELECT * FROM `Values`";
				  //show all values
				  $result = mysqli_query($conn, $sql);
					if($result)
					{
					while($row = mysqli_fetch_assoc($result))
					{
					//get data to pop up for graph
					echo sprintf("%02.1f",$row["Waarde"]);?> ,
					<?php	
				}
					}
				
				?>],
				fill: false,
				
				borderColor: [
					'rgba(97, 153, 59, 1)',
				],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				y: {
					suggestedMin: -5,
					suggestedMax: 30
				}
			}
		}
	});
	</script>

</div>

</body>