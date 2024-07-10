<?php 
if(isset($_SESSION['admin_loggedin'])){
header("location:home.php");
}else{
	header("location:login.php");
}


 ?>

