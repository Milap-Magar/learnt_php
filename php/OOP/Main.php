<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery Demo</title>
</head>
<body>
    <p id="a">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa natus vel perspiciatis eligendi quidem pariatur enim temporibus tenetur, sit aliquid cumque cum eum ullam nemo iure nisi accusantium ratione provident.</p>    
    <button>Hide</button>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        /*
            $(selector).function();
            $(document).ready(function(){
                $('button').click(function(){
                    $('#a').hide();
                });
            });
        */
       $(document).ready(function(){
        $('button').click(function(){
            $('#a').hide();
        })
       });
    </script>
</body>
</html>
