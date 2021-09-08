<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="loginform.css">
</head>
<body>
	<section class="header">
		
<video autoplay loop class="video-background" muted plays-inline>
	<source src="video.mp4" type="video/mp4 ">
</video>
<div class="loginbox">
	<img src="avat2.png" class="avt">
	<h1>Login form</h1>
	<form action="logindata.php" method="post"> 
		<p>Email Id</p>
        <input type="text" name="email" placeholder="Enter mail" autocomplete="off">
		<p>Password</p>
		<input type="password" name="password" placeholder="Enter password" autocomplete="off"><br>
        <br>
         <input type="submit" name="submit" value="Login">
	</form>
	</div>
	
</section>
</body>
</html>