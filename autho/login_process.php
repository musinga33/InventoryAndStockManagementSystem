<?php

session_start();

include "../config/database.php";


$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * FROM users 
        WHERE username='$username' 
        AND password='$password'";


$result = mysqli_query($conn,$sql);


if(mysqli_num_rows($result)>0){

    $user = mysqli_fetch_assoc($result);

    $_SESSION['username'] = $user['username'];
    $_SESSION['role'] = $user['role'];

    header("Location: ../dashboard/index.php");

}
else{

    echo "Invalid Username or Password";

}

?>