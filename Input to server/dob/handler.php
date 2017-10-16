<?php
    var_dump($_REQUEST);
    echo $_REQUEST['day'];
    echo $_REQUEST['month'];
    echo $_REQUEST['year'];

    $day = $_REQUEST['day'];
    $month = $_REQUEST['month'];
    $year = $_REQUEST['year'];
    $isLeapYear = false;

    $error_empty = '<br/>ERROR!!! There are no proper inputs. Insert your date of birth.';
    $invalid_day = '<br/>ERROR!!! Invalid Day. Insert a proper date.';
    $invalid_month = '<br/>ERROR!!! Invalid Month. Insert a proper date.';
    $invalid_year = '<br/>ERROR!!! Invalid Year. Insert a proper date.';
    $leap_year = '<br/>ERROR!!! The year is a leap year. Insert a day between (1-29).';

    // checking for empty inputs
    if(empty($day) || empty($month) || empty($year)){

      echo $error_empty;
    }

    // checking for invalid dates
    if(!empty($day) && !empty($month) && !empty($year)){

      if(($month < 0) || ($month > 12)){

        echo $invalid_month;
      }

      if(($year < 1953) || ($year > 1998)){

        echo $invalid_year;
      }

      // leap year checking
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
          }
        }else{

          if(($day < 0) || ($day > 32)){

            echo $invalid_day;
          }
        }
    }else{

      if(($day < 0) || ($day > 32)){

        echo $invalid_day;
      }
    }
  }
?>
