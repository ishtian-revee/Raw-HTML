<?php
    var_dump($_REQUEST);
    echo $_REQUEST['group'];

    $bloodGroup = $_REQUEST['group'];

    $error_empty = '<br/>ERROR!!! There are no inputs. Select your blood group.';

    if($bloodGroup == '0'){

      echo $error_empty;
    }
?>
