<?php

  session_start();

  if(isset($_SESSION['username'])){

    header("location: ../private/dashboard.html");
  }else{

    header("location: ../public/login.html");
  }
?>
