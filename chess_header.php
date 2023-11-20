<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>MrgChess</title>
    <link rel="stylesheet" type="text/css" href="menuIcon.css">
    <style>
        body{
            background-size:cover;
            background-image:linear-gradient(purple,grey);
            position:relative;
            
        }
        </style>
</head>

<body>
<button id="menuIcon" aria-Label="Toggle Menu">
<span class="bar"></span>
<span class="bar"></span>
<span class="bar"></span>
</button>
<nav>
<div id="mainMenu"style="background-color:transparent">
    <ul style="position:absolute">
    <li><a href="index.php">Home</a></li><br><br>
    <li><a href="Discover.php">Social</a></li><br><br>
    <li><a href="blog.php">News</a></li><br><br>
    <li><a href="Discover.php">Learn</a></li><br><br>
    <?php
    if(isset($_SESSION["usersuid"])){
        echo"<li><a href='profile.php'>Profile page</a></li><br><br>";
        echo"<li><a href='includes/logout.inc.php'>Log out</a></li><br><br>";
    }
    else{
        echo"<li><a href='signup.php'>SignUp</a></li><br><br>";
        echo"<li><a href='login.php'>LogIn</a></li><br><br>";
    
    }

    ?>
    </ul>
</nav>
    </div>
    <script src="menu.js"></script>
    <div class ="wrapper"> 