<!DOCTYPE html>
<html>
	<head>
		<title>School</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>

		<!-- Header -->
		<?php include($_SERVER['DOCUMENT_ROOT']."/school/head/header.php"); ?>
		<!-- Header -->

		<!-- Body -->
		<section id="body">
			<div id="sidebar"></div>
			<div id="main">
				<?php include("./main/attendance.php"); ?>
			</div>
		</section>
		<!-- Body -->

	</body>
</html>