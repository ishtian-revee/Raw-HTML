<?php

  session_start();

  if(isset($_SESSION['username'])){

    header("location: ../private/admin.html");
  }else{

    header("location: ../public/login.html");
  }
?>
