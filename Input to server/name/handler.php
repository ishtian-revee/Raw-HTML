<?php
    var_dump($_REQUEST);
    echo $_REQUEST['name'];

    $name = $_REQUEST['name'];
    $nameArray = array($_REQUEST['name']);

    $error_empty = '<br/>ERROR!!! There are no inputs. Insert your name.';
    $error_word_count = '<br/>ERROR!!! Input needs to be atleast 2 words.';
    $error_first_letter = '<br/>ERROR!!! First character needs to be a letter.';
    $error_invalid_letter = '<br/>ERROR!!! Name can contain only a-z, A-Z, period(.) and dash(-).';

    $char_found = false;
    $invalid_name = false;

    $upper_case_chars = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',
                        'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U',
                        'V', 'W', 'X', 'Y', 'Z');

    $lower_case_chars = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j',
                        'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u',
                        'v', 'w', 'x', 'y', 'z');

    $temporary_array = array();

    // checking for empty inputs
    if(empty($name)){

      $invalid_name = false;
      echo $error_empty;
    }

    // checking for atleast 2 words
    if(str_word_count($name) < 2 && str_word_count($name) > 0){

      $invalid_name = false;
      echo $error_word_count;
    }

    // checking for first character
    if(!empty($name)){

      for($i=0; $i<26; $i++){

        if(($name[0] == $upper_case_chars[$i]) || ($name[0] == $lower_case_chars[$i])){

          $char_found = true;
          break;
        }
      }

      if(!$char_found){

        $invalid_name = false;
        echo $error_first_letter;
      }
    }

    // checking for invalid characters
    if(!empty($name)){

      for($i=0; $i<strlen($name); $i++){

        if(($name[$i] >= 'A' && $name[$i] <= 'Z') || ($name[$i] >= 'a' && $name[$i] <= 'z') ||
        ($name[$i] == ".") || ($name[$i] == "-") || ($name[$i] == " ")){


        }else{

          $invalid_name = false;
          echo $error_invalid_letter;
          break;
        }
      }
    }

    if($invalid_name){

      echo "Correct";
    }
?>
