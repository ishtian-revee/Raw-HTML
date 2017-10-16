<?php
  $name = $_REQUEST['name'];
  $password = $_REQUEST['password'];

  $validInput = true;

  function checkInvalidCharacters($name){

    for($i=0; $i<strlen($name); $i++){

      if(($name[$i] >= 'A' && $name[$i] <= 'Z') || ($name[$i] >= 'a' && $name[$i] <= 'z') ||
      ($name[$i] >= 0 && $name[$i] <= 9) || ($name[$i] == ".") || ($name[$i] == "-") ||
      ($name[$i] == "_") || ($name[$i] == " ")){


      }else{

        echo "<br>Error!!! Name can contain only alpha numeric characters, period,
        dash or underscore only.";
        return $validInput = false;
      }
    }

    return $validInput = true;
  }

  function checkMinimumNameCharacters($name){

    if(strlen($name) == 1){

      echo "<br>Error!!! Name should be atleast 2 characters.";
      return $validInput = false;
    }else {

      return $validInput = true;
    }
  }

  function checkMinimumPasswordCharacters($password){

    if(strlen($password) < 8){

      echo "<br>Error!!! Password should be atleast 8 characters.";
      return $validInput = false;
    }else {

      return $validInput = true;
    }
  }

  function checkForSpecialCharacters($password){

    if(strpos($password, '@') || strpos($password, '#') || strpos($password, '$')
    || strpos($password, '%')){

      return $validInput = true;
    }else{

      echo "<br>Error!!! Password must contain atleas 1 special characters.";
      return $validInput = false;
    }
  }

  if(empty($name) || empty($password)){

    $validInput = false;
    echo "<br>Error!!! Empty input. Insert your name and pasword properly.";
  }else{

    // checking for valid characters in name
    $validInput = checkInvalidCharacters($name);

    // checking for atleast 2 characters name
    $validInput = checkMinimumNameCharacters($name);

    // checking for atleast 8 characters password
    $validInput = checkMinimumPasswordCharacters($password);

    // checking for special characters
    $validInput = checkForSpecialCharacters($password);

    if($validInput){

      echo "<br>Correct.";
      echo "<br>Name: $name";
      echo "<br>Password: $password";
    }
  }
?>
