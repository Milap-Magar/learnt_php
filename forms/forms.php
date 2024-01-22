<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Forms</title>
   </head>
   <body>
        <h1>Processing Input from HTML Forms</h1>
        
    
        <h2>Login Form Using POST</h2>
        <form method="POST" action="forms.php"> 
            <fieldset>
                <legend>Login</legend>
                 <label for="email">Email: </label>
                <input type="text" name="txtEmail"/><br />
                <label for="passwd">Password: </label>
                <input type="password" name="txtPass" /><br />
                <input type="submit" value="Submit" name="loginSubmit" />
                <input type="reset" value="Clear" />
            </fieldset>
        </form>


        <?php
        //Retreiving data using the POST method
            if(isset($_POST['loginSubmit'])){
                $email = $_POST['txtEmail'];
                $password = $_POST['txtPass'];
        
                echo "<br/>Email : " .$email. " Password : " .$password;
            }
        ?>

        <!--More Form Handling - HTML Code-->
        <br/><br/>
        <form method="POST" action="#">
            <fieldset>
                <legend>Comments</legend>
                <label for="emailLabel">Email: </label>
                <input type="text" name="email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>" /><br />
                <textarea rows="4" cols="50" name="comment"></textarea><br />
                <label for="checkboxLabel">Click to Confirm: </label>
                <input type="checkbox" name="checkbox" value="agree"><br />
                <input type="submit" value="Submit" name="submit"/>
                <input type="reset" value="Clear" name="clear"/>
            </fieldset>
        </form>

        <?php 
        //More Form Handling - PhP Code
            if(isset($_POST['checkbox']))
            {
                $confirm ="Agreed";
                if(isset($_POST['submit'])){
                    $email_address = $_POST['email'];
                    $comment = $_POST['comment'];
                    $email_filter = filter_var($email_address, FILTER_VALIDATE_EMAIL);

                    //Vaidation
                    if($email_filter)
                    {
                        if(!empty($email_address)){
                        echo "<br/>Email : " .$email_address. "<br/> Comment : <br/>" .$comment. "<br/>Confirm : " .$confirm;
                        }

                    }
                    else
                    {
                        echo "<br/>Please enter a valid email address!";
                    }

                }
    
                else{
                    echo "<br/>Form , Not Submitted!";
                }

            }

            else{
                $confirm ="Not Agreed <br/>";
                echo "<br/>Checkbox : " .$confirm. "Please, tick the Checkbox!";
            }
        ?>

        <!--Tax Calculator Form - HTML Code -->
        <br/><br/>
        <h2>Tax Calculator</h2>
        <form method="POST" action="#">
            <fieldset>
                <legend>Without Tax Calculator</legend>
                <label for="afterTax_Label">After Tax Price : </label>
                <input type="text" name="afterTax" value="<?php if(isset($_POST['afterTax'])){echo $_POST['afterTax'];}?>"/>
                <label for="taxRate_Label">Tax Rate : </label>
                <input type="text" name="taxRate" value="<?php if(isset($_POST['taxRate'])){echo $_POST['taxRate'];}?>"/>
                <input type="submit" value="Submit" name="submitButton"/>
                <input type="reset" value="Clear" />
            </fieldset>
        </form>
        
        <?php 
        //Tax Calculator Form - PhP Code
        if(isset($_POST['submitButton']))
        {
        
        $afterTax = $_POST['afterTax'];
        $taxRate = $_POST['taxRate'];
        $afterTax_validation = filter_var($afterTax, FILTER_VALIDATE_FLOAT);
        $taxRate_validation = filter_var($taxRate, FILTER_VALIDATE_INT);

            if(!empty($afterTax) && !empty($taxRate))
            {

                if($afterTax_validation && $taxRate_validation){
                    $beforetaxPrice = (100*$afterTax_validation) / (100+$taxRate_validation);
                    echo "<br/><b>Price before tax = &pound".number_format($beforetaxPrice,2). "</b>";
                }

                elseif(!$afterTax_validation && $taxRate_validation){
                    echo "<br/>Please enter the price in the format 9.99";
                }

                elseif(!$taxRate_validation && $afterTax_validation){
                    echo "<br/>Please enter a whole number for tax rate";
                }

                else 
                {
                echo "<br/>Please enter valid formats!";
                }
            }

            else{
                echo "<br/>All Fields Required!";
            }
            }
        
        
        ?>

        <!--$_GET and $_POST-->
        <h1>Passing Data Appended to an URL</h1>
        <h2>Pick a category</h2>
        <a href="forms.php?category=Films">Films</a>
        <a href="forms.php?category=Books">Books</a>
        <a href="forms.php?category=Music">Music</a>

        <?php 
        //$_GET and $_POST
            if(isset($_GET['category']))
            {
                $category = $_GET['category'];
                echo "<br/>The Category chosen is : " .$category;
            }
        ?>

        <!--Extension Exercise-->
        <br/><br/>
        <a href="form_extension.php">Form Extension </a>
        

   </body>
</html>