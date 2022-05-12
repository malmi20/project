<? php

require 'config.php';

if(isset($_POST['add_product']))
 {

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/'.$product_image;

      if(empty($product_name) || empty($product_price) || empty($product_image) )
        {
          echo "<script> alert ('Please fill out all!!!!')</script>";
        }
	  else
	    {
          $insert = "INSERT INTO products(name, price, image) VALUES('$product_name', '$product_price', '$product_image')";
       
             if($conn-> query ($insert))
			 {
                 move_uploaded_file($product_image_tmp_name, $product_image_folder);
                 echo "<script>alert('Record added successfully!!')</script>";
             }
			 else{
                 echo "<script>alert('Could not able to execute the query!!')</script>";
                 }
        }
	  
  };

?>