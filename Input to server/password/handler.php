<?php
  $curPass = $_REQUEST['curPass'];
  $newPass = $_REQUEST['newPass'];
  $retypePass = $_REQUEST['retypePass'];

  $validPass = true;

  if(empty($curPass) || empty($newPass) || empty($retypePass)){

    $validPass = false;
    echo "<br>Error!!! Empty input. Insert your passwords properly.";
  }else{

    if($curPass == $newPass){

      $validPass = false;
      echo "<br>Error!!! Current password and new password cannot be same.";
    }

    if($newPass != $retypePass){

      $validPass = false;
      echo "<br>Error!!! New password doesn't matches. Retype your password propery.";
    }

    if($validPass){

      echo "<br>Correct!";
      echo "<br>New password: $newPass";
    }
  }
?>
