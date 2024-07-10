<?php
  include('header.php');
 ?>


    <!-- HOME -->
    <section class="home-section section-hero overlay bg-image" style="background-image: url('images/lawyer.jpg');" id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="mb-5 text-center">
              <h1 class="text-white font-weight-bold" style="font-family:serif;">The Secure Way To Get Your Lawyers</h1>
              <p>You can get a best-lawyer according to your case by using search box below.</p>
            </div>
                <form method="POST" action="search.php" class="search-jobs-form">
              <div class="row mb-5">
              <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
              <select class="selectpicker" name="city" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select Region">
                <?php
            $selectItemRows = mysqli_query($conn, "SELECT * FROM regions");
           
              while ($itemRow=mysqli_fetch_array($selectItemRows)) { ?>
                    <option><?php echo $itemRow['name']; ?></option>

                  <?php } ?>
                  </select>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <select class="selectpicker" name="court" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select Courts">
                     <?php
                    $selectItemRows = mysqli_query($conn, "SELECT * FROM courts");
                    
                   
                    while ($itemRow=mysqli_fetch_array($selectItemRows)) { ?>
                    <option><?php echo $itemRow['name']; ?></option>

                  <?php } ?>
                  </select>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <select class="selectpicker" name="expert" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select Case">
                    <?php
                    $selectItemRows = mysqli_query($conn, "SELECT * FROM cases");
                    
                   
                    while ($itemRow=mysqli_fetch_array($selectItemRows)) { ?>
                    <option><?php echo $itemRow['name']; ?></option>

                  <?php } ?>

                  </select>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <button type="submit" name="go" class="btn btn-primary btn-danger btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2"></span>Search</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <a href="#next" class="scroll-button smoothscroll">
        <span class=" icon-keyboard_arrow_down"></span>
      </a>

    </section>
    
    <section class="py-5 bg-image overlay-primary fixed overlay" id="next" style="background-image: url('images/lawyer.jpg');">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
        <h2 class="section-title mb-2 text-white"style="font-family:serif; font-size: 2.2em;">Legal-Defense Stats</h2>
        <p class="lead text-white">Here you can see the details that how many Overall users,lawyers,clients and verified lawyer are in this system.</p>
          </div>
        </div>
        <div class="row pb-0 block__19738 section-counter">
          <?php 
          $select_lawyers=mysqli_query($conn, "SELECT * FROM users WHERE user_type='L'");
           $count_lawyers=mysqli_num_rows($select_lawyers);
           
           $select_verified_lawyers=mysqli_query($conn, "SELECT * FROM users WHERE user_type='L' AND user_status='Verified'");
           $count_verified_lawyers=mysqli_num_rows($select_verified_lawyers);

           $select_clients=mysqli_query($conn, "SELECT * FROM users WHERE user_type='C'");
           $count_clients=mysqli_num_rows($select_clients);

           $total_users=$count_clients+$count_lawyers
           ?>
          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <strong class="number" data-number="<?php echo $total_users; ?>">0</strong>
            </div>
            <span class="caption">Overall Users</span>
          </div>

          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <strong class="number" data-number="<?php echo $count_lawyers; ?>">0</strong>
            </div>
            <span class="caption">Lawyers</span>
          </div>

          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <strong class="number" data-number="<?php echo $count_clients; ?>">0</strong>
            </div>
            <span class="caption">Clients</span>
          </div>

          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <strong class="number" data-number="<?php echo $count_verified_lawyers; ?>">0</strong>
            </div>
            <span class="caption">Verified Lawyers</span>
          </div>   
        </div>
      </div>
    </section>

    

    <section class="site-section">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2" style="font-family:serif; font-size: 2.3em;">Choose Your Perfect Lawyer</h2>
          </div>
        </div>
        
        <ul class="job-listings mb-5">
      <?php 
    $lawyers=mysqli_query($conn, "SELECT * FROM users WHERE user_type='L' ORDER BY user_id ASC LIMIT 7");
            while($rows=mysqli_fetch_array($lawyers)){
           ?>
          <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
            <a href="profile.php?L_id=<?php echo $rows['user_id']; ?>"></a>
            <div class="job-listing-logo">
              <img src="images/<?php echo $rows['user_profile_image']; ?>" 
              alt="<?php echo $rows['user_name'];?>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows['user_city'];?>"style="width:100%; max-height: 150px;">
            </div>

            <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
              <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                <h2><?php echo $rows['user_name']; ?></h2>
                <strong><?php echo $rows['user_position']; ?></strong>
              </div>
              <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                <span class="icon-room"></span> <?php echo $rows['user_uni']; ?>
              </div>
              <div class="job-listing-meta">
                <span class="<?php if($rows['user_status']=='Verified'){ echo 'badge-success';}else{echo 'badge-danger';} ?> badge"><?php echo $rows['user_status']; ?></span>
              </div>
            </div>
            
          </li>

        <?php } ?>
        </ul>

        <div class="row pagination-wrap">
          <div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
          
      </div>
    </section>
<?php if(isset($_SESSION['useremail'])){}else{ ?>
    <section class="py-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/lawyer.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
            <h2 class="text-white">Want More Details?</h2>
            <p class="mb-0 text-white lead">Just one click to signin and get your lawyer</p>
          </div>
          <div class="col-md-3 ml-auto">
            <a href="join.php" class="btn btn-primary btn-danger btn-block btn-lg">Sign Up</a>
          </div>
        </div>
      </div>
    </section>
<?php } ?>
    
   

    <section class="pt-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-md-6 align-self-center text-center text-md-left mb-5 mb-md-0">
            <h2 class="text-white">Get The Mobile Apps</h2>
            <p class="mb-5 lead text-white">Coming soon these apps will be back</p>
            <p class="mb-0">
              <a href="#" class="btn btn-dark btn-md px-4 border-width-2"><span class="icon-apple mr-3"></span>App Store</a>
              <a href="#" class="btn btn-dark btn-md px-4 border-width-2"><span class="icon-android mr-3"></span>Play Store</a>
            </p>
          </div>
          <div class="col-md-6 ml-auto align-self-end">
            <img src="images/android.jpg" alt="Get Our Mobile App" class="img-fluid">
            <img src="images/iphone.jpg" alt="Get Our Mobile App" class="img-fluid">
          </div>
        </div>
      </div>
    </section>

<?php include('footer.php'); ?>