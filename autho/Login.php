<?php
session_start();

if(isset($_SESSION['username'])){
    header("Location: ../dashboard/index.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - Inventory System</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

<div class="login-container">

    <h2>Inventory System</h2>

    <form action="login_process.php" method="POST">

        <label>Username</label>
        <input type="text" name="username" required>


        <label>Password</label>
        <input type="password" name="password" required>


        <button type="submit">
            Login
        </button>

    </form>

</div>

</body>
</html>