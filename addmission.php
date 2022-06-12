<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Life Academy</title>
</head>

<body>

<header>
	<div class="box1">
		<div class="bg2">
			<img src="img/home.png" alt="">

		</div>

		 	<h1>LIFE ACADEMY</h1>

			

			 	<div class="menu">
					 <a href="index.php">Home</a>
					 <a href="addmission.php">Addmission</a>
					 <a href="student.php">Students</a>
					 <a href="contactus.php">Contact Us</a>
				 </div>

				
				 <div class="box3"></div>
				 	<p class="p">We Provide Intencive Care</p>
					 
					 <p>Education is the most powerfull weapone <br>
						 which you can use to change word.
					 </p>

                 

	</div>

</header>

        
					<div class=box4>
						<h5 class="h5">Addmission Form</h5>
					</div>
						
						


				<div class="box6">	
					<form class="form1" method="POST">
			
						

						<label>Student Name</label>		 	
						<input type="text" name="sname" autofocus >
			
						<label>Father Name</label>		 	
						<input type="text" name="fname" >
						
						<label>Email  <sup>*</sup></label>		 	
						<input type="email" name="email" >
						
						<label>Contact</label>		 	
						<input type="text" name="contact" >
			
						<label>Address</label>		 	
						<textarea name="address" ></textarea>
			
						<label class="lable"> Class</label>
						<select name="class" >
			
							<option >  1 </option>
							<option >  2  </option>
							<option >5 </option>
							<option > 5 </option>
						   
					   
					   </select>
			
						<label>Date of Birth</label>		 	
						<input type="date" name="date">
						
						<label>Gendar</label>
						<select name="gendar" >
			
							<option>Male</option>
							<option>FeMale</option>
							<option>Other</option>
					   
						</select>
						
			
						<label>Blood Group</label>
						<select name="bgroup">
						   
							<option>  A+    </option>
							<option>  O+    </option>
							<option>  B+    </option>
							<option>  AB+   </option>
							<option>  A-    </option>
							<option>  O-    </option>
							<option>  B-    </option>
							<option>  AB-   </option>

						
						
						
				
			
						<input type="submit" name="submit" value="submit" class="button">
				</form>
			
				</div>

				


<footer>
	<div class="box2">
		<img src="img/home.png" alt="" class="hicon">

		<h2>SCHOOL</h2>

		<h3>Nevigation</h3>
			
			
			<div class="nevigation">
				<Ul>
					<li>
						<a href="index.php">Home</a>
					</li>

					<li>
						<a href="addmission.php">Addmission</a>
					</li>

					<li>
						<a href="student.php">Students</a>
					</li>

					<li>
						<a href="#">Contact Us</a>
					</li>
				</Ul>
			</div>

	
			
			<h4>Contact Us</h4>

			<div class="contact">

				<a href="#">f</a>
				<a href="#">G+</a>

			</div>
	
	
	</div>
</footer>





</body>


<?php include("view/insert.php");?>