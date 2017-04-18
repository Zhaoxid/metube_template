<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
<!--
<?php
echo "<h1> Welcome to Metube! </h1>";
$ts = time();
echo date('Y-m-d H:i:s', $ts);

?>
-->
<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" style="z-index:3;width:250px;margin-top:43px;" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4 class="w3-bar-item"><b>Menu</b></h4>
  <a class="w3-bar-item w3-button w3-hover-black" href="login.php">Login</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="register.php">Register</a>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:250px">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Welcome to Metube!</h1>
	<p>Metube is a multimedia storage and access project designed by students of Clemson University. The goal of Metube is to allow users to upload, access, and share a multitude of different media forms in one location. </p>
    </div>
<!--
<form action="login.php" method="post">
	
	<input type="submit" class="button"  VALUE = "Log in" >
</form>

<form action="register.php" method="post">
	
	<input type="submit" class="button"  VALUE = "Register" >
</form>
-->
</body>
</html>
