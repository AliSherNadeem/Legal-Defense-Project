<?php 

include('header.php');
if(isset($_SESSION['admin_loggedin'])){
if(isset($_GET['failed'])):
    echo "<script>alert('Oops!! Something went wrong please try again.')</script>";
endif;

 ?>

 		<h2 class="p-3 bg-light mb-2 text-center">Lawyers Info</h2>
		<div class="well well-lg">
            <table class="table">
              <thead>
                <tr>
                  <th>Lawyer Name</th>
                  <th>Phone</th>
                  <th>Barcouncilno</th>
                  <th>Status</th>
                  <th>Request Docs</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    $selectItemRows = mysqli_query($conn, "SELECT * FROM users WHERE user_type='L'");
                    
                    if(mysqli_num_rows($selectItemRows)>0){
                    while ($itemRow=mysqli_fetch_array($selectItemRows)) { ?>
                <tr>
                  <td><?php echo $itemRow['user_name']; ?></td>
                  <td><?php echo $itemRow['user_phone']; ?></td>
                  <td><?php echo $itemRow['user_pbcno']; ?></td>

                  <td><?php echo $itemRow['user_status']; ?></td>
                  <td><a href="https://api.whatsapp.com/send?phone=92<?php echo substr($itemRow['user_phone'],1,11); ?>&text=Hello Sir! We are From Legal Defense and want documents verification regarding your profile." class="btn btn-success">Send Request</a></td>
                  <td class="text-dark"><a href="../delete.php?L_id=<?php echo $itemRow['user_id']; ?>">Delete</a> 
                  <?php if($itemRow['user_status']=='Not Verified'): ?>
                  / <a href="verify.php?id=<?php echo $itemRow['user_id']; ?>">Verify</a>
                  <?php endif; ?>
                  </td>
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