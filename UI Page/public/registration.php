<?php

  session_start();

  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $username = $_REQUEST['username'];
  $password = $_REQUEST['password'];
  $confirm = $_REQUEST['confirm'];
  $gender = $_REQUEST['gender'];
  $day = $_REQUEST['day'];
  $month = $_REQUEST['month'];
  $year = $_REQUEST['year'];

  if(!isset($_SESSION['userList'])){

    $_SESSION['userList'] = array();
  }

  $user['name'] = $name;
  $user['email'] = $email;
  $user['username'] = $username;
  $user['password'] = $password;
  $user['confirm'] = $confirm;
  $user['gender'] = $gender;
  $user['day'] = $day;
  $user['month'] = $month;
  $user['year'] = $year;

  if($username == 'admin'){

    $user['isAdmin'] = true;
  }else{

    $user['isAdmin'] = false;
  }

  $size = count($_SESSION['userList']);
  $_SESSION['userList'][$size] = $user;

  var_dump($_SESSION);

  // ---------------------------------------------------------------------------

  // $name = $_REQUEST['name'];
  // $email = $_REQUEST['email'];
  // $username = $_REQUEST['username'];
  // $password = $_REQUEST['password'];
  // $confirm = $_REQUEST['confirm'];
  // $gender = $_REQUEST['gender'];
  // $day = $_REQUEST['day'];
  // $month = $_REQUEST['month'];
  // $year = $_REQUEST['year'];

  $validName1 = true;
  $validName2 = true;
  $validName3 = true;
  $validMail = true;
  $validUsername1 = true;
  $validUsername2 = true;
  $validPassword1 = true;
  $validPassword2 = true;
  $validPassword3 = true;
  $validGender = true;
  $validDate = true;

  // ---------------------------------------------------------------------------
  // FUNCTIONS

  // checks for at least two words name
  function checkTwoWordsName($name){

    if(str_word_count($name) == 1){

      echo "<br/>ERROR!!! Name needs to be atleast 2 words.";
      return $validName1 = false;
    }

    return $validName1 = true;
  }

  // checks if the first character of the name is a letter or not
  function startWithALetter($name){

    if(($name[0] >= 'A' && $name[0] <= 'Z') || ($name[0] >= 'a' && $name[0] <= 'z')){


    }else {

      echo "<br/>ERROR!!! First character of the name needs to be a letter.";
      return $validName2 = false;
    }

    return $validName2 = true;
  }

  // checks if the name input contains valid characters or not
  function checkValidName($name){

    for($i=0; $i<strlen($name); $i++){

      if(($name[$i] >= 'A' && $name[$i] <= 'Z') || ($name[$i] >= 'a' && $name[$i] <= 'z') ||
      ($name[$i] == ".") || ($name[$i] == "-") || ($name[$i] == " ")){


      }else{

        echo "<br/>ERROR!!! Name can contain only a-z, A-Z, period(.) and dash(-).";
        return $validName3 = false;
      }
    }

    return $validName3 = true;
  }

  // checks if the mail is vali or not
  function checkValidMail($email){

    $domain = ltrim(stristr($email, '@'), '@');

    // $temp = explode(".", $domain);
    //
    // if(count($temp) > 1){
    //
    //   echo "<br/>ERROR!!! Insert your mail address properly.";
    //   return $validInput = false;
    // }
    //
    // return $validInput = true;

    if(strrpos($domain, '.com')){

      return $validMail = true;
    }

    echo "<br/>ERROR!!! Insert your mail address properly.";
    return $validMail = false;
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
        return $validUsername1 = false;
      }
    }

    return $validUsername1 = true;
  }

  // checks for at least 2 characters name
  function checkMinimumUserNameCharacters($username){

    if(strlen($username) == 1){

      echo "<br>Error!!! Username should be atleast 2 characters.";
      return $validUsername2 = false;
    }else {

      return $validUsername2 = true;
    }
  }

  // checks if the password contains 8 characters or not
  function checkMinimumPasswordCharacters($password){

    if((strlen($password) < 8) && (strlen($password) > 0)){

      echo "<br>Error!!! Password should be atleast 8 characters.";
      return $validPassword1 = false;
    }else {

      return $validPassword1 = true;
    }
  }

  // checks if the password contains special characters or not
  function checkForSpecialCharacters($password){

    if(strpos($password, '@') || strpos($password, '#') || strpos($password, '$')
    || strpos($password, '%')){

      return $validPassword2 = true;
    }else{

      echo "<br>Error!!! Password must contain atleas 1 special characters.";
      return $validPassword2 = false;
    }
  }

  // checks if the password and confirm password are same or not
  function confirmPassword($confirm, $password){

    if($confirm != $password){

      echo "<br>Error!!! Password doesn't matches. Retype your password propery.";
      return $validPassword3 = false;
    }

    return $validPassword3 = true;
  }

  // checks if the gender is choosen or not
  function chooseGender($gender){

    if(!isset($gender)){

      echo "Error!!! Choose your gender properly.";
      return $validGender = false;
    }

    return $validGender = true;
  }

  // checks if the date of birth is given ccorrectly or not
  function checkValidDate($day, $month, $year){

    $invalid_day = '<br/>ERROR!!! Invalid Day. Insert a proper date.';
    $invalid_month = '<br/>ERROR!!! Invalid Month. Insert a proper date.';
    $invalid_year = '<br/>ERROR!!! Invalid Year. Insert a proper date.';
    $leap_year = '<br/>ERROR!!! The year is a leap year. Insert a day between (1-29).';

    $isLeapYear = false;

    // chcking for valid month
    if(($month < 0) || ($month > 12)){

      echo $invalid_month;
      return $validDate = false;
    }

    // checking for valid year
    if(($year < 1953) || ($year > 1998)){

      echo $invalid_year;
      return $validDate = false;
    }

    // leap year calculation
    if($year%4 == 0){

      if($year%100 == 0){

        if($year%400 == 0){

          $isLeapYear = true;
        }
      }else {

        $isLeapYear = true;
      }
    }

    // checking for leap year
    if($isLeapYear){

      if($month == 2){

        if(($day < 0) || ($day > 29)){

          echo $leap_year;
          return $validDate = false;
        }
      }else{

        if(($day < 0) || ($day > 32)){

          echo $invalid_day;
          return $validDate = false;
        }
      }
    }else{

      if(($day < 0) || ($day > 32)){

        echo $invalid_day;
        return $validDate = false;
      }
    }

    return $validDate = true;
  }

  // ---------------------------------------------------------------------------

  if(empty($name) || empty($email) || empty($username) || empty($password) ||
  empty($confirm) || empty($gender) || empty($day) || empty($month) || empty($year)){

    echo "Error!!! Empty Input.";
    $validInput = false;
  }else{

    $validName1 = checkTwoWordsName($name);

    $validName2 = startWithALetter($name);

    $validName3 = checkValidName($name);

    $validMail = checkValidMail($email);

    $validUsername1 = checkInvalidUserNameCharacters($username);

    $validUsername2 = checkMinimumUserNameCharacters($username);

    $validPassword1 = checkMinimumPasswordCharacters($password);

    $validPassword2 = checkForSpecialCharacters($password);

    $validPassword3 = confirmPassword($confirm, $password);

    $validGender = chooseGender($gender);

    $validDate = checkValidDate($day, $month, $year);

    if($validName1 && $validName2 && $validName3 && $validMail && $validUsername1
   && $validUsername2 && $validPassword1 && $validPassword2 && $validPassword3
   && $validGender && $validDate){

      echo "<br>Correct !!!";
    }
  }
?>
