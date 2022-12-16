<?php
include_once "../connection.php";
 session_start(); 
 if ( !isset($_SESSION['product_id'])) {
 
//  header('location: ./index.php');
 
}
if (isset($_GET['logout'])) {
 session_destroy();
 unset($_SESSION['product_id']);
 
 header("location: ./index.php");
}
include_once "../connection.php";


if(isset($_POST['btn_save']))
{
$product_name=$_POST['product_name'];
$details=$_POST['details'];
$price=$_POST['price'];
// $c_price=$_POST['c_price'];
$product_type=$_POST['product_type'];

// $tags=$_POST['tags'];

//picture coding
$picture_name=$_FILES['picture']['name'];
$picture_type=$_FILES['picture']['type'];
$picture_tmp_name=$_FILES['picture']['tmp_name'];
$picture_size=$_FILES['picture']['size'];

if($picture_type=="image/jpeg" || $picture_type=="image/jpg" || $picture_type=="image/png" || $picture_type=="image/gif")
{
	if($picture_size<=50000000)
	
		$pic_name=time()."_".$picture_name;
		move_uploaded_file($picture_tmp_name,"../images/".$pic_name);
		
mysqli_query($con,"insert into products ( product_name, details, price, product_type, image) values ('$product_name','$details','$price','$product_type','$image')") or die ("query incorrect");
// mysqli_query($con,"insert into products (product_cat, product_title, product_price, product_desc, product_image,product_keywords) values ('$product_type','$product_name','$price','$details','$pic_name')") or die ("query incorrect");

 header("location: sumit_form.php?success=1");
}

mysqli_close($con);
}
include_once "../connection.php";
// include "topheader.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../images/istockphoto-1165295579-170x170.jpg" type="image/x-icon">
</head>
<body class="adminP">
    

      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <form action="" method="post" type="form" name="form" enctype="multipart/form-data">
          <div class="row">
          
                
         <div class="col-md-7">
            <div class="card">
              <div class="card-header card-header-primary">
                <h5 class="title">Add Product</h5>
              </div>
              <div class="card-body">
                
                  <div class="row">
                    
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="title">Product Title</label>
                        <input type="text" id="product_name" required name="product_name" class="form-control"><br><br>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="">
                        <label for="picture" class="title">Add Image</label>
                        <input type="file" name="picture" required class="btn btn-fill btn-success" id="picture" ><br><br>
                      </div>
                    </div>
                     <div class="col-md-12">
                      <div class="form-group">
                        <h5><label>Product Description</label></h5>
                        <textarea rows="4" cols="80" id="details" required name="details" class="form-control"></textarea><br><br>
                      </div>
                    </div>
                  
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Current Pricing</label>
                        <input type="text" id="price" name="price" required class="form-control" ><br>
                      </div>
                    </div >
                  </div>
                 
                  
                
              </div>
              
            </div>
          </div>
          <div class="col-md-5">
            <div class="card">
              <div class="card-header card-header-primary">
                <h5 class="title">Categories</h5>
              </div>
              <div class="card-body">
                
                  <div class="row">
                    
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Product Category</label>
                        <input type="number" id="product_type" name="product_type" required="[1-6]" class="form-control">
                      </div>
                    </div>
                   
                     
                  
                    
                  </div>
                
              </div>
              <div class="card-footer">
                  <button type="submit" id="btn_save" name="btn_save" required class="btn btn-fill btn-primary">Update Product</button>
                  
              </div>
            </div>
          </div>
          
        </div>
         </form>
          
        </div>
      </div>

      </body>
</html>