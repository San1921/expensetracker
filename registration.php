<?php

session_start();

$con = mysqli_cconnect('localhost','root','*A4B6157319038724E3560894F7F932C8886EBFCF')
    
mysqli_select_db($con, 'userregistration')
    
$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from usertable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num ==){
    echo" Username Already Taken";
}else{
    $reg= " insert into usertable(name , password)" values ('$name','$pass')";
    mysqli_query($con, $reg);
    echo"Registration Successful";
}
}
?>