<?php

if(isset($_POST['submit']))
{
	$nm = $_POST['name'];
	$email = $_POST['email'];
	$msg = $_POST['msg'];


	$con = mysqli_connect("localhost","root","","life_academy");
	mysqli_query($con,"insert into contact (Name,Email,Message) values('$nm','$email','$msg')");
}



?>