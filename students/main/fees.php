<div id="container">
	<link rel="stylesheet" type="text/css" href="http://greened.ga/school/students/css/fees.css">
	<?php
		include($_SERVER['DOCUMENT_ROOT']."/school/students/head/main-bar.php");
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
		    $getFees = mysqli_query($conStudent, "SELECT Name,Fees,Status FROM Fees WHERE SchoolUID='sups' ORDER BY Name");
		    while($row = mysqli_fetch_assoc($getFees)){
		    	echo'
		    	<div class="table-row users">
			    	<div class="table-row-name">'. $row['Name'] .'</div>
					<div class="table-row-small two">'. $row['Fees'] .'</div>
					<div class="table-row-small">'. $row['Status'] .'</div>
				</div>
				';
	    	}
	    	?>
		</div>
	</div>
</div>