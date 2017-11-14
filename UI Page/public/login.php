<?php

  session_start();

  $userList = $_SESSION['userList'];
  $username = $_REQUEST['username'];
  $password = $_REQUEST['password'];

  // first previous code

  // foreach($userList as $user){
  //
  //   if($user['username'] == $username){
  //
  //     if($user['password'] == $password){
  //
  //       header("Location: ../private/dashboard.html");
  //     }
  //   }
  // }

  // previous code

  // authentication and authorization
  // foreach($userList as $user){
  //
  //   if(($user['username'] == $username) && ($user['isAdmin'])){
  //
  //     if($user['password'] == $password){
  //
  //       header("location: ../private/admin.html");
  //     }
  //   }else{
  //
  //     if($user['password'] == $password){
  //
  //       $_SESSION['username'] = $username;        // logged in
  //       header("location: ../private/dashboard.php");
  //     }
  //   }
  // }
  //
  // var_dump($_SESSION);

  // authentication and authorization
  foreach($userList as $user){

    if(($user['username'] == $username) && ($user['isAdmin'])){

      if($user['password'] == $password){

        $_SESSION['username'] = $user['username'];          // logged in
        $_SESSION['name'] = $user['name'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['gender'] = $user['gender'];
        $_SESSION['day'] = $user['day'];
        $_SESSION['month'] = $user['month'];
        $_SESSION['year'] = $user['year'];

        header("location: ../private/admin.php");
      }else{

        echo "<br>Error!!! Wrong password.";
        header("refresh:4; URL = ../public/login.html");
      }
    }else if(($user['username'] == $username) && !($user['isAdmin'])){

      if($user['password'] == $password){

        $_SESSION['username'] = $user['username'];          // logged in
        $_SESSION['name'] = $user['name'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['gender'] = $user['gender'];
        $_SESSION['day'] = $user['day'];
        $_SESSION['month'] = $user['month'];
        $_SESSION['year'] = $user['year'];

        header("location: ../private/dashboard.php");
      }else{

        echo "<br>Error!!! Wrong password.";
        header("refresh:4; URL = ../public/login.html");
      }
    }else{

      echo "<br>Error!!! Wrong username.";
      header("refresh:4; URL = ../public/login.html");
    }
  }

  var_dump($_SESSION);

  // ---------------------------------------------------------------------------
  // FILES CODE

  // $file = fopen("info.txt", "r");
  //
  // // checking if the file is ended or not
  // while(!feof($file)){
  //
  //   $row = fgets($file);
  //   $data = trim(explode(",", $row));
  //
  //   // authentication and authorization
  //   if($data[2] == $username && $data[8] == "admin"){
  //
  //     if($data[3] == $password){
  //
  //       $_SESSION['username'] = $data[2];          // logged in
  //       $_SESSION['name'] = $data[0];
  //       $_SESSION['email'] = $data[1];
  //       $_SESSION['gender'] = $data[4];
  //       $_SESSION['day'] = $data[5];
  //       $_SESSION['month'] = $data[6];
  //       $_SESSION['year'] = $data[7];
  //
  //       header("location: ../private/admin.php");
  //     }else{
  //
  //       echo "<br>Error!!! Wrong password.";
  //       header("refresh:4; URL = ../public/login.html");
  //     }
  //   }else if($data[2] == $username && $data[8] == "user"){
  //
  //     if($data[3] == $password){
  //
  //       $_SESSION['username'] = $data[2];          // logged in
  //       $_SESSION['name'] = $data[0];
  //       $_SESSION['email'] = $data[1];
  //       $_SESSION['gender'] = $data[4];
  //       $_SESSION['day'] = $data[5];
  //       $_SESSION['month'] = $data[6];
  //       $_SESSION['year'] = $data[7];
  //
  //       header("location: ../private/dashboard.php");
  //     }else{
  //
  //       echo "<br>Error!!! Wrong password.";
  //       header("refresh:4; URL = ../public/login.html");
  //     }
  //   }else{
  //
  //     echo "<br>Error!!! Wrong username.";
  //     header("refresh:4; URL = ../public/login.html");
  //   }
  // }
  //
  // fclose($file);

  // ---------------------------------------------------------------------------



  // ---------------------------------------------------------------------------

  // previous code
  // $validInput = true;
  //
  // function checkInvalidCharacters($username){
  //
  //   for($i=0; $i<strlen($username); $i++){
  //
  //     if(($username[$i] >= 'A' && $username[$i] <= 'Z') || ($username[$i] >= 'a' && $username[$i] <= 'z') ||
  //     ($username[$i] >= 0 && $username[$i] <= 9) || ($username[$i] == ".") || ($username[$i] == "-") ||
  //     ($username[$i] == "_") || ($username[$i] == " ")){
  //
  //
  //     }else{
  //
  //       echo "<br>Error!!! Name can contain only alpha numeric characters, period,
  //       dash or underscore only.";
  //       return $validInput = false;
  //     }
  //   }
  //
  //   return $validInput = true;
  // }
  //
  // function checkMinimumNameCharacters($username){
  //
  //   if(strlen($username) == 1){
  //
  //     echo "<br>Error!!! Name should be atleast 2 characters.";
  //     return $validInput = false;
  //   }else {
  //
  //     return $validInput = true;
  //   }
  // }
  //
  // function checkMinimumPasswordCharacters($password){
  //
  //   if(strlen($password) < 8){
  //
  //     echo "<br>Error!!! Password should be atleast 8 characters.";
  //     return $validInput = false;
  //   }else {
  //
  //     return $validInput = true;
  //   }
  // }
  //
  // function checkForSpecialCharacters($password){
  //
  //   if(strpos($password, '@') || strpos($password, '#') || strpos($password, '$')
  //   || strpos($password, '%')){
  //
  //     return $validInput = true;
  //   }else{
  //
  //     echo "<br>Error!!! Password must contain atleas 1 special characters.";
  //     return $validInput = false;
  //   }
  // }
  //
  // if(empty($username) || empty($password)){
  //
  //   $validInput = false;
  //   echo "<br>Error!!! Empty input. Insert your name and pasword properly.";
  // }else{
  //
  //   // checking for valid characters in name
  //   $validInput = checkInvalidCharacters($username);
  //
  //   // checking for atleast 2 characters name
  //   $validInput = checkMinimumNameCharacters($username);
  //
  //   // checking for atleast 8 characters password
  //   $validInput = checkMinimumPasswordCharacters($password);
  //
  //   // checking for special characters
  //   $validInput = checkForSpecialCharacters($password);
  //
  //   if($validInput){
  //
  //     echo "<br>Correct.";
  //     echo "<br>Name: $username";
  //     echo "<br>Password: $password";
  //   }
  // }
?>
