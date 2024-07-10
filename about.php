


<?php include('header.php'); ?>

 
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">About Us</h1>
            <div class="custom-breadcrumbs">
              <a href="index.php">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>About Us</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <br><br>



        <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div style="text-align:justify;  
    text-justify:auto;">
<p style="color: black;"> Our core focus is to build a community of small-firm lawyers who are building healthy and sustainable law practices for the next 20 years and beyond. Firms in the <b>Legal Defence</b> community are built around client-centric services, future-oriented technology, profit-oriented business models, and—like us—have access to justice and inclusion among their core values.
As by the help of our regular users and clients and coordinators and suppoters we are providing our services in gigantic twin cities of pakistan which makes million of population collectively. 
We know you have a vision for your law firm- we’re here to help you strategize that into action so you can have the streamlined, profitable, and healthy small law firm you’ve always wanted.</p><br>

           </div>
         </div>
           
           
      <div class="col-lg-6">

           
        <img src="images/about2.jpg" style="width: 480px; height: 320px;">
        
           
   </div>

            
        </div>
        </div>

      </div>
<br><br>
      <div class="container">
        <div class="row">
      <div clas="col-lg-6">

               <img src="images/about7.jpg" style="width: 500px; height: 400px;">
  </div>

  <div class="col-lg-6">
    <div style="text-align:justify;  
    text-justify:auto;">
    <p style="margin-left: 14%; color: black;"> Legal Defence website is the leading source of support for Lawyers and Pakistan Community. As by the help of our regular users and clients and coordinators and suppoters we are providing our services in gigantic twin cities of pakistan which makes million of population collectively. We also aim to work and launch our services in all over pakistan. Soon our users will also found our android application which is under process.
    This website is the leading source of support for Lawyers and Pakistan Community. As by the help of our regular users and clients and coordinators and suppoters we are providing our services in gigantic twin cities of pakistan which makes million of population collectively. We also aim to work and launch our services in all over pakistan. Soon our users will also found our android application which is under process</p>

  </div>
</div>
  </div>

  </div>
  <br><br>
<div class="container">
  <div class="row">
    <div class="col-lg-6"> 
      <div style="text-align:justify;  text-justify:auto;">
      <p style="color: black;"> The interface of website is made quite simpler, obvious with much clearity. It meets the global standards of responsiveness and reliability. It hits on the needs of lawyer and a cliend or a local user. people can contact through a contact box and can send us complaints if any, and suggestion. The mobile view of a website is given at left. the responsiveness and reliability standerds are highly considered. soon you will found legal defence on playstore are as a desktop application. we need your sport to enhance and extand the online platform throughout pakistan. currently the citizens of rawalpindi and islamabad can practically access this application to go for online searching of either lawyers or clients.<br>this is a huge community platform of lawyers, where clients can search for lawyer by viewing their profiles and portfolios. and lawyers would be able to meet their clients. </p> </div>
      </div>  

      <div class="col-lg-6">
        <img src="images/about2.jpg" style="width: 480px; height: 320px;">
  </div>
</div>
</div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-12">
    <hr>


    </div>
    <h1>How To Use Our Website</h1><br>
    <div style="text-align:justify;  
    text-justify:auto;">
    <p style="color: black;">First among all after going through legaldefence.com you will found a home page. Here you will found few buttons in a nevigation bar which is also called a header. Home button will bring you back to a front page normally known by a home page of a website. Next button is about <i title=" A precedent is a principle or rule established in a previous legal case"> Precedent</i>, here after clicking precedent button you will found latest precedences. Now what is precedent A precedent is a principle or rule established in a previous legal case that is either binding on or persuasive without going to courts for a court or other tribunal when deciding subsequent cases with similar issues or facts. the major benefit of prcedent is that both the parties can go out of the court seatlement. Lawyers can keep themself and their knowledge up-to-date by viewing precedences instead of consulting bulky law books. </div>
<br>
<div style="text-align:justify;  
    text-justify:auto;">
<p style="color: black;" >After precenent button you can view a <i style="color: black;" title="send your suggestion and reviews"> contact us button</i>. Here you will found our pages on different platforms including Twitter facebook and telegram. you can follow us and to join a whole lawyers community. 
<br> At the Right most corner you will found two buttons of <i title="Join via Lawyer or client"> join us</i> and <i title="Login via Lawyer or client">login</i>
</div>
     </p>
  </div>
</div>
<br>
<div class="container">
  <div class="row">
    <div class="col-lg-4">
      <img src="images/about1.jpg" style="width: 300px; height: 300px;">
    </div>
      <div class="col-lg-4">
            <img src="images/about3.jpg" style="width: 300px; height: 300px; margin-left: 8%">
            </div>
            <div class="col-lg-4">
            <img src="images/about8.jpg" style="width: 300px; height: 300px; margin-left: 8%">
            </div>
        </div>
    </div>
        
      
      </div> 
<br><br>
    <section class="py-5 bg-image overlay-primary fixed overlay" id="next" style="background-image: url('images/lawyer.jpg');">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2 text-white">Legal Defense Stats</h2>
            <p class="lead text-white">Here you can see the details that how many overall users, lawyers,clients and verified lawyer are in this system.</p>
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




<?php include('footer.php'); ?>
