<?php



include ("config.php");
$childID = $_GET['deleteid'];

$sql = "DELETE FROM`children` WHERE ChildID =$childID";
$sql1 = "ALTER TABLE `children` AUTO_INCREMENT =1";

$result = mysqli_query($conn,$sql);
$result1 = mysqli_query($conn,$sql1);

if($result){
    header('location:viewDatabase.php');
}else{
  die(mysqli_error($conn));

}