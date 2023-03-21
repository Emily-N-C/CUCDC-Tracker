<?php  


include ("config.php");  



$checkbox1 = $_POST['chkl'] ;  
$timezone = date_default_timezone_get();

if ($_POST["Submit" ]=="Submit")  
{  
for ($i=0; $i<sizeof ($checkbox1);$i++) {  
$query="INSERT INTO Attendance (ChildID) VALUES ('".$checkboxl[$i]. "')";  
$pdo->query($query) or die($mysqli->error());  
} 

for ($i=0; $i<sizeof ($checkbox1);$i++) {  

$query1="INSERT INTO Attendance (Date) VALUES ('". $timezone. "')";  
$pdo->query($query1) or die($mysqli->error());  
}  

echo "Attendance has been Submitted";  
}  
?>  