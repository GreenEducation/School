<!DOCTYPE html>
<html>
	<head>
		<title>School</title>
		<link rel="stylesheet" type="text/css" href="http://greened.ga/school/staff/css/profile.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="text/javascript" src="http://greened.ga/school/staff/js/Chart.bundle.min.js.gz"></script>
	</head>
	<body>

		<!-- Header -->
		<?php
		include("../head/header.php");
		if (!(isset($_GET['stype']) & isset($_GET['uid']))){
			echo "<meta http-equiv=\"refresh\" content=\"0; url=http://greened.ga/school/staff/profiles.php\">";
		}
		else
		{
			$staffType = $_GET['stype'];
			$uid = $_GET['uid'];
			if($staffType == "teaching"){
				$connect = $conTeacher;
				$query = "SELECT FirstName,Subject,Class,SchoolUID,ProfilePic FROM Teacher WHERE UID='".$uid."' OR Username='".$uid."'";
			}
			else if($staffType == "nonteaching"){
				$connect = $conStaff;
				$query = "SELECT FirstName,Position,SchoolUID,ProfilePic FROM Staff WHERE UID='".$uid."' OR Username='".$uid."'";
			}
			$check = mysqli_query($connect, $query);
			if (mysqli_num_rows($check)!==1) {
				echo "Not such user exists, or the profile is private.";
			}
			else
			{
				$row = mysqli_fetch_assoc($check);
				$schoolUID = $row['SchoolUID'];	
				if($schoolUID != 'sups'){//change this********
					echo "Not such user exists, or the profile is private.";
				}
				else
				{
					$firstName = $row['FirstName'];
					$profilePic = $row['ProfilePic'];
					if($staffType == "teaching"){
						$class = $row['Class'];	
						$subject = $row['Subject'];
						$position = 'Grade '. $class .'<br><br>'. $subject;
					}else{
						$position = $row['Position'];
					}
					//body start
		?>

					<!-- Header -->

					<!-- Body -->
					<section id="body">
						<div id="sidebar">
							<a class="sidebar-item current" href="http://greened.ga/school/staff/profiles">Profiles</a>
							<a class="sidebar-item" href="http://greened.ga/school/staff/attendance">Attendance</a>
							<a class="sidebar-item" href="http://greened.ga/school/staff/salaries">Salaries</a>
							<a class="sidebar-item" href="http://greened.ga/school/staff/hiring">Hiring</a>
							<a class="sidebar-item" href="http://greened.ga/school/staff/chat">Chat</a>
						</div>
						<div id="main">
							<div id="main-body">
								<a href="http://greened.ga/school/staff/profiles"><img src="http://greened.ga/school/staff/img/long_back_arrow.png" width="40px"></a><br>
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
									<?php if($staffType !== "nonteaching"){ ?>
									<div class="charts-section">
										<h2>Performance</h2>
											<div class="chart">
												<canvas id="myChart"></canvas>
											</div>
									</div>
									<? } ?>
									<div class="charts-section">
										<h2>Attendance</h2>
									</div>
								</div>
							</div>
						</div>
					</section>
					<!-- Body -->

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

		<?
					//body end
				}
			}
		}
		?>

	</body>
</html>