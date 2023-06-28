<?php

	$firstName=$_POST['firstName'];
	$lastName=$_POST['lastName'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$confirmPassword=$_POST['confirmPassword'];
	$age=$_POST['age'];
	$dateofbirth=$_POST['dateofbirth'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$country=$_POST['country'];

	$connection=mysqli_connect("localhost" , "root" , "" , "login");
	$insert="INSERT INTO registation SET firstName='$firstName', lastName='$lastName', email='$email', password='$password', confirmPassword='$confirmPassword', age=$age, dateofbirth='$dateofbirth', gender='$gender', address='$address', country='$country'";
	$connection->query($insert);
?>