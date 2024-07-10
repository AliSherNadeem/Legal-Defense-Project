
<?php
  include('header.php');
if(isset($_SESSION['useremail'])){
  $email=$_SESSION['useremail'];
  $sql= "SELECT * FROM users WHERE user_email='$email'";
  $run_sql=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($run_sql);
 ?>
    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
            <div class="container">
            <div class="row">
            <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Profile Settings</h1>
            <div class="custom-breadcrumbs">
            <a href="index.php">Home</a> <span class="mx-2 slash">/</span>
            <span class="text-white"><strong><?php echo $row['user_name']; ?></strong></span>
            </div>
            </div>
            </div>
            </div>
            </section>


            <section class="site-section">
            <div class="container">
            <div class="row">
            <div class="col-6">
            <div class="bg-light p-3 border rounded mb-4">
            <h3 class="text-danger text-center  mt-3  pl-3 mb-3 ">Personal Information</h3>
            <ul class="list-unstyled pl-3 mb-0">
            <li class="mb-2"><strong class="text-black">Name:</strong> <?php echo $row['user_name']; ?></li>
   <li class="mb-2"><strong class="text-black">Gender:</strong> <?php echo $row['user_gender']; ?></li>
            <li class="mb-2"><strong class="text-black">Date of Birth:</strong> <?php echo $row['user_dob']; ?></li>
            <li class="mb-2"><strong class="text-black">Pakistan-Bar-Council-No:</strong> <?php echo $row['user_pbcno']; ?></li>
            <li class="mb-2"><strong class="text-black">Profession:</strong> <?php echo $row['user_position']; ?></li>
            <li class="mb-2"><strong class="text-black">Expertise:</strong> <?php echo $row['expertise']; ?></li>
            <li class="mb-2"><strong class="text-black">Overview:</strong> <?php echo $row['user_description']; ?></li>
            <li class="mb-2"><button type="button" class="btn btn-block btn-primary btn-danger btn-md" data-toggle="modal" data-target="#pInfo">Edit</button></li>
            </ul>
            </div>
            </div>


               <div class="col-6">
               <div class="bg-light p-3 border rounded mb-4">
                <h3 class="text-danger text-center mt-3 pl-3 mb-3 ">Education and Experiences</h3>
               <ul class="list-unstyled pl-3 mb-0">
                <li class="mb-2"><strong class="text-black">Education:</strong> <?php echo $row['user_degree']; ?></li>
                <li class="mb-2"><strong class="text-black">University:</strong> <?php echo $row['user_uni']; ?></li>
                <li class="mb-2"><strong class="text-black">Works at:</strong> <?php echo $row['user_court']; ?></li>
                <li class="mb-2"><strong class="text-black">Total Cases:</strong> <?php echo $row['user_total_cases']; ?></li>
                <li class="mb-2"><strong class="text-black">Won:</strong> <?php echo $row['user_won_cases']; ?></li>
                <li class="mb-2"><strong class="text-black">Lost:</strong> <?php echo $row['user_lost_cases']; ?></li>
                <br>
                <li class="mb-2"><button type="button" class="btn btn-block btn-primary btn-danger btn-md" data-toggle="modal" data-target="#EE">Edit</button></li>
                 </ul>
                 </div>
                 </div>
                 </div>



            <div class="row">
            <div class="col-6">
            <div class="bg-light p-3 border rounded mb-4">
            <h3 class="text-danger text-center  mt-3 pl-3 mb-3 ">Contact and Address</h3>
            <ul class="list-unstyled pl-3 mb-0">
            <li class="mb-2"><strong class="text-black">City:</strong> <?php echo $row['user_city']; ?></li>
            <li class="mb-2"><strong class="text-black">Phone:</strong> <?php echo $row['user_phone']; ?></li>
            <li class="mb-2"><button type="button" class="btn btn-block btn-primary btn-danger btn-md" data-toggle="modal" data-target="#CA">Edit</button></li>
            </ul>
            </div>
            </div>

            <div class="col-6">
            <div class="bg-light p-3 border rounded mb-4">
            <h3 class="text-danger text-center  mt-3  pl-3 mb-3 ">Login and Security</h3>
            <ul class="list-unstyled pl-3 mb-0">
            <li class="mb-2"><strong class="text-black">Email:</strong> <?php echo $row['user_email']; ?></li>
            <li class="mb-2"><strong class="text-black">Password:</strong>********</li>
            <li class="mb-2"><button type="button" class="btn btn-block btn-primary btn-danger btn-md" data-toggle="modal" data-target="#SL">Edit</button></li>
            </ul>
            </div>
            </div>
            </div>

           </div>
           </section>




<!-- Personal Info Popup-->
  <div class="modal fade" id="pInfo" role="dialog">
  <div class="modal-dialog">
    
      <!-- Personal Info Form-->
  <div class="modal-content">
  <div class="modal-header">
  <h4 class="text-danger text-center">Personal Information</h4>
  <button type="button" class="close" data-dismiss="modal">&times;</button>
  </div>
  <div class="modal-body">
  <form action="update.php?email=<?php echo $email?>" method="POST" enctype="multipart/form-data" class="p-4 border rounded">
  <div class="row">
  <div class="col-12">

  <div class="form-group">
  <div class="col-md-12 mb-3 mb-md-0">
  <label class="text-black" for="fname">Name</label>
  <input type="text" id="fname" value="<?php echo $row['user_name']; ?>" name="name" required="" class="form-control" placeholder="Name">
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
  <label class="text-black" for="fname">Date of Birth</label>
  <input type="date" required="" name="dob" id="fname" value="<?php echo $row['user_dob']; ?>" class="form-control">
  </div>
  </div>


  <div class="form-group">
  <div class="col-md-12 mb-3 mb-md-0">
  <label class="text-black" for="fname">Pakistan-Bar-Council-No</label>
  <input type="text" required="" name="lawyerpbc" id="fname" value="<?php echo $row['user_pbcno']; ?>" class="form-control">
  </div>
  </div>

 <div class="form-group">
 <div class="col-md-12 mb-3 mb-md-0">
 <label class="text-black" for="fname">Profesion</label>
 <input type="text" required="" name="lawyerpro" value="<?php echo $row['user_position']; ?>" id="fname" class="form-control" placeholder="Profesion">
 </div>
 </div>


 <div class="form-group">
 <div class="col-md-12 mb-3 mb-md-0">
 <label class="text-black" for="fname">Expertise</label>
 <input type="text" required="" name="expertise" value="<?php echo $row['expertise']; ?>" id="fname" class="form-control" placeholder="Write your Expertise e.g Divorce,Murder">
 </div>
 </div>


  <div class="form-group">
  <div class="col-md-12 mb-3 mb-md-0">
  <label class="text-black" for="fname">Overview</label>
  <textarea cols="250" rows="8" required="" name="overview" id="fname" class="form-control" ><?php echo $row['user_description']; ?></textarea>
  </div>
  </div>
  <div class="row p-3 mb-4">
  <div class="col-12">
  <button name="pInfo" class="btn btn-block btn-primary btn-danger btn-md">Update</button>
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



<!-- Education & Experience Popup-->
    <div class="modal fade" id="EE" role="dialog">
    <div class="modal-dialog">
    
      <!-- Education & Experience Form-->
      <div class="modal-content">
      <div class="modal-header">
      <h4 class="text-danger text-center">Education & Experience</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      <form action="update.php?email=<?php echo $email?>" method="POST" enctype="multipart/form-data" class="p-4 border rounded">
      <div class="row">
      <div class="col-12">


      <div class="form-group">
      <div class="col-md-12 mb-3 mb-md-0">
      <label class="text-black" for="fname">Education</label>
      <input type="text" required="" value="<?php echo $row['user_degree']; ?>" name="education" id="fname" class="form-control" placeholder="Education">
      </div>
      </div>


      <div class="form-group">
      <div class="col-md-12 mb-3 mb-md-0">
      <label class="text-black" for="fname">University</label>
      <input type="text" required="" name="uni" value="<?php echo $row['user_uni']; ?>" id="fname" class="form-control" placeholder="University">
      </div>
      </div>
           

      <div class="form-group">
      <div class="col-md-12 mb-3 mb-md-0">
      <label class="text-black" for="fname">Working Area</label>
      <select required="" name="court" id="fname" class="form-control">
      <?php if($row['user_court']==""){ ?>
      <option disabled="" selected="">--Select Court--</option>
      <option value="ISB High Court">ISB High Court</option>
      <?php }else{ ?>
       <option value="<?php echo $row['user_court']; ?>"><?php echo $row['user_court']; ?></option>
        <?php } ?>
        <option value="<?php if($row['user_court']="ISB High Court"){ echo "Supreme Court"; }else{ echo "Session Court"; } ?>">
        <?php if($row['user_court']="ISB High Court"){ echo "Supreme Court"; }else{ echo "Session Court"; } ?></option>
        <option value="<?php if($row['user_court']="Supreme Court"){ echo "Session Court"; }else{ echo "ISB High Court"; } ?>">
        <?php if($row['user_court']="Supreme Court"){ echo "Session Court"; }else{ echo "ISB High Court"; } ?></option>

        </select>
        </div>
        </div>

       <div class="form-group">
       <div class="col-md-12 mb-3 mb-md-0">
       <label class="text-black" for="fname">Total Cases</label>
       <input type="text" id="fname" name="tcases" value="<?php echo $row['user_total_cases']; ?>" required="" class="form-control" placeholder="Name">
        </div>
        </div>


        <div class="form-group">
        <div class="col-md-12 mb-3 mb-md-0">
        <label class="text-black" for="fname">Number Of Won Cases</label>
        <input type="text" id="fname" name="wcases" value="<?php echo $row['user_won_cases']; ?>" class="form-control" placeholder="Won Cases">
        </div>
        </div>


        <div class="form-group">
        <div class="col-md-12 mb-3 mb-md-0">
        <label class="text-black" for="fname">Number Of Lost Cases</label>
        <input required="" type="text" name="lcases" value="<?php echo $row['user_lost_cases']; ?>" id="fname" class="form-control" placeholder="Lost Cases">
        </div>
        </div>
        <div class="row p-3 mb-4">
        <div class="col-12">
        <button name="EE" class="btn btn-block btn-primary btn-danger btn-md">Update</button>
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

<!-- Contact and Address Popup-->
     <div class="modal fade" id="CA" role="dialog">
     <div class="modal-dialog">
    
      <!--Contact and Address Form-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="text-danger text-center">Education & Experience</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="update.php?email=<?php echo $email?>" method="POST" enctype="multipart/form-data" class="p-4 border rounded">
            <div class="row">
             <div class="col-12">
              <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">City</label>
                  <select required="" name="lawyercity" id="fname" class="form-control">
                    <option selected="" value="<?php echo $row['user_city']; ?>"><?php echo $row['user_city']; ?></option>
                    <option value="<?php if($row['user_city']=="Islamabad"){ echo "Rawalpindi"; }else{ echo "Islamabad"; } ?>"><?php if($row['user_city']=="Islamabad"){ echo "Rawalpindi"; }else{ echo "Islamabad"; } ?></option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Phone</label>
                  <input required="" type="text" name="lawyerphone" id="fname" class="form-control" value="<?php echo $row['user_phone']; ?>" placeholder="Phone">
                </div>
              </div>
              <div class="row p-3 mb-4">
                <div class="col-12">
                  <button name="CA" class="btn btn-block btn-primary  btn-danger btn-md">Update</button>
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


<!-- Security And Login Popup-->
    <div class="modal fade" id="SL" role="dialog">
    <div class="modal-dialog">
    
      <!--Security And Login Form-->
    <div class="modal-content">
    <div class="modal-header">
    <h4 class="text-danger text-center">Security And Login</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
    <form action="update.php?email=<?php echo $email?>" method="POST" enctype="multipart/form-data" class="p-4 border rounded">
    <div class="row">
    <div class="col-12">
    <div class="form-group">
    <div class="col-md-12 mb-3 mb-md-0">
    <label class="text-black" for="fname">Email</label>
    <input type="Email" disabled="" id="fname" name="lawyeremail" value="<?php echo $row['user_email']; ?>" class="form-control" placeholder="Eamil">
    </div>
    </div>


    <div class="form-group">
    <div class="col-md-12 mb-3 mb-md-0">
    <label class="text-black" for="fname">New Password</label>
    <input type="password" id="fname" name="pass"  class="form-control" placeholder="New Password">
    </div>
    </div>
    <div class="row p-3 mb-4">
    <div class="col-12">
    <button name="SL" class="btn btn-block btn-primary btn-md btn-danger">Update</button>
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


    <?php
}else{
      header('location:login.php');
      $_SESSION['RequstedURI']=$_SERVER['REQUEST_URI'];
}
  include('footer.php');
 ?>