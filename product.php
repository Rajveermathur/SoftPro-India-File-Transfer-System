<?php
require 'common.php';
?>
<html>
    <head>
        <title>Welcome</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
   
    </head>
    <body>
        <?php
       //include 'header.php';
       //include 'check-if-added.php';
        ?>
        <div class="container" style="padding-top: 100px;">
            <div class="jumbotron">
                <h1>Welcome to our E Store!</h1>
                <h4>We have the best Cameras and their Best price for you. No need to hunt around, we have all in one place.</h4>
             
            </div>
            <div class="row text-center">
                <div class="col-xs-4">
                    <div href="#" class="thumbnail"><img src="img/5.jpg">
                        <div class="caption">
                            <h3>Cannon EOS</h3><p>Price: Rs.36000.00</p>
                            <?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a> </p>
                            <?php
                            }else{
                                if(check_if_added_to_cart(1)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }else{ ?>
                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>  
                        </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div href="#" class="thumbnail"><img src="img/2.jpg">
                        <div class="caption">
                            <h3>Sony DSLR</h3><p>Price: Rs.40000.00</p>
                            <?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a> </p>
                            <?php
                            }else{
                                if(check_if_added_to_cart(2)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }else{ ?>
                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div href="#" class="thumbnail"><img src="img/3.jpg">
                        <div class="caption">
                            <h3>Sony DSLR</h3><p>Price: Rs.50000.00</p>
                            <?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a> </p>
                            <?php
                            }else{
                                if(check_if_added_to_cart(3)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }else{ ?>
                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div href="#" class="thumbnail"><img src="img/4.jpg">
                        <div class="caption">
                            <h3>Olympus DSLR</h3><p>Price: Rs.80000.00</p>
                            <?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a> </p>
                            <?php
                            }else{
                                if(check_if_added_to_cart(4)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }else{ ?>
                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div href="#" class="thumbnail"><img src="img/21.jpg" style="height: 233.35px; width: 350.04px;">
                        <div class="caption">
                            <h3>Nikon D3500</h3><p>Price: Rs.53000.00</p>
                            <?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a> </p>
                            <?php
                            }else{
                                if(check_if_added_to_cart(5)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }else{ ?>
                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div href="#" class="thumbnail"><img src="img/22.jpg" style="height: 233.35px; width: 350.04px;">
                        <div class="caption">
                            <h3>Nikon Coolpix P950</h3><p>Price: Rs.90000.00</p>
                            <?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Order Now!</a> </p>
                            <?php
                            }else{
                                if(check_if_added_to_cart(7)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }else{ ?>
                            <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>
             </div>
        </div>
        
        <?php
        //include 'footer.php';
        ?>
    </body>
</html>
