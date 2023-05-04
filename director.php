<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">


  </head>
  <body>
    
    <div class="container my -5"> </div>
    <h3>Current Roster</h3>
    <div class="container my -5">
    <table class="table">
    <thead>

        <tr>
            <th scope="col" >Position</th>
            <th scope="col" >Name</th>
            <th scope="col" >Email</th>
            <th scope="col" >Username</th>
            <th scope="col" >Password</th>
            <th scope="col" >Child</th>
            <th scope="col" >ChildID</th>
            <th scope="col" >Contact</th>
            <th scope="col" >Allergies</th>
           

           
            
        
        </tr>
    </thead>

<tbody>
<?php
include ('config.php');

$sql = "SELECT * FROM `login`";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)){
    $position = $row['Position'];
    $name = $row['Name'];
    $email = $row['Email'];
    $username = $row['Username'];
    $password = $row['Password'];
    $child = $row['Child'];
    $childID= $row['ChildID'];
    $contact = $row['Contact'];
    $allergies =$row['Allergies'];
    

    



    echo '<tr>
    <td> '.$position.'</td>
    <td> '.$name.'</td>
    <td> '.$email.'</th>
    <td> '.$username.'</td>
    <td> '.$password.'</td>
    <td> '.$child.'</td>
    <td> '.$childID.'</td>
    <td> '.$contact.'</td>
    <td> '.$allergies.'</td>
   


    

    <td>
    <a href="update.php?updateid='.$name.'" class="btn btn-dark">Update</a>
    <a href="delete.php?deleteid='.$username.'" class="btn btn-danger">Delete</a>

</td>


</tr>';
}
?>




</tbody>
    </table>
    </div>

    
  </body>
</html>