<?php
require 'common.php';
$name= mysqli_real_escape_string($con, $_POST['name']);
$email=$_POST['email'];
$regex_email="/^[_a-z0-9-]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)){
    echo "Incorrect Email";
}
$password= md5($_POST['password']);
if(strlen($password) < 6){
    echo "Password should have at-least 6 characters";
}
$contact= $_POST['contact'];
$city= $_POST['city'];
$address= mysqli_real_escape_string($con, $_POST['address']);
$query="SELECT id FROM users WHERE email='$email'";
$result= mysqli_query($con, $query) or die(mysqli_error($con));
if(mysqli_num_rows($result)>0){
    echo "<center><h1>Email ID already Exists</h1></center>";
    header( "refresh:5;url=product.php" );
}
else{
$query2="INSERT INTO users(name,email,password,contact,city,address) VALUES('$name', '$email', '$password', '$contact', '$city', '$address')";  
$result2=mysqli_query($con, $query2) or die(mysqli_error($con));
$_SESSION['email']='$email';
   $_SESSION['id']=mysqli_insert_id($con);
   header('location:index.php');
          
}

?>

