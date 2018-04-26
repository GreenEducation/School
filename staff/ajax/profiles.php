<?php
include("../head/connect.php");

if(isset($_POST['type']) === true){
	$type = $_POST['type'];
	if($type == "teaching"){
		$getProfiles = mysqli_query($conTeacher, "SELECT FirstName,ProfilePic,Subject,Class,Username FROM Teacher WHERE SchoolUID='sups' AND closed='0' ORDER BY FirstName");
		while($row = mysqli_fetch_assoc($getProfiles)){
	    	echo
	    	'<div class="profile" data-name="'. $row['FirstName'] .'" data-class="'. $row['Class'] .'" data-subject="'. $row['Subject'] .'">
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
	}
	else{
		$getProfiles = mysqli_query($conStaff, "SELECT FirstName,ProfilePic,Position,Username FROM Staff WHERE SchoolUID='sups' AND closed='0' ORDER BY FirstName");
		while($row = mysqli_fetch_assoc($getProfiles)){
	    	echo
	    	'<div class="profile">
	    		<a href="http://greened.ga/school/staff/profiles/nonteaching/'. $row['Username'] .'">
	    			<img src="'. $row['ProfilePic'] .'" class="profile-img">
	    		</a>
	    		<div class="profile-info">
	    			<a href="http://greened.ga/school/staff/profiles/'. $row['Username'] .'">
	    				<b>'. $row['FirstName'] .'</b>
	    			</a><br>
	    			'. $row['Position'] .'<br><br>
	    		</div>
	    	</div>';
		}
	}
}
?>