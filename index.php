<?php

include('login.php'); // Includes Login Script

?>
<!DOCTYPE html>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Login Form</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="page-holder">
<div id="main">
<div id="login">
<h2>Login Form</h2>
<span><font size='5' color='red'><?php echo $error; ?></font></span>
<form action="" method="post">
<label>Contact No. :</label>
<input id="contact" name="contact" placeholder="Contact No." type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password">

<input name="submit" type="submit" value=" Login ">
<label>Don't have an account ? </label><a class="button" href="adduser.php">Sign Up</a><br>


</form>
</div>
</div>
</div>
</body>
</html>