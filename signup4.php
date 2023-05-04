<!doctype html 
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="Finalstyles.css">

</head>
<?php

include ("config.php");


if(isset($_POST['submit'])){
  $Child = $_POST['Child'];
  $Contact = $_POST['Contact'];
  $Email = $_POST['Email'];
  $Name = $_POST['Name'];
  $Username = $_POST['Username'];
  $Password =$_POST['Password'];
  $Allergies =$_POST['Allergies'];
  $Position = $_POST['Position'];





$sql = "INSERT INTO `login` (Position,Name,Email,Username,Password,Child,Contact,Allergies) 
VALUES ('$Position','$Name','$Email','$Username','$Password','$Child','$Contact','$Allergies')";



//'$Allergies','$Other'

$result = mysqli_query($conn,$sql);



if(mysqli_errno($conn) == 1062) {
  echo (mysqli_error($conn));
  header("Location:signup.php?error=This username is unavailable");


}


    
else if($result != true){
      echo (mysqli_error($conn));
      //header("Location:signup.php?error=Submission was unsucessful");
      
    
    }

else{
  echo("Successful!");
}
   

}


?>

<?php if(isset($_GET['error'])){ ?>
          <h2><p class=error> <?php echo $_GET['error'];} ?></p></h2>
  <div class="container my-5">
  <form  method="POST">


    <div class=my-3>
      <label class="form-label"> Child Name</label>
      <input type="text" class="form-control"
      placeholder="Enter child's first name" name= "Child" autocomplete="off" required>
    
    </div>



    <div class=my-3>
      <label class="form-label"> Contact (Phone Number)</label>
      <input type="text" class="form-control"
      placeholder="304-384-6335" name="Contact" autocomplete="off" required></input>
    
    </div>

    <div class=my-3>
      <label class="form-label"> Email</label>
      <input type="text" class="form-control"
      placeholder="daycare@mycu.concord.edu" name="Email" autocomplete="off" required></input>
    
    </div>

    <div class=my-3>
      <label class="form-label"> Your Name</label>
      <input type="text" class="form-control"
      placeholder="Enter Your Name" name="Name" required></input>
    
    </div>

    <div class=my-3>
      <?php if(isset($_GET['error'])){ ?>
          <h2><p class=error> <?php echo $_GET['error'];} ?></p></h2>

      <label class="form-label"> Username</label>
      <input type="text" class="form-control"
      placeholder="Enter Username" name="Username" autocomplete="off" required></input>
</div>



<div class=my-3>
      <label class="form-label"> Password</label>
      <input type="text" class="form-control"
      placeholder="Enter Password" name="Password" autocomplete="off" required></input>
</div>





<div class=my-3>
      <label class="form-label"> Allergies </label>
      <input type="text" class="form-control"
      placeholder="Enter Allergies" name="Allergies" autocomplete="off" ></input>
      </div>


    
<div>
<select class="form-select" aria-label="Default select example" name ="Position" required>

  <option selected>Please Select Role:</option>
  <option  value="Teacher">Teacher</option>
  <option  value="Parent">Parent</option>
  <option  value="Director">Director</option>
</select>

</div>
<?php if(isset($_GET['error'])){ ?>
          <h2><p class=error> <?php echo $_GET['error'];} ?></p></h2>

    <button class="btn btn-dark btn-lg my-3"name="submit">Submit</button>

    <br>
    <br>
    <br>
</div>



</div>



</body>
</html>