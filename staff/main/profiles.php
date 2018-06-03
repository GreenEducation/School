<div id="container">
	<link rel="stylesheet" type="text/css" href="http://greened.ga/school/staff/css/profiles.css">
	<?php
		include($_SERVER['DOCUMENT_ROOT']."/school/staff/head/main-bar.php");
		include($_SERVER['DOCUMENT_ROOT']."/school/head/connect.php");
	?>
	<div id="main-body">
		<div id="profiles">
		<?php
		$getProfiles = mysqli_query($conTeacher, "SELECT FirstName,ProfilePic,Subject,Class,Username FROM Teacher WHERE SchoolUID='sups' AND closed='0' ORDER BY FirstName");
		while($row = mysqli_fetch_assoc($getProfiles)){
			echo
			'<div class="profile users" data-name="'. $row['FirstName'] .'" data-class="'. $row['Class'] .'" data-subject="'. $row['Subject'] .'">
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