<?php include('header.php'); ?>
<?php 
  
 if(isset($_GET['L_id'])){
  $id=$_GET['L_id']; 
  $query=mysqli_query($conn, "SELECT * FROM users WHERE user_id='$id' AND user_type='L'");
  $row=mysqli_fetch_array($query);
  $email=$row['user_email'];
?>


    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
      <div class="row">
      <div class="col-12">
        <div>
        <div class="border p-2 d-inline-block mr-3 rounded">
        <img src="images/<?php echo $row['user_profile_image']; ?>" alt="<?php echo $row['user_name']; ?>" title="<?php echo $row['user_name']; ?>" style="width: 150px; height:150px;">
          </div>
          <h3 class="text-white font-weight-bold"><?php echo $row['user_name']; ?></h3>
          </div>
          </div>
          </div>
          </div>
          </section>

    
    <section class="site-section">
    <div class="container">
    <div class="row">
    <div class="col-lg-4">
    <div class="row p-3 mb-4">
     <div class="col-12">
    <?php if(isset($_SESSION['useremail']) AND $_SESSION['useremail']==$email){ ?>
    <a href="update-profile.php" class="btn btn-block btn-primary btn-danger btn-md">Edit Profile</a>
    <?php }else{ ?>
    <a href="<?php if(isset($_SESSION['useremail'])){ echo "messages.php?u_id=".$id; }else{ echo "#alert"; } ?>"<?php if(!isset($_SESSION['useremail'])){ echo "data-toggle='modal'"; } ?> class="btn btn-block btn-primary btn-danger btn-md">Chat Now</a>
        <?php } ?>
        </div>
        </div>


                <div class="bg-light p-3 border rounded mb-4">
                <h3 class="text-danger mt-3 h5 pl-3 mb-3 ">About</h3>
                <ul class="list-unstyled pl-3 mb-0">
                <li class="mb-2"><strong class="text-black">From:</strong> <?php echo $row['user_city']; ?></li>
                <li class="mb-2"><strong class="text-black">Gender:</strong> <?php echo $row['user_gender']; ?></li>
                <li class="mb-2"><strong class="text-black">Works at:</strong> <?php echo $row['user_court']; ?></li>
                <li class="mb-2"><strong class="text-black">Education:</strong> <?php echo $row['user_degree']; ?></li>
                <li class="mb-2"><strong class="text-black">Total Cases:</strong> <?php echo $row['user_total_cases']; ?></li>
                <li class="mb-2"><strong class="text-black">Won:</strong> <?php echo $row['user_won_cases']; ?></li>
                <li class="mb-2"><strong class="text-black">Beaten:</strong> <?php echo $row['user_lost_cases']; ?></li>
                </ul>
                </div>

                <div class="bg-light p-3 border rounded mb-4">
                <h3 class="text-danger  mt-3 h5 pl-3 mb-3">Share</h3>
                <div class="px-3">
  <a href="#" class="pt-3 pb-3 pr-3 pl-0 text-danger "><span class="icon-facebook"></span></a>
  <a href="#" class="pt-3 pb-3 pr-3 pl-0 text-danger"><span class="icon-twitter"></span></a>
  <a href="#" class="pt-3 pb-3 pr-3 pl-0 text-danger"><span class="icon-linkedin"></span></a>
  <a href="#" class="pt-3 pb-3 pr-3 pl-0 text-danger"><span class="icon-pinterest"></span></a>
      </div>
      </div>
      <div class="row p-3 mb-4">
  <a href="portfolio.php?L_id=<?php echo $id?>" class="btn btn-block btn-primary btn-danger btn-md">View Portfolio</a>
  </div>
  </div>
  <div class="col-lg-8">
  <div class="mb-5">
  <h3 class="h5 d-flex align-items-center mb-4 text-danger"><span class="icon-align-left mr-3"></span>Overview</h3>
  <p><?php echo $row['user_description']; ?></p>
  </div>
            
        <div class="mb-5">
    <h3 class="h5 d-flex align-items-center mb-4 text-danger"><span class="icon-book mr-3"></span>Education + Experience</h3>
    <ul class="list-unstyled pl-3 mb-0">
    <li class="mb-2"><strong class="text-black">Education:</strong> <?php echo $row['user_degree']; ?></li>
    <li class="mb-2"><strong class="text-black">University:</strong> <?php echo $row['user_uni']; ?></li>
    <li class="mb-2"><strong class="text-black">Pakistan-bar-council-number:</strong> <?php echo $row['user_pbcno']; ?></li>

      <li class="mb-2"><strong class="text-black">Profession:</strong> <?php echo $row['user_position']; ?></li>
      <li class="mb-2"><strong class="text-black">Expertise:</strong> <?php echo $row['expertise']; ?></li>
      <li class="mb-2"><strong class="text-black">Works at:</strong> <?php echo $row['user_court']; ?></li>
      <li class="mb-2"><strong class="text-black">Total Cases:</strong> <?php echo $row['user_total_cases']; ?></li>
      <li class="mb-2"><strong class="text-black">Won:</strong> <?php echo $row['user_won_cases']; ?></li>
      <li class="mb-2"><strong class="text-black">Lost:</strong> <?php echo $row['user_lost_cases']; ?></li>
      </ul>
      </div>

  <div class="mb-5">
  <h3 class="h5 d-flex align-items-center mb-4 text-danger"><span class="icon-turned_in mr-3"></span>Contact and Address</h3>
  <ul class="list-unstyled m-0 p-0">
  <li class="mb-2"><strong class="text-black">City:</strong> <?php echo $row['user_city']; ?></li>
  <li class="mb-2"><strong class="text-black">Phone:</strong> <?php echo $row['user_phone']; ?></li>
    </ul>
    </div>

    </div>
    </div>
    </div>
    </section>



<!-- Security And Login Popup-->
<div class="modal fade" id="alert" role="dialog">
    <div class="modal-dialog">
    
      <!--Security And Login Form-->
      <div class="modal-content">
        <div class="modal-header">
          <h4>Legal Defense</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
         <b>Please Login First to start a Chat <a href="login.php">Click Here</a></b>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<section class="bg-light pt-5 testimony-full">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
                <h2 class="section-title mb-2">Reviews About <?php echo $row['user_name']; ?></h2>
            </div>
        </div>
        
        <?php
        $lawyer_feedback=mysqli_query($conn, "SELECT * FROM reviews WHERE lawyer_id='$id'");
        if(mysqli_num_rows($lawyer_feedback)>0):
        ?>
        
        <div class="owl-carousel single-carousel">
        <?php while($fback_row=mysqli_fetch_array($lawyer_feedback)): ?>
          
          <div class="container">
            <div class="row">
              <div class="col-lg-6 align-self-center text-center text-lg-left">
                <blockquote>
                  <p>&ldquo;<?php echo $fback_row['feedback']; ?>.&rdquo;</p>
                  <p><cite> &mdash; <?php echo $fback_row['user_name']; ?></cite></p>
                </blockquote>
              </div>
              <div class="col-lg-6 align-self-end text-center text-lg-right">
                <img src="images/<?php echo $fback_row['user_image']; ?>" alt="<?php echo $fback_row['user_name']; ?>" class="img-fluid mb-0">
              </div>
            </div>
          </div>
          
          <?php endwhile; ?>

      </div>
<?php 
else:
?>
        <div class="row justify-content-center">
            <div class="col-md-7 text-center">
                <h4 class=""><?php echo $row['user_name']; ?> don't have any feedback yet</h4>
            </div>
        </div>
<?php
endif; ?>
    </section>
    
    <section class="pt-5 testimony-full">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
                <h2 class="section-title mb-2">Leave Review</h2>
            </div>
        </div>
        
        <div class="row mb-5 justify-content-center">
            <div class="col-md-7">
                <div>
                <form method="POST" class="p-4 border rounded">
                    <div class="form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                          <label class="text-black" for="fname">Feedback</label>
                          <textarea type="text" id="fname" name="feedback" class="form-control" placeholder="Feedback"></textarea>
                        </div>
                     </div>
                      <div class="form-group">
                        <div class="col-md-12">
                          <input type="submit" value="SUBMIT" name="review" class="btn px-4 btn-primary btn-danger text-white">
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </section>
<?php 
if(isset($_POST['review'])){
    if(isset($_SESSION['useremail'])){
        $eml=$_SESSION['useremail'];
        $user_data=mysqli_query($conn, "SELECT * FROM users WHERE user_email='$eml'");
        if(mysqli_num_rows($user_data)>0){
            $usr_row=mysqli_fetch_array($user_data);
            if($usr_row['user_type']=='C'){
                $usr_id=$usr_row['user_id'];
                $usr_name=$usr_row['user_name'];
                $usr_dp=$usr_row['user_profile_image'];
                $feedback=$_POST['feedback'];
                    $checkreview=mysqli_query($conn, "SELECT * FROM reviews WHERE user_id='$usr_id' AND lawyer_id='$id'");
                    if(mysqli_num_rows($checkreview)>0){
                        echo "<script>alert('You have already a feedback about this lawyer')</script>";
                    }else{
                $insert=mysqli_query($conn, "INSERT INTO reviews(user_id,user_name,user_image,feedback,lawyer_id) VALUES('$usr_id','$usr_name','$usr_dp','$feedback','$id')");
                if($insert){
                    echo "<script>alert('Review Added Successfully!')</script>";
                } }
            }else{
                echo "<script>alert('Sorry! Only clients can leave a review.')</script>";    
            }
    } } else{
        echo "<script>alert('You are not logged in please login first.')</script>";
    }
}
?>  





 
<?php }  ?>

 <?php 
  
 if(isset($_GET['C_id'])){
  $id=$_GET['C_id']; 
  $query=mysqli_query($conn, "SELECT * FROM users WHERE user_id='$id' AND user_type='C'");
  $row=mysqli_fetch_array($query);
  $email=$row['user_email'];
?>

 <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
      <div class="row">
      <div class="col-12">
        <div>
        <div class="border p-2 d-inline-block mr-3 rounded">
        <img src="images/<?php echo $row['user_profile_image']; ?>" alt="<?php echo $row['user_name']; ?>" title="<?php echo $row['user_name']; ?>" style="width: 150px; height:150px;">
          </div>
          <h3 class="text-white font-weight-bold"><?php echo $row['user_name']; ?></h3>
          </div>
          </div>
          </div>
          </div>
          </section>

  

<?php if(isset($_SESSION['useremail']) AND $_SESSION['useremail']==$email){ ?>
<section class="site-section">
  <div class="container">
    
  <div class="row">

     <div class="col-7">
            <div class="bg-light p-3 border rounded mb-4">
              <h3 class="text-primary text-danger text-center font-weight-bold mt-3 h5 pl-3 mb-3">Personal Information</h3>
              <ul class="list-unstyled pl-3 mb-0">
                <li class="mb-2"><strong class="text-black">Name:</strong> <?php echo $row['user_name']; ?></li>
                <li class="mb-2"><strong class="text-black">Gender:</strong> <?php echo $row['user_gender']; ?></li>
                <li class="mb-2"><strong class="text-black">Phone:</strong> <?php echo $row['user_phone']; ?></li>
                <li class="mb-2"><button type="button" class="btn btn-block btn-primary btn-danger btn-md" data-toggle="modal" data-target="#pInfo">Edit</button></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </section>

<!--- Pop up form---->

  <div class="modal fade" id="pInfo" role="dialog">
    <div class="modal-dialog">

      <!---popup starting---->
      <div class="modal-content">
        <div class="modal-header">
          <h4>Personal information</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
          <div class="modal-body">
    <form action="update.php?email=<?php echo $email?>" method="POST" enctype="multipart/form-data" class="p-4 border rounded">
    <div class="row">
  <div class="col-12">
    <div class="form-group">
      <div class="col-md-12 mb-3 mb-md-0">
        <label class="text-black" for="fname">Name:</label>
        <input type="text" value="<?php echo $row['user_name'];?>" name="name" placeholder="Name" required="" id="fname" class="form-control">
        </div>
      </div>


      <div class="form-group">
    <div class="col-md-12 mb-3 mb-md-0">
    <label class="text-black" for="fname">Gender</label>
    <select name="gender" required="" id="fname" class="form-control">
    <option selected="" value="<?php echo $row['user_gender']; ?>"><?php echo $row['user_gender']; ?></option>
    <option value="<?php if($row['user_gender']=="Male"){ echo "Female"; }else{ echo "Male"; } ?>"><?php if($row['user_gender']=="Male"){ echo "Female"; }else{ echo "Male"; } ?></option>
    </select>
    </div>
    </div>


    <div class="form-group">
      <div class="col-md-12 mb-3 mb-md-0">
        <label class="text-black" for="fname">Phone:</label>
    <input type="text" value="<?php echo $row['user_phone'];?>" name="phone" placeholder="Phone" required="" id="fname" class="form-control">
      </div>
      </div>

       <div class="row p-3 mb-4">
       <div class="col-12">
       <button name="cpInfo" class="btn btn-block btn-primary btn-danger btn-md">Update</button>
          </div>
          </div>
          </div>
          </div>
          </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             </div>
             </div>
      
             </div>
             </div>

<?php }else{ ?>

    <section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="bg-light p-3 border rounded mb-4">
              <h3 class="text-primary   mt-3 h5 pl-3 mb-3 ">Personal Information</h3>
              <ul class="list-unstyled pl-3 mb-0">
                <li class="mb-2"><strong class="text-black">Name:</strong> <?php echo $row['user_name']; ?></li>
                <li class="mb-2"><strong class="text-black">Gender:</strong> <?php echo $row['user_gender']; ?></li>
                <li class="mb-2"><strong class="text-black">Phone:</strong> <?php echo $row['user_phone']; ?></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php  } include('footer.php');  } ?>
