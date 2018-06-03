<div id="container">
	<link rel="stylesheet" type="text/css" href="http://greened.ga/school/students/css/profiles.css">
	<?php
		include($_SERVER['DOCUMENT_ROOT']."/school/students/head/main-bar.php");
		include($_SERVER['DOCUMENT_ROOT']."/school/head/connect.php");
	?>
	<div id="main-body">
		<div id="profiles">
		<?php
		$getProfiles = mysqli_query($conStudent, "SELECT FirstName,ProfilePic,Class,Username FROM Students WHERE SchoolUID='sups' AND closed='0' ORDER BY FirstName");
		while($row = mysqli_fetch_assoc($getProfiles)){
			echo
			'<div class="profile users" data-name="'. $row['FirstName'] .'" data-class="'. $row['Class'] .'">
				<a href="http://greened.ga/school/students/profiles/'. $row['Username'] .'">
					<img src="'. $row['ProfilePic'] .'" class="profile-img">
				</a>
				<div class="profile-info">
					<a href="http://greened.ga/school/students/profiles/'. $row['Username'] .'">
						<b>'. $row['FirstName'] .'</b>
					</a><br>
					Grade '. $row['Class'] .'<br>
				</div>
			</div>';
		}
		?>
		</div>
	</div>
</div>