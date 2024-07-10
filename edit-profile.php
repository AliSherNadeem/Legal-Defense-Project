
<?php
  include('header.php');
if(isset($_SESSION['lawyeremail'])){
  $email=$_SESSION['lawyeremail'];
  $sql= "SELECT * FROM lawyers WHERE lawyer_email='$email'";
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
              <a href="#">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong><?php echo $row['lawyer_name']; ?></strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section">
      <div class="container">
        <div class="row">     
          <div class="col-12">
            <form action="update.php" method="POST" enctype="multipart/form-data" class="p-4 border rounded">
			<div class="row">     
         	 <div class="col-lg-6">
              <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Name</label>
                  <input type="text" id="fname" value="<?php echo $row['lawyer_name']; ?>" name="lawyername" required="" class="form-control" placeholder="Name">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Email</label>
                  <input disabled="" type="email" id="fname" value="<?php echo $row['lawyer_email']; ?>" name="lawyeremail" class="form-control" placeholder="Email address">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Gender</label>
                  <select name="lawyergender" value="<?php echo $row['lawyer_gender']; ?>" required="" id="fname" class="form-control">
                  <option selected="" value="<?php echo $row['lawyer_gender']; ?>"><?php echo $row['lawyer_gender']; ?></option>
                  <option value="<?php if($row['lawyer_gender']="Male"){ echo "Female"; }else{ echo "Male"; } ?>"><?php if($row['lawyer_gender']="Male"){ echo "Female"; }else{ echo "Male"; } ?></option>
              	  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Date of Birth</label>
                  <input type="date" required="" name="lawyerdob" id="fname" value="<?php echo $row['lawyer_dob']; ?>" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Phone</label>
                  <input required="" type="text" name="lawyerphone" id="fname" class="form-control" value="<?php echo $row['lawyer_phone']; ?>" placeholder="Phone">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">City</label>
                  <select required="" name="lawyercity" id="fname" class="form-control">
                  	<option selected="" value="<?php echo $row['lawyer_city']; ?>"><?php echo $row['lawyer_city']; ?></option>
                  	<option value="<?php if($row['lawyer_city']="Islamabad"){ echo "Rawalpindi"; }else{ echo "Islamabad"; } ?>"><?php if($row['lawyer_city']="Islamabad"){ echo "Rawalpindi"; }else{ echo "Islamabad"; } ?></option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Profesion</label>
                  <input type="text" required="" name="lawyerpro" value="<?php echo $row['lawyer_position']; ?>" id="fname" class="form-control" placeholder="Profesion">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Overview</label>
                  <textarea cols="250" rows="8" value="<?php echo $row['lawyer_description']; ?>" required="" name="overview" id="fname" class="form-control" ></textarea>
                </div>
              </div>
          	</div>

			<div class="col-lg-6">
              <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Total Cases</label>
                  <input type="text" id="fname" name="tcases" value="<?php echo $row['lawyer_total_cases']; ?>" required="" class="form-control" placeholder="Name">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Number Of Won Cases</label>
                  <input type="text" id="fname" name="wcases" value="<?php echo $row['lawyer_won_cases']; ?>" class="form-control" placeholder="Won Cases">
                </div>
              </div>
               <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Number Of Lost Cases</label>
                  <input required="" type="text" name="lcases" value="<?php echo $row['lawyer_lost_cases']; ?>" id="fname" class="form-control" placeholder="Lost Cases">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Working Area</label>
                  <select required="" name="court" id="fname" class="form-control">
                    <?php if($row['lawyer_court']==""){ ?>
                  	<option disabled="" selected="">--Select Court--</option>
                    <option value="ISB High Court">ISB High Court</option>
                  <?php }else{ ?>
                    <option value="<?php echo $row['lawyer_court']; ?>"><?php echo $row['lawyer_court']; ?></option>
                   <?php } ?>
                  	<option value="<?php if($row['lawyer_court']="ISB High Court"){ echo "Supreme Court"; }else{ echo "ISB High Court"; } ?>"><?php if($row['lawyer_court']="ISB High Court"){ echo "Supreme Court"; }else{ echo "ISB High Court"; } ?></option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Education</label>
                  <input type="text" required="" name="education" id="fname" class="form-control" placeholder="Profesion">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">University</label>
                  <input type="text" required="" name="uni" id="fname" class="form-control" placeholder="University">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Expertise</label>
                  <input type="text" required="" name="expertise" id="fname" class="form-control" placeholder="Write your Expertise e.g Divorce,Murder">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Profile Pic (Recomended Size is 250x250)</label>
                  <input type="file" required="" name="profile-pic" id="fname" class="form-control">
                </div>
              </div>
          	</div>

      		</div>
      		<div class="row p-3 mb-4">
              <div class="col-12">
                <button name="update" class="btn btn-block btn-primary btn-danger btn-md">Update Profile</button>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </section>

<?php
}else{header('location:login.php');}
  include('footer.php');
 ?>    