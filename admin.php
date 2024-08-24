<?php
 
 $con = mysqli_connect("locahost","root","","booking");
 if(!$con){
    die('connection failed');
 }
 if(isset($_POST['sign in']))
 {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql_query = "insert into form-group (username,password) values('$username','$password');";

    if(mysqli_connect($con,$sql_query)){
        echo "success";
    }
    else{
        echo "error"
    }
    mysqli_close($con);
 }