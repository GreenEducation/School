<?php include("connect.php"); ?>
<link rel="stylesheet" type="text/css" href="http://greened.ga/school/staff/css/staff.css">
<script type="text/javascript" src="http://greened.ga/school/staff/js/jquery.js.gz"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#sidebar-toggle").on("click", function(){
			$("#sidebar").toggle();
			$("#glass").toggle();
		});
	});
</script>
<section id="header">
			<div id="glass"></div>
			<header>
				<span>
					<button id="sidebar-toggle"><p></p><p></p><p></p></button>
					<logo>Green Education</logo>
				</span>
				<span id="nav">
					<a class="nav-item" href="http://greened.ga/school/dashboard/calendar">Dashboard</a>
					<a class="nav-item active" href="http://greened.ga/school/staff/profiles">Staff</a>
					<a class="nav-item" href="http://greened.ga/school/students/profiles">Students</a>
					<a class="nav-item">Profile</a>
				</span>
			</header>
		</section>