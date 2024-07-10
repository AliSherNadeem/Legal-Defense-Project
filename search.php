<?php include('header.php');  ?>


<section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
        <div class="container">
        <div class="row">
        <div class="col-md-7">
        <h1 class="text-white font-weight-bold">Search</h1>
        <div class="custom-breadcrumbs">
        <a href="#">Home</a> <span class="mx-2 slash">/</span>
        <span class="text-white"><strong>Search</strong></span>
        </div>
        </div>
        </div>
        </div>
        </section>  



       <?php 
       if(isset($_POST['go'])){
       extract($_POST);
	//echo $desc;
	//echo $looking;
	//echo $city;
       $query=mysqli_query($conn, "SELECT * FROM users WHERE (user_type='L') AND (user_city='$city' AND expertise LIKE '%$expert%' AND user_court LIKE '%$court%')");

         if(mysqli_num_rows($query)>0){ ?>
         <section class="site-section">
         <div class="container">

         <div class="row mb-5 justify-content-center">
         <div class="col-md-7 text-center">
         <h2 class="section-title mb-2">You've Searched For Lawyer Expert in <?php echo $expert." From ".$city ; ?> </h2>
         </div>
         </div>
        
            <ul class="job-listings mb-5">
        	<?php while($row=mysqli_fetch_array($query)) { ?>
        		
        	
            <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
            <a href="profile.php?L_id=<?php echo $row['user_id']; ?>"></a>
            <div class="job-listing-logo">
             <img src="images/<?php echo $row['user_profile_image']; ?>" alt="<?php echo $row['user_name']; ?>" style="width:150%; max-height: 150px;">
            </div>

            <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
            <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
            <h2><?php echo $row['user_name']; ?></h2>
            <strong><?php echo $row['user_position']; ?></strong>
            </div>
            <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
            <span class="icon-room"></span> <?php echo $row['user_city']; ?>
            </div>
            <div class="job-listing-meta">
            <span class="<?php if($row['user_status']=='Verified'){ echo 'badge-success';}else{echo 'badge-danger';} ?> badge"><?php echo $row['user_status']; ?></span>
            </div>
            </div>
            
            </li>
          
            <?php } ?>
          
           </ul>
           </div>
           </section>

          <?php
          }else{
    	  ?>     

    <section class="site-section">
    <div class="container">

    <div class="row mb-5 justify-content-center">
    <div class="col-md-7 text-center">
    <h2 class="section-title mb-2">No Result Found</h2>
    </div>
    </div>
    </div>
    </section>


      <?php   }
      }else{   	?>     

    <section class="site-section">
      <div class="container">

      <div class="row mb-5 justify-content-center">
      <div class="col-md-7 text-center">
      <h2 class="section-title mb-2">Please fill the above form to find your perfect lawyer</h2>
      </div>
      </div>
      </div>
      </section>


    	 <?php
}
    include('footer.php');
?>



