<?php 

include('header.php');
if(isset($_SESSION['admin_loggedin'])){
 ?>

     <h2 class="p-3 bg-light mb-2 text-center">Registered User Details</h2>
     <div class="row bg-info">
     <?php 
     $select_lawyers=mysqli_query($conn, "SELECT * FROM users WHERE user_type='L'");
     $count_lawyers=mysqli_num_rows($select_lawyers);

     $select_clients=mysqli_query($conn, "SELECT * FROM users WHERE user_type='C'");
     $count_clients=mysqli_num_rows($select_clients);
    
     $total_users=$count_clients+$count_lawyers;
      


      ?>


        	
        	  <div class="col-12  text-center p-4 bg-danger">
        		<h4 class="text-white">Overall Users</h4>
        		<h2 class="text-white"><?php echo $total_users; ?></h2>
        	  </div>
        	  <div class="col-12  text-center p-4 bg-info">
        		<h4 class="text-white">Lawyers</h4>
        		<h2 class="text-white"><?php echo $count_lawyers; ?></h2>
        	  </div>
        	  <div class="col-12  text-center p-4 bg-primary">
        		<h4 class="text-white">Clients</h4>
        		<h2 class="text-white"><?php echo $count_clients; ?></h2>
        	  </div>
               

          	</div>
            </div>
		        </div>

      <?php

     include"footer.php";
    
    }else{
	   header("location:login.php");
      }


      ?>
