<?php
session_start();
if(empty($_SESSION['user'])){
  header('Location: /login1.php?error=login please!');
}
$con = mysqli_connect('localhost','id14971852_root','86!uLBs7+YE73[77');
mysqli_select_db($con, 'id14971852_registration');
$target_dir = "upload/";
$categ = $_POST['category'];
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    $picture = basename( $_FILES["fileToUpload"]["name"]);
    $userID = $_SESSION['userID'];
    $reg = " INSERT INTO products(picture , userID, category ) VALUES ('$picture','$userID','$categ')";
    if ($con->query($reg) === TRUE) {
      header('location:  /grateful.php');
    } else {
      echo "Error: " . $reg . "<br>" . $con->error;
    }
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>
