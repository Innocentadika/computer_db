<?php
session_start();
include(connection.php);
include(function.php);

if (isset($_SESSION['user_id'])) {
    # code...
    reset($_SESSION['user_id']);
}
echo("Enter correct Username.");

header("Location: login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<body class="log">
    
    <div class="enter">
       <form action="/login.php"  method="post" target="_self">
           <h1>Note You're About To Reset Your Password!</h1><br>
       <label for="email"><b>Username:</b></label>
       <input type="email" name="email" id="email" placeholder="Enter Validemail...@gmail" required/><br><br>
          
                   <label for="pwd"><b>Password:</b></label>
       <input type="password" name="pwd" id="pwd" placeholder="New Password" maxlength="15" minlength="8" pattern="[a-zA-Z0-9]+" required/><br><br>
       <label for="pwd"><b> Password:</b></label>
       <input type="password" name="pwd" id="pwd" placeholder="Confirm Password" maxlength="15" minlength="8" pattern="[a-zA-Z0-9]+" required/><br>
           <center><button type="submit" class="dropbt"><span title="Ensure password matches">Submit</span></button></center><br>
        <center><p>Thank you.</p></center>
       
       </form>
    </div>
   </body>
</html>