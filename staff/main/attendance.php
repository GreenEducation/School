<div id="container">
	<link rel="stylesheet" type="text/css" href="http://greened.ga/school/staff/css/table.css">
	<?php
		include($_SERVER['DOCUMENT_ROOT']."/school/staff/head/main-bar.php");
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
		    $getAttendance = mysqli_query($conTeacher, "SELECT Attendance.Attendance, FirstName, ProfilePic, Subject, Class, Username FROM Teacher INNER JOIN Attendance ON Teacher.ID = Attendance.UID WHERE Teacher.SchoolUID =  'sups' AND Attendance.Date='$date' ORDER BY Teacher.FirstName");
		    while($row = mysqli_fetch_assoc($getAttendance)){
		    	echo'
		    	<div class="table-row users" data-name="'. $row['FirstName'] .'" data-class="'. $row['Class'] .'" data-subject="'. $row['Subject'] .'">
		    		<div class="table-row-name">
		    			<a href="http://greened.ga/school/staff/attendance/teaching/'.$row['Username'].'">'. $row['FirstName'] .'</a>
		    		</div>
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