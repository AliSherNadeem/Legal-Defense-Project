<?php 
include('header.php');
extract($_POST);

if(isset($_GET['p-item'])){
	$item_id=$_GET['p-item'];
	$selection= mysqli_query($conn, "SELECT * FROM portfolio_items WHERE item_id='$item_id'");
$itmRows = mysqli_fetch_array($selection);

if(isset($_POST['add-p-item'])){
	 	$dp_name=$_FILES['pic']['name'];
		$dp_type=$_FILES['pic']['type'];
		$dp_size=$_FILES['pic']['size'];
		$dp_error=$_FILES['pic']['error'];
		$dp_tmp_name=$_FILES['pic']['tmp_name'];
		$dp_Ext = explode(".", $dp_name);
		$dp_Act_Ext = strtolower(end($dp_Ext));
		$allowed  = array('jpg', 'jpeg', 'png', 'bmp', 'gif' );
		$dp_save = "images/".$dp_name;

    if(in_array($dp_Act_Ext, $allowed)){
    	if($dp_error==0){
		
		 mysqli_query($conn, "UPDATE portfolio_items SET item_title='$title',item_desc='$desc',item_date='$date',item_pics='$dp_name',client_name='$cname' WHERE item_id=$item_id");
		 move_uploaded_file($dp_tmp_name, $dp_save);
		header("location:update-portfolio.php?update-success=updated-successfully");
			}else{ echo "Error".$dp_error; }
	}else{

		header("location:update-portfolio.php?allowed=Not-allowed");
	}
}



 ?>

    <!-- HOME -->
  <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Edit Portfolio Item</h1>
            <div class="custom-breadcrumbs">
              <a href="#">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong><?php echo $itmRows['item_title']; ?></strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

	<section class="site-section" id="next">
	    <div class="container">
	    	<div class="row">
	    		<div class="col-12">
	    			<form action="edit.php?p-item=<?php echo $item_id; ?>" method="POST" enctype="multipart/form-data" class="p-4 border rounded">
            <div class="row">
             <div class="col-12">
               
               <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Title</label>
                  <input type="text" id="fname" value="<?php echo $itmRows['item_title']; ?>" name="title"  class="form-control" placeholder="Title">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Case Date</label>
                  <input type="date" id="fname" name="date" value="<?php echo $itmRows['item_date']; ?>"  class="form-control" placeholder="Case Date">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Case Details</label>
                  <textarea type="text" id="fname" name="desc" value=""  class="form-control" placeholder="Case Details"><?php echo $itmRows['item_desc']; ?> </textarea> 
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Client Name</label>
                  <input type="text" id="fname" name="cname" value="<?php echo $itmRows['client_name']; ?>"  class="form-control" placeholder="Client Name">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Image</label>
                  <img src="images/<?php echo $itmRows['item_pics']; ?>" style="width: 200px; height: 200px;">
                  <input type="file" id="fname" name="pic"  class="form-control">
                </div>
              </div>


              <div class="row p-3 mb-4">
                <div class="col-12">
                  <button name="add-p-item" class="btn btn-block btn-primary btn-danger btn-md">Update</button>
                </div>
              </div>
            </div>
            </div>
          </form>
	    		</div>
	    	</div>
	    </div>
		
	</section>

 <?php  include('footer.php'); } ?>