<?php
  session_start();
  session_unset($_SESSION['username']);
  // session_destroy();
  header("location: ../public/login.html");
?>
