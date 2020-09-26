<?php




    session_start();
    header('location:  /login1.php');
    $con = mysqli_connect('localhost','id14971852_root','86!uLBs7+YE73[77');
    mysqli_select_db($con, 'id14971852_registration');
    $name = $_POST['name'];
    $phone = $_POST['numberphone'];
    $wilaya = $_POST['wilaya'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $s = " SELECT * FROM  signup WHERE fullName ='$name' and email = '$email'";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);
    ;
    if($num == 1 ){
        header('location:  /login1.php?error=full name or email already taken!');
       

    }else{
        
    $reg = " INSERT INTO signup(fullName , numberPhone , wilaya , email , userPass ) VALUES ('$name' , '$phone' ,'$wilaya' ,'$email', '$pass')";
    mysqli_query($con , $reg);
    header('location:  /grateful.php'); 
    $_SESSION['user'] = $_POST['name'];
    exit();   
    }
    ?>