
<?php
  include('header.php');
if(isset($_SESSION['useremail'])){
  $email=$_SESSION['useremail'];
  $sql= "SELECT * FROM users WHERE user_email='$email'";
  $run_sql=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($run_sql);

  $u_id= $row['user_id'];

 ?>
    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Portfolio Settings</h1>
            <div class="custom-breadcrumbs">
              <a href="#">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong><?php echo $row['user_name']; ?></strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="site-section">
      <div class="container">
          <?php if(isset($_GET['success'])){ ?>
          <div class="alert alert-success">
            <strong>Success!</strong> Record Added Successfully.
          </div>
        <?php } ?>
        <div class="row align-items-center">
          <div class="col-lg-8 mb-4 mb-lg-0">
            <button type="button" class="btn btn-primary btn-md mt-3 mb-5" data-toggle="modal" data-target="#add">Add Item</button>
          </div>
        </div>
        <div class="well well-lg">
            <table class="table">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Details</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    $selectItemRows = mysqli_query($conn, "SELECT * FROM portfolio_items WHERE item_author_id='$u_id'");
                    
                    if(mysqli_num_rows($selectItemRows)>0){
                    while ($itemRow=mysqli_fetch_array($selectItemRows)) { ?>
                <tr>
                  <td><?php echo $itemRow['item_title']; ?></td>
                  <td><?php echo $itemRow['item_desc']; ?></td>
                  <td><a href="edit.php?p-item=<?php echo $itemRow['item_id']; ?>" class="btn btn-primary">Edit</a></td>
                  <td><a class="btn btn-danger" href="delete.php?p-item=<?php echo $itemRow['item_id']; ?>">Delete</a></td>
                </tr>
                <?php } }else{?>
                  <tr>
                    <td>No Record Found Please Add atleast One record to perform administartive task.!</td>
                  </tr><?php } ?>
              </tbody>
            </table>
          </div>
      </div>
    </section>


<!-- Add Item Popup-->
<div class="modal fade" id="add" role="dialog">
    <div class="modal-dialog">
    
      <!--Add Item Form-->
      <div class="modal-content">
        <div class="modal-header">
          <h4>Security And Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="insert.php?email=<?php echo $email?>" method="POST" enctype="multipart/form-data" class="p-4 border rounded">
            <div class="row">
             <div class="col-12">
               
               <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Title</label>
                  <input type="text" id="fname" name="title"  class="form-control" placeholder="Title">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Case Date</label>
                  <input type="date" id="fname" name="date"  class="form-control" placeholder="Case Date">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Case Details</label>
                  <input type="text" id="fname" name="desc"  class="form-control" placeholder="Case Details">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Client Name</label>
                  <input type="text" id="fname" name="cname"  class="form-control" placeholder="Client Name">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Image</label>
                  <input type="file" id="fname" name="pic"  class="form-control">
                </div>
              </div>


              <div class="row p-3 mb-4">
                <div class="col-12">
                  <button name="add-p-item" class="btn btn-block btn-primary btn-md">Insert</button>
                </div>
              </div>
            </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


    <?php
}else{
      header('location:login.php');
      $_SESSION['RequstedURI']=$_SERVER['REQUEST_URI'];
}
  include('footer.php');
 ?>