<!DOCTYPE html>
<html>
	<head>
		<title>School</title>
		<link rel="stylesheet" type="text/css" href="http://greened.ga/school/staff/css/profiles.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>

		<!-- Header -->
		<?php include("./head/header.php"); ?>
		<!-- Header -->

		<!-- Body -->
		<section id="body">
			<div id="sidebar">
				<a class="sidebar-item current" href="http://greened.ga/school/staff/profiles">Profiles</a>
				<a class="sidebar-item" href="http://greened.ga/school/staff/attendance">Attendance</a>
				<a class="sidebar-item" href="http://greened.ga/school/staff/salaries">Salaries</a>
				<a class="sidebar-item" href="http://greened.ga/school/staff/hiring">Hiring</a>
				<a class="sidebar-item" href="http://greened.ga/school/staff/chat">Chat</a>
			</div>
			<div id="main">
				<div id="profiles">
					<div id="main-bar">
						<?php include("./head/main-bar.php"); ?>
					</div>
					<div id="main-body">
						<?php
				        $getProfiles = mysqli_query($conTeacher, "SELECT FirstName,ProfilePic,Subject,Class,Username FROM Teacher WHERE SchoolUID='sups' AND closed='0' ORDER BY FirstName");
				        while($row = mysqli_fetch_assoc($getProfiles)){
				        	echo
				        	'<div class="profile" data-name="'. $row['FirstName'] .'" data-class="'. $row['Class'] .'" data-subject="'. $row['Subject'] .'">
				        		<a href="http://greened.ga/school/staff/profiles/teaching/'. $row['Username'] .'">
				        			<img src="'. $row['ProfilePic'] .'" class="profile-img">
				        		</a>
				        		<div class="profile-info">
				        			<a href="http://greened.ga/school/staff/profiles/'. $row['Username'] .'">
				        				<b>'. $row['FirstName'] .'</b>
				        			</a><br>
				        			'. $row['Subject'] .'<br>
				        			Grade '. $row['Class'] .'
				        		</div>
				        	</div>';
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
					$.post('http://greened.ga/school/staff/ajax/profiles.php', {type: type}, function(data){
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
					$(".profile").css("display","block")
					var search = $(this).val();
					if(search != ""){
						$(".profile:not(:contains("+search+"))").css("display","none");
					}
				});

				//Sort
				$("#staff-sort").on("change", function(){
					var sortType = "data-" + $("#staff-sort").val();
					var getSorted = $(
						$(".profile").toArray().sort(function(a, b){
							var aVal = (a.getAttribute(sortType)),
							bVal = (b.getAttribute(sortType));
							return aVal > bVal;
						})
					);//.appendTo("#main-body") alternate method
					$("#main-body").html( getSorted );
				});


			});
		</script>
		<!-- Script -->
	</body>
</html>