<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Expense Manager</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    
    
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top col-sm-12">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">Ct₹l Budget</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="Pages/AboutUs.html"><span class="glyphicon glyphicon-info-sign"></span> About Us</a></li>
                    <li><a href="Pages/SignUp.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="Pages/Login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </nav>
        
        <div class="container-fluid">
            <div class="row">
                <div id="banner-image">
                    <div class="container">
                        <div class="col-sm-6 col-sm-offset-3" id="banner-content">
                            <p class="text">We help you control your budget </p>
                            <a href="Pages/Expense.html" class="btn btn-success btn-lg active">Start Today</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <footer>
            <div class="container">
                <p>Copyright © Control Budget. All Rights Reserved|Contact Us: +91-8448444853.</p>
            </div>
        </footer>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
