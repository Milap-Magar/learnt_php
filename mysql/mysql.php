<!DOCTYPE html>
<html lang="en">
   <head>
      <title>mySQL</title>
   </head>
   <body>
        <form method="POST" action="insertRecord.php">
            <fieldset>
                <legend>Enter Customer Details</legend>
                 <label for="firstnameLabel">First Name : </label>
                <input type="text" name="firstName"/><br />
                <label for="lastnameLabel">Last Name : </label>
                <input type="text" name="lastName" /><br />
                <label for="emailLabel">Email : </label>
                <input type="text" name="email" /><br />
                <label for="passwordLabel">Password : </label>
                <input type="password" name="password" /><br />
                <label for="dropDownLabel">Gender : </label>
                <select name="dropDown">
                    <option value="F">Female</option>
                    <option value="M">Male</option>
                </select>
                <br />
                <label for="ageLabel">Age : </label>
                <input type="number" name="age" /><br />
            </fieldset>
            <input type="submit" value="Submit" name="submit" />
            <input type="reset" value="Clear" />
        </form>
        <?php
	        include 'selectRecord.php';
        ?>
   </body>
</html>