<html>
	<body>
		<?php
		if(isset($_SESSION['upn']))
		{
			session_destroy();
		}
		header( 'Location: ../index.php' );
		exit();
		?>
	</body>
</html>
