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
$childID = $_GET['updateid'];

$sql = "SELECT * `children` WHERE ChildID =$childID";

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$child = $row['Child'];
$contact = $row['Contact'];
$email = $row['Email'];
$parent= $row['Parent'];
$username = $row['Username'];

if(isset($_POST['update'])){
$child = $_POST['Child'];
$contact = $_POST['Contact'];
$email = $_POST['Email'];
$parent= $_POST['Parent'];
$username = $_POST['Username'];


$sql ="UPDATE `children` SET Child= '$child', Contact='$contact',Email='$email',
Parent='$parent',Username='$username' WHERE ChildID='$childID'";

$result = mysqli_query($conn,$sql);
if($result){
    header('location:viewDatabase.php');
}else{
  die(mysqli_error($conn));

}

}




    
  



?>

  <h3> Update Information: </h3>
  <div class="container my-5">
  <form  method="POST">
    <div class=my-3>
      <label class="form-label"> Child Name</label>
      <input type="text" class="form-control"
      placeholder="Enter child's first name" name= "Child">
    
    </div>

    <div class=my-3>
      <label class="form-label"> Contact (Phone Number)</label>
      <input type="text" class="form-control"
      placeholder="304-384-6335" name="Contact">
    
    </div>

    <div class=my-3>
      <label class="form-label"> Email</label>
      <input type="text" class="form-control"
      placeholder="daycare@mycu.concord.edu" name="Email">
    
    </div>

    <div class=my-3>
      <label class="form-label"> Parent Name(s)</label>
      <input type="text" class="form-control"
      placeholder="Enter Parent(s) Name" name="Parent">
    
    </div>

    <div class=my-3>
      <label class="form-label"> Username</label>
      <input type="text" class="form-control"
      placeholder="Enter Username" name="Username">
    
    </div>
    <button class="btn btn-dark btn-lg my-3"name="update">Update</button>
      
</div>

