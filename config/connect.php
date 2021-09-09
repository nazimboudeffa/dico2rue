<?php

$servername = "localhost"; //change it by db if you use docker compose
$username = "root";
$password = "";
$dbname = "dico2rue";

try
{
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
  echo "Connection failed: " . $e->getMessage();
}

?>
