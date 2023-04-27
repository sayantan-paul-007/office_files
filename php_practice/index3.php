<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p style='text-align: center;'>
        <?php 
          $a = 1.24;
          if(is_int($a)){
            echo $a, ' is an integer';
          }
          else{
            echo $a, ' is not an integer';
          }
            ?>
    </p>
</body>
</html>