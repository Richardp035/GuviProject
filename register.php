<html>
<body>
<div align="center">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
 <br><br>
  <table align="center" cellpadding="10" cellspacing="2" style="border: 1px solid lime;border-radius: 10px;background-color: aliceblue; ">
  <tr>
      <td colspan="2" align="center"><h1 class="lh1">User Register</h1></td>
    </tr>
    <tr>
      <td>First Name</td>
      <td>
        <input type="text" name="fname" class="ip" required>
      </td>
    </tr>
    <tr>
      <td>Last Name</td>
      <td>
      <input type="text" name="lname" class="ip" required></td>
    </tr>
    <tr>
      <td>Phone No</td>
      <td><input name="input" type="text" disabled="true" style="width:30px;" value="+91" class="ip">        
      <input class="ip" name="phoneno" type="text" pattern="[789][0-9]{9}" maxlength="10" required style="width:118px;"></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><textarea class="ip" name="address" cols="20" rows="1" required></textarea></td>
    </tr>
    <tr>
 <tr>
      <td>EmailID</td>
      <td><input class="ip" name="eid" type="email" required pattern="[a-z0-9]+@[a-z0-9]+.[a-z]{3}"></td>
    </tr>
    <tr>
      <td>New Password</td>
      <td><input class="ip" type="password" name="newpwd" required></td>
    </tr>
    <tr>
      <td>Confirm Password</td>
      <td><input class="ip" type="password" name="confirmpwd" required></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input class="submit" type="submit" name="submit" value="Register"></td>
    </tr>
    
</table>
  </form>
<br><br>
</div>
<?php
	//Connection
	$dbhostname='localhost';
	$dbusername='id2625543_richard';
	$dbpassword='9940630028';
$dbname='id2625543_login';
 	$con=mysqli_connect($dbhostname,$dbusername,$dbpassword,$dbname) or die('<script type=text/javascript>alert("Cannot establish connection");</script>');
	if(isset($_POST['submit']))
	{
		 $fname=$_POST['fname'];
		 $lname=$_POST['lname'];
		 $phoneno=$_POST['phoneno'];
		 $pwd=$_POST['newpwd'];
		 $cpwd=$_POST['confirmpwd'];
		 $address=$_POST['address'];
		 $eid=$_POST['eid'];
	if ($pwd==$cpwd)
	{
		$query=$con->query("INSERT INTO register VALUES('$fname','$lname','$phoneno','$address','$eid','$pwd')") or die('<script type=text/javascript>alert("Inserting query failed");</script>');
	}
	else
	{
		echo '<script type=text/javascript>alert("The password & confirm Password are not same"); window.location.href="index.php?option=register";</script>';
	}
		echo '<script type=text/javascript>alert("You had been Registered click OK to continue"); window.location.href="index.php?option=login";</script>';
	}
	mysqli_close($con);
?>
</body>
</html>