<!doctype html 
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">


</head>
<?php

include ("config.php");
$userid = $_GET['updateid'];

$sql = "SELECT * `login` WHERE Username =$userid";

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$name = $row['Name'];
$email = $row['Email'];
$username = $row['Username'];
$password = $row['Password'];
$child = $row['Child'];
$contact = $row['Contact'];
$allergies = $row['Allergies'];



if(isset($_POST['update'])){
 // $name = $_POST['Name'];
  $username = $_POST['Username'];
  $child = $_POST['Child'];
  $email = $_POST['Email'];
  $password = $_POST['Password'];
  $contact = $_POST['Contact'];
  $allergies = $_POST['Allergies'];



$sql ="UPDATE `login` SET Contact='$contact',Email='$email',
Child='$child',Password='$password',Allergies='$allergies', Username='$username' WHERE Name='$userid'";

$result = mysqli_query($conn,$sql);
if($result){
    header('location:director.php');
}else{
  die(mysqli_error($conn));

}

}




    
  



?>

  <h3> Update Information: </h3>
  <div class="container my-5">
  <form  method="POST">
    

    <div class=my-3>
      <label class="form-label"> Contact (Phone Number)</label>
      <input type="text" class="form-control"
      placeholder="304-384-6335" name="Contact">
    
    </div>


    <div class=my-3>
      <label class="form-label"> Name of Child</label>
      <input type="text" class="form-control"
      placeholder="Enter Name" name="Child">
    
    </div>

    <div class=my-3>
      <label class="form-label"> Email</label>
      <input type="text" class="form-control"
      placeholder="daycare@mycu.concord.edu" name="Email">
    
    </div>

    <div class=my-3>
      <label class="form-label"> Username</label>
      <input type="text" class="form-control"
      placeholder="daycare@mycu.concord.edu" name="Username">
    
    </div>

  

<div class=my-3>
      <label class="form-label"> Password</label>
      <input type="text" class="form-control"
      placeholder="Enter Password" name="Password">
</div>


<div class=my-3>
      <label class="form-label"> Allergies</label>
      <input type="text" class="form-control"
      placeholder="Enter Allergie(s)" name="Allergies">
</div>
    
    
    <div>
    <button class="btn btn-dark btn-lg my-3"name="update">Update</button>
</div>
</div>



