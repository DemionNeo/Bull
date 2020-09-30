<?php
	function connect(){
	$server="192.168.64.2";
	$username="root";
	$password="":
	$database="idex_table";


	 //database connection
	$conn= mysqli_connect($server,$username,$password,$database); 

	if(!$conn){
	die(Connection not successful);
}
	return $conn;
}

	if(isset($_POST['submit_reg'])){
	


	 $first_name= $_POST['fisrt_name'];
	 $last_name= $_POST['last_name'];
	 $email= $_POST['email'];
	 $password = $_POST['password'];

	 $sql="INSERT INTO `Register`(`first_name`, `last_name`, `email`, `password`) VALUES ('$first_name','$last_name','$email','$password')";

	 //get link from connect
	 $link= connect();

	 //insert into DB
	 if(mysqli_query($link,$sql)){
	 echo "Insert works";

	}else{
	echo "Error inserting data";
}

}






















?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Registration</title>
	<style>
		label{
			color:white;
		}
		h1{
			color:red;
		}
		a{
			color:yellow;
		}
		p{
			color:red;
		}
		body{
			background-image:url("images/perry-grone-lbLgFFlADrY-unsplash.jpg");
			background-size:100%;
		}
		th{
			padding:10px;
		}
		#login{
			text-align:right;
		}
	</style>
</head>
<body>
<table style="display:flex;justify-content:center;align-items:center;">
	<tr>
		<th><a href="Homepage.html" style="text-decoration:none;">Home Page</a>
		</th>
		<th><a href="Contactus.html" style="text-decoration:none;">Contact Us</a></th>
		<th><a href="Aboutus.html" style="text-decoration:none">About Us</a></th>
		
	</tr>
</table>

<div style="display:flex;justify-content:center;align-items:center;">
	<form action="/registrationbutton", method="POST">
		<div>
			<div>
				<label for="first_name">First name</label>
				<input type="text"  required="true">
			</div>
			<div>

				<label for="last_name">Last name</label>
				<input type="text" required="true"></div>
				<div>

				<label for="email">Email</label>
					<input type="email" required="true" placeholder ="example@gmail.com"></div>
					<div>

				<label for="password">Password</label>
						<input type="password" id="reg-password" required="true" placeholder="Place Password">
					</div>
					<div>

					
					<input type="submit" name="submit_reg" value="Register">
					<input type="reset" value="Clear details">
					
					</form>
					</div>	
					<div>
						<h1>Have an account</h1>
						<a href="login.html">login</a>
					</div>
</body>
</html>