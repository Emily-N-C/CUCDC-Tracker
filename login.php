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
include ("config.php");

if(isset($_POST['signup'])){

    header("Location:signup.php");
}

if(isset($_POST['login'])){
  $username = $_POST['Username'];
  $password = $_POST['Password'];
  
  
  




 $sql = "SELECT * FROM `login`
WHERE Username='$username' AND Password='$password'";

//$result = mysqli_query($conn,$sql);

//$sqlOne = "SELECT * FROM `nap times`";

//$resultOne = mysqli_query($conn,$sqlOne);
    
    //$row = mysqli_fetch_assoc($result);
    //$rowOne = mysqli_fetch_assoc($resultOne);

     //$row1 = $resultOne->fetch_object();



    $sql= "SELECT login.ChildID,login.Position,login.Name,login.Email,login.Username,login.Password,login.Child,login.Contact,login.Allergies,attendance.Date,mealtimes.MealTime,
    naptimes.NapTime,diaperChanges.ChangeTime
    FROM login 
    LEFT JOIN attendance ON login.ChildID = attendance.ChildID
    LEFT JOIN mealtimes ON login.ChildID = mealtimes.ChildID
    LEFT JOIN naptimes ON login.ChildID = naptimes.ChildID
    LEFT JOIN diaperChanges ON login.ChildID = diaperChanges.ChildID

    WHERE login.Username='$username' AND login.Password='$password'";
    
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
 


    
       if($row['Username'] == $username && $row['Password'] == $password && $row['Position'] == 'Parent'){
        $_SESSION['ChildID'] = $row['ChildID'];
        $_SESSION['Username'] = $row['Username'];
        $_SESSION['Name'] = $row['Name'];
        $_SESSION['Email'] = $row['Email'];
        $_SESSION['Child'] = $row['Child'];
        $_SESSION['Allergies'] = $row['Allergies'];
        $_SESSION['Contact'] = $row['Contact'];
        $_SESSION['Date'] = $row['Date'];
        $_SESSION['MealTime'] = $row['MealTime'];
        $_SESSION['NapTime'] = $row['NapTime'];
        $_SESSION['ChangeTime'] = $row['ChangeTime'];



       // $_SESSION['Date'] = $rowOne['Date'];
        


        header("Location: parentIndex.php");
        



       }


       if($row['Username'] == $username && $row['Password'] == $password && $row['Position'] != 'Parent'){
        $_SESSION['Username'] = $row['Username'];
        $_SESSION['Name'] = $row['Name'];
        $_SESSION['Email'] = $row['Email'];




        header("Location: facultyIndex.php");


       }



     

    



    
        
    else{
      echo "Incorrect Username or Password";
      
      
    
        }
    }
   



?>

<body class="login">
    <h2>Concord Child Development Center</h2>

    <div class="imgcontainer">
      <img src="concordDaycare.png" alt="Brand Name" class="avatar" />
    </div>
    <br />
    <br />







<form  method="POST">

<div class=my-3>
      <label class="form-label"> Username</label>
      <input type="text" class="form-control"
      placeholder="Enter Username" name="Username" autocomplete="off" required></input>
</div>


<div class=my-3>
      <label class="form-label"> Password</label>
      <input type="text" class="form-control"
      placeholder="Enter Password" name="Password" autocomplete="off" required></input>
</div>




<button class="btn btn-dark btn-lg my-3"name="login">Login</button>
<br>
<br>
<center><h4><a href=signup.php>Click Here To Create An Account</a></h2>




</form>


  </body>
</html>

