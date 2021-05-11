<?php
	session_start();
	$username = $_SESSION['username'];
	$password = $_SESSION['password'];
	
	if (!isset($username)) {
        ?>
		<script>
			alert('Session Habis');
			document.location='login.php';
		</script>
		<?php
		exit;
	}
?>