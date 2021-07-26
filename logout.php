<?php
session_start();
if(!isset($_SESSION['email'])){
    echo 'First Signup!';
    header('location:index.php');
}
 else {
    session_destroy();
     header('location:index.php');    
}

?>