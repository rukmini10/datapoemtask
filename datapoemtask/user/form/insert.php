<?php

$Con=mysqli_connect('localhost','root','','datapoemtask');

if(isset($_POST['submit'])){
	$Name=$_POST['name'];
	$Email=$_POST['email'];
	$Number=$_POST['number'];
	$Password=$_POST['password'];

	mysqli_query($Con,"INSERT INTO `tbluser`(`UserName`, `Email`, `Number`, `Password`) 
		VALUES ('$Name','$Email','$Number','$Password')");
		$Dup_Email=mysqli_query($Con,"select * from `tbluser` where Email='$Email' ");
				$Dup_username=mysqli_query($Con,"select * from `tbluser` where UserName='$Name' ");

if(mysqli_num_rows($Dup_Email)){
	echo"
<script>
alert('This mail already exists');
window.location.href='register.php';
</script>
	";
}

if(mysqli_num_rows($Dup_username)){
	echo"
<script>
alert('This UserName already exists');
window.location.href='register.php';
</script>
	";
}
else{

mysqli_query($Con,"INSERT INTO `tbluser`(`UserName`, `Email`, `Number`, `Password`) 
		VALUES ('$Name','$Email','$Number','$Password')");

echo"
<script>
alert('Register Successfully');
window.location.href='login.php';
</script>
	";
}




}


?>











