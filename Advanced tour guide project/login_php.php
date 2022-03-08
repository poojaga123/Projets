<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
   </head>
   
<body style="background-image: url('images/abg.jpg'); background-repeat: no-repeat; background-size: cover;">
    <nav>
        <div class="menu">
          <div class="logo">
            <a href="#">WeVisit>></a>
          </div>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Places</a></li>
            <li><a href="book.html">Book Now</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="feedback.html">Feedback</a></li>
            <li><a href="login.html">Login</a></li>
          </ul>
        </div>
      </nav>
<div class="lo-con">
  <div class="wrapper">
    <h2>Registration</h2>
    <form method="post">
      <div class="input-box">
        <input type="text" name="name" placeholder="Enter your name" required>
      </div>
      <div class="input-box">
        <input type="text" name="username" placeholder="Enter your email" required>
      </div>
      <div class="input-box">
        <input type="password" name="password" placeholder="Create password" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Confirm password" required>
      </div>
      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="login1.html">Login now</a></h3>
      </div>
    </form>
  </div>
</div>
</body>
</html>
<?php
if($_SERVER["REQUEST METHOD"] == "POST"){
    $username = mysql_real_escape_string($_POST['username']);
    $password = mysql_real_escape_string($_POST['password']);

    echo "Username entered is: ". $username . "<br />";
    echo "Password entered is: ". $password;
}
?>
