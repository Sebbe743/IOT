<head>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
<link rel="stylesheet" href="Originality.css">
<head>
<body>

	<div id="Chart">
		<canvas id="BarChart"></canvas>
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
				},
				]
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