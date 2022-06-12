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
                    
                        <h5 class="h5">Contact Us</h5>
                   
                    </div>

                <div class="box6">

                    <form action="" method="post" class="form1" >
                        <label>Name</label>		 	
						<input type="text" name="name" autofocus>

                        <label>Email  <sup>*</sup></label>		 	
						<input type="email" name="email" required="">

                        <label>Message <sup>*</sup></label>		 	
						<textarea name="msg" required></textarea>

                        <input type="submit" name="submit" value="submit" class="button">
                    </form>

               </div>

<footer>
	<div class="box2" style="position: absolute; left: 50%; top: 135%;">
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

<?php include('view/insert_contactus.php');?>
