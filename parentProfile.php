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
<br>
<br>
<br>
<th> <h3 class="solid"><a href=parentIndex.php> Back To Home</a></h3></th>

   <div class="container my -5"> 
    <h3>You and Your Child's Information</h3>
    </div>

    <br>
    <br>
    <br>
    <div>
    <table class="table">
    <thead>

        <tr>
            <th scope="col" >Child ID</th>
            <th scope="col" >Child</th>
            <th scope="col" >Contact</th>
            <th scope="col" >Email</th>
            <th scope="col" >Parent Name</th>
            <th scope="col" >Parent Username</th>
            <th scope="col" >Allergies</th>
            <th scope="col" >Attendance</th>
            <th scope="col" >MealTime</th>
            <th scope="col" >NapTime</th>
            <th scope="col" >DiaperTime</th>
            

            
        
        </tr>
    </thead>


    

<tbody>
<?php
include ('config.php');





    echo '<tr>
    <td> '.$_SESSION['ChildID'].'</td>
    <td> '.$_SESSION['Child'].'</td>
    <td> '.$_SESSION['Contact'].'</td>
    <td> '.$_SESSION['Email'].'</td>
    <td> '.$_SESSION['Name'].'</td>
    <td> '.$_SESSION['Username'].'</td>
    <td> '.$_SESSION['Allergies'].'</td>
    <td> '.$_SESSION['Date'].'</td>
    <td> '.$_SESSION['MealTime'].'</td>
    <td> '.$_SESSION['NapTime'].'</td>
    <td> '.$_SESSION['ChangeTime'].'</td>
    <td>
    
</td>


</tr>';

?>




</tbody>
    </table>
    </div>

    
  </body>
</html>








<?php
}
else{
	echo "Could Not Load Profile";
}
?>