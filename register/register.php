<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body style="background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5));">

    <fieldset style="width: 24%; text-align: center; margin: 15% 0 0 38%;">
  
        <legend>Register</legend>
        <form method="POST" action="register.php">
            <label for="usernameLabel">Username : </label>
            <input type="text" name="username"/><br/><br/>
            <label for="emailLabel">Email : </label>
            <input type="text" name="email"/><br/><br/>
            <label for="passwordLabel">Password : </label>
            <input type="password" name="password"/><br/><br/>
            <label for="dropDownLabel"> Age Range : </label>
            <select name="dropDown">
                <option value="-">-</option>
                <option value="0-18">0 - 18</option>
                <option value="19-30">19 - 30</option>
                <option value="31-50">31- 50</option>
                <option value="50-60">50 - 60</option>
                <option value="60+">60 +</option>
            </select>
            <br/><br/>
            <input type="checkbox" name="checkbox" value="checkbox"/>
            <label for="checkboxLabel">I agree to terms and conditions</label>
            <br/><br/>
            <input type="submit" name="register" value="Register"/>
            <input type="reset" name="reset" value="Clear"/>
        </form>
    </fieldset>
</body>
</html>

<?php

    if(isset($_POST['register'])){
        $uname = $_POST['username'];
        $uemail = $_POST['email'];
        $upass = $_POST['password'];
        $udrop = $_POST['dropDown'];
        @$ucheck = $_POST['checkbox'];
        $pattern = "/^[azA-Z]{4,}$/im";
        $pattern_1 = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?!.*[&%$]).{8,}$/";

        $vname = filter_var($uname, FILTER_SANITIZE_STRING); //FILTER_SANITIZE_STRING removes tags and remove or encode special characters from strings
        $vemail = filter_var($uemail, FILTER_VALIDATE_EMAIL); // The FILTER_VALIDATE_EMAIL filter validates an e-mail address   
        $vpass = filter_var($upass, FILTER_SANITIZE_STRING);

        if(!empty($uname) && !empty($upass) && !empty($uemail)){
            if($vname){
                if(preg_match_all($pattern,$uname)) // Preg_match searches the string for pattern, and returns true if the pattern exists otherwise returns false.
                 {
             if($vemail){
             if($vpass){
                 if(!preg_match($pattern_1,$upass)){
                 echo "<span style='text-align:center; position:absolute; margin: 3% 0 0 26%;'> Feedback : Password should be of 8 or more characters and should contain at least one Captial Letter, a Number and a Symbol</span>";
                  }

                 else{
                  if($udrop!="-"){
                  if($ucheck){
                                            
                    $upassEnc = md5($_POST['password']);
                                
                     include 'connection.php';

                     $query = "insert into register(username, email, password, age_Range) values('$vname', '$vemail', '$upassEnc', '$udrop')";

                    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

                     if($result){
                        echo "<span style='text-align:center; position:absolute; margin: 3% 0 0 45%;'> Feedback : User Successfully Registered</span>";
                             }

                         else{
                             echo "<span style='text-align:center; position:absolute; margin: 3% 0 0 45%;'> Feedback : User Registration Fail</span>";
                             }
                                    
                            mysqli_close($connection);

                                }

                        else{
                             echo "<span style='text-align:center; position:absolute; margin: 3% 0 0 45%;'> Feedback : Please accept the terms and conditions</span>";
                               }

                              }
                                    
                         else{
                                echo "<span style='text-align:center; position:absolute; margin: 3% 0 0 45%;'> Feedback : Please choose your age range</span>";
                                }

                                }
                        }
                        
                        else{
                            echo "<span style='text-align:center; position:absolute; margin: 3% 0 0 45%;'> Feedback : Please enter a valid password</span>";
                          }

                         }

                     else{
                        echo "<span style='text-align:center; position:absolute; margin: 3% 0 0 45%;'> Feedback : Please enter a valid email address</span>";
                      }

                   }

                    else{
                    echo "<span style='text-align:center; position:absolute; margin: 3% 0 0 33%;'> Feedback : Username should at least consist 4 Characters and should be Alphabets</span>";  
                  }

                }

                else{
                  echo "<span style='text-align:center; position:absolute; margin: 3% 0 0 45%;'> Feedback : Please enter a valid username</span>";
                 }
   
               }
   
             else{
               echo "<span style='text-align:center; position:absolute; margin: 3% 0 0 45%;'> Feedback : Please fill all fields</span>";
             }
       }

?>