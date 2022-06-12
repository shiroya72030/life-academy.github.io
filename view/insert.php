<?php



if(isset($_POST['submit']))
{
	$sn = $_POST['sname'];
	$fn = $_POST['fname'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$address = $_POST['address'];
	$class = $_POST['class'];
	$date = $_POST['date'];
	$gendar = $_POST['gendar'];
	$bg = $_POST['bgroup'];


	
	$con = mysqli_connect("localhost","root","","life_academy");

	mysqli_query($con,"insert into students (Student_Name, Father_Name, Email, Contact, Address, Class, Date_Of_Birth, Gendar, Blood_Group) values('$sn','$fn','$email','$contact','$address','$class','$date','$gendar','$bg')  ");
	
	

	

}



?>
