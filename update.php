<?php 
	include('db.php');	

$GetEmail= $_GET['email'];
$select_id= mysqli_query($conn, "SELECT * FROM users WHERE user_email='$GetEmail'");
$rows= mysqli_fetch_array($select_id);
$row_id= $rows['user_id'];




	extract($_POST);
	if(isset($_POST['pInfo'])){
		$GetEmail= $_GET['email'];
		$insert=mysqli_query($conn, "UPDATE users SET user_name='$name',user_dob='$dob',user_gender='$gender',user_description='$overview' ,user_pbcno='$lawyerpbc' 
		,expertise='$expertise', user_position='$lawyerpro' WHERE user_email='$GetEmail'");
			if($insert){
					header("location:update-profile.php?updated=profile-pic");
				}else{
					header("location:update-profile.php?error=profile-pic");
				}

	}

	


	if(isset($_POST['EE'])){
		$GetEmail= $_GET['email'];
		$insert=mysqli_query($conn, "UPDATE users SET user_total_cases='$tcases',user_won_cases='$wcases',user_lost_cases='$lcases',user_court='$court',user_uni='$uni',user_degree='$education' WHERE user_email='$GetEmail'");
		if($insert){
					header("location:update-profile.php?updated=e-and-e");
				}else{
					header("location:update-profile.php?error=e-and-e");
				}

	}


		if(isset($_POST['CA'])){
		$GetEmail= $_GET['email'];
		$insert=mysqli_query($conn, "UPDATE users SET user_phone='$lawyerphone', user_city='$lawyercity' WHERE user_email='$GetEmail'");
		if($insert){
					header("location:update-profile.php?updated=CA");
				}else{
					header("location:update-profile.php?error=CA");
				}

	}


	    if(isset($_POST['SL'])){
		$GetEmail= $_GET['email'];
		$insert=mysqli_query($conn, "UPDATE users SET user_password='$pass' WHERE user_email='$GetEmail'");
		if($insert){
					header("location:update-profile.php?updated=SL");
				}else{
					header("location:update-profile.php?error=SL");
				}
	}

	
?>