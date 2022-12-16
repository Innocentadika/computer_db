<?php
require_once "connection.php";

if(strtolower($_SERVER["REQUEST_METHOD"]) === "post"){
    $user_name = $_POST['user_name'];
    
        //reading data
        $sql = "INSERT INTO users(user_name,password) VALUES(?,?)";
        try {
            $cmd = $con->prepare($sql);
            $cmd->execute([$user_name]);
            $_SESSION['success'] = "email sent successful";

            header("Location: Login.php");
        } catch (PDOException $e) {
            $_SESSION['error'] = "sorry an error occurred, type correct email!";
            file_put_contents("pdoerrors.txt",$e->getMessage());
        }
    }



?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Password Reset</title>

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="style.css">

</head>

<body>
            <div class="enter">

                    
                                        
                                    </form>
            </div>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./images/istockphoto-1165295579-170x170.jpg" type="image/x-icon">
</head>
<body class="log">
    
 <div class="enter">
    <form method="POST" target="_parent">
    <h1>Forgot Your Password?</h1><br>
                    <p>We get it, stuff happens. Just enter your email address below
                        and we'll send you a link to reset your password!</p>
                                    <br>
                                    <style>
                                        input[type=email]
                                    </style>
                                    <form method="post">
                                <center>
                                            <input type="email" class="form-control form-control-user"
                                                id="user_name" name="user_name" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..."><br><br>
                                                <input type="submit" value="Reset Password">
                                </center>
    
    </form>
 </div>
</body>
</html>