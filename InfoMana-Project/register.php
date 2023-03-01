<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['DealerCode'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$DealerCode = $_POST['DealerCode'];
	$Password = md5($_POST['Password']);
	$cPassword = md5($_POST['cPassword']);
	$LastName = $_POST['LastName'];
	$FirstName = $_POST['FirstName'];
	$MiddleInitial = $_POST['MiddleInitial'];
	$Tin = $_POST['Tin'];
	$HouseNumber = $_POST['HouseNumber'];
	$Street = $_POST['Street'];
	$Barangay = $_POST['Barangay'];
	$City = $_POST['City'];
	$Region = $_POST['Region'];
	$ContactNumber = $_POST['ContactNumber'];

	if ($Password == $cPassword) {
		$sql = "SELECT * FROM dealerinfo WHERE DealerCode='$DealerCode'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			// $sql = "INSERT INTO dealeraccount (DealerCode, Password)
			// 		VALUES ('$DealerCode', '$Password')";
			$sql = "INSERT INTO dealerinfo (DealerCode, Password, LastName, FirstName, MiddleInitial, Tin, HouseNumber, Street, Barangay, City, Region, ContactNumber)
					VALUES ('$DealerCode', '$Password', '$LastName', '$FirstName', '$MiddleInitial', '$Tin', '$HouseNumber', '$Street', 
					'$Barangay', '$City', '$Region', '$ContactNumber')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Dealer, You Are Now Registered!')</script>";
				$DealerCode = "";
				$_POST['Password'] = "";
				$_POST['cPassword'] = "";
				$LastName = "";
				$FirstName = "";
				$MiddleInitial = "";
				$Tin = "";
				$HouseNumber = "";
				$Street = "";
				$Barangay = "";
				$City = "";
				$Region = "";
				$ContactNumber = "";
			} else {
				echo "<script>alert('Something Wrong Went. Try Again Later.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Dealer Code Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('DealerCode and Password are incorrect.')</script>";
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

	<title>Personal Collection - Sign Up</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Sign Up</p>
            <div class="input-group-row">
	            <div class="input-group">
					<input type="text" placeholder="Dealer Code: Ex. AB1234" name="DealerCode" value="<?php echo $DealerCode; ?>" required>
				</div>
				<div class="input-group mid">
					<input type="password" placeholder="Password" name="Password" value="<?php echo $_POST['Password']; ?>" required>
	            </div>
	            <div class="input-group">
					<input type="password" placeholder="Confirm Password" name="cPassword" value="<?php echo $_POST['cPassword']; ?>" required>
				</div>
			</div>

			<div class="input-group-row">
				<div class="input-group">
					<input type="text" placeholder="Last Name" name="LastName" value="<?php echo $LastName; ?>" required>
				</div>
				<div class="input-group mid">
					<input type="text" placeholder="First Name" name="FirstName" value="<?php echo $FirstName; ?>" required>
				</div>
				<div class="input-group">
					<input type="text" placeholder="Middle Initial" name="MiddleInitial" value="<?php echo $MiddleInitial; ?>" required>
				</div>
			</div>

			<div class="input-group-row">
				<div class="input-group left">
					<input type="text" placeholder="Contact No." name="ContactNumber" value="<?php echo $ContactNumber; ?>" required>
				</div>
				<div class="input-group">
					<input type="text" placeholder="Tin No." name="Tin" value="<?php echo $Tin; ?>" required>
				</div>
			</div>

			<div class="input-group-row">
				<div class="input-group">
					<input type="text" placeholder="House No." name="HouseNumber" value="<?php echo $HouseNumber; ?>" required>
				</div>
				<div class="input-group mid">
					<input type="text" placeholder="Street" name="Street" value="<?php echo $Street; ?>" required>
				</div>
				<div class="input-group">
					<input type="text" placeholder="Barangay" name="Barangay" value="<?php echo $Barangay; ?>" required>
				</div>
			</div>

			<div class="input-group-row">
				<div class="input-group left">
					<input type="text" placeholder="City" name="City" value="<?php echo $City; ?>" required>
				</div>
				<div class="input-group">
					<input type="text" placeholder="Region" name="Region" value="<?php echo $Region; ?>" required>
				</div>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Sign Up</button>
			</div>
			<div class="">
			<p class="login-register-text">Have an account? <a href="index.php">Login Here</a>.</p>
			</div>
			<div class="">
			<p class="login-register-text">Login As as admin? <a href="adminlog.php">Login As Admin Here</a>.</p>
			</div>

		</form>
	</div>
</body>
</html>