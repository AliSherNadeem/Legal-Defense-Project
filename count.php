<?php
include('db.php');

$query=mysqli_query($conn, "SELECT * FROM lawyers");
$count= mysqli_num_rows($query);
echo $count;

?>


