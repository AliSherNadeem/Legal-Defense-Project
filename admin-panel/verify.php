<?php

include('../db.php');

if(isset($_GET['id'])):
$id=$_GET['id'];
$verify=mysqli_query($conn, "UPDATE users SET user_status='Verified' WHERE user_id='$id'");  
    if($verify){
        header("location:lawyers.php");
    }else{
        header("location:lawyers.php?failed");
    }
    
endif;
?>