<?php
session_start();
$con = mysqli_connect('localhost','id14971852_root','86!uLBs7+YE73[77');
mysqli_select_db($con, 'id14971852_registration');
$name = $_POST['name'];
$pass = $_POST['password'];
$s = " SELECT * FROM  signup WHERE fullName ='$name' and userPass ='$pass'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num ){
    while($row = mysqli_fetch_array($result))
    {
        $_SESSION['userID'] = $row[0];

    }   
    $_SESSION['user'] = $_POST['name'];
    header('Location: /grateful.php');
    exit();
}else{
    header('Location: /login1.php?error=full name or password incorrect! ');
    exit();
}
?>
 