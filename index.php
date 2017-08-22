<?php
ob_start();
session_start();
?>
<html>
<head>
<title>Guvi Project</title>
<link href="site.css" rel="stylesheet" type="text/css">
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
<div class="container">
   <header class="header">
   <div class="title">
   <a href="index.php?option=home" style="text-decoration: none;"><h1>Guvi</h1></a>
   </div>
   <div class="loginDisplay">
		<a href="index.php?option=login">LogIn</a>
	</div>
	</header>
  <div class="main">
  	<?php
	  if(!isset($_GET["option"]))
	  {
		  include('home.php');
	  }
	  else{
	$opt=$_GET['option'];
	switch ($opt)
	{
		case 'home':include('home.php');break;
		case 'login':include('login.php');break;
		case 'register':include('register.php');break;
		default:include('home.php');break;
	}
	  }
	?>
  </div>
  <footer class="footer">
    <div>&copy;2017 - <strong>Parker</strong></div>
  </footer>
</div>
</body>
</html>