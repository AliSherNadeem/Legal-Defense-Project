<?php 
  
  session_start();
  include('db.php');
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
    
    <link rel="stylesheet" href="css/custom-bs.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/line-icons/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">  
  </head>
  <body id="top">

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
    <div class="site-mobile-menu-close mt-3">
    <span class="icon-close2 js-menu-toggle"></span>
    </div>
    </div>
    <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    



<?php if(isset($_SESSION['useremail'])){
  $email=$_SESSION['useremail'];
  $sql= "SELECT * FROM users WHERE user_email='$email'";
  $run_sql=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($run_sql);
?>

    <!-- NAVBAR -->
    <header class="site-navbar mt-3">
    <div class="container-fluid">
    <div class="row align-items-center">
    <div class="site-logo col-6"><a href="index.php" class="font-weight-bold"style="font-family:serif; font-size:1.6em;">Legal Defense</a></div>

    <nav class="mx-auto site-navigation">
    <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
    <li><a href="index.php" class="nav-link active">Home</a></li>
    <li><a href="precedence.php">Precedence</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li class="has-children"><a href="gallery.php">Pages</a>
    <ul class="dropdown">
    <li><a href="blog.php">Blog</a></li>
    <li><a href="#">Careers</a></li>
    <li><a href="#">FAQs</a></li></ul>
    </li>

    <li class="d-lg-none nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo $row['user_name'] ?></a>
    <div class="dropdown-menu dropdown-menu-right">
    <a href="#" class="dropdown-item">Reports</a>
    <a href="#" class="dropdown-item">Settings</a>
    <div class="dropdown-divider"></div>
    <a href="logout.php"class="dropdown-item">Logout</a>
    </div>
    </li>
    </ul>
    </nav>
          

      <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
      <ul class="nav navbar-nav ml-auto">
      <li class="nav-item dropdown">
      <a href="#" class="nav-link dropdown-toggle text-white d-none d-lg-inline-block" data-toggle="dropdown"><?php echo $row['user_name'] ?></a>
      <div class="dropdown-menu dropdown-menu-right">
        <a href="profile.php?<?php echo $row['user_type']; ?>_id=<?php echo $row['user_id']; ?>" class="dropdown-item">My Profile</a>
      <a href="messages.php" class="dropdown-item">Messages</a>
      <?php if($row['user_type']==="L"){ ?>
      <a href="#" class="dropdown-item">Portfolio</a>
            <?php } ?>
      <div class="dropdown-divider"></div>
      <a href="logout.php"class="dropdown-item">Logout</a>
      </div>
      </li>
      </ul>
      <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
      </div>
      </div>
      </div>
      </header>

     <?php
     }else{

      ?>



    <!-- NAVBAR -->
    <header class="site-navbar mt-3">
    <div class="container-fluid">
    <div class="row align-items-center">
    <div class="site-logo col-6"><a href="index.php" class="font-weight-bold" style="font-family:serif; font-size:1.6em;">Legal Defense</a></div>

    <nav class="mx-auto site-navigation">
    <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
    <li><a href="index.php" class="nav-link active">Home</a></li>
    <li><a href="precedence.php">Precedence</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li class="has-children"><a href="gallery.php">Pages</a>
    <ul class="dropdown">
    <li><a href="blog.php">Blog</a></li>
    <li><a href="#">Careers</a></li>
    <li><a href="#">FAQs</a></li>
    </ul>
    </li>
       <li class="d-lg-none"><a href="join.php"><span class="mr-2">+</span> Join</a></li>
       <li class="d-lg-none"><a href="login.php">Log In</a></li>
       </ul>
       </nav>
          
      <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
      <div class="ml-auto">
      <a href="join.php" class="btn btn-outline-white border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-add"></span>Join</a>
      <a href="login.php" class="btn btn-primary btn-danger border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log In</a>
      </div>
      <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
      </div>

      </div>
      </div>
      </header>
    


<?php
}

?>