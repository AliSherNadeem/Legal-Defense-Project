<?php 
  
  session_start();
  include('../db.php');

    extract($_POST);
if(isset($_POST['login'])){
    
    //echo $useremail;
    //echo $userpass;
    $query="SELECT * FROM admins WHERE email='$email' AND pass='$pass'" ;
    $run_query=mysqli_query($conn, $query);
    $row=mysqli_fetch_array($run_query);
    if(mysqli_num_rows($run_query)>0){
        if(isset($_SESSION['RequstedURI'])){
        header("location:".$_SESSION['RequstedURI']);
        $_SESSION['admin_loggedin']=$row["email"];
    }else{
            header("location:home.php");
        $_SESSION['admin_loggedin']=$row["email"];
        }

    }else{
        header("location:login.php?run=failed");
    }
}

?>



<!doctype html>
<html lang="en">
  <head>
    <title>Legal Defense &mdash; Find Your Perfect user</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="ftco-32x32.png">
    
    <link rel="stylesheet" href="../css/custom-bs.css">
    <link rel="stylesheet" href="../css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../css/bootstrap-select.min.css">
    <link rel="stylesheet" href="../fonts/icomoon/style.css">
    <link rel="stylesheet" href="../fonts/line-icons/style.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/animate.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="../css/style.css">    
    </head>
    <body>

                <section class="site-section">
                <div class="row mb-5">
            
                </div>
                <div class="row mb-5">
                <div class="col-md-3"></div>
                <div class="col-md-6 bg-light p-4 border rounded">
                <div>
                <h3 style="color: red;">Admin Panel Login</h3>
                <form action="login.php" method="POST" class="p-4 border rounded">
                <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                <label class="text-black" for="fname">Email</label>
                <input type="text" id="fname" name="email" class="form-control" placeholder="Email address">
                </div>
                </div>
                <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                <label class="text-black" for="fname">Password</label>
                <input type="password" name="pass" id="fname" class="form-control" placeholder="Password">
                </div>
                </div>
                <div class="form-group">
                <div class="col-md-12">
                <input type="submit" value="Log In" name="login" class="btn px-4 btn-primary btn-danger text-white">
                </div>
                </div>
                </form>
                </div>
                </div>
                <div class="col-md-3"></div>
                </div>
    </section>
   <!-- SCRIPTS -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/isotope.pkgd.min.js"></script>
    <script src="../js/stickyfill.min.js"></script>
    <script src="../js/jquery.fancybox.min.js"></script>
    <script src="../js/jquery.easing.1.3.js"></script>
    
    <script src="../js/jquery.waypoints.min.js"></script>
    <script src="../js/jquery.animateNumber.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    
    <script src="../js/bootstrap-select.min.js"></script>
    
    <script src="../js/custom.js"></script>

     
  </body>
  </html>