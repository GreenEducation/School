<?php
include($_SERVER['DOCUMENT_ROOT']."/school/head/connect.php");

if(isset($_POST['type']) === true){
	$type = $_POST['type'];
	if($type == "teaching"){
		echo'
		<div class="table-row table-head">
			<div class="table-row-name">Name</div>
			<div class="table-row-small two">Salary</div>
			<div class="table-row-small ">Status</div>
		</div>';
		$getSalaries = mysqli_query($conTeacher, "SELECT Name,Salary,Status FROM Salaries WHERE SchoolUID='sups' ORDER BY Name");
	    while($row = mysqli_fetch_assoc($getSalaries)){
	    	echo'
	    	<div class="table-row users">
		    	<div class="table-row-name">'. $row['Name'] .'</div>
				<div class="table-row-small two">'. $row['Salary'] .'</div>
				<div class="table-row-small">'. $row['Status'] .'</div>
			</div>
			';
    	}
	}
	else{
		echo'
		<div class="table-row table-head">
			<div class="table-row-name">Name</div>
			<div class="table-row-small two">Salary</div>
			<div class="table-row-small ">Status</div>
		</div>';
		$getSalaries = mysqli_query($conStaff, "SELECT Name,Salary,Status FROM Salaries WHERE SchoolUID='sups' ORDER BY Name");
	    while($row = mysqli_fetch_assoc($getSalaries)){
	    	echo'
	    	<div class="table-row users">
		    	<div class="table-row-name">'. $row['Name'] .'</div>
				<div class="table-row-small two">'. $row['Salary'] .'</div>
				<div class="table-row-small">'. $row['Status'] .'</div>
			</div>
			';
    	}
	}
}
?>