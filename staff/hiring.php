<!DOCTYPE html>
<html>
	<head>
		<title>School</title>
		<link rel="stylesheet" type="text/css" href="http://greened.ga/school/staff/css/hiring.css">
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
				<a class="sidebar-item" href="http://greened.ga/school/staff/salaries">Salaries</a>
				<a class="sidebar-item current" href="http://greened.ga/school/staff/hiring">Hiring</a>
				<a class="sidebar-item" href="http://greened.ga/school/staff/chat">Chat</a>
			</div>
			<div id="main">
				<div id="main-bar">
					<?php include("./head/main-bar.php"); ?>
				</div>
				<div id="main-body">
					<button>Add</button>
					<button>Delete</button>
					<div id="table">
						<div class="table-column table-column-large">
							<div class="table-column-head">Name</div>
							<div>Rayyan</div>
							<div>Ahmed</div>
							<div>Quraishi</div>
						</div>
						<div class="table-column table-column-small">
							<div class="table-column-head">Subject</div>
							<div>maths</div>
							<div>science</div>
							<div>All</div>
						</div>
						<div class="table-column table-column-small">
							<div class="table-column-head">Classes</div>
							<div>6th grade</div>
							<div>11th grade</div>
							<div>KG</div>
						</div>
						<div class="table-column table-column-small">
							<div class="table-column-head">Date</div>
							<div>01/06/18</div>
							<div>01/02/18</div>
							<div>19/12/17</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Body -->

	</body>
</html>