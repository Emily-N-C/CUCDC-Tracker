<?php // teacher.php
  $host = 'localhost';    // shouldn't need to change
  $data = 'Daycare';        // Change as necessary
  $user = 'root';         // Change as necessary
  $pass = 'mysql';         // Change as necessary
  $chrs = 'utf8mb4';
  $attr = "mysql:host=$host;dbname=$data;charset=$chrs";
  $opts =
  [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
  ];

  try {
    $pdo = new PDO($attr, $user, $pass, $opts);
  }
  catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
  }
  

  if (isset($_POST['delete']) && isset($_POST['name'])) {
	$child   = $pdo->quote($_POST['Child']);
	$query  = "DELETE FROM Children WHERE name=$child";
    $result = $pdo->query($query);
  }
  if (isset($_POST['name'])){
	
	    $name= $pdo->quote($_POST['name']);
	

	$query = "INSERT INTO Children VALUES" .
		"($child')".
    $result = $pdo->query($query);


  }

  

  echo <<<_END
<form action="xbox.php" method="post"><pre>
      Child <input type="text" name="Child">
		<input type="submit" value="Add Child">

/pre></form>
_END;





 $query  = "SELECT * FROM Children";
 $result = $pdo->query($query);


while ($row = $result->fetch())
{
	$r0 = htmlspecialchars($row['Child']);
	$r1 = htmlspecialchars($row['ChildID']);
	$r2 = htmlspecialchars($row['ClassID']);
	
	
	
}

	echo <<<_END

 <pre>

	  Child $r0
	ChildID $r1
	ClassID $r2

</pre>

<form action='teacher.php' method='post'>
<input type='hidden' name='delete' value='yes'>
<input type='hidden' name='Child' value='$r0'>
<input type='submit' value='delete game'></form>


_END;
  

?>
