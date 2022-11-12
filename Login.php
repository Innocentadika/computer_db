<?php
session_start();

include("connection.php");
include("function.php");

//checks if the user is already loged in.
$user_data= check_login($con);

if($_SERVER['REQUEST_METHOD'] == "POST"){
    // check if clicked post button

    $user_name= $_POST['$user_name'];
    $password= $_POST['$password'];

    if (!empty($user_name) && !empty($password) && is_numeric($user_name)){
        # code...
        //saving to the database
        $query= "select * from user_data where user_name = '$user_name' limit 1";

        //setting max entry
        $user_id= random_num(20);

        mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) 
    {
        # code...
        $user_data= mysqli_fetch_assoc($result);

        if ($user_data['password'] === $password) {
            # code...
            $_SESSION['user_id'] = $user_data['user_data'];
            
            header("Location: product.php");
            die;
        }
    }

}
    else {
        
        echo"Wrong Password or Username!";
    }
    
}
?>

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
    <form method="post" target="_parent">
        <h1>Welcome to Login Page</h1><br>
    <label for="email"><b>Username:</b></label>
    <input type="email" name="user_name" id="text" placeholder="Enter Validemail...@gmail" required/><br><br>
       
                <label for="pwd"><b> Password:</b></label>
    <input type="password" name="password" id="text" placeholder="Enter Password" maxlength="15" minlength="8" pattern="[a-zA-Z0-9]+" required/><br>
        <center><button type="submit" class="dropbt">login</button></center><br>
        <center><a href="reset.php"><em>Forgot Password</em></a></center>
    
    </form>
 </div>
</body>
</html>