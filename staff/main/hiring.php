<div id="container">
	<link rel="stylesheet" type="text/css" href="http://greened.ga/school/staff/css/table.css">
	<?php
		include($_SERVER['DOCUMENT_ROOT']."/school/staff/head/main-bar.php");
		include($_SERVER['DOCUMENT_ROOT']."/school/head/connect.php");
	?>
	<div id="main-body">
		<button>Add</button>
		<button>Delete</button>
		<div id="table">
			<div class="table-row table-head">
				<div class="table-row-name">Name</div>
				<div class="table-row-small">Subject</div>
				<div class="table-row-small two">Class</div>
				<div class="table-row-small one">Date</div>
			</div>
		    <div class="table-row users">
			   	<div class="table-row-name">Rayyan</div>
				<div class="table-row-small">Maths</div>
				<div class="table-row-small two">Grade 10</div>
				<div class="table-row-small one">28/04/18</div>
			</div>
		</div>
	</div>
</div>