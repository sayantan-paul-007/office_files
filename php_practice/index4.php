<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
    $a = 12*4-121;
    $b =  14*5%3;
    $c =  12 *4 *2-98;
    if($a > $b){
        if($a > $c){
            echo $a, ' is the greatest';
        }
        else{
            echo $c, ' is the greatest';
        }
    }
    else{
        if($b > $c){
            echo $b, ' is the greatest';
        }
        else{
            echo $c, ' is the greatest';
        }
    }
    ?>
</body>
</html>