<?php  
 include('db.php');
  $email=$_SESSION['lawyeremail'];
  $sql= "SELECT * FROM lawyers WHERE lawyer_email='$email'";
  $run_sql=mysql_query($sql);
  $row=mysql_fetch_array($run_sql);
  

 ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Legal Defense &mdash; Find Your Perfect Lawyer</title>
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
              <li class="has-children">
                <a href="#">Pages</a>
                <ul class="dropdown">
                  <li><a href="blog.php">Blog</a></li>
                  <li><a href="#">Careers</a></li>
                  <li><a href="#">FAQs</a></li>
                </ul>
              </li>
              <li class="d-lg-none"><a href="join.php"><span class="mr-2">+</span> <?php echo $row['lawyer_name'] ?></a></li>
              <li class="d-lg-none"><a href="logout.php">LogOut</a></li>
            </ul>
          </nav>
          
          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
              <a href="profile.php" class="btn btn-outline-white border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-add"></span><?php echo $row['lawyer_name'] ?></a>
              <a href="logout.php" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>LogOut</a>
            </div>
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
          </div>

        </div>
      </div>
    </header>

