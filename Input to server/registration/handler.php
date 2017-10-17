<?php

  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $username = $_REQUEST['username'];
  $password = $_REQUEST['password'];
  $confirm = $_REQUEST['confirm'];
  $gender = $_REQUEST['gender'];
  $day = $_REQUEST['day'];
  $month = $_REQUEST['month'];
  $year = $_REQUEST['year'];

  $validInput = true;

  // checks for at least two words name
  function checkTwoWordsName($name){

    if(str_word_count($name) == 1){

      echo '<br/>ERROR!!! Name needs to be atleast 2 words.';
      return $validInput = false;
    }

    return $validInput = true;
  }

  // checks if the first character of the name is a letter or not
  function startWithALetter($name){

    if(($name[0] >= 'A' && $name[0] <= 'Z') || ($name[0] >= 'a' && $name[0] <= 'z')){


    }else {

      echo '<br/>ERROR!!! First character of the name needs to be a letter.';
      return $validInput = false;
    }

    return $validInput = true;
  }

  // checks if the name input contains valid characters or not
  function checkValidName($name){

    for($i=0; $i<strlen($name); $i++){

      if(($name[$i] >= 'A' && $name[$i] <= 'Z') || ($name[$i] >= 'a' && $name[$i] <= 'z') ||
      ($name[$i] == ".") || ($name[$i] == "-") || ($name[$i] == " ")){


      }else{

        echo '<br/>ERROR!!! Name can contain only a-z, A-Z, period(.) and dash(-).';
        return $validInput = false;
      }
    }

    return $validInput = true;
  }

  // checks for alpha numeric characters for valid name input
  function checkInvalidUserNameCharacters($username){

    for($i=0; $i<strlen($username); $i++){

      if(($username[$i] >= 'A' && $username[$i] <= 'Z') || ($username[$i] >= 'a' && $username[$i] <= 'z') ||
      ($username[$i] >= 0 && $username[$i] <= 9) || ($username[$i] == ".") || ($username[$i] == "-") ||
      ($username[$i] == "_") || ($username[$i] == " ")){


      }else{

        echo "<br>Error!!! Username can contain only alpha numeric characters, period(.),
        dash(-) or underscore(_) only.";
        return $validInput = false;
      }
    }

    return $validInput = true;
  }

  // checks for at least 2 characters name
  function checkMinimumUserNameCharacters($username){

    if(strlen($username) == 1){

      echo "<br>Error!!! Username should be atleast 2 characters.";
      return $validInput = false;
    }else {

      return $validInput = true;
    }
  }
?>
