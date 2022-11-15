<?php
session_start();
include("connection.php");

if (isset($_SESSION['user_id'])) {
    # code...
    
        if(reset($_SESSION['user_id']($_SERVER['REQUEST_METHOD'] == "POST"))){
            // check if clicked post button
        
            $user_name= $_POST['user_name'];
            $password= $_POST['password'];
        
            if (!empty($user_name) && !empty($password) && !is_numeric($user_name)){
                # code...
                //saving to the database
                $query= "select * from users where user_name=:id limit 1";
                try {
                    //code...
               
                    $cmd= $con->prepare($query);
                    $cmd-> execute([':id'=>$user_name]);
                
                    //read
                    if ($cmd->rowCount() < 1) {
                        echo " user not found";
                    }
                    else {
                        
                        
                        $user_data = $cmd->fetchObject();
                        
                        if (password_verify($password,$user_data->password)) {
                            # code...
                            $_SESSION['user_id'] = $user_data->user_name;
                            
                            header("Location: product.php");
                            die;
                        }
                        else {
                            
                            echo("Enter correct Username.");
                        }
                    }
                } catch (PDOException $e) {
                    //throw $th;
                    echo "Failed to connect";
                    file_put_contents('pdoerror.txt',$e->getMessage());
                }
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
    <title></title>
</head>
<body class="log">
    
    <div class="enter">
       <form action=""  method="POST" target="_self">
           <h1>Note You're About To Reset Your Password!</h1><br>
       <label for="email"><b>Username:</b></label>
       <input type="email" name="email" id="email" placeholder="Enter Validemail...@gmail" required/>
       <br><br>
          
       <label for="pwd"><b>Password:</b></label>
       <input type="password" name="pwd" id="pwd" placeholder="New Password" maxlength="15" minlength="8" pattern="[a-zA-Z0-9]+" required/><br><br>
       
       <label for="confirm_password"><b> Password:</b></label>
       <input type="confirm_password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" maxlength="15" minlength="8" pattern="[a-zA-Z0-9]+" required/><br>
           <center><button type="submit" class="dropbt"><span title="Ensure password matches">Submit</span></button></center><br>
        <center><p>Thank you.</p></center>
       
       </form>
    </div>
   </body>
</html>