    

    <head>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>
    <footer class="site-footer" style="background-color: black;">

    <div class="bg-danger">
    <div class="container"> 
    <div class="row py-3 align-items-center">


    <div class="col-md-12 text-center">
 <a href="https://www.facebook.com"><i class="fab fa-facebook-f mr-4 btn-lg text-white"></i></a>
 <a href="https://www.twitter.com"><i class="fab fa-twitter mr-4 btn-lg text-white"></i></a>
 <a href="https://www.linkedin.com"><i class="fab fa-linkedin-in mr-4 btn-lg text-white"></i></a>
 <a href="https://www.instagram.com"><i class="fab fa-instagram mr-4 btn-lg text-white"></i></a>
 <a href="https://www.snapchat.com"><i class="fab fa-snapchat mr-4 btn-lg text-white"></i></a>
    </div>
    </div>
    </div>
    </div>

<div class="container text-center text-white text-md-left mt-5">
    <div class="row">
    <div class="col-md-3 mx-auto mb-4">
    <h6 class="text-uppercase font-weight-bold">Message</h6>
    <hr class="d-inline-block bg-danger mb-4 mt-0 mx-auto" style="width: 80px; height: 3px;">
    <p class="mt-2">Hey viewers nimra and umair here. Our full effort is to provide such a user's friendly interface. You can search our services according to your desires. So keep visiting and enjoy our services.Thankyou!</p>
    </div>

    <div class="col-md-2 mx-auto mb-4">
    <h6 class="text-uppercase font-weight-bold">Quick Links</h6>
<hr class="d-inline-block bg-danger mb-4 mt-0 mx-auto" style=" width:99px; height: 3px;">
    <ul class="list-unstyled">
    
    <li class="my-2"><a href="#" class="text-white" style="text-decoration: none;">Home</a></li>
    <li class="my-2"><a href="#" class="text-white" style="text-decoration: none;">Blogs</a></li>
    <li class="my-2"><a href="contact.php" class="text-white" style="text-decoration: none;">Contact</a></li>
    <li class="my-2"><a href="about.php" class="text-white" style="text-decoration: none;">Aboutus</a></li>
    <li class="my-2"><a href="precedence.php" class="text-white" style="text-decoration: none;">Precedence</a></li>
  
    </ul>
    </div>

    <div class="col-md-2 mx-auto mb-4">
    <h6 class="text-uppercase font-weight-bold">Support</h6>
    <hr class="bg-danger mb-4 mt-0 d-inline-block mx-auto" style=" width: 80px; height: 3px;">
  <ul class="list-unstyled">
  <li class="my-2"><a href="#" class="text-white">Plans</a></li>
  <li class="my-2"><a href="#" class="text-white">Privacy</a></li>
  <li class="my-2"><a href="#" class="text-white">Settings</a></li>
  <li class="my-2"><a href="#" class="text-white">Reports</a></li>
  <li class="my-2"><a href="#" class="text-white">Terms of service</a></li>
   
    </ul>
    </div>

    <div class="col-md-2 mx-auto mb-4">
    <h6 class="text-uppercase font-weight-bold">Contact</h6>
    <hr class="bg-danger mb-4 mt-0 d-inline-block mx-auto" style=" width: 85px; height: 3px;">
    <ul class="list-unstyled">

  <li class="my-2"><a href="#" class="text-white"><i class="far fa-address-book mr-2"></i> Jhang-shorkot</a></li>
  <li class="my-2"><a href="#" class="text-white"> <i class="fas fa-phone mr-2"></i>+923346566828</a></li>
  <li class="my-2"><a href="#" class="text-white"><i class="fas fa-envelope-square mr-2"></i></a>umair@gmail.com</li>
<li class="my-2"><a href="#" class="text-white"><i class="fas fa-fax mr-2"></i></a>+0412345667</li>
 <li class="my-2"><a href="#" class="text-white"><i class="fab fa-lastfm-square mr-3"></i>@legaldefense</a></li>
  </ul>


  </div>
  </div>
   </div>
   </div>
   <div class="footer-copyright text-center py-3" style="background-color:black;" >
     <p class="text-white">CopyrightSana&copy;<script>document.write(new Date().getFullYear());</script>All rights reserved</p> <hr class="d-inline-block bg-danger mb-4 mt-0 mx-auto" style=" width:290px; height: 3px;"></div>
    
   </div>
   </footer>

    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/stickyfill.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    
    <script src="js/bootstrap-select.min.js"></script>
    
    <script src="js/custom.js"></script>
    <script>
  $( "#select_case option:first-child" ).attr("disabled","disabled");
  
  function send_msg(sender,recvr){
      var content= $("#msg_content").val();
    //   alert(content+" "+sender+" "+recvr);
      $.ajax({
      type:'post',
      url:'send_msg.php',
      data:{
      loggedin_user_id:sender,
      Get_User_id:recvr,
      msg_content:content
      },
      success:function(data){
      location.reload();
          }
      });
      }
  
     </script>
     
     </body>
     </html>