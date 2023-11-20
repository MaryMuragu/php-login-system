<style>
        body{
            background-size:cover;
            background-image:linear-gradient(yellow,lime,purple,green,black);
            
        }
        </style>
<?php
    include_once "chess_header.php";
?>

    <section="login-form">
    <div class="login-form-form"style="text-align:center">
    <h2>Enter your Email/Username<br>This will allow you to log in on your device<h2>
    <form action="includes/login.inc.php"method="post">
        <div class="wrapper">
        <input type="text"name="uid"placeholder="Username/Email"style="width:300px;height:50px;border-radius:10px;background-color:lime;"><br><br>
        <input type="password"name="pwd"placeholder="Password"style="width:300px;height:50px;border-radius:10px;background-color:lime;"><br><br>
        <button type="submit"name="submit"style="width:100px;height:50px;background-color:purple;border-radius:10px;">Log In</button>
</div>
    </form>
</div>
<?php
if (isset($_GET["error"])){
    if($_GET["error"]=="emptyinput"){
        echo"<p>Fill in all fields!</p>";
    }
    else if ($_GET["error"]=="improperlogin"){
        echo"<p>Incorrect login information!</p>";
    }
    
}
?> 

</section>
<?php
    include_once "footer.php"
?>