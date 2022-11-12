<?php
function check_login($con){
if (isset($_SESSION['user_id'])) {
    # code...
    $id= $_SESSION['user_id'];
    
    $query= "select*from the user_data where user_id= '$user_id' limit 1";

    //read
    $result= mysqli_query($con, $query);

    //check if true
    if ($result && mysqli_num_rows($result) > 0) 
        {
            # code...
            $user_data= mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
header("Location: Login.php");
die;
}


function random_num($length){
    $text="";
    if ($length < 8) {
        # code...
        $length= 8;
    }

    $len= rand(7,$length);
    for ($i=0; $i < $len; $i++) { 
        # code...
        $text .=rand(0,9);

    }
    return $text;

}