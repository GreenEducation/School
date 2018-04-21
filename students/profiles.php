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
				<a class="sidebar-item" href="fees.php">Fees</a>
				<a class="sidebar-item" href="admission.php">Admission</a>
				<a class="sidebar-item" href="chat.php">Chat</a>
			</div>
			<div id="main">
				<div id="profiles">
					<div id="main-bar">
						<?php include("head/main-bar.php"); ?>
					</div>
					<div id="main-body">
						<div class="profile"></div>
						<div class="profile"></div>
						<div class="profile"></div>
						<div class="profile"></div>
						<div class="profile"></div>
						<div class="profile"></div>
						<div class="profile"></div>
						<div class="profile"></div>
						<div class="profile"></div>
						<div class="profile"></div>
						<div class="profile"></div>
					</div>
				</div>
			</div>
		</section>
		<!-- Body -->

	</body>
</html>