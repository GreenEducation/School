<div id="container">
	<?php
	include($_SERVER['DOCUMENT_ROOT']."/school/head/connect.php");

	if (!(isset($_GET['stype']) & isset($_GET['uid']))){
		echo "<meta http-equiv=\"refresh\" content=\"0; url=http://greened.ga/school/staff/attendance\">";
	}
	else
	{
		$staffType = $_GET['stype'];
		$uid = $_GET['uid'];
		if($staffType == "teaching"){
			$connect = $conTeacher;
		}
		else if($staffType == "nonteaching"){
			$connect = $conStaff;
		}

		$toDate = "Y-m-" . cal_days_in_month(CAL_GREGORIAN,date(m),date(Y));
		$toDate = date($toDate);
		$query = "SELECT Attendance, SchoolUID, Date FROM Attendance WHERE UID='".$uid."' and SchoolUID='sups' AND (Date BETWEEN '" . date('Y-m-01') . "' AND  '" . $toDate . "')";
		$check = mysqli_query($connect, $query);
		$attendanceJson = "{";
		while($row = mysqli_fetch_assoc($check)){
			$attendance = $row['Attendance'];
			$date = explode("-", $row['Date'])[2];
			$date = $date<10? str_split($date)[1] : $date;
			$attendanceJson .= '"'.$date.'":'.'"'.$attendance.'",';
		}
		$attendanceJson = substr($attendanceJson, 0, -1);
		$attendanceJson .= "}";
		//body start
	?>

	<link rel="stylesheet" type="text/css" href="http://greened.ga/school/staff/css/attendance.css">
	<script type="text/javascript" src="http://greened.ga/school/js/Chart.bundle.min.js.gz"></script>
	<link rel="stylesheet" type="text/css" href="http://greened.ga/school/css/calendar.css">

	<div id="main-body">
		<a href="http://greened.ga/school/staff/attendance">
			<img src="http://greened.ga/school/staff/img/long_back_arrow.png" width="40px">
		</a><br>
		<div id="calendar">
			<div class="calendar" data-events='<?php echo $attendanceJson;?>'></div>
		</div>
		<div id="graphs">
			<canvas id="myChart"></canvas>
		</div>
	</div>

	<!-- Scripts -->
	<script src="http://greened.ga/school/js/calendar.js"></script>
	<script>
		var ctx = document.getElementById('myChart').getContext('2d');
		var chart = new Chart(ctx, {
		    type: 'bar',
		    data: {
		        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
		        datasets: [{
		            label: "2018",
		            backgroundColor: 'rgb(255, 99, 132)',
		            borderColor: 'rgb(255, 99, 132)',
		            data: [0, 10, 5, 2, 20, 30, 45, 70, 80, 80, 90, 75],
		        }]
		    },
		    options: {}
		});
	</script>
	<!-- Scripts -->

	<?//body end
	}
	?>
</div>