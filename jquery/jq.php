<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            color:red;
        }
    </style>
</head>
<body>
    <h1>Form Validation</h1>
    <form action="" method="post" id="register">
        <label for="username">Username</label>
        <input type="text" name='username' id='username'>
        <br>
        <label for="phone">phone</label>
        <input type="text" name='phone' id='phone'>
        <br>
        <input type="submit" value="Submit">
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="validation/dist/jquery.validate.js"></script>
    <script>
      $(document).ready(function(){
        // $('#register').validate();
        $("#register").validate({
      rules: {
        username: {
          required: true,
          minlength: 8,
                    maxlength:16
        },
        
        phone: {
          required: true,
          number: true,
                    minlength:9,
                    maxlength:10,
        },
      },
      messages: {
      
        username: {
          required: "Please enter a username",
          minlength: "Your username must consist of at least 8 characters",
          maxlength: "Your username must consist of at most 16 characters"
                },
        phone: {
          required: "Please provide a phone",
          number: "Please enter valid number",
                    minlength:"Phone must be 9 digit minimum",
                    maxlength:"Phone must be 10 digit minimum"
        }
            }
        });
      });
    </script>
</body>
</html>
