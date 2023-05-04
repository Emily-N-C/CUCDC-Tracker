<?php



include ("config.php");

$username = $_GET['deleteid'];

$sql = "DELETE FROM`login` WHERE Username = '$username'";


$result = mysqli_query($conn,$sql);


if($result){
    header('location:director.php');
}else{
  die(mysqli_error($conn));

}
