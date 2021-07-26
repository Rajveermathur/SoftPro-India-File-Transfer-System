<?php
require 'common.php';

$email= mysqli_real_escape_string($con, $_POST['email']);
$password= md5($_POST['password']);
$query="SELECT id, email FROM users WHERE password='$password' AND email='$email'" ;
$result= mysqli_query($con, $query) or die(mysqli_error($con));
if(mysqli_num_rows($result)==0){ echo '<br><br><br><br><h1 style="text-align:center;">Invalid Email or Password<br>Kindly Login Again.<h1>';
 header( "refresh:2;url=index.php" );
}
else{
   $_SESSION['email']=$email;
   $_SESSION['id']=mysqli_insert_id($con);
   header("location: index.php"); 
}

?>