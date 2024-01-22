<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body style="background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5));">
    <fieldset style="width: 24%; text-align: center; margin: 18% 0 0 34%; padding: 4%;">
        <legend>Login Page</legend>
        <form method="POST" action="">
            <label for="usernameLabel">Username : </label>
            <input type="text" name="username"/><br/><br/>
            <label for="passwordLabel">Password : </label>
            <input type="password" name="password"/><br/><br/>
            <input type="submit" name="login" value="Login"/>
            <input type="reset" name="clear" value="Clear"/>
        </form>
    </fieldset>

</body>
</html>



<?php 
    session_start();
    if(isset($_POST['login'])){
        $uname = $_POST['username'];
        $upass = md5($_POST['password']);

        if(!empty($uname) && !empty($upass)){

            $query = "SELECT * from register where username = '$uname' and password = '$upass'";

            include 'connection.php';

            $result = mysqli_query($connection, $query);

            $count = mysqli_num_rows($result);

            if($count==1){
                $_SESSION['username'] = $uname;
                header('Location:sortSearch.php');
                exit;
            }
            else
            {
                echo "<br><span style='color:red; font-size:20px; text-align:center; position:absolute; margin:4% 0 0 46%;'>Login Failed</span>";
            }

        }
        else{
            echo "<br/> Feedback : <br/>Please fill all fields";
        }
        
        mysqli_close($connection);

    }
?>
