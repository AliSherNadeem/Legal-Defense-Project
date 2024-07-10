<?php include('header.php'); ?>

<?php if(isset($_SESSION['useremail'])){
  header("location:index.php");}else{
 ?>
    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Register With Us</h1>
            <div class="custom-breadcrumbs">
              <a href="index.php">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Register</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section">
      <div class="container" style="margin-top:-5.3%;">
        <div class="row">

         <script>
         function myFunction() {
         alert("Successfully you have created your account");}
          </script>


    <!-- Lawyer SIGNUP SYSTEM -->          
          <div class="col-lg-6">
            <h2 class="mb-4 font-weight-bold text-danger">Register As Lawyer</h2>
      <form action="join.sub.php" method="POST" onsubmit="myFunction()" enctype="multipart/form-data" id="fname" class="p-4 border rounded" style="font-size: 1.1em;">

              <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Name</label>
                  <input type="text" id="fname" name="lawyername" required="" class="form-control" placeholder="Name">
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                <label for="fname" class="text-black">Pakistan-Bar-Council-No</label>
                  <input type="text" name="lawyerpbc" id="fname" placeholder="Bar council No" class="form-control" required="">
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Email</label>
                  <input type="email" id="fname" name="lawyeremail" class="form-control" placeholder="Email address">
                </div>
              </div>
               <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Password</label>
                  <input required="" type="password" name="lawyerpass" id="fname" class="form-control" placeholder="Password">
                </div>
              </div>


              <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Gender</label>
                  <select name="lawyergender" required="" id="fname" class="form-control">
                  <option disabled="" selected="">--Select Gender--</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  </select>
                </div>
              </div>


              <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Phone</label>
                  <input required="" type="text" name="lawyerphone" id="fname" class="form-control" placeholder="Phone">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">City</label>
                  <select required="" name="lawyercity" id="fname" class="form-control">
                    <option disabled="" selected="">--Select City--</option>
                    <option value="Islamabad">Islamabad</option>
                    <option value="Rawalpindi">Rawalpindi</option>
                    <option value="Rawalpindi">Karachi</option>
                    <option value="Rawalpindi">Lahore</option>
                    <option value="Rawalpindi">Multan</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Profesion</label>
                  <input type="text" required="" name="lawyerpro" id="fname" class="form-control" placeholder="Profesion">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Date of Birth</label>
                  <input type="date" required="" name="lawyerdob" id="fname" class="form-control">
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12">
                  <input type="submit" value="SIGNUP" name="lawyersignup" class="btn px-4 btn-primary btn-danger text-white">
                </div>
              </div>

            </form>
          </div>
    <!-- CLIENT SIGNUP SYSTEM -->
            <div class="col-lg-6">
            <h2 class="mb-4 font-weight-bold text-danger">Register As Client</h2>
    <form action="join.sub.php" method="POST" onsubmit="myFunction()" class="p-4 border rounded" style="font-size: 1.1em;">

              <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Name</label>
                  <input type="text" id="fname" name="clientname" class="form-control" placeholder="Name">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Email</label>
                  <input type="email" id="fname" name="clientemail" class="form-control" placeholder="Email address">
                </div>
              </div>
               <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Password</label>
                  <input type="password" name="clientpass" id="fname" class="form-control" placeholder="Password">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Gender</label>
                  <select name="clientgender" id="fname" class="form-control">
                  <option disabled="" selected="">--Select Gender--</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Phone</label>
                  <input type="text" name="clientphone" id="fname" class="form-control" placeholder="Phone">
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12">
                  <input type="submit" value="SIGNUP" name="clientsignup" class="btn px-4 btn-primary btn-danger text-white">
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </section>
    
<?php include('footer.php'); }?>