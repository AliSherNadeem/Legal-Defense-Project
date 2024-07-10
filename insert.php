<?php 
include('db.php');
	extract($_POST);


	if(isset($_POST['add-p-item'])){
		$email=$_GET['email'];

		// echo $email;

		$query="SELECT * FROM users WHERE user_email='$email'";
    $run_query=mysqli_query($conn, $query);
    $row=mysqli_fetch_array($run_query);
    $author_name=$row['user_name'];
    $author_id=$row['user_id'];

    $dp_name=$_FILES['pic']['name'];
		$dp_type=$_FILES['pic']['type'];
		$dp_size=$_FILES['pic']['size'];
		$dp_error=$_FILES['pic']['error'];
		$dp_tmp_name=$_FILES['pic']['tmp_name'];
		$dp_Ext = explode(".", $dp_name);
		$dp_Act_Ext = strtolower(end($dp_Ext));
		$allowed  = array('jpg', 'jpeg', 'png', 'bmp', 'gif' );
		$dp_save = "images/".$dp_name;

    if(in_array($dp_Act_Ext, $allowed)){
    	if($dp_error==0){
		
		 mysqli_query($conn, "INSERT INTO portfolio_items(item_title,item_author_name,item_author_id,item_desc,item_date,item_pics,client_name) VALUES('$title','$author_name','$author_id','$desc','$date','$dp_name','$cname')");
		 move_uploaded_file($dp_tmp_name, $dp_save);
		header("location:update-portfolio.php?success=item-added-successfully");
			}else{ echo "Error".$dp_error; }
	}else{

		header("location:update-portfolio.php?allowed=Not-allowed");
	}
}

?>