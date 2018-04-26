<!DOCTYPE html>
<html>
	<head>
		<title>School</title>
		<link rel="stylesheet" type="text/css" href="http://greened.ga/school/staff/css/attendance.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>

		<!-- Header -->
		<?php include("./head/header.php"); ?>
		<!-- Header -->

		<!-- Body -->
		<section id="body">
			<div id="sidebar">
				<a class="sidebar-item" href="http://greened.ga/school/staff/profiles">Profiles</a>
				<a class="sidebar-item current" href="http://greened.ga/school/staff/attendance">Attendance</a>
				<a class="sidebar-item" href="http://greened.ga/school/staff/salaries">Salaries</a>
				<a class="sidebar-item" href="http://greened.ga/school/staff/hiring">Hiring</a>
				<a class="sidebar-item" href="http://greened.ga/school/staff/chat">Chat</a>
			</div>
			<div id="main">
				<div id="main-bar">
					<?php include("./head/main-bar.php"); ?>
				</div>
				<div id="main-body">
					<div id="table">
				    	<div class="table-column table-column-large">
							<div class="table-column-head">Name</div>
							<?php
							/*** change SchoolUID ***/
						    $getAttendance = mysqli_query($conTeacher, "SELECT FirstName FROM Teacher WHERE SchoolUID='sups' ORDER BY FirstName");
						    while($row = mysqli_fetch_assoc($getAttendance)){
					    		echo '<div>'. $row['FirstName'] .'</div>';
					    	}
					    	?>
						</div>
						<div class="table-column table-column-small" id="one">
							<div class="table-column-head">Day 1</div>
							<?php
							$date = date("Y-m-d",strtotime("-2 days"));
							$getAttendance = mysqli_query($conTeacher, "SELECT Attendance FROM Attendance WHERE SchoolUID='sups' AND Date='$date' ORDER BY Name"); 
							while($row = mysqli_fetch_assoc($getAttendance)){
				        		echo '<div>'. $row['Attendance'] .'</div>';
				        	}
					    	?>
						</div>
						<div class="table-column table-column-small" id="two">
							<div class="table-column-head">Day 2</div>
							<?php
							$date = date("Y-m-d",strtotime("-1 days"));
							$getAttendance = mysqli_query($conTeacher, "SELECT Attendance FROM Attendance WHERE SchoolUID='sups' AND Date='$date' ORDER BY Name"); 
							while($row = mysqli_fetch_assoc($getAttendance)){
				        		echo '<div>'. $row['Attendance'] .'</div>';
				        	}
					    	?>
						</div>
						<div class="table-column table-column-small">
							<div class="table-column-head">Day 3</div>
							<?php
							$date = date("Y-m-d");
							$getAttendance = mysqli_query($conTeacher, "SELECT Attendance FROM Attendance WHERE SchoolUID='sups' AND Date='$date' ORDER BY Name"); 
							while($row = mysqli_fetch_assoc($getAttendance)){
				        		echo '<div>'. $row['Attendance'] .'</div>';
				        	}
					    	?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Body -->

	</body>
</html>