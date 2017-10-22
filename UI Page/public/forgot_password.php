<?php

  $email = $_REQUEST['email'];

  $validMail = true;

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

  if(empty($email))){

    echo "Error!!! Empty Input.";
    $validInput = false;
  }else{

    $validMail = checkValidMail($email);

    if($validMail){

      echo "<br>Correct !!!";
    }
?>
