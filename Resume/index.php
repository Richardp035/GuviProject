<?php
ob_start();
session_start();
if(isset($_SESSION['upn']))
{
?>
<html>
<link href="style.css" rel="stylesheet" type="text/css">
<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
   <div class="container">
   <header class="header">
   <div class="title">
   <h1> Guvi </h1>
   </div>
   <div class="loginDisplay">
            <a href="index.php?option=logout">LogOut</a>
			</div>
	</header>
        <div class="main">
			<?php
				if(!isset($_GET["option"]))
				{
					include('Resume.php');
				}
				else
				{
					$opt=$_GET["option"];
					switch ($opt)
					{
					case 'logout':include('logout.php');break;
					default:include('Resume.php');break;
					}
				}
			?>
        </div>
    </div>
    <div class="footer">
        &copy;2017 - <strong>Parker</strong>
    </div>
    </form>
</body>
</html>
<?php
}
else if(!isset($_SESSION['upn']))
{
	echo'<script>
		function preventBack(){window.history.forward();}
		setTimeout("preventBack()", 0);
		window.onunload=function(){null};
		</script>';
}
?>