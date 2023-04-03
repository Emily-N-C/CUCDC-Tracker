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
            <th scope="col" >Child ID</th>
            <th scope="col" >Child</th>
            <th scope="col" >Contact</th>
            <th scope="col" >Email</th>
            <th scope="col" >Parent</th>
            <th scope="col" >Parent Username</th>
            
        
        </tr>
    </thead>

<tbody>
<?php
include ('config.php');

$sql = "SELECT * FROM `children`";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)){

    $childID = $row['ChildID'];
    $child = $row['Child'];
    $contact = $row['Contact'];
    $email = $row['Email'];
    $parent= $row['Parent'];
    $username = $row['Username'];

    echo '<tr>
    <td> '.$childID.'</td>
    <td> '.$child.'</td>
    <td> '.$contact.'</th>
    <td> '.$email.'</th>
    <td> '.$parent.'</td>
    <td> '.$username.'</td>
    <td>
    <a href="update.php?updateid='.$childID.'" class="btn btn-dark">Update</a>
    <a href="delete.php?deleteid='.$childID.'" class="btn btn-danger">Delete</a>

</td>


</tr>';
}
?>




</tbody>
    </table>
    </div>

    
  </body>
</html>