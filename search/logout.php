<?php
    include 'session_check.php';
    session_destroy();
    header('Location: login.php');
    exit;

?>
<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
</head>
<body>
</body>
</html>