<?php
function check_login($con){
if (isset($_SESSION['user_id'])) {
    # code...
    $id= $_SESSION['user_id'];
    
    $query= "select * from users where user_id=:id limit 1";
    $cmd= $con->prepare($query);
    $cmd-> execute([':id'=>$id]);

    //read
    $result = $cmd-> fetchObject();

    //check if true
    if ($result) 
        return $result;
    }
}


function random_num($length){
    $text="";
    if ($length < 5) {
        # code...
        $length= 5;
    }

    $len= rand(4,$length);
    for ($i=0; $i < $len; $i++) { 
        # code...
        $text .=rand(0,9);

    }
    return $text;

}