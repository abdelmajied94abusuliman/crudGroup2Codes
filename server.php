<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = 'employees';


$serverAndDB = "mysql:host=$servername;dbname=$dbName";


try {
  $conn = new PDO($serverAndDB, $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

} catch(PDOException $eee) {
  echo $sql . "<br>" . $eee->getMessage();
}

?>