<!DOCTYPE html>
<html>

<center>

<head> 
<title> Signup Page </title>
<meta charset = "UTF-8">
</head>

<p><img alt="Un.jpg" src="images/Un.jpg" style="display: block; border: 1px solid #000; width: 200px; height: 200px;" /></p>
<h1> Welcome </h1>
<h2> Sign Up </h2>

<body background="images/mi.jpg">

<?php
session_start();
?>

<form action="InsertNewUser.php" method="post">
    
    Fist Name:<br>
    <input type="text" placeholder="First Name" name="firstname" required><br><br>
    
    Last Name:<br>
    <input type="text" placeholder="Last Name" name="lastname" required><br><br>
    
    User Name:<br>
    <input type="text" placeholder="User Name" name="username" required>
    
    <?php
    if(isset($_SESSION["errorUser"]))
    {
        $error = $_SESSION["errorUser"];
        session_unset($_SESSION["errorUser"]);
        $color = "red";
        echo '<div style="Color:'.$color.'">'.$error.'</div>';
    }
    else{ echo '<br><br>'; }
    ?>
    
    Password:<br>
    <input type="password" placeholder="Password" name="password" required>
    <input type="password" placeholder="Confirm Password" name="confirm_password" oninput="check(this)" required>

    <?php
    if(isset($_SESSION["errorPassword"]))
    {
        $error = $_SESSION["errorPassword"];
        session_unset($_SESSION["errorPassword"]);
        $color = "red";
        echo '<div style="Color:'.$color.'">'.$error.'</div>';
    }
    else{ echo '<br><br>'; }
    ?>

    Email Address:<br>
    <input type="text" placeholder="Email" name="email" required>
    <input type="text" placeholder="Confirm Email" name="confirm_email" required>

    <?php
    if(isset($_SESSION["errorEmail"]))
    {
        $error = $_SESSION["errorEmail"];
        session_unset($_SESSION["errorEmail"]);
        $color = "red";
        echo '<div style="Color:'.$color.'">'.$error.'</div>';
    }
    else{ echo '<br><br>'; }
    ?>
    
    <input type="radio" name="ans" value="student"> Student
    <input type="radio" name="ans" value="teacher"> Educator<br><br>
    
    <input type="submit" value="Submit">
   
</form>

<center>

</body>

</html>