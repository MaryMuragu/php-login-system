<style>
        body{
            background-size:cover;
            background-image:linear-gradient(purple,grey);
            
        }
        </style>
<?php
    include_once "chess_header.php";
?>
<section class="signup-form">
<div class="signup-form-form"style="text-align:center">
    <h2 style="size:150%">Create your Mrg_chess Account<br>Sign Up</h2>
    
    <form action="includes/signup.inc.php"method="post">
    
       <input type="text"name="uid"placeholder="Username..."style="width:300px;height:50px;border-radius:10px;background-color:lime;"><br><br>
        <input type="text"name="email"placeholder="Email..."style="width:300px;height:50px;border-radius:10px;background-color:lime;"><br><br>
        <input type="password"name="pwd"placeholder="Password"style="width:300px;height:50px;border-radius:10px;background-color:lime;"><br><br>
        <input type="password"name="confirmpwd"placeholder="Confirm Password"style="width:300px;height:50px;border-radius:10px;background-color:lime;"><br><br>
        <button type="submit"name="submit"style="width:100px;height:50px;background-color:purple;border-radius:10px;">Sign Up</button>

    </form>
</div>
<?php
if (isset($_GET["error"])){
    /*if($_GET["error"]=="emptyinput"){
        echo"<p>Fill in all fields!</p>";
    }*/
    if ($_GET["error"]=="invaliduid"){
        echo"<p>Choose another username</p>";
    }
    else if ($_GET["error"]=="invalidemail"){
        echo"<p>Choose another email</p>";
    }
    else if ($_GET["error"]=="passwordsdontmatch"){
        echo"<p>Passwords do not match</p>";
    }
    else if ($_GET["error"]=="stmtfailed"){
        echo"<p>Something went wrong. Try again</p>";
    }
    else if ($_GET["error"]=="usernametaken"){
        echo"<p>Ooops! Username already taken</p>";
    }
    else if ($_GET["error"]=="none"){
        echo"<p>You have Signed Up!</p>";
    }
}
?> 
</section> 
<?php
    include_once "footer.php";
    ?>