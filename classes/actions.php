<?php

session_start();
if (!isset($global['systemRootPath'])) {
    require_once '../config/config.php';
};
include '../config/connect.php';

$action = filter_var(htmlentities($_POST['action']),FILTER_SANITIZE_STRING);

switch ($action) {
//
  case 'login_forgotten' :
    $array = array(
      'error'=>true
    );
    $json = json_encode($array);
    echo $json;
  break;
//
  case 'check' :
    //echo $_POST['email'];
    //echo $_POST['username'];
    $array = array(
      'error'=>false
    );
    $json = json_encode($array);
    echo $json;
  break;
//
  case 'register' :
    //echo $_POST['remail'];
    //echo $_POST['rusername'];
    $array = array(
      'error'=>false
    );
    $json = json_encode($array);
    echo $json;
  break;

}

?>
