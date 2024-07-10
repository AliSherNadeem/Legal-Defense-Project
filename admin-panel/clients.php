<?php 

include('header.php');
if(isset($_SESSION['admin_loggedin'])){


 ?>
 		<h2 class="p-3 bg-light mb-2 text-center">Clients Info</h2>
		<div class="well well-lg">
            <table class="table">
              <thead>
                <tr>
                  <th>Client Name</th>
                  <th>Phone Number</th>
                  <th>View Profile</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $selectItemRows = mysqli_query($conn, "SELECT * FROM users WHERE user_type='C'");
                    
                    if(mysqli_num_rows($selectItemRows)>0){
                    while ($itemRow=mysqli_fetch_array($selectItemRows)) { ?>
                <tr>
                  <td><?php echo $itemRow['user_name']; ?></td>
                  <td><?php echo $itemRow['user_phone']; ?></td>
                  <td><a href="../profile.php?C_id=<?php echo $itemRow['user_id']; ?>" class="btn btn-info">View Profile</a></td>
                  <td><a class="btn btn-danger" href="../delete.php?C_id=<?php echo $itemRow['user_id']; ?>">Delete</a></td>
                </tr>
                <?php } }else{?>
                  <tr>
                    <td>No Records Found In Lawyer's Table</td>
                  </tr><?php } ?>
              </tbody>
            </table>
          </div>
  
<?php

    include"footer.php";
    
    
}else{
	header("location:login.php");
}


 ?>
