<?php
session_start();
if (isset($_SESSION['user_id'])) {
    # code...
    unset($_SESSION['user_id']);
}

echo"Was good having you.";

header("Location: login.php");

?>