<?php
require 'common.php';
//if (isset($_SESSION['email'])) {
    //header('location: index.php');}
include'header.php';
    ?>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>  
    </head>
    <body>
        <?php
        //include 'header.php';
        ?>
        
        <div class="container" style="height: 100%; ">
            <br><br><br><br><h1>EMPLOYEE REGISTRATION</h1>
            <div class="row">
                <div class="col-xs-6">
            <form method="post" action="signup_script.php">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Name" required="true"><br>
                        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email"
                   required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br>
                        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password"
                   required="true" pattern=".{6,}"><br>
                        </div>
       <div class="form-group">
           <input type="text" class="form-control" name="contact" placeholder="Contact"
                  required="true" pattern=".{6,}"><br>
                        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="city" placeholder="City" required="true"><br>
                        </div>
            <div class="form-group">
                <input type="text" class="form-control" name="address" placeholder="Address" required="true"><br>
                        </div>
                <button class="btn btn-primary" style="background-color: #008b00">Submit</button></form>
            </div>
                <div class="col-xs-6">
                    <img src="img/5.png" style="width:80%; height: 40%;">
                </div>
            </div></div>
        
         <?php
        // include 'footer.php';
         ?>
    </body>
</html>
