<!doctype html 
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="Finalstyles.css" />
</head>
<?php
session_start();
if(isset($_SESSION['Username'])){



?>



<!doctype html>
<html>
   <head>
      
	  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="Finalstyles.css">
   </head>
<body class=teacher>

<table>

<tr>
<center><img class=daycare src="concordDaycare.png" width=350></img>
<br>
<br>
<br>

<h2> Welcome <?php  echo $_SESSION['Name']; ?></h2>
<br>
</tr>
</table>

<table>
<tr>

	 
	
	 
	 <th> <p class="solid"><a href=facultyIndex.php>Home</a></p></th>
	 <th> <p class="solid"><a href=director.html>Director/Teacher</a></p></th>
	 <th> <p class="solid"><a href=signup2.php>Sign Up Form</a></p></th>
	 <th> <p class="solid"><a href=login.php>Log Out</a></p></th>
	 

	
</tr>


	 
</table>
</div>




<hr class=new1>
<br>

<center> <p> <h1> <u>Concord University Child Development Center</u></h1></p> </center>

<br>
<table>
<tr>
	 
	 <th><center>   <img  style="border-width:3px;border-style:solid; border-color:black" src="d1.png" height= 50 width=100></img></th>
	 <th><center>   <img  style="border-width:3px;border-style:solid; border-color:black" src="d2.png" height= 50 width=100></img></th>
	 <th> <center>  <img  style="border-width:3px;border-style:solid; border-color:black" src="d3.png" height= 50 width=100></img></th>
	 <th> <center>  <img  style="border-width:3px;border-style:solid; border-color:black" src="d4.png" height= 50 width=100></img></th>
</tr>
</table>

<br><br>

<div class=thecontainer style="border-width:3px; border-style:solid; border-color:black">
	
	  <img style="border-width:3px;border-style:solid; border-color:black" src="teacher4.png" width="400" height="300">
	
	<div class=text.text>
	  <p style="font-family: Arial; font-size:25px"><center><h2>Concord Child Development Center is a licensed child care center in the state of West Virginia. The child development center offers child care for children 6 weeks to 12 years of age. The child center has been operating for over 20 years. </h2></p>
	</div>
</div>

<br>
<br>

<div class=thecontainer style="border-width:3px; border-style:solid; border-color:black">
	<div class=text.text>
	  <p style="font-family: Arial; font-size:25px"><center><h2>We provide a developmentally based curriculum available to any child and all of the child’s needs. Services are available to all Concord University’s students, staff, and the surrounding community. The students will be exposed to reading and presentation throughout their time in the daycare.</h2></p>
	</div>
	  <img style="border-width:3px;border-style:solid; border-color:black" src="teacher56.png" width="300" height="300">
	  
	</div>
	
</div>

<br>
<br>

<div class=thecontainer style="border-width:3px; border-style:solid; border-color:black">
	<img style="border-width:3px;border-style:solid; border-color:black" src="teacher8.png" width="300" height="300">
	  <div>
	  <p style="font-family: Arial; font-size:25px"><center><h2> MEALS:</h2></p>
	  <p style="font-family: Arial; font-size:25px"><center><h2>All students are provided breakfast, lunch, and a snack throughout their time at the child care center. The meals do participate with the WV Office of Child Nutrition. The meal do provide a variety so that the students are exposed to different meal throughout the week. </h2></p>

	</div>
</div>

<br>
<br>

<div class=thecontainer style="border-width:3px; border-style:solid; border-color:black">
	<div >
	<p style="font-family: Arial; font-size:25px"><center><h2>FAMILIES</h2></p>
	  <p style="font-family: Arial; font-size:25px"><center><h2>For the families that need child care can either private pay, or any subsidy programs, one popular one is MountianHeart.</h2></p>
	</div>
	
</div>
<br>
<br>
<br>
<center> <p> <h1> <u>Contact Us</u></h1></p>
<center> <p> <b> Office:</b> 304-384-6335 </p>
<center> <p> <b> Infant/Toddler: </b> 304-384-5386 </p>
<center> <p> <b> Preschool/School-Age:</b> 304-384-6095 </p>
<center> <p> <b>Hours of Operation:</b> Monday – Friday, 7:00 AM – 6:00 PM</p>

<br>
<br>
	
<hr>

	  <table class="center">
		<tr>
			
			
			<th><center> <img src="profile.png" width="300"><p>Katherine Williams</p><p>Teacher</p></th>
			 <th> <center> <img src="profile.png" width="300"><p>Christiana Bloom</p><p>Teacher</p></th>
			 
			 
		</tr>


		<tr>
			
			<td><center> <img src="profile.png" width="300"><p><b>Taylor Johns</b></p><p><b>Teacher</b></p></td>
			<td> <center><img src="profile.png" width="300"><p><b>Nancy Cook</b></p><p><b>Teacher</b></p></td>
		


		</tr>
	      
		
		</table>
		<hr>
	<br>
	

	<h1> Where Are We Located?</h1>
	<br>

		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d503.0638177669757!2d-81.0096777874975!3d37.42461870402403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x884e6e4cbf65368f%3A0x3e456188b6e355d!2sConcord%20University%20Child%20Care!5e0!3m2!1sen!2sus!4v1681749654672!5m2!1sen!2sus" width="600" height="450" style="border:10;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


		<br>
		<br>
		<br>




 









</body>
</html>


<?php
}
else{
	echo "Could Not Load Profile";
}
?>