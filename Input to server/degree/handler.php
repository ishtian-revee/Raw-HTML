<?php
    var_dump($_REQUEST);
    echo $_REQUEST['degree_1'];
    echo $_REQUEST['degree_2'];
    echo $_REQUEST['degree_3'];
    echo $_REQUEST['degree_4'];

    $degree_1 = $_REQUEST['degree_1'];
    $degree_2 = $_REQUEST['degree_2'];
    $degree_3 = $_REQUEST['degree_3'];
    $degree_4 = $_REQUEST['degree_4'];

    $counter = 0;

    $selection_error = '<br/>ERROR!!! Select atleast 2 boxes.';

    if($degree_1){

      $counter++;
    }

    if($degree_2){

      $counter++;
    }

    if($degree_3){

      $counter++;
    }

    if($degree_4){

      $counter++;
    }

    if($counter < 2){

      echo $selection_error;
    }
?>
