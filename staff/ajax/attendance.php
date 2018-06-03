<?php
include($_SERVER['DOCUMENT_ROOT']."/school/head/connect.php");

if(isset($_POST['type']) === true){
	$type = $_POST['type'];
	if($type == "teaching"){
		echo'
		<div class="table-row table-head">
			<div class="table-row-name">Name</div>
			<div class="table-row-small one">'.date("d/m/y",strtotime("-2 days")).'</div>
			<div class="table-row-small two">'.date("d/m/y",strtotime("-1 days")).'</div>
			<div class="table-row-small three">'.date("d/m/y").'</div>
		</div>';
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
	}
	else{
		echo'
		<div class="table-row table-head">
			<div class="table-row-name">Name</div>
			<div class="table-row-small one">'.date("d/m/y",strtotime("-2 days")).'</div>
			<div class="table-row-small two">'.date("d/m/y",strtotime("-1 days")).'</div>
			<div class="table-row-small three">'.date("d/m/y").'</div>
		</div>';
		$date = date("Y-m-d");
		//Maybe fetch data from "teacher" and change "attendance" database
	    $getAttendance = mysqli_query($conStaff, "SELECT Name,Attendance FROM Attendance WHERE SchoolUID='sups' AND Date='$date' ORDER BY Name");
	    while($row = mysqli_fetch_assoc($getAttendance)){
	    	echo'
	    	<div class="table-row users">
	    		<div class="table-row-name">
	    			<a href="http://greened.ga/school/staff/attendance/nonteaching/'.$row['Username'].'">'. $row['Name'] .'</a>
	    		</div>
				<div class="table-row-small one">'. $row['Attendance'] .'</div>
				<div class="table-row-small two">'. $row['Attendance'] .'</div>
				<div class="table-row-small three">'. $row['Attendance'] .'</div>
			</div>
			';
    	}
	}
}
?>