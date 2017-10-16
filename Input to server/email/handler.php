<?php
    var_dump($_REQUEST);
    echo $_REQUEST['email'];

    $email = $_REQUEST['email'];
    $validMail = false;

    $error_empty = '<br/>ERROR!!! There are no inputs. Insert your mail address.';
    $invalid_mail = '<br/>ERROR!!! The mail is invalid.';

    // checking for empty inputs
    if(empty($email)){

      echo $error_empty;
    }

    // checking for valid mails
    if(!empty($email)){

      $domain = ltrim(stristr($email, '@'), '@');
      // $user = stristr($email, '@', TRUE);

      if(strrpos($domain, '.com')){

        $validMail = true;
      }

      if(!$validMail){

        echo $invalid_mail;
      }
    }
?>
