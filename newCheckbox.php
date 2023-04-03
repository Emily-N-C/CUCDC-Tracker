

<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">


  </head>
<?php
include ('config.php');  


if(isset($_POST['submit'])){
    $datas = $_POST['data'];
    $intData = (int)$datas;
    $date= (date('m-d-y h:i:s'));

    //$allData = implode($datas);

    $sql ="INSERT into `attendance` (ChildID,Date) 
    VALUES ('$intData','$date')";

    $result = mysqli_query($conn,$sql);
    if($result){
        echo "Attendance Updated Successfully";
    }else{
      die(mysqli_error($conn));
    
    }

}

$sql = "SELECT * FROM `children`";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)){

$child = $row['Child'];

}


echo '

<body>
<h3> Please Select All Students That Are Present Today</h3>
<div class="container my-5">
<form method ="post">

<div class="input-group-text my-3">
    <input type="checkbox" name="data" value= 1 > '.$child.'
</div>

<div class="input-group-text my-3">
    <input type="checkbox" name="data" value = 2 > '.$child.'
</div>

<div class="input-group-text my-3">
    <input type="checkbox" name="data" value = 3> '.$child.'
</div>

<div class="input-group-text my-3">
    <input type="checkbox" name="data" value = 4> '.$child.'
</div class="input-group-text my-3">
<button class="btn btn-dark btn-lg my-3" name="submit" type="submit">Submit Attendance</button>
</form>
</div>

';


?>

</body>







