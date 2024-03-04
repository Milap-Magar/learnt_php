<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Register Form</h1>
    <form action="">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" />
        <span id="err_username"></span>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#username').keyup(function(){
                var uname = $(this).val();
                // ajax call
                $.ajax('check_username.php',{
                    data:{'username':uname},
                    dataType:'text',
                    method:'post',
                    success:function(response){
                        $('#err_username').html(response);
                    }
                });
            });
        });
    </script>
</body>
</html>
