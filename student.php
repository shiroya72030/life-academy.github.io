<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Life Academy</title>
</head>

<body>

<header>
	<div class="box5">
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
    				
						<h5 class="h5">Students List</h5>

					</div>


<div class="search-box">                    
	<form>
		<input type="text" name="name" id="" placeholder="SEARCH" class="input">
		<input type="submit" name="s" value="Search" id="button">
	</form>				
</div>
					
					



                    <div>
                        <table border="1" style="border-spacing: 0px;">
                            
                            <tr>
                                <th>Id.</th>
                                <th>Student Name</th>
                                <th>Father Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Address</th>
                                <th>Class</th>
                                <th>Date Of Birth</th>
                                <th>Gendar</th>
                                <th>Blood Group</th>
                               
                            </tr>

						
							<?php include('view/stud_list.php');?>

                        </table>
                    </div>


<footer>
	<div class="box2" >
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


