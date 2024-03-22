<?php 
session_start();
if(!isset($_SESSION['username'])){
    header('location:Question1.php?msg=1');
}
$validtime  = $_SESSION['login_time'] + 60;
if(isset($_SESSION['login_time']) && time() < $validtime){
    $_SESSION['login_time'] = time();
}else {
    header('location:Question1.php?msg=2');
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard</h1>
    <p>Welcome <?php echo $_SESSION['username'] ?> User</p>
    <a href="Question1.php">Logout</a>
</body>
</html>