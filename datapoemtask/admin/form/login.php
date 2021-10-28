<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Page</title>

	<!--Bootstrap CDN-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body >

<div class="container">
	<div class="row">
	<div class="col-md-5 shadow m-auto bg-white p-3 border border-dark mt-5">			

<form action="login1.php" method="POST">
	<div class="mb-3">
 
 <p class="text-center fw-bold fs-3 text-success">Login!!!</p>
</div>


<div class="mb-3">
  <label class="form-label">User Name</label>
  <input type="text" name="username" class="form-control" placeholder="Enter your user name">
</div>

<div class="mb-3">
  <label class="form-label">User Password</label>
  <input type="password" name="userpassword" class="form-control" placeholder="Enter your password">
</div>

<button class="bg-success fs-4 fw-bold my-3 form-control">Login</button>
</div>
</form>

	</div>
	</div>
</div>








</body>
</html>