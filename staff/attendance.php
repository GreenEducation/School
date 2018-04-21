<!DOCTYPE html>
<html>
	<head>
		<title>School</title>
		<link rel="stylesheet" type="text/css" href="css/attendance.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>

		<!-- Header -->
		<?php include("head/header.php"); ?>
		<!-- Header -->

		<!-- Body -->
		<section id="body">
			<div id="sidebar">
				<a class="sidebar-item" href="profiles.php">Profiles</a>
				<a class="sidebar-item current" href="attendance.php">Attendance</a>
				<a class="sidebar-item" href="salaries.php">Salaries</a>
				<a class="sidebar-item" href="hiring.php">Hiring</a>
				<a class="sidebar-item" href="chat.php">Chat</a>
			</div>
			<div id="main">
				<div id="main-bar">
					<?php include("head/main-bar.php"); ?>
				</div>
				<div id="main-body">
					<div id="table">
						<div class="table-column table-column-large">
							<div class="table-column-head">Name</div>
							<?php
							$date = date("Y-m-d");
					        $getAttendance = mysqli_query($conTeacher, "SELECT Name,Attendance FROM Attendance WHERE Date='$date'"); 
					        while($row = mysqli_fetch_assoc($getAttendance)){
					        	echo '<div>'. $row['Name'] .'</div>
							</div>
						<div class="table-column table-column-small">
							<div class="table-column-head">Day 1</div>
					        <div>'. $row['Attendance'] .'</div>';
					    	}
					    	?>
						</div>
						<div class="table-column table-column-small">
							<div class="table-column-head">Day 2</div>
							<div>P</div>
						</div>
						<div class="table-column table-column-small">
							<div class="table-column-head">Day 3</div>
							<div>P</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Body -->

	</body>
</html>