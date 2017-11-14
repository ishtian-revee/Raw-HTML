<?php

  // previous code
  // $src = $_FILES['uploaded_file']['tmp_name'];
  // $dest = $_FILES['uploaded_file']['name'];
  //
  // var_dump($src, $dest);
  // move_uploaded_file($src, $dest);

  // ---------------------------------------------------------------------------

  $target_dir = "uploads/";
  $target_file = $target_dir.basename($_FILES['uploaded_file']['name']);
  $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
  $validUpload = true;

  // checking if the image file is actual image or not
  if(isset($_POST['submit'])){

    $checkImage = getimagesize($_FILES['uploaded_file']['tmp_name']);

    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $validUpload = true;
    } else {
        echo "File is not an image.";
        $validUpload = false;
    }
  }

  // checking if file exists or not
  if(file_exists($target_file)){

    echo "Sorry, file already exists.<br>";
    $validUpload = false;
  }

  // checking the file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {

    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
    $validUpload = false;
  }

  // checking if the upload is ok or not
  if($validUpload){

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

        echo "The file ".basename( $_FILES["fileToUpload"]["name"])." has been uploaded.<br>";
    } else {

        echo "Sorry, there was an error uploading your file.<br>";
    }
  }else {

    echo "Sorry, your file was not uploaded.<br>";
  }
?>
