<?php

while($row_fetch = $query->fetch(PDO::FETCH_ASSOC)){
  $row_id = $row_fetch['id_user'];
  $row_username = $row_fetch['username'];
  $row_email = $row_fetch['email'];
  $row_password = $row_fetch['password'];
}

$_SESSION['id_user'] = $row_id;
$_SESSION['username'] = $row_username;
$_SESSION['email'] = $row_email;
$_SESSION['password'] = $row_password;

?>
