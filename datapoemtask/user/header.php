<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>

	<!--Bootstrap CDN-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<!--FOnt Awesome CDN-->
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

</head>

<body>

<?php
session_start();
$count=0;
if(isset($_SESSION['cart'])){
$count=count($_SESSION['cart']);
}

?>

<nav class="navbar navbar-light bg-dark">
  <div class="container-fluid font-monospace">
    <a class="navbar-brand pb-2"><i class="fas fa-store bg-white" ></i></a>
 
    <div class="d-flex">
    <a href="index.php" class="text-white fw-bold text-decoration-none pe-2"><i class="fas fa-home"></i>  Home  </a>
     <a href="viewCart.php" class="text-white fw-bold text-decoration-none pe-2"><i class="fas fa-shopping-cart"></i>  Cart(<?php echo $count ?>) |</a>
<span class="text-white fw-bold text-decoration-none pe-2">
<i class="fas fa-user text-white fw-bold text-decoration-none"></i>  Hello, |
	<a href="" class="text-white fw-bold text-decoration-none pe-2"> <i class="fas fa-sign-in-alt"></i> Login</a>|
<a href="../admin/mystore.php" class="text-white fw-bold text-decoration-none pe-2"> Admin</a>

</span>
</div>
</nav>
</div>


<div class="bg-success font-monospace ">
	<ul class="list-unstyled d-flex justify-content-center">
				<li><a href="index.php" class="text-decoration-none text-light fw-bold fs-4 px-5">HOME</a></li>
		<li><a href="Electronics.php" class="text-decoration-none text-light fw-bold fs-4 px-5">ELECTRONICS</a></li>
		<li><a href="Fashion.php" class="text-decoration-none text-light fw-bold fs-4 px-5">FASHION</a></li>
		<li><a href="Beauty.php" class="text-decoration-none text-light fw-bold fs-4 px-5">BEAUTY</a></li>
		<li><a href="BabyCare.php" class="text-decoration-none text-light fw-bold fs-4 px-5">BABY CARE</a></li>
		<li><a href="Toys.php" class="text-decoration-none text-light fw-bold fs-4 px-5">TOYS</a></li>
		<li><a href="Dresess.php" class="text-decoration-none text-light fw-bold fs-4 px-5">DRESESS</a></li>
	</ul>

</div>


</body>
</html>















