<?php
$con = mysqli_connect('localhost','id14971852_root','86!uLBs7+YE73[77');
mysqli_select_db($con, 'id14971852_registration');
$name = $_POST['id'];
$s = " SELECT * FROM  signup WHERE id ='$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num ){
    while($row = $result->fetch_assoc())
    {
        print_r(json_encode($row));

    }   
    exit();
}else{
    echo "No Data";
}
?>