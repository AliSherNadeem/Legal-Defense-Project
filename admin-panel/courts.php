<?php 

include('header.php');
if(isset($_SESSION['admin_loggedin'])){


extract($_POST);

if(isset($_POST['addcourt'])){

mysqli_query($conn, "INSERT INTO courts(name,details) VALUES('$name','$info')");

}
 ?>

        <h2 class="p-3 bg-light mb-2 text-center">Courts Names</h2>
        <div class="well well-lg">
            <table class="table">
              <thead>
                <tr>
                  <th>Court Name</th>
                  <th>Court Details</th>
                  <th>Delete</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php
                    $selectItemRows = mysqli_query($conn, "SELECT * FROM courts");
                    
                    if(mysqli_num_rows($selectItemRows)>0){
                    while ($itemRow=mysqli_fetch_array($selectItemRows)) { ?>
                <tr>
                  <td><?php echo $itemRow['name']; ?></td>
                  <td><?php echo $itemRow['details']; ?></td>
                  <td><a class="btn btn-danger" href="../delete.php?court_id=<?php echo $itemRow['id']; ?>">Delete</a></td>

                </tr>
                <?php } }else{?>
                  <tr>
                    <td>Please Insert atleast one city to display here </td>
                  </tr><?php } ?>
              </tbody>
            </table>
          </div>
          <button type="button" class="btn btn-block btn-primary btn-md" data-toggle="modal" data-target="#add">Add Court</button>




<!-- Security And Login Popup-->
<div class="modal fade" id="add" role="dialog">
    <div class="modal-dialog">
    
      <!--Security And Login Form-->
      <div class="modal-content">
        <div class="modal-header">
          <h4>Add Court</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="courts.php" method="POST" enctype="multipart/form-data" class="p-4 border rounded">
            <div class="row">
             <div class="col-12">
               <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Courts Name</label>
                  <input type="text" id="fname" name="name" class="form-control" placeholder="Court Name">
                </div>
              </div>
               <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Info</label>
                  <input type="text" id="fname" name="info"  class="form-control" placeholder="Court Info">
                </div>
              </div>
              <div class="row p-3 mb-4">
                <div class="col-12">
                  <button name="addcourt" class="btn btn-block btn-primary btn-md">Add</button>
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

    include"footer.php";
    
    
}else{
	header("location:login.php");
}


 ?>
