<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign Up form using PHP</title>
</head>
<body>
<?php 
    $name = $email = $pwd = '';
    $nameErr = $emailErr = $pwdErr = '';
    // session_start();
    if(isset($_POST['submit'])){
        if(empty($_POST['name'])){
            $nameErr = 'Name is required';
        }
        else{
            $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }
        if(empty($_POST['email'])){
            $emailErr = 'Email is required';
        }
        else{
            $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }
        if(empty($_POST['password'])){
            $pwdErr = 'Password is required';
        }
        else{
            $pwd = filter_input(INPUT_POST,'password',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }
        
            // $_SESSION['name'] = $name;
            // $_SESSION['email'] = $email;
            // $_SESSION['password'] = $pwd;
            // header('Location: new.php');

       
    }

?>




    <div class="form-container">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

    <h1>Sign Up </h1>
    <label for="name">Name</label><br>
    <input type="text" name="name"><br>
    <div class="error">
        <?php echo $nameErr;?>
    </div>
    <label for="email">Email</label><br>
    <input type="email" name="email"><br>
    <div class="error">
    <?php echo $emailErr;?>
    </div>
    <label for="password">Password</label><br>
    <input type="password" name="password"><br>
    <div class="error">
    <?php echo $pwdErr;?>
    </div>
    <input type="submit" value="Submit" id="submit" name="submit">
    </form>
 </div>
</body>
</html>