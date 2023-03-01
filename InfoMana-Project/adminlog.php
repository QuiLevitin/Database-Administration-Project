<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['DealerCode'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$AdminName = $_POST['AdminName'];
	$Password = md5($_POST['Password']);

	$sql = "SELECT * FROM adminaccounts WHERE AdminName='$AdminName' AND Password='$Password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['AdminName'] = $row['AdminName'];
		header("Location: admindb.php");
	} else {
		echo "<script>alert('Woops! Admin or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style1.css?version=51">
	<title>Personal Collection - Admin Log In</title>
</head>
<body>
	<div class="container1">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Log In As Admin</p>
			<div class="input-group">
				<input type="text" placeholder="Admin" name="AdminName" value="<?php echo $AdminName; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="Password" value="<?php echo $_POST['Password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Log In</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Sign Up Here</a>.</p>
			<p class="login-register-text">Have an account? <a href="index.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>