<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Registration</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-6 mt-5 m-auto bg-white shadow font-monospace border border-info">
		
<p class="text-dark text-center fs-3 fw-bold my-3">NEW USER!!!!</p>
<form action="insert.php" method="POST">
	<div class="mb-3">
		<label for="">User Name</label>
		<input type="text" name="name" placeholder="Enter user name" class="form-control">
	</div>
		<div class="mb-3">
		<label for="">User Email</label>
		<input type="email" name="email" placeholder="Enter user email" class="form-control">
	</div>
		<div class="mb-3">
		<label for="">User Number</label>
		<input type="number" name="number" placeholder="Enter user number" class="form-control">
	</div>

		<div class="mb-3">
		<label for="">User Password</label>
		<input type="password" name="password" placeholder="Enter user password" class="form-control">
	</div>
	<div class="mb-3">
<button class="text-white w-100 fs-4 bg-success border-rounded" >Register</button>
</div>
<p class="text-dark text-center fs-8 fw-bold my-3">Old User?</p>
<div class="mb-3">
<button class="text-white w-100 fs-4 bg-success border-rounded" ><a   href="login.php" class="text-decoration-none text-white">Login Here</a></button>
</div>
</form>


		</div>
	</div>
</div>

</body>
</html>