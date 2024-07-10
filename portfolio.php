<?php include("header.php"); ?>


<?php
  // $id=$_GET['L_id'];
  $matchFound = (array_key_exists("id", $_GET));
  $id = $matchFound ? trim($_GET["id"]) : trim($_GET["L_id"]);
  $query=mysqli_query($conn, "SELECT * FROM users WHERE user_id='$id'");
  $row=mysqli_fetch_array($query);
  $email=$row['user_email'];

 ?>
    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold"><?php echo $row['user_name']; ?></h1>
            <div class="custom-breadcrumbs">
              <a href="#">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Portfolio</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php 

$select_item= mysqli_query($conn, "SELECT * FROM portfolio_items WHERE item_author_id='$id'");

if(isset($_SESSION['useremail']) AND $_SESSION['useremail']==$email){ ?>

    <section class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-8 text-center">
            <?php if(mysqli_num_rows($select_item)>0){ ?>
            <h2 class="section-title mb-2">Your Portfolio</h2>
            <?php }else{ ?>
              <h2 class="section-title mb-2">You don't have any portfolio yet.!</h2>
              <?php  }  ?>
          </div>
          <div class="col-4">
            <a href="update-portfolio.php" class="btn btn-block btn-primary btn-danger btn-md">Update Now</a>
          </div>
        </div>
        <div class="row mb-5">

<?php while($itemRow=mysqli_fetch_array($select_item)){ ?>

          <div class="col-md-6 col-lg-4 mb-5">
            <a href="#"><img src="images/<?php echo $itemRow['item_pics']; ?>" alt="<?php echo $itemRow['item_title']; ?>" class="img-fluid rounded mb-4"></a>
            <h3><a href="#" class="text-black"><?php echo $itemRow['item_title']; ?></a></h3>
            <div><?php echo $itemRow['item_date']; ?> <span class="mx-2">|</span> <a href="profile.php?L_id=<?php echo $itemRow['item_author_id']; ?>"><?php echo $itemRow['item_author_name']; ?></a></div>
          </div>

<?php } ?>

        </div>

      </div>
    </section>

<?php }else{ ?>    

    <section class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-12 text-center">
            <?php if(mysqli_num_rows($select_item)>0){ ?>
            <h2 class="section-title mb-2"><?php echo $row['user_name']; ?>'s Portfolio</h2>
            <?php }else{ ?>
              <h2 class="section-title mb-2"><?php echo $row['user_name']; ?> don't have any portfolio yet.!</h2>
              <?php  }  ?>
          </div>
        </div>
        <div class="row mb-5">

<?php while($itemRow=mysqli_fetch_array($select_item)){ ?>

          <div class="col-md-6 col-lg-4 mb-5">
            <a href="#"><img src="images/<?php echo $itemRow['item_pics']; ?>" alt="<?php echo $itemRow['item_title']; ?>" class="img-fluid rounded mb-4"></a>
            <h3><a href="#" class="text-black"><?php echo $itemRow['item_title']; ?></a></h3>
            <div><?php echo $itemRow['item_date']; ?> 
            <span class="mx-2">|</span> <a href="profile.php?L_id=<?php echo $itemRow['item_author_id']; ?>"><?php echo $itemRow['item_author_name']; ?></a></div>
          </div>

<?php } ?>

        </div>

      </div>
    </section>

<?php } ?>

<?php include("footer.php"); ?>

