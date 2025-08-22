<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <style>
        

        body 
            
        {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: rgb(114, 217, 246);
            opacity: 0.5;
        }

        

        .login-main {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 500px; 
            text-align: center; 
        }

        .login-main h2 {
            margin-bottom: 20px;
        }

        .login-main .input-group {
            margin-bottom: 15px;
            text-align: left; 
        }

        .login-main .input-group label {
            display: block;
            margin-bottom: 5px;
        }

        .login-main .input-group input {
            width: calc(100% - 20px); 
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin: 0 auto; 
            display: block;
        }

        .login-main button {
            width: 20%;
            padding: 10px;
            background-color: #000000;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        .login-main button:hover {
            background-color: #0056b3;
        }

    </style>
</head>
<body>

<div class="login-main">
    <h2>Login</h2>
        
    <form method="post" action="" name="Form1" >
        User <input type="text" name="user"  disabled> <br><br>
    
        Password <input type="password" name="pass"  readonly>  <br><br>

        <input type="reset" name="a1" value="ยกเลิก">
        <input type="submit" name="a2" value="ตกลง">

    </form>

        
        <button type="submit">Login</button>

        <div class="container">

        </div>

    </form>
</div>

</body>

<?php

    if(isset($_POST["submit"]))
    {
        $user = ($_POST["uname"]);
    }



?>

</html>

