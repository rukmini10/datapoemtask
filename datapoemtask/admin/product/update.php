<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Products Page</title>

	<!--Bootstrap CDN-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>


<?php
$id=$_GET['ID']
include 'Config.php';
$Record=mysqli_query($con,"select * from `tblproduct` where Id=$id");
$data=mysqli_fetch_array($Record);
?>


	<div class="container">
	<div class="row">
	<div class="col-md-5 m-auto border border-dark mt-5">			

<form action="insert.php" method="POST" enctype="multipart/form-data">
	<div class="mb-3">
 
 <p class="text-center fw-bold fs-3 text-success">Product Update</p>
</div>


<div class="mb-3">
  <label class="form-label">Product Name</label>
  <input type="text" <?php echo $data['PName']?> name="Pname" class="form-control" placeholder="Input product name">
</div>

<div class="mb-3">
  <label class="form-label">Product Price</label>
  <input type="text" name="Pprice" class="form-control" placeholder="Input product price">
</div>

<div class="mb-3">
  <label class="form-label">Product Description</label>
  <input type="text" name="Pdescription" class="form-control" placeholder="Input product description">
</div>

<div class="mb-3">
  <label class="form-label">Add Product Image</label>
  <input type="file" name="Pimage" class="form-control">
</div>

<div class="mb-3">
  <label class="form-label">Select Page Category</label>
 		<select class="form-select" name="Pages">
  			<option selected>Select</option>
  			<option value="home">Home</option>
  			<option value="electronics">Electronics</option>
  			<option value="fashion">Fashion</option>
  					<option value="beauty">Beauty</option>
  						<option value="baby">Baby Care</option>
  							<option value="toys">Toys</option>
  							<option value="dresses">Dresses</option>
		</select>
</div>

<button name="submit" class="bg-success fs-4 fw-bold my-3 form-control">Update</button>
</div>
</form>

	</div>
	</div>
</div>


</body>
</html>





