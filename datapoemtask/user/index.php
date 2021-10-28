<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home-Page</title>

	<?php
include 'header.php';
	?>

</head>
<body>

<div class="container-fluid">
	<div class="col-md-12">
	<div class="row">
		
<h1 class="text-dark font-monospace fw-bold text-center my-3">Home</h1>
<?php
include '../admin/product/Config.php';
$Record=mysqli_query($con, "select * from `tblproduct` ");
    while( $row=mysqli_fetch_array($Record)){
		$check_page=$row['PCategory'];
		if($check_page==='home'){
			

echo "
session_start();
<div class='col-md-6 col-lg-4 m-auto mb-3'>

<form action='Insertcart.php' method='POST'>
<div class='card m-auto' style='width: 18rem;'>
  <img src='../admin/product/$row[PImage]' class='card-img-top' >
  <div class='card-body text-center' >
    <h5 class='card-title text-danger fs-4 '> $row[PName]</h5>
    <p class='card-text fs-6 fw-bold'> RS: $row[PPrice] </p>
<p class='card-text fs-6 '> $row[PDescription] </p>

<input type='hidden' name='PName' value='$row[PName]'>
<input type='hidden' name='PPrice' value='$row[PPrice]'>

<input type='number' name='PQuantity' value='min='1' max='20' ' placeholder='Quantity'><br><br>
<input type='submit' name='addCart'class='btn btn-success text-white text-center w-100' value='Add to Cart'>
  </div>
</div>
</form>
</div>

";
}
}
?>

	</div>
	</div>
</div>


</body>
</html>