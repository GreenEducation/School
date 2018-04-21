<!DOCTYPE html>
<html>
	<head>
		<title>School</title>
		<link rel="stylesheet" type="text/css" href="css/fees.css">
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
				<a class="sidebar-item" href="attendance.php">Attendance</a>
				<a class="sidebar-item current" href="fees.php">Fees</a>
				<a class="sidebar-item" href="admission.php">Admission</a>
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
							<div>Rayyan</div>
							<div>Ahmed</div>
							<div>Quraishi</div>
						</div>
						<div class="table-column table-column-small">
							<div class="table-column-head">Fees Due</div>
							<div>10,000</div>
							<div>8,000</div>
							<div>9,000</div>
						</div>
						<div class="table-column table-column-small">
							<div class="table-column-head">Status</div>
							<div>Paid</div>
							<div>Paid</div>
							<div>Unpaid</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Body -->

	</body>
</html>