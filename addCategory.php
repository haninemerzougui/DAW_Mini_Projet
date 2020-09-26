<?php




    session_start();
    $con = mysqli_connect('localhost','root','86!uLBs7+YE73[77');
    mysqli_select_db($con, 'id14971852_registration');
    $name = $_POST['categoryName'];
    $s = "SELECT * FROM  categories WHERE categoryName ='$name'";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);
    if($num == 1 ){
        header('location:  /categories.php?msg=This category is already created...!');
    }else{
    $reg = "INSERT INTO categories(categoryName) VALUES ('$name')";
    mysqli_query($con , $reg);
       header('location:  /categories.php?msg=category created seccess!');
    }
    ?>