<html>
<body>
<?php
if(!isset($_POST['submit']))
{
?>
<br><br>
<form action="#" method="post">
	<table align="center" cellpadding="15" cellspacing="2" style="border: 1px solid lime;border-radius: 10px;background-color: aliceblue; ">
		<tr>
			<td align="center" colspan="2"><h1 class="lh1">Login</h1></td>
		</tr>
		<tr>
			<td>Phone Number</td>
			<td><input class="ip" name="upn" type="text" required maxlength="10" pattern="[789][0-9]{9}"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input class="ip" name="pwd" type="password" required></td>
		</tr>
<tr>
			<td align="center" colspan="2"><input class="submit" name="submit" type="submit" value="Sign In"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><a class="submit" href="index.php?option=register" style="font-size:20;color:blue;text-decoration: none;">Sign Up</a></td>
		</tr>
		
	</table>
</form>
<?php
}
else
{
	
	if(isset($_POST['submit']))
	{
		$dbhostname='localhost';
		$dbusername='id2625543_richard';
		$dbpassword='9940630028';
$dbname='id2625543_login';
 		$con=mysqli_connect($dbhostname,$dbusername,$dbpassword,$dbname) or die('<script type=text/javascript>alert("Cannot establish connection");</script>');
		$upn=$_POST['upn'];
		$pwd=$_POST['pwd'];
		if($upn!=''&&$pwd!='')
		{
			$query=mysqli_query($con,"select * from register where phno='".$upn."' and password='".$pwd."'") or die('<script type=text/javascript>alert("Select query failed");</script>');
			$res=mysqli_fetch_array($query);
			if($res)
			{
				$_SESSION['upn']=$upn;
				header('location:Resume/index.php');
			}
			else
			{
				echo'<script type=text/javascript>alert("Incorrect Data"); window.location.href="index.php?option=login";</script>';
			}
		}
	}
	else
	{
		echo'<script type=text/javascript>alert("Enter both PhoneNo and Password");window.location.href="index.php?option=login";</script>';
	}
}
?>
</body>
</html>