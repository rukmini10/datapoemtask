<?php  

$con=mysqli_connect('localhost','root','','datapoemtask');

$A_name=$_POST['username'];
$A_password=$_POST['userpassword'];

$result=mysqli_query($con," SELECT * FROM `admin` where username='$A_name' AND userpassword='$A_password' ");

session_start();

if(mysqli_num_rows($result)){

	$_SESSION['admin']=$A_name;


	echo"
		<script>
			alert('Login Successful!!!');
			window.location.href='../mystore.php';
		</script>

	";
}
else{
 echo"
		<script>
			alert('Invalid Login!!!');
				window.location.href='login.php';
		</script>

	";
}


?>
