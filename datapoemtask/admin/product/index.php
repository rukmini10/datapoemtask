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

	<div class="container">
	<div class="row">
	<div class="col-md-5 m-auto border border-dark mt-5">			

<form action="insert.php" method="POST" enctype="multipart/form-data">
	<div class="mb-3">
 
 <p class="text-center fw-bold fs-3 text-success">Product Details</p>
</div>


<div class="mb-3">
  <label class="form-label">Product Name</label>
  <input type="text" name="Pname" class="form-control" placeholder="Input product name">
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

<button name="submit" class="bg-success fs-4 fw-bold my-3 form-control">Upload</button>
</div>
</form>

	</div>
	</div>
</div>


 <!-- Fetch Data -->

<div class="container">
	<div class="row">
		<div class="col-md-10  m-auto">
			


<table class="table border border-success table-hover border my-5">
	
<thead class="bg-dark text-white fs-6 font-monospace text-center">
	<th>Id</th>
	<th>Name</th>
	<th>Price</th>
	<th>Description</th>
	<th>Image</th>
	<th>Category</th>
	<th>Update</th>
	<th>Delete</th>
</thead >

<tbody  class="text-center">
	<?php
	include 'Config.php';

	$Record=mysqli_query($con,"SELECT * FROM `tblproduct`");

		while($row=mysqli_fetch_array($Record)) 

		echo"

			<tr>
			<td>$row[Id]</td>	
			<td>$row[PName]</td>
			<td>$row[PPrice]</td>
			<td>$row[PDescription]</td>
			<td><img src='$row[PImage]' height='90px' width='200px' ></td>
			<td>$row[PCategory]</td>
			<td><a href='' ID=class=row[Id]  class='btn btn-warning'>Update</a></td>
<td><a href='' class='btn btn-danger'>Delete</a></td>

			</tr>

	    ";

	?>
</tbody>

</table>

		</div>
	</div>
</div>

</body>
</html>