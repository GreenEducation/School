<div id="container">
	<link rel="stylesheet" type="text/css" href="http://greened.ga/school/students/css/attendance.css">
	<?php
		include($_SERVER['DOCUMENT_ROOT']."/school/students/head/main-bar.php");
		include($_SERVER['DOCUMENT_ROOT']."/school/head/connect.php");
	?>
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
		    $getAttendance = mysqli_query($conStudent, "SELECT Name,Attendance FROM Attendance WHERE SchoolUID='sups' AND Date='$date' ORDER BY Name");
		    while($row = mysqli_fetch_assoc($getAttendance)){
		    	echo'
		    	<div class="table-row users">
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