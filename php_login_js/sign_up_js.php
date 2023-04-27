<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Sign Up form using JS + PHP</title>
</head>
<body>
<div class="form-container">
<form    method="post" onsubmit="return validated();">
<h1>Sign Up </h1>
<label for="name">Name</label><br>
<input type="text" name="name" id='name'><br>
<p id="errorname">
</p>
<label for="email">Email</label><br>
<input type="email" name="email" id='email'><br>
<p id="erroremail">
</p>
<label for="password">Password</label><br>
<input type="password" name="password" id='pwd'><br>
<p id="errorpwd">
</p>
<div class="submit">
<input type="submit" value="Submit" id="submit" name="submit">
</div>
</form>
</div>
<script>
       function validated(){
        let name = document.getElementById('name').value;
        let email = document.getElementById('email').value;
        let pwd = document.getElementById('pwd').value;
        let nameErr = document.getElementById('errorname');
        let emailErr=document.getElementById('erroremail'); 
        let pwdErr = document.getElementById('errorpwd');
            if(name == "" ){
                nameErr.innerHTML='Name is required';
                return false;
            }
            if(email == ""){
                emailErr.innerHTML='Email is required';
                return false;
            }
            if(pwd == ""){
                pwdErr.innerHTML='Pwd is required';
                return false;
            }
            return true;
    }


</script>
</body>
</html>