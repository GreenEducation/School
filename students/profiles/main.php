<div id="container">
	<?php

	include($_SERVER['DOCUMENT_ROOT']."/school/head/connect.php");

	if (!(isset($_GET['uid']))){
		echo "<meta http-equiv=\"refresh\" content=\"0; url=http://greened.ga/school/student/profiles\">";
	}
	else
	{
		$uid = $_GET['uid'];
		$connect = $conStudent;
		$query = "SELECT FirstName,Class,SchoolUID,ProfilePic FROM Student WHERE UID='".$uid."' OR Username='".$uid."'";
		$check = mysqli_query($connect, $query);
		if (mysqli_num_rows($check)!==1) {
			echo "No such user exists, or the profile is private.";
		}
		else
		{
			$row = mysqli_fetch_assoc($check);
			$schoolUID = $row['SchoolUID'];	
			if($schoolUID != 'sups'){//change this********
				echo "No such user exists, or the profile is private.";
			}
			else
			{
				$firstName = $row['FirstName'];
				$profilePic = $row['ProfilePic'];
				$class = $row['Class'];	
				$subject = $row['Subject'];
				$position = 'Grade '. $class .'<br><br>'. $subject;
				//body start
	?>

	<link rel="stylesheet" type="text/css" href="http://greened.ga/school/school/css/profile.css">
	<script type="text/javascript" src="http://greened.ga/school/js/Chart.bundle.min.js.gz"></script>

	<div id="main-body">
		<a href="http://greened.ga/school/school/profiles"><img src="http://greened.ga/school/school/img/long_back_arrow.png" width="40px"></a><br>
		<div id="info">
			<img id="info-img" src="<?php echo $profilePic;?>">
			<div id="info-text">
				<b id="info-text-head"><?php echo $firstName; ?></b>
				<br>
				<span id="info-text-body">
					<?php echo $position; ?>
				</span>
			</div>
		</div>
		<div id="charts">
			<div class="charts-section">
				<h2>Performance</h2>
					<div class="chart">
						<canvas id="myChart"></canvas>
					</div>
			</div>
			<div class="charts-section">
				<h2>Attendance</h2>
			</div>
		</div>
	</div>

	<!-- Scripts -->
	<script>
		var ctx = document.getElementById('myChart').getContext('2d');
		var chart = new Chart(ctx, {
		    type: 'line',
		    data: {
		        labels: ["January", "February", "March", "April", "May", "June", "July"],
		        datasets: [{
		            label: "Grade 12",
		            backgroundColor: 'rgb(255, 99, 132)',
		            borderColor: 'rgb(255, 99, 132)',
		            data: [0, 10, 5, 2, 20, 30, 45],
		        }]
		    },
		    options: {}
		});
	</script>
	<!-- Scripts -->

	<?//body end
			}
		}
	}
	?>
</div>