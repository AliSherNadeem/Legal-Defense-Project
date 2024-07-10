<?php include('header.php'); ?>
<?php include('db.php'); 
if(isset($_SESSION['useremail'])){
  header("location:index.php");
}else{
?>

    <!-- HOME -->
  <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Login Here</h1>
            <div class="custom-breadcrumbs">
              <a href="#">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Log In</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section">
      <div class="container" style="margin-top:-5.5%;">
        <div class="row">
          
          <div class="col-lg-6">
            <h2 class="mb-4 font-weight-bold text-danger">Log In As Lawyer</h2>
            <form action="login.sub.php" method="POST" class="p-4 border rounded">
              <div>
                  <?php
                  if(isset($_GET['login']) && $_GET['login']=='failed'){
                    echo "<p style='color:red;'>Email or Password is Incorrect</p>";
                  }
                 
                  
                ?>

              </div>
              <div class="form-group">
              <div class="col-md-12 mb-3 mb-md-0">
              <label class="text-black" for="fname">Email</label>
              <input type="text" id="fname" name="lawyeremail" class="form-control" placeholder="Email address">
              </div>
              </div>
              <div class="form-group">
              <div class="col-md-12 mb-3 mb-md-0">
              <label class="text-black" for="fname">Password</label>
              <input type="password" name="lawyerpass" id="fname" class="form-control" placeholder="Password">
              </div>
              </div>
              <div class="form-group">
              <div class="col-md-12">
              <input type="submit" value="Log In" name="lawyerlogin" class="btn px-4 btn-primary btn-danger text-white">
              </div>
              </div>
              <div class="form-group">
              <div class="col-md-12">
              <a href="forgot.php" style="text-decoration: none; color: black;">Forgot Password</a>
              </div>
              </div>
              
            </form>
          </div>



          <div class="col-lg-6">
          <h2 class="mb-4 font-weight-bold text-danger">Log In As Client</h2>
          <form action="login.sub.php" method="POST" class="p-4 border rounded">
          <div>
                <?php 
                  if(isset($_GET['incorrect'])){
                    echo "<p style='color:red;'>Email or Password is Incorrect</p>";
                  }

                ?>

              </div>

              <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Email</label>
                  <input type="text" id="fname" name="clientemail" class="form-control" placeholder="Email address">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Password</label>
                  <input type="password" id="fname" name="clientpass" class="form-control" placeholder="Password">
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12">
                  <input type="submit" value="Log In" name="clientlogin" class="btn px-4 btn-primary btn-danger text-white">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <a href="forgot.php" style="text-decoration: none; color: black;">Forgot Password</a>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </section>
<?php include('footer.php');} ?>