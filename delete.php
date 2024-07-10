<?php 

include('db.php');



if (isset($_GET['L_id'])){
  $id=$_GET['L_id'];

   $query=mysqli_query($conn, "DELETE from users where user_id='$id'");
   if($query){
   	header("location:admin-panel/lawyers.php?deleted=success");
   }
else{

  header("location:admin-panel/lawyers.php?error=deleting-error");
}

}

if (isset($_GET['C_id'])){
  $id=$_GET['C_id'];

   $query=mysqli_query($conn, "DELETE from users where user_id='$id'");
   if($query){
   	header("location:admin-panel/clients.php?deleted=success");
   }
else{

  header("location:admin-panel/clients.php?error=deleting-error");
}

}

if (isset($_GET['case_id'])){
  $item_id=$_GET['case_id'];

   $query=mysqli_query($conn, "DELETE from cases where id='$item_id'");
   if($query){
   	header("location:admin-panel/cases-categories.php?deleted=success");
   }
else{

  header("location:admin-panel/cases-categories.php?error=deleting-error");
}

}
if (isset($_GET['court_id'])){
  $item_id=$_GET['court_id'];

   $query=mysqli_query($conn, "DELETE from courts where id='$item_id'");
   if($query){
   	header("location:admin-panel/courts.php?deleted=success");
   }
else{

  header("location:admin-panel/courts.php?error=deleting-error");
}

}

if (isset($_GET['city_id'])){
  $item_id=$_GET['city_id'];

   $query=mysqli_query($conn, "DELETE from regions where id='$item_id'");
   if($query){
   	header("location:admin-panel/regions.php?deleted=success");
   }
else{

  header("location:admin-panel/regions.php?error=deleting-error");
}

}

?>







