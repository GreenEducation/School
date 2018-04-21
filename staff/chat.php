<!DOCTYPE html>
<html>
	<head>
		<title>School</title>
		<link rel="stylesheet" type="text/css" href="css/chat.css">
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
				<a class="sidebar-item" href="salaries.php">Salaries</a>
				<a class="sidebar-item" href="hiring.php">Hiring</a>
				<a class="sidebar-item current" href="chat.php">Chat</a>
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