<!DOCTYPE html>
<html>
	<head>
		<title>School</title>
		<link rel="stylesheet" type="text/css" href="../css/profile.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>

		<!-- Header -->
		<?php
		include("../head/header.php");
		if (isset($_GET['uid'])){
			$uid = $_GET['uid'];
			$check = mysqli_query($conTeacher, "SELECT FirstName FROM Teacher WHERE UID='$uid' OR Username='$uid'");
			if (mysqli_num_rows($check)===1) {
				$row = mysqli_fetch_assoc($check);
				$firstName = $row['FirstName'];	
			}
			else
			{
				echo "<meta http-equiv=\"refresh\" content=\"0; url=http://greened.ga/school/staff/profiles.php\">";	
			}
		}
		else{
			echo "<meta http-equiv=\"refresh\" content=\"0; url=http://greened.ga/school/staff/profiles.php\">";
		}
		?>

		<!-- Header -->

		<!-- Body -->
		<section id="body">
			<div id="sidebar">
				<a class="sidebar-item current" href="../profiles.php">Profiles</a>
				<a class="sidebar-item" href="../attendance.php">Attendance</a>
				<a class="sidebar-item" href="../salaries.php">Salaries</a>
				<a class="sidebar-item" href="../hiring.php">Hiring</a>
				<a class="sidebar-item" href="../chat.php">Chat</a>
			</div>
			<div id="main">
				<!--<div id="main-nav">
					<ol id="main-nav-breadcrums">
						<li><a>Staff</a></li>
						<li><a>Profiles</a></li>
						<li><a><?php echo $firstName; ?></a></li>
					</ol>
				</div>-->
				<div id="main-body">
					<img src="../img/long_back_arrow.png" width="40px"><br>
					<div id="info"></div>
				</div>
			</div>
		</section>
		<!-- Body -->

	</body>
</html>