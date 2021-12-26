<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Simulated Order Form</title>
   </head>
    <body>
        <form method="POST" action="form_extension.php">
            <h1>Order Form</h1>
            <p>Please fill out this form to place your order : </p>
            <fieldset>
                <legend>Enter your login details</legend>
                <label for="usernameLabel">User Name : </label>
                <input type="text" name="username" value="<?php if(isset($_POST['username'])){ $username = $_POST['username']; echo $username;}?>">
                <label for="emailLabel">Email : </label>
                <input type="text" name="email" value="<?php if(isset($_POST['email'])){ $email = $_POST['email']; echo $email;}?>">
            </fieldset>
            <br/>
            <fieldset>
                <legend>Pizza Selection</legend>
                <label for="sizeLabel">Size : </label>
                <input type="radio" name="radioButton" value="Small">Small
                <input type="radio" name="radioButton" value="Medium">Medium
                <input type="radio" name="radioButton" value="Large">Large
                <br/><br/>
                <label for="dropdownLabel">Topping : </label>
                <select name="dropDown">
                    <option value="Please Select">Please select your topping</option>
                
                    <option value="Strawberry">Strawberry</option>
                    <option value="Pineapple">Pineapple</option>
                    <option value="Sausage">Sausage</option>
                </select>
                <br/><br/>
                <label for="extrasLabel">Extras : </label>
                
                <input type="checkbox" name="checkbox[]" value="Olives">Olives
                <input type="checkbox" name="checkbox[]" value="Capers">Capers
            </fieldset>
            <br/>
            <input type="submit" name="submit" value="Submit">
            <input type="reset" name="clear" value="Clear">
        </form>

        <?php 
            if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $email = $_POST['email'];
                $validatedUsername = filter_var($username,FILTER_SANITIZE_STRING);
                $validatedEmail = filter_var($email,FILTER_VALIDATE_EMAIL);
                
                if(!empty($username) && !empty($email)){
                    if($validatedUsername && $validatedEmail){
                        if(isset($_POST['radioButton'])){
                            $radioButton =  $_POST['radioButton'];
                            if(isset($_POST['dropDown'])){
                                $topping = $_POST['dropDown'];
                                if($topping != "Please Select"){
                                    echo "<h1>Thanks for your order : </h1>";
                                    echo "<br/>Customer ID : " .$validatedUsername;
                                    echo "<br/>Email : " .$validatedEmail;
                                    echo "<br/>Size : " .$radioButton;
                                    echo "<br/> Topping : " .$topping;
                                        if(isset($_POST['checkbox'])){
                                            echo "<br/> Extras Topping : ";
                                            foreach($_POST['checkbox'] as $value)
                                            {
                                                echo $value. " ";
                                            }
                                   
                                        }
                                    
                                      else{
                                        echo "";
                                    }
                                }
                                else{
                                    echo "<br/>Please select your topping";
                                }
                            }
                            
                            else{
                                echo "";
                            }
                        }
                        else{
                            echo "<br/>Please select the size for your pizza";
                        }
                    }
                    elseif(!$validatedUsername && $validatedEmail){
                        echo "<br/>Invalid Username";
                    }
                    elseif(!$validatedEmail && $validatedUsername){
                        echo "<br/>Invalid Email";
                    }
                    else{
                        echo "<br/>Invalid Username & Email";
                    }
                }
                else{
                    echo "<br/>Please fill all fields!";
                }              
            }
        ?>

    </body>
</html>