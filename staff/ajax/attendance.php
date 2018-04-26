<?php
include("../head/connect.php");

if(isset($_POST['type']) === true){
	$type = $_POST['type'];
	if($type == "teaching"){
		echo'
		<div id="table">
			<div class="table-row table-head">
				<div class="table-row-name">Name</div>
				<div class="table-row-small">'.date("d/m/y",strtotime("-2 days")).'</div>
				<div class="table-row-small">'.date("d/m/y",strtotime("-1 days")).'</div>
				<div class="table-row-small">'.date("d/m/y").'</div>
			</div>';
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
		echo'
		</div>';
	}
	else{
		echo'
		<div id="table">
			<div class="table-row table-head">
				<div class="table-row-name">Name</div>
				<div class="table-row-small">'.date("d/m/y",strtotime("-2 days")).'</div>
				<div class="table-row-small">'.date("d/m/y",strtotime("-1 days")).'</div>
				<div class="table-row-small">'.date("d/m/y").'</div>
			</div>';
			$date = date("Y-m-d");
			//Use Inner JOIN
		    $getAttendance = mysqli_query($conStaff, "SELECT Name,Attendance FROM Attendance WHERE SchoolUID='sups' AND Date='$date' ORDER BY Name");
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
		echo'
		</div>';
	}
}
?>