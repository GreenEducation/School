<!DOCTYPE html>
<html>
	<head>
		<title>School</title>
		<link rel="stylesheet" type="text/css" href="http://greened.ga/school/staff/css/chat.css">
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
				<a class="sidebar-item" href="http://greened.ga/school/staff/hiring">Hiring</a>
				<a class="sidebar-item current" href="http://greened.ga/school/staff/chat">Chat</a>
			</div>
			<div id="main">
				<div id="chat">
					<div id="chat-head">
						
					</div>
					<div id="chat-out"></div>
					<div id="chat-in">
						<input type="text" placeholder="Enter Message">
					</div>
				</div>
				<div id="chatbar">
					<h3 id="chatbar-head">Channels & Contacts</h3>
				</div>
			</div>
		</section>
		<!-- Body -->

	</body>
</html>