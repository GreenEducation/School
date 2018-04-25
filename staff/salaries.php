<!DOCTYPE html>
<html>
	<head>
		<title>School</title>
		<link rel="stylesheet" type="text/css" href="http://greened.ga/school/staff/css/salaries.css">
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
				<a class="sidebar-item" href="http://greened.ga/school/staff/attendance">Attendance</a>
				<a class="sidebar-item current" href="shttp://greened.ga/school/staff/salaries">Salaries</a>
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
							<div>Rayyan</div>
							<div>Ahmed</div>
							<div>Quraishi</div>
						</div>
						<div class="table-column table-column-small">
							<div class="table-column-head">Salary</div>
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