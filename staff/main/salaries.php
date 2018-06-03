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
				<div class="table-row-small two">Salary</div>
				<div class="table-row-small ">Status</div>
			</div>
	    	<?php
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
	    	?>
		</div>
	</div>
</div>