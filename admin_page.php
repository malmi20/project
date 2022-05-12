<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset= "UTF-8">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta name="viewport" content="width=device-width, intial-scale=1.0">
	 
	 <title>admin page</title>
	 
	 <!--font awesome cdn link-->
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	 
	 <!--custom css file link-->
	 <link rel="stylesheet" href="css/style.css">
	 
</head>
<body>

 <div class="container">

   <div class="admin-product-form-container">

      <form action="addItem.php" method="post" enctype="multipart/form-data">
         <h3>add a new product</h3>
         <input type="text" placeholder="Enter product name" name="product_name" class="box">
         <input type="text" placeholder="Enter product price" name="product_price" class="box">
         <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
         <input type="submit" class="btn" name="add_product" value="add product">
      </form>

   </div>
   
 </div> 
</body>
</html>