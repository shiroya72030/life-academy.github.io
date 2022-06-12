<?php

if(isset($_GET['s']))
{
	$nm = $_GET['name'];

	$con = mysqli_connect("localhost","root","","life_academy");
	$s = mysqli_query($con,"select* from students where Student_Name like '%$nm%'");

?>	
	<?php
		while ($r = mysqli_fetch_array($s))
		{
			?>	

		<tr>			
			<td class="td"> <?php echo $r['Id']?>              </td>
			<td class="td"> <?php echo $r['Student_Name']?>    </td>
			<td class="td"> <?php echo $r['Father_Name']?>     </td>
			<td class="td"> <?php echo $r['Email']?>   		   </td>
			<td class="td"> <?php echo $r['Contact']?>         </td>
			<td class="td"> <?php echo $r['Address']?>         </td>
			<td class="td"> <?php echo $r['Class']?>           </td>
			<td class="td"> <?php echo $r['Date_Of_Birth']?>   </td>
			<td class="td"> <?php echo $r['Gendar']?>          </td>
			<td class="td"> <?php echo $r['Blood_Group']?>     </td>
		
		</tr>
		
<?php 	}		
?>

<?php } ?>