<?php include("connect.php"); ?>
<link rel="stylesheet" type="text/css" href="http://greened.ga/school/staff/css/staff.css">
<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function(event) {
		var toggle = document.getElementById("sidebar-toggle");
		var glass = document.getElementById("glass");
		var sidebar = document.getElementById("sidebar");
		toggle.addEventListener("click", toggleSidebar);
		glass.addEventListener("click", toggleSidebar);
		function toggleSidebar(){
			if(window.getComputedStyle(sidebar).getPropertyValue('display') === 'flex'){
				sidebar.style.display = 'none';
				glass.style.display = 'none';
			}
			else{
				sidebar.style.display = 'flex';
				glass.style.display = 'block';
			}
		}
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