<!DOCTYPE html>
<html>
	<head>
		<title>School</title>
		<link rel="stylesheet" type="text/css" href="http://greened.ga/school/staff/css/attendance.css">
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
				<a class="sidebar-item current" href="http://greened.ga/school/staff/attendance">Attendance</a>
				<a class="sidebar-item" href="http://greened.ga/school/staff/salaries">Salaries</a>
				<a class="sidebar-item" href="http://greened.ga/school/staff/hiring">Hiring</a>
				<a class="sidebar-item" href="http://greened.ga/school/staff/chat">Chat</a>
			</div>
			<div id="main">
				<div id="main-bar">
					<?php include("./head/main-bar.php"); ?>
				</div>
				<div id="main-body">
					<div id="table">
						<div class="table-row table-head">
							<div class="table-row-name">Name</div>
							<div class="table-row-small one"><?php echo date("d/m/y",strtotime("-2 days"));?></div>
							<div class="table-row-small two"><?php echo date("d/m/y",strtotime("-1 days"));?></div>
							<div class="table-row-small three"><?php echo date("d/m/y");?></div>
						</div>
						<?php
						$date = date("Y-m-d");
						//Use Inner JOIN
					    $getAttendance = mysqli_query($conTeacher, "SELECT Name,Attendance FROM Attendance WHERE SchoolUID='sups' AND Date='$date' ORDER BY Name");
					    while($row = mysqli_fetch_assoc($getAttendance)){
					    	echo'
					    	<div class="table-row">
						    	<div class="table-row-name">'. $row['Name'] .'</div>
								<div class="table-row-small one">'. $row['Attendance'] .'</div>
								<div class="table-row-small two">'. $row['Attendance'] .'</div>
								<div class="table-row-small three">'. $row['Attendance'] .'</div>
							</div>
							';
				    	}
				    	?>
					</div>
				</div>
			</div>
		</section>
		<!-- Body -->

		<!-- Script -->
		<script type="text/javascript">
			$(document).ready(function(){

				//Profile-Type Selector
				$("input[name=profile-type]").on("change", function(){
					var type = $(this).attr("id");
					$.post('http://greened.ga/school/staff/ajax/attendance.php', {type: type}, function(data){
						$("#main-body").html(data);
						if(type == "non-teaching"){
							$("#staff-sort").attr('disabled', true);
							$("#staff-sort").val("name");
						}else{
							$("#staff-sort").attr('disabled', false);
						}
					});
				});

				//Overwrite :contains
				$.expr[":"].contains = $.expr.createPseudo(function(arg) {
					return function( elem ) {
						return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
					};
				});

				//Search
				$("#search").on("keyup", function(){
					$(".table-row").css("display","flex");
					var search = $(this).val();
					if(search != ""){
						$(".table-row:not(:contains("+search+"))").css("display","none");
					}
				});

				//Sort
				/*$("#staff-sort").on("change", function(){
					var sortType = "data-" + $("#staff-sort").val();
					var getSorted = $(
						$(".table-row").toArray().sort(function(a, b){
							var aVal = (a.getAttribute(sortType)),
							bVal = (b.getAttribute(sortType));
							return aVal > bVal;
						})
					).appendTo("#main-body");
					//$("#table").html( getSorted ); alternate method
				});*/


			});
		</script>
		<!-- Script -->
	</body>
</html>