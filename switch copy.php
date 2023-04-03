<?php // switch.php
  $host = 'localhost';    // shouldn't need to change
  $data = 'games';        // Change as necessary
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
    $name   = $pdo->quote($_POST['name']);
    $query  = "DELETE FROM switch WHERE name=$name";
    $result = $pdo->query($query);
  }

  if (isset($_POST['name'])   &&
      isset($_POST['genre'])    &&
      isset($_POST['console'])     &&
      isset($_POST['release year'])   &&
      isset($_POST['rating'])) {
    $name     = $pdo->quote($_POST['name']);
    $genre    = $pdo->quote($_POST['genre']);
    $console  = $pdo->quote($_POST['console']);
    $year     = $pdo->quote($_POST['release year']);
    $rating   = $pdo->quote($_POST['rating']);
    
    $query    = "INSERT INTO switch VALUES" .
      "($name, $genre, $console, $year, '$rating')";
    $result = $pdo->query($query);
  }

  echo <<<_END
  <form action="switch.php" method="post"><pre>
      Name <input type="text" name="name">
     Genre <input type="text" name="genre">
   Console <input type="text" name="console">
      Year <input type="text" name="year">
    Rating <input type="range" name="rating" min="0" max="10">
           <input type="submit" value="ADD GAME"><input type="reset" value="RESET">
  </pre></form>
_END;

  $query  = "SELECT * FROM switch";
  $result = $pdo->query($query);

  while ($row = $result->fetch()) {
    // create temp strings w/security
    $r0 = htmlspecialchars($row['name']);
    $r1 = htmlspecialchars($row['genre']);
    $r2 = htmlspecialchars($row['console']);
    $r3 = htmlspecialchars($row['release year']);
    $r4 = htmlspecialchars($row['rating']);
    
    // output record data and delete button
    echo <<<_END
  <pre>
      Name $r0
     Genre $r1
   Console $r2
      Year $r3
    Rating $r4
  </pre>
  <form action='switch.php' method='post'>
  <input type='hidden' name='delete' value='yes'>
  <input type='hidden' name='name' value='$r0'>
  <input type='submit' value='delete game'></form>
_END;
  }
?>