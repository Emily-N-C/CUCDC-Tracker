

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
    date_default_timezone_set('America/New_York');
    $changeTime= (date('m-d-y h:i:s A'));


    


    //$allData = implode($datas);

    $sql ="INSERT into `diaperChanges` (ChildID,ChangeTime) 
    VALUES ('$intData','$changeTime')";

    $result = mysqli_query($conn,$sql);
    if($result){
        echo "Change Times Updated Successfully";
    }else{
      die(mysqli_error($conn));
    
    }

    



}
?>

<body>
<h2> Diaper Change Tracker</h2>
<br>
<h3> Please Select All Students That Have Had Diaper Changed Present Today:</h3>

<p><b>**Important Notice: Please Submit 1 Student At A Time For Accurate Data </b></p>
<div class="container my-5">
<form method ="post">

<div class="input-group-text my-3">
    <input type="checkbox" name="data" value= 1 > Jacob Hamilton</input>
</div>





<div class="input-group-text my-3">
    <input type="checkbox" name="data" value = 2 > Abby Pendleton</input>
</div>




<div class="input-group-text my-3">
    <input type="checkbox" name="data" value = 3> Susan Smith</input>
</div>



<div class="input-group-text my-3">
    <input type="checkbox" name="data" value = 4> David White </input>
    </div>



<button class="btn btn-dark btn-lg my-3" name="submit" type="submit">Submit</button>

</form>
</div>

</body>







