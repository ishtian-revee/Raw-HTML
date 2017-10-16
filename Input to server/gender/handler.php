<?php
    var_dump($_REQUEST);
    echo $_REQUEST['gender'];

    $gender = $_REQUEST['gender'];

    $error_empty = '<br/>ERROR!!! There are no inputs. Choose your name.';

    if(!isset($gender)){

      echo $error_empty;
    }
?>
