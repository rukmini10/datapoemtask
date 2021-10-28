<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin-Page</title>

	<!--Bootstrap CDN-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<!--FOnt Awesome CDN-->
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">


</head>

<?php 
session_start();
if(!$_SESSION['admin']){
	header("location:form/login.php");
}

 ?>

<body>

<nav class="navbar navbar-light bg-dark">
  <div class="container-fluid text-white">
    <a class="navbar-brand text-white"><h2>Product Store</h2></a>
    <span>
    	<i class="fas fa-user-shield"></i>
    	Hello, <?php echo $_SESSION['admin']; ?>
    	<i class="fas fa-sign-out-alt"></i>
    	<a href="form/logout.php" class="text-decoration-none text-white">Logout</a> |
    	<a href="" class="text-decoration-none text-white">Userpanel</a>

    </span>
</div>
</nav>

				<div><h2 class="text-center">Dashboard</h2></div>

				<div class="col-md-6 bg-dark text-center m-auto">
					<a href="http://localhost/datapoemtask/admin/product/index.php" class="text-decoration-none text-white fs-4 fw-bold px-5">Add Product</a>
					<a href="" class="text-decoration-none text-white fs-4 fw-bold px-5">Users</a>
				</div>

</body>
</html>