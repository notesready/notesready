<?php
session_start();
include("checklogin.php");
check_login();

	
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/heroic-features.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
<<<<<<< HEAD
                <a class="navbar-brand" href="../index.html">NotesReady</a>
=======
                <a class="navbar-brand" href="#">Welcome !</a>
>>>>>>> dd02a7ab7894ca4081d5312755569769ecad4b55
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#"><?php echo $_SESSION['name'];?></a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                  
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <header class="jumbotron hero-spacer">
            <h1>A Warm Welcome!</h1>
<<<<<<< HEAD
            <p>Welcmome <a href="#"><?php echo $_SESSION['name'];?></a> to NotesReady.</p>
            <input type="submit" class="btn1 btn btn-primary" onclick="window.location='upload.php'" value="UPLOAD" onblur="check_if_exists()" style="
padding: 10px;font-size: 20px;border: 1px solid;color: white;">

            
<input type="submit" class="btn1 btn btn-primary" onclick="window.location='logout.php'" value="LOGOUT" onblur="check_if_exists()" style="
padding: 10px;font-size: 20px;border: 1px solid;color: white;">
        </header>

        
=======
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
            <p><a  href="logout.php" class="btn btn-primary btn-large">Logout </a>
            </p>
        </header>

        <hr>
         <div class="well hero-spacer">This is by KG! Do like and Subscribe my Channel</div>
>>>>>>> dd02a7ab7894ca4081d5312755569769ecad4b55

      


<<<<<<< HEAD
=======
        </div>

        <hr>


>>>>>>> dd02a7ab7894ca4081d5312755569769ecad4b55
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
