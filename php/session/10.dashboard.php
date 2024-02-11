<?php 
session_start();
if(!isset($_SESSION['username'])){
    header('location:10.login.php?msg=1');
}
$validtime  = $_SESSION['login_time'] + 60;
if(isset($_SESSION['login_time']) && time() < $validtime){
    $_SESSION['login_time'] = time();
}else {
    header('location:10.login.php?msg=2');
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard</h1>
    <p>Welcome <?php echo $_SESSION['username'] ?> User</p>
    <a href="10.logout.php">Logout</a>
</body>
</html>