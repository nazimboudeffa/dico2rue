<?php

session_start();
include '../config/connect.php';

$fun = filter_var(htmlentities($_POST['fun']),FILTER_SANITIZE_STRING);
$idW = filter_var(htmlentities($_POST['idW']),FILTER_SANITIZE_STRING);

if (isset($_SESSION['id_user'])){

  $actualvotesql = "SELECT * FROM votes WHERE id_mot=:id_mot AND id_user=:id_user";
  $query = $conn->prepare($actualvotesql);
  $query->bindParam(':id_mot', $idW, PDO::PARAM_INT);
  $query->bindParam(':id_user', $_SESSION['id_user'], PDO::PARAM_INT);
  $query->execute();
  $num = $query->rowCount();

  $error = false;
  $message = "A voté !";
  $t = 1;
  $f = 0;

  if ($num == 0){

    if ($fun == 'votedfor'){
      $votesql = "INSERT INTO votes (id_mot, id_user, up, down) VALUES (:id_mot, :id_user, :up, :down)";
      $query = $conn->prepare($votesql);
      $query->bindParam(':id_mot', $idW, PDO::PARAM_INT);
      $query->bindParam(':id_user', $_SESSION['id_user'], PDO::PARAM_INT);
      $query->bindParam(':up', $t, PDO::PARAM_INT);
      $query->bindParam(':down', $f, PDO::PARAM_INT);
      $query->execute();
    }

    if ($fun == 'votedagainst'){
    $votesql = "INSERT INTO votes (id_mot, id_user, up, down) VALUES (:id_mot, :id_user, :up, :down)";
    $query = $conn->prepare($votesql);
    $query->bindParam(':id_mot', $idW, PDO::PARAM_INT);
    $query->bindParam(':id_user', $_SESSION['id_user'], PDO::PARAM_INT);
    $query->bindParam(':up', $f, PDO::PARAM_INT);
    $query->bindParam(':down', $t, PDO::PARAM_INT);
    $query->execute();
    }

  } else {
    $error = true;
    $message = "Already voted for this word!";
  }

} else {
  $error = true;
  $message = "You must be logged in!";
}

$array = array(
  'error'=>$error,
  'message'=>$message
);

$json = json_encode($array);

echo $json;
