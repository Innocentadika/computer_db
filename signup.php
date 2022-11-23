<?php
require_once "connection.php";

if(strtolower($_SERVER["REQUEST_METHOD"]) === "post"){
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    
    if($password != $confirm_password){
        $_SESSION['error'] = 'Passwords do not match';
        header("location:signup.php");
    }else{
        //encrypting pass
        $password = password_hash($password,PASSWORD_DEFAULT);
        //reading data
        $sql = "INSERT INTO users(user_name,password) VALUES(?,?)";
        try {
            $cmd = $con->prepare($sql);
            $cmd->execute([$user_name,$password]);
            $_SESSION['success'] = "Registration successful";

            header("Location: Login.php");
        } catch (PDOException $e) {
            $_SESSION['error'] = "sorry an error occurred";
            file_put_contents("pdoerrors.txt",$e->getMessage());
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Innocent accessory shop</title>
    <link rel="shortcut icon" href="../images/istockphoto-1165295579-170x170.jpg" type="image/x-icon">
    <link rel="stylesheet" href="login.php">

</head>
<body class="front">
    
    


                        
                    <center> <img src="./images/my page.jpg" alt="" width="50" height="50" class="font"></center>
                    <div class="dsp">
        <a href="info.php"><img src="./images/download1.jpg" alt="Products" sizes="150" srcset=""></a>
        <a href="info.php"><img src="./images/background2.jpg" alt="cart" sizes="150" srcset=""></a><br>
        <a href="info.php"><img src="./images/background1.jpg" alt="cart" sizes="150" srcset=""></a>
        <a href="info.php"><img src="./images./images (50).jfif" alt="cart" sizes="150" srcset=""></a>
        <br>
        
        


            <p>Dear customer,</p>
            <p>In my website after login you will be able to to add cart to continue with purchase.</p>
            <p>We offer 50% on purchase exceeding <strong>Ksh.50,000</strong>.</p>
            <p>This is one of most trusted platforms to make a purchase on quality accessories.</p>
            <p>Let us create a secure environment by signing in here.</p>
            

            </strong>
    </div>
<div class="login">
    <form  method="POST" >
        <img src="./images/Accountancy.jpg" alt="cart" width="400" height="300" srcset=""><br>
            
                    <label for="email"><b>Username:</b></label>
        <input type="email" name="user_name" id="email" placeholder="Enter Validemail...@gmail" required/><br><br>
        
                    <label for="password"><b> Password:</b></label>
        <input type="password" name="password" id="password" placeholder="Enter Password" maxlength="15" minlength="8" pattern="[a-zA-Z0-9]+" required/><br><br>
        <label for="confirm_password"><b> Password:</b></label>
        <input type="password" name="confirm_password" id="confirm_password" placeholder="Re Password" maxlength="15" minlength="8" pattern="[a-zA-Z0-9]+" required/><br><br>

        
        <input class="save" type="checkbox" name="remember"><strong>Remember Me</strong></input>
                <button type="submit" class="dropbt">submit</button><br>
            <center></center>
                    <div class="container signin">
            <p>Already have an account?<a href="Login.php">Sign in</a>.</p>
                    </div>

                    <div class="container signin">
            <p>Sign up as Admin<a href="./admin/register.php">Register</a>.</p>
                    </div>
        
    </form>
</div>         

    </body>
 </html>

