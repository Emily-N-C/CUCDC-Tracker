<?php  
/* Database Connection */  
$sDbHost = 'localhost' ;  
$sDbName = 'Daycare' ;  
$sDbUser = 'root';  
$sDbPud = 'mysql';  
$mysql = new mysqli($sDbHost, $sDbUser, $sDbPwd);  
mysqli_select_db ($mysql, $sDbName);
?>  