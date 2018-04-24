<!DOCTYPE html>
<html>
	<head>
		<title>School</title>
		<link rel="stylesheet" type="text/css" href="css/profiles.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>

		<!-- Header -->
		<?php include("head/header.php"); ?>
		<!-- Header -->

		<!-- Body -->
		<section id="body">
			<div id="sidebar">
				<a class="sidebar-item current" href="profiles.php">Profiles</a>
				<a class="sidebar-item" href="attendance.php">Attendance</a>
				<a class="sidebar-item" href="salaries.php">Salaries</a>
				<a class="sidebar-item" href="hiring.php">Hiring</a>
				<a class="sidebar-item" href="chat.php">Chat</a>
			</div>
			<div id="main">
				<div id="profiles">
					<div id="main-bar">
						<?php include("head/main-bar.php"); ?>
					</div>
					<div id="main-body">
						<?php
				        $getProfiles = mysqli_query($conTeacher, "SELECT FirstName,ProfilePic,Subject,Class,Username FROM Teacher WHERE closed='0'");
				        while($row = mysqli_fetch_assoc($getProfiles)){
				        	echo
				        	'<div class="profile">
				        		<img src="'. $row['ProfilePic'] .'" class="profile-img">
				        		<div class="profile-info">
				        			<a href="http://greened.ga/school/staff/profiles/index.php?uid='. $row['Username'] .'"><b>'. $row['FirstName'] .'</b></a><br>
				        			'. $row['Subject'] .'<br>
				        			grade '. $row['Class'] .'
				        		</div>
				        	</div>';
				    	}
				        ?>
					</div>
				</div>
			</div>
		</section>
		<!-- Body -->

	</body>
</html>